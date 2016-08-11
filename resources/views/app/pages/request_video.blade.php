
@extends('app.master')

@section('title', 'Page Title')

@section('content')

    @if (Session::has('message'))
        <script>
            swal({
                title: "Welcome",
                type: "success",
                confirmButtonColor: "#298829",
                confirmButtonText: "OK",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm)
            {
                if (isConfirm) {
                    window.location="/";
                }
            });
        </script>
    @endif

    <section class="request">
        <div class="request_inner">
            <form class="form_centered">
                <h2>Request Video</h2>
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" placeholder="Title of your Video Request" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" type="text" rows="4" placeholder="Description of your video. How much footage you need, quality of footage and the time of the day. The more info the better"></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Category</label>
                            <select class="form-control" required>
                                <option>Choose Category</option>
                                <option>Agriculture</option>
                                <option>Events</option>
                                <option>Construction</option>
                                <option>Buildings</option>
                                <option>Real Estate</option>
                                <option>Wedding</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <label>Video Length</label>
                            <select class="form-control" required>
                                <option>Choose Video Length</option>
                                <option> Less than 1 minute </option>
                                <option>Less than 5 minutes</option>
                                <option>Less than 10 minutes</option>
                                <option>More than 10 minutes</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Budget (₦)</label>
                            <input class="form-control" type="number" placeholder="Numbers Only" required >
                        </div>
                        <div class="col-xs-6">
                            <label>Date</label>
                            <input class="form-control" type="text" placeholder="12-Jan-2016" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Location Address</label>
                    <textarea class="form-control" placeholder="Address of the location for the video shoot" rows="4"></textarea>
                </div>

                <div class="row">
                    <a href="#" class="btn btn-success submitbtn">Submit</a>
                </div>
            </form>
        </div>
    </section>
@endsection
