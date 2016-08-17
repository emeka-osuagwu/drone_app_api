
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


    <section class="login">
        <div class="login_inner">
            <form class="form_centered" method="post" name="loginForm" _lpchecked="1">
                <h3>Forgot Password</h3>
                <h5>Forgot your password? Don't worry, it happens to the best of us.</h5>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" placeholder="Email Address" required="">
                </div>
                
                <div class="row">
                    <button type="submit" href="#" class="btn btn-success loginbtn">Reset</button>
                </div>
                
            </form>

        </div>
        <p>Not a user?<a href="{{ Url('register') }}">Sign up</a></p>
    </section>

@endsection
