@extends('/layouts/template')
@section('content')
		<div class="colorlib-contact">
			<div class="colorlib-narrow-content">
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">View Task Info</span>
							<h2 class="colorlib-heading">All you need to know about this task</h2>
						</div>
				</div>
					<div class="col-md-7 col-md-push-1">
						<div class="colorlib-narrow-content">
							<div class="row">
							<div class="col-md-12 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
								<span class="heading-meta">
								<h4>Task: {{$taskdetails->title}}</h4>
                                <p>Budget: IDR {{$taskdetails->price}}</p>
                                <p>Job Type: {{$taskdetails->job_type}}</p>
                                <p>Job Category: {{$taskdetails->job_category}}</p>
                                <p>status: {{$taskdetails->status}}</p>
                                <p>Due Date: {{$taskdetails->due_date}}</p>
                                <p>Address: {{$taskdetails->address}}</p>
                                <p>Job Description: {{$taskdetails->job_description}}</p>
								</span>
							@if($taskdetails->posted_by_id == $uid && $taskdetails->status == 'not assigned')
							@foreach($offers as $offer)
							</br>
							<span class="heading-meta">
							<p>Nego Description: {{$offer->description}}</p>
							<p>Nego Price: {{$offer->nego}}</p></br>
							</span>
							<input type="button" onclick="location.href='createmessage/{{$offer->user_offer_id}}';" class="btn btn-info col-md-10" value="send this tasker a message">
							<input type="button" onclick="location.href=viewprofile/{{$offer->user_offer_id}}';" class="btn btn-info col-md-10" value="see this tasker's profile">
							<input type="button" onclick="location.href='accept_offer/{{$offer->id}}';" class="btn btn-info col-md-10" value="choose this offer">
							@endforeach
							@elseif($taskdetails->posted_by_id == $uid && $taskdetails->status == 'assigned')
							<a href="finish_offer/{{$taskdetails->id}}"><p>The task is finished</p></a>
							@elseif($taskdetails->status == 'finished')
							<p>this task is finished</p>
							@elseif($taskdetails->status == 'not assigned')
							<div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
									<form method="post" action="{{url('postoffer')}}" enctype="multipart/form-data">
									@csrf
										<span class="heading-meta">interested? show the poster that you deserve this task</span>
										<div class="form-group">
										<span class="heading-meta">Send few words to describe why you are the perfect person</span>
											<input type="text" value="" class="form-control" placeholder="i am a computer science program student..." name="description">
										</div>
										<div class="form-group">
										<span class="heading-meta">offer new price!! you can just let it be if you are satisfied</span>
											<input type="number" value="{{$taskdetails->price}}" class="form-control" placeholder="offer your price" name="price">
										</div>
										<div class="form-group">
										<input type="hidden" value="{{$taskdetails->id}}" class="form-control" name="job_id">
										<input type="hidden" value="{{$taskdetails->title}}" class="form-control" name="job_title">
										<input type="submit" class="btn btn-primary btn-send-message" value="send your offer">
										</div>
									</form>
								</div>
							@endif
							</div>
							</div>		
						</div>
					</div>
			</div>	
		</div>
@endsection