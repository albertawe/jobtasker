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
                            <div class="desc">
								<h3>Title : {{$taskdetails->title}}</h3>
                                <p>Budget : Idr {{$taskdetails->price}}</p>
                                <p>Job Type : {{$taskdetails->job_type}}</p>
                                <p>Job Category : {{$taskdetails->job_category}}</p>
                                <p>status : {{$taskdetails->status}}</p>
                                <p>Due Date : {{$taskdetails->due_date}}</p>
                                <p>Address : {{$taskdetails->address}}</p>
                                <p>Job Description : {{$taskdetails->job_description}}</p>
							@if($taskdetails->posted_by_id == $uid)
							@foreach($offers as $offer)
							<p>{{$offer->description}}</p>
							<p>{{$offer->nego}}</p>
							<p>{{$offer->user_offer_id}}</p>
							<a href="">choose this offer</a>
							@endforeach
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