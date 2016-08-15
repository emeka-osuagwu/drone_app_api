
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

    <html ng-app="droneapi"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Search Results for Aerial | Aerial Footage Marketplace</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="shortcut icon" href="img/Favicon.png">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

    <body>
        
        <header>
            <nav class="navbar navbar-default othernavbar">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <a class="navbar-brand" ui-sref="/">
                       <img width="150" src="/assets/images/anakle-logo.png" class="logo" alt="Anakle Logo">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li><a ui-sref="requestvideo"></a></li>
                    <li><a ui-sref="allvideos">Videos</a></li>
                    <li><a ui-sref="login">Login</a></li>
                    <li><a ui-sref="signup">Sign Up</a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>

        <section class="search">
            <div class="container-fluid">
            <div class="row m-t-lg">
                <div class="col-sm-6">
                    <p class="text-lg">Search results for Aerial shots of Lagos state</p>
                    <p class="text-xs">Related: <a href="frontsearch.php">aerial view</a>, <a href="frontsearch.php">aerial city</a>, <a href="frontsearch.php">antenna</a></p>
                </div>
                <div class="col-sm-6"></div>
            </div>
            <div class="row m-t-md border-top">
                <div class="col-sm-3 search-left">

                    <h4 class="p-l-xs m-t-md m-b-md">Sort By</h4>

                    <div class="search-resolution m-t-md">
                        <h5>Resolution</h5>
                        <ul>
                            <li>
                                <a href="#">4K<span class="text-grey-dark"> 114,131</span></a>
                            </li>
                            <li>
                                <a href="#">HD<span class="text-grey-dark"> 111,931</span></a>
                            </li>
                            <li>
                                <a href="#">SD<span class="text-grey-dark"> 50,131</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="search-length m-t-md">
                        <h5>Video Length</h5>
                        <ul>
                            <li>
                                <a href="#">Less than 5s</a>
                            </li>
                            <li>
                                <a href="#">Less than 10s</a>
                            </li>
                            <li>
                                <a href="#">More than 10s</a>
                            </li>
                        </ul>
                    </div>

                    <div class="search-location m-t-md">
                        <h5>Location</h5>
                        <form lpformnum="1">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Any Location</option>
                                    <option>Lagos</option>
                                    <option>Abuja</option>
                                    <option>Ibadan</option>
                                </select>
                            </div>
                        </form>
                    </div>

                    <div class="search-category m-t-md">
                        <h5>Category</h5>
                        <form lpformnum="2">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Any Category</option>
                                    <option>Aerial</option>
                                    <option>Building</option>
                                    <option>Nature</option>
                                </select>
                            </div>
                        </form>
                    </div>


                </div>
                <div class="col-sm-9 p-t-md">
                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>

                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>

                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>

                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>

                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                        
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/intercontinental.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:12</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/ozumba.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:22</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/events.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>4K</span> 00:07</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-3 fv-box">
                        <a href="frontsinglevideo.php">
                            <video width="100%">
                                <source src="video/bauchi.mp4" type="video/mp4">
                            </video>
                            <div>
                                <p class="text-sm text-grey"><span>HD</span> 00:30</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </div>

        </section>

        <footer class="p-t-xxl p-b-xxl">
            <h3 class="text-center text-white m-b-none">Footer here</h3>
        </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


    <script aria-hidden="true" type="application/x-lastpass" id="hiddenlpsubmitdiv" style="display: none;"></script><script>try{(function() { for(var lastpass_iter=0; lastpass_iter < document.forms.length; lastpass_iter++){ var lastpass_f = document.forms[lastpass_iter]; if(typeof(lastpass_f.lpsubmitorig2)=="undefined"){ lastpass_f.lpsubmitorig2 = lastpass_f.submit; if (typeof(lastpass_f.lpsubmitorig2)=='object'){ continue;}lastpass_f.submit = function(){ var form=this; var customEvent = document.createEvent("Event"); customEvent.initEvent("lpCustomEvent", true, true); var d = document.getElementById("hiddenlpsubmitdiv"); if (d) {for(var i = 0; i < document.forms.length; i++){ if(document.forms[i]==form){ if (typeof(d.innerText) != 'undefined') { d.innerText=i.toString(); } else { d.textContent=i.toString(); } } } d.dispatchEvent(customEvent); }form.lpsubmitorig2(); } } }})()}catch(e){}</script></body><script src="chrome-extension://ocggccaacacpienfcgmgcihoombokbbj/pages/client/livestartpage-message-add.js"></script></html>
@endsection
