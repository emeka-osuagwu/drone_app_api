
@extends('app.master')

@section('title', 'Register')

@section('content')

    @if (Session::has('register_success_message'))
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

    @if (Session::has('agreement_error'))
        <script>
        swal("Please check the Terms and Agreement!")
        </script>
    @endif

    <section class="login" ng-controller="LoginController">
        <div class="login_inner">

            <form class="form_centered" action="{{ Url('register') }}" method="post">
                <h2 style="text-align:center">Register</h2>
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

                <div class="form-group">
                    <div class="accept-terms" id="accordion">
                        <div id="headingOne">
                            <p>By clicking Register, you accept our <a href="#collapseOne" role="button" data-toggle="collapse" data-parent="accordion" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Terms and Agreement</a>.</p>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                              <div class="panel-body panel-body-sign">
                                <p style="text-align:left">Anim pariatur</p>
                                <span><input type="checkbox" name="agreement"></span> <span>I Agree to this terms and conditions provided by AnakleVM</span>
                              </div>
                            </div>
                        </div>  
                </div>

                <div class="borderline"></div>
            </form>

        </div>
        <p>Already a user?<a href="{{ url('login') }}">Login</a></p>
    </section>

    <script src="{!! load_asset('js/jquery.js') !!}"></script>
    <script src="{!! load_asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! load_asset('js/main.js') !!}"></script>

    <script aria-hidden="true" type="application/x-lastpass" id="hiddenlpsubmitdiv" style="display: none;"></script>
    <script>
        try{(function() { for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i.toString(); } else { d.textContent=i.toString(); } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }})()}catch(e){}
    </script>
    <script src="chrome-extension://ocggccaacacpienfcgmgcihoombokbbj/pages/client/livestartpage-message-add.js"></script>


@endsection
