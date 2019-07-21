@extends('layouts.user_layout')

@section('title')
Contact Us
@endsection

@section('content')
<body background="{{ asset('images/design/leaves-bg1.jpg') }}" class = "background-img">
<div class="container cover">

		<div class="col-md-4">
			<h3 class = "text-center">Send Us your Feedback</h3>
			<form class="form-signin" action="https://formspree.io/email@domain.tld" method="POST">
				<input type="text" class = "form-control" name="name" placeholder="Name" required autofocus>
				<input type="email" class = "form-control" name="_replyto" placeholder="Email address" required autofocus>
				<button class="btn btn-primary btn-block text-uppercase" type="submit" style="border: 2px white inset">Submit</button>
			</form>
		</div>

		<div class="col-md-4">

			<iframe src="https://www.google.com.ph/maps/d/embed?mid=1FGxwhPGGTizVp6x-7Fjw7lnW8GvYOUKQ" width="600" height="400" frameborder="0" allowfullscreen></iframe>

		</div>


	</div>
</body>
@endsection
