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
	</div>
</div>
<div>
	<a href="{{route('downloadA')}}">DownloadInDownloadA</a>
</div>
@endif