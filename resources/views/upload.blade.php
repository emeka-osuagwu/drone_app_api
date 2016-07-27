
<form id="upload-form" action="{{ Url('api/v1/video/create') }}" enctype="multipart/form-data" method="POST">
  <input type="file" name="video" />
  <input type="submit" value="Upload">
</form>



<video width="320" height="240" controls>
  <source src="https://s3-eu-west-1.amazonaws.com/tmp-eu-west-1.transloadit.com/6e4895a053dc11e69d72b39c4e660580.flv" type="video/mp4">
  <source src="https://s3-eu-west-1.amazonaws.com/tmp-eu-west-1.transloadit.com/6e4895a053dc11e69d72b39c4e660580.flv" type="video/ogg">
  Your browser does not support the video tag.
</video>

