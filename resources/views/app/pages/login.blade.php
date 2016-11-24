
@extends('app.master')

@section('title', 'Page Title')

@section('content')

    @if (Session::has('login_successful'))
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

    @if (Session::has('login_falid'))
        <script>
            swal("Opps!", "Invalid Email or Password!", "error")
        </script>
    @endif

    <section class="login" ng-controller="LoginController">
        <div class="login_inner">

            <form class="form_centered" action="{{ Url('login') }}" method="post">
                <h2 style="text-align:center" >Login</h2>
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
                    <button type="submit" href="#" class="btn btn-success loginbtn">Login</button>
                </div>
                <div class="borderline"></div>
                <div class="resetprompt"><a href="{{ Url('password/forgot') }}">Reset Password?</a></div>
            </form>

        </div>
        <p>Not a user?<a href="{{ Url('register') }}">Sign up</a></p>
    </section>
@endsection
