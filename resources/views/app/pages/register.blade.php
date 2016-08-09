
@extends('app.master')

@section('title', 'Register')

@section('content')

    @if (Session::has('message'))
        <script>
            swal({
                title: "Account Created",
                type: "success",
                confirmButtonColor: "#298829",
                confirmButtonText: "OK",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm)
            {
                if (isConfirm) {
                    window.location="/login";
                }
            });
        </script>
    @endif

    <section class="login" ng-controller="LoginController">
        <div class="login_inner">

            <form class="form_centered" action="{{ Url('register') }}" method="post">
                <h2>Register</h2>
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
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" placeholder="Email Address" value="{{ old('email') }}" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                </div>
                <div class="row">
                    <button type="submit" href="#" class="btn btn-success loginbtn">Register</button>
                </div>
                <div class="borderline"></div>
            </form>

        </div>
        <p>Already a user?<a href="{{ url('login') }}">Login</a></p>
    </section>
@endsection
