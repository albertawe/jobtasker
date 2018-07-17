@extends('layouts/template')
@section('content')
		<div class="colorlib-contact">
			<div class="colorlib-narrow-content">
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Your Task</span>
							<h2 class="colorlib-heading">Task Related to you</h2>
						</div>
				</div>
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Posted Job</span>
							<h2 class="colorlib-heading">Job that you posted</h2>
						</div>
				</div>
				<div class="row">
                @foreach($postedjobs as $job)
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<!-- <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a> -->
								<div class="desc">
								<h3><a href="blog.html">{{$job->title}}</a></h3>
									<span>Due Date : <small>{{$job->due_date}}</small> | Category :
									<small>{{$job->job_category}}</small> | Type : <small>{{$job->job_type}}</small></span>
									<p>{{$job->job_description}}</p>
								</div>
                        </div>
				</div>
				
				@endforeach   
				</div>
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Received Job</span>
							<h2 class="colorlib-heading">Job that you accepted as duty</h2>
						</div>
				</div>
				<div class="row">
                @foreach($acceptjobs as $jobb)
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<!-- <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a> -->
								<div class="desc">
								<h3><a href="blog.html">{{$jobb->title}}</a></h3>
									<span>Due Date : <small>{{$jobb->due_date}}</small> | Category :
									<small>{{$jobb->job_category}}</small> | Type : <small>{{$jobb->job_type}}</small></span>
									<p>{{$jobb->job_description}}</p>
								</div>
                        </div>
				</div>
				
				@endforeach   
				</div> 
			</div>
		</div>
@endsection