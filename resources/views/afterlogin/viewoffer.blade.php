@extends('layouts/template')
@section('colorlib_offertask')
colorlib-active
@endsection
@section('content')
		<div class="colorlib-contact">
			<div class="colorlib-narrow-content">
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">List of offer that you submit</span>
							<h2 class="colorlib-heading">Your offers</h2>
						</div>
				</div>
				<div class="row">
                @foreach($offers as $offer)
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<!-- <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a> -->
								<div class="desc">
								<h3><a href="viewtask/{{$offer->job_id}}">{{$offer->job_title}}</a></h3>
									<span>Negotiation Price: <small>{{$offer->nego}}</small></br>
									Description: <small>{{$offer->description}}</small></span></br>
								</div>
                        </div>
				</div>
				@endforeach   
				</div> 
			</div>
		</div>
@endsection