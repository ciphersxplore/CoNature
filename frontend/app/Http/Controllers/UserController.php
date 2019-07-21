<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function auth(Request $request)
    {

        try {
            $client = new Client();

            $response = $client->post('localhost:3000/api/auth', [
                'json' => [
                    "email_address" => $request->email_address,
                    "password" => $request->password
                ]
            ]);

            Session::put('user', json_decode($response->getBody()));
            Session::put('token', $response->getHeader('x-auth-token'));

            if (session('user')->role == 'admin' || session('user')->role == 'facility' || session('user')->role == 'handler') {
                return redirect('/graph');
            }
            return view('users.summary');
        } catch (ClientException $e) {
            return redirect()->back()->with('error', 'Email or Password is incorrect');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destinationPath = public_path('images/profile');
        $fileName = Input::file('image')->getClientOriginalName();

        Input::file('image')->move($destinationPath, $fileName);

        try {
            $client = new Client();

            $client->post('localhost:3000/api/users', [
                "json" => [
                    "first_name" => $request->first_name,
                    "last_name" => $request->last_name,
                    "email_address" => $request->email_address,
                    "contact_number" => $request->contact_number,
                    "password" => $request->password,
                    "image_path" => $fileName
                ]
            ]);

            return redirect()->back()->with('success', 'Registration successful');
        } catch (ClientException $e) {
            return redirect()->back()->with('error', 'Kindly check registration details');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $client = new Client();
        $response = $client->get('localhost:3000/api/users', [
            "headers" => [
                "x-auth-token" => Session::get('token')
            ]
        ]);
        $users = json_decode($response->getBody());

        return view('admin.users', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}
