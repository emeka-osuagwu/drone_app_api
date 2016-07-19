
<form id="upload-form" action="{{ Url('api/v1/video/create') }}" enctype="multipart/form-data" method="POST">
  <input type="file" name="video" />
  <input type="submit" value="Upload">
</form>

<video src=""></video>

<video width="320" height="240" controls>
  <source src="http://tmp-eu-west-1.transloadit.com.s3-eu-west-1.amazonaws.com/914441404a9911e69c1b518dd567feb7.mpg" type="video/mp4">
  <source src="http://tmp-eu-west-1.transloadit.com.s3-eu-west-1.amazonaws.com/914441404a9911e69c1b518dd567feb7.mpg" type="video/ogg">
  Your browser does not support the video tag.
</video>