
@extends('app.master')

@section('title', 'Page Title')

@section('content')


@if (Session::has('password_reset_success_message'))
    <script>
    swal("A rest email link has ben sent to you!")
    </script>
@endif

@if (Session::has('invalid_request_token_message'))
    <script>
    swal("Invalid Request Token!")
    </script>
@endif

@if (Session::has('password_update_success_message'))
    <script>
        swal({
            title: "Password updated",
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

    <section class="login">
        <div class="login_inner">
            <form class="form_centered" method="post" name="loginForm" _lpchecked="1" action="{{ Url('password/reset') }}">
               
                <h3>Forgot Password</h3>
                
                <h5>Forgot your password? Don't worry, it happens to the best of us.</h5>
                
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
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required="">
                </div>
                
                <div class="row">
                    <button type="submit" href="#" class="btn btn-success loginbtn">Reset</button>
                </div>
                
            </form>

        </div>
        <p>Not a user?<a href="{{ Url('register') }}">Sign up</a></p>
    </section>

@endsection
