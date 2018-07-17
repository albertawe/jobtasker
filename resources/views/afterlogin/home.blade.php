@extends('layouts/template')
@section('content')
		<div class="colorlib-contact">
			<div class="colorlib-narrow-content">
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Dashboard</span>
							<h2 class="colorlib-heading">Announcement</h2>
						</div>
				</div>
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">Your Profile</h2>
						</div>
				</div>
					<div class="col-md-7 col-md-push-1">
						<div class="colorlib-narrow-content">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
									<img src="/images/profile/{{$user_profile->image}}" style="width:500px;height:600px;">
									<form method="post" action="{{url('dashboard')}}" enctype="multipart/form-data">
									@csrf
										<div class="form-group">
											<input type="file" value="" class="form-control" placeholder="UploadImage" name="image">
										</div>
										<div class="form-group">
											<input type="text" value="{{$user_profile->first_name}}" class="form-control" placeholder="FirstName" name="firstname">
										</div>
										<div class="form-group">
											<input type="text" value="{{$user_profile->last_name}}" class="form-control" placeholder="LastName" name="lastname">
										</div>
										<div class="form-group">
											<input type="text" value="{{$user_profile->email}}" class="form-control" placeholder="Email" name="email">
										</div>
										<div class="form-group">
											<input type="text" value="{{$user_profile->location}}" class="form-control" placeholder="location" name="location">
										</div>
										<div class="form-group">
											<input type="date" value="{{$user_profile->birthdate}}" id="datepicker" class="form-control" placeholder="birthdate" name="date">
										</div>
										<div class="form-group">
											<textarea name="tagline" value="" id="message" cols="30" rows="7" class="form-control" placeholder="tagline" name="tagline">
											{{$user_profile->tagline}}</textarea>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-primary btn-send-message" value="Update Profile">
										</div>
									</form>
								</div>
							
							</div>		
							</div>
					</div>
			</div>
			
		</div>
		<script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'yyyy-mm-dd'  
         });  
 </script>
@endsection