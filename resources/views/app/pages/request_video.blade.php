
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
                    window.location="/video/request";
                }
            });
        </script>
    @endif

    <section class="request">
        <div class="request_inner">
            <form class="form_centered" action="{{ Url('video/request/create') }}" method="post">
                <h2>Request Video</h2>

                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="static-notification bg-red-dark tap-dismiss">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                {{$error}}
                            </div>
                        </div>
                    @endforeach
                @endif

                <input  type="text" placeholder="Title of your Video Request"  name="user_id"  value="{{ Auth::user()->id }}" hidden>
                
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" placeholder="Title of your Video Request"  name="title" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" type="text" rows="4" name="description" placeholder="Description of your video. How much footage you need, quality of footage and the time of the day. The more info the better">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Category</label>
                            <select class="form-control" name="category_id" required>
                                <option>Choose Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <label>Video Length</label>
                            <select class="form-control" name="length" required>
                                <option>Choose Video Length</option>
                                <option value="1 minute"> Less than 1 minute </option>
                                <option value="5 minutes">Less than 5 minutes</option>
                                <option value="10 minutes">Less than 10 minutes</option>
                                <option value="10 minutes">More than 10 minutes</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Budget (₦)</label>
                            <input class="form-control" type="number" placeholder="Numbers Only" value="{{ old('budget') }}"  name="budget" required >
                        </div>
                        <div class="col-xs-6">
                            <label>Date</label>
                            <input class="form-control" value="{{ old('date') }}" name="date" type="date" placeholder="12-Jan-2016" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Location Address</label>
                    <textarea class="form-control" name="address" placeholder="Address of the location for the video shoot" rows="4">{{ old('address') }}</textarea>
                </div>

                <div class="row">
                    <button href="#" class="btn btn-success submitbtn">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
