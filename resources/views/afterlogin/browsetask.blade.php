@extends('layouts/template')
@section('colorlib_browsetask')
colorlib-active
@endsection
@section('content')
		<div class="colorlib-contact">
			<div class="colorlib-narrow-content">
				<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Browse available task</span>
							<h2 class="colorlib-heading">Tasks for you to work on</h2>
						</div>
				</div>
				<span class="animate-box">Filter:</span>
				</br>
				@foreach($categories as $category)
					<a href="/browsetask/{{$category->category}}" class="btn btn-info animate-box"
					style="margin-bottom: 50px;">{{$category->category}}</a>
				@endforeach
				<div class="row">
                @foreach($jobs as $job)
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<!-- <a href="blog.html" class="blog-img"><img src="images/blog-1.jpg" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a> -->
								<div class="desc">
								<h3><a href="viewtask/{{$job->id}}">{{$job->title}}</a></h3>
									<!-- <ul> -->
									<span>Due Date: <small>{{$job->due_date}}</small></br>
									Category: <small>{{$job->job_category}}</small></br>
									Type: <small>{{$job->job_type}}</small></br>
									Description: <small>{{$job->job_description}}</small></span>
									<!-- </ul> -->
								</div>
                        </div>
				</div>
				@endforeach   
				</div> 
			</div>
		</div>
@endsection