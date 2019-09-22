
<div class="container">
<h1>Resize Image Uploading Demo</h1>

@include('include')

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
    <strong>{{ $message }}</strong>
</div>
<div class="row">
	
	<div class="col-md-4">
		<strong>Thumbnail Image:</strong>
		<br/>
		<img src="/thumbnail/{{ Session::get('imageName') }}" />
		<!--<a href="{{route('downloadPlease')}}">DownloadAwais</a>-->
	</div>

</div>
@endif

	<div class="panel penel-default">
		<div class="panel-heading">
			Create New Post
		</div>
			<div class="panel-body">

				<form action="{{route('resizeImagePost')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
					<di class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control"></input>
					</di>
					
					<di class="form-group">
						<label for="image">Image</label>
						<input type="file" name="image" class="form-control"></input>
					</di>

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit">
								submit
							</button>
						</div>
					</div>

				</form>
			</div>
	</div>