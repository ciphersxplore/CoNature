@extends('layouts.admin_layout')

@section('title')
Users
@endsection

@section('content')
    <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Active Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                    <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Contact Number</th>
                      <th>Email Address</th>
                      <th>Role</th>
                      <th>Organization</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                   <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Contact Number</th>
                      <th>Email Address</th>
                      <th>Role</th>
                      <th>Organization</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @php
                          $counter = 0
                      @endphp
                      @forelse ($users as $user)
                        <tr>
                            <td>{{ ++$counter }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->contact_number }}</td>
                            <td>{{ $user->email_address }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->organization }}</td>
                            <td>{{ $user->status }}</td>
                            <td>
                                <button type="button" class="btn btn-success"><i class="fas fa-pen    "></i> </button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                      @empty

                      @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection
