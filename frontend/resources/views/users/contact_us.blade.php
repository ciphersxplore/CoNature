@extends('layouts.user_layout')

@section('title')
Contact Us
@endsection

@section('content')
<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
				</div>
				<div class="form-group">
					<input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
				</div>
				<div class="form-group">
					<input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
				</div>
				<div class="form-group">
					<textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
				</div>
				<div class="form-group">
					<input id = "btn_submit_con" type="submit" name="btnSubmit" class="btn btn-lg" value="Send Message" />
				</div>
			</div>
			<div class="col-md-6">
            <iframe src="https://www.google.com.ph/maps/d/embed?mid=1FGxwhPGGTizVp6x-7Fjw7lnW8GvYOUKQ" width="640" height="480"></iframe>

			</div>
		</div>
@endsection
