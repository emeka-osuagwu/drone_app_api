
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
        <title>Single Video | Aerial Footage Marketplace</title>

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
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
                 
                  
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

        <section class="singlevideo">
            <div class="container">


                <div class="row m-t-lg">
                    <div class="col-md-6">
                        <div class="singlevideo_preview">
                            <video width="100%" controls="">
                                <source src="video/bannervid.mp4" type="video/mp4">
                            </video>
                        </div>

                    </div>



                    <div class="singlevideo_details_container col-md-6">
                        <div class="singlevideo_details">
                            <div class="singlevideo_header">
                                <div class="singlevideo_title">
                                    <h3>Aerial Footage of Fuel Queue in Lekki, Lagos Nigeria</h3>
                                </div>
                                <div class="singlevideo_keywords">
                                    <h4><strong>Tags</strong>: Lagos, Drone, Fuel Queue, Nigeria, Aerial Footage</h4>
                                </div>
                            </div>

                            <div class="singlevideo_details_specs">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="leftspecs">
                                            <p>Video Length: <span>0:15</span></p>
                                            <p>Video ID: <span>12</span></p>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="rightspecs">
                                            <p>Aspect Ratio: <span>16:9</span></p>
                                            <p>Uploaded By: <span>Yomi Eluwande</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sv_download">
                                <table class="table table-striped">
                                    <thead>
                                    <tr></tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th><label><input name="priceoptions" type="radio" id="radio1" value="option1"></label></th>
                                        <td>HD</td>
                                        <td>$79</td>
                                        <td>1920 x 1080 @ 29.97fps MJPEG</td>
                                        <td>137.3MB</td>
                                    </tr>
                                    <tr>
                                        <th><label><input name="priceoptions" type="radio" id="radio2" value="option2"></label></th>
                                        <td>SD</td>
                                        <td>$49</td>
                                        <td>852 x 480 @ 29.97fps MOV</td>
                                        <td>11.6MB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="singlevideo_details_download">
                                        <button type="button" class="btn btn-danger">DOWNLOAD THIS VIDEO</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="row m-t-lg">
                    <div class="relatedvideos">
                        <div class="col-md-12">
                            <h4>Related Videos</h4>

                            <div class="row">
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
                </div>

                <div class="row m-t-lg m-b-lg">
                    <div class="keywords">
                        <div class="col-md-12">
                            <h4 class="m-b-md">Keywords</h4>
                            <a href="frontsearch.php">above</a>, <a href="frontsearch.php">aerial</a>, <a href="frontsearch.php">built</a>, <a href="frontsearch.php">city</a>, <a href="frontsearch.php">culture</a>, <a href="frontsearch.php">day</a>, <a href="frontsearch.php">directly</a>, <a href="frontsearch.php">district</a>, <a href="frontsearch.php">downtown</a>, <a href="frontsearch.php">exterior</a>, <a href="frontsearch.php">famous</a>, <a href="frontsearch.php">flying</a>, <a href="frontsearch.php">international</a>, <a href="frontsearch.php">landmark</a>, <a href="frontsearch.php">lower</a>, <a href="frontsearch.php">manhattan</a>, <a href="frontsearch.php">mid-air</a>, <a href="frontsearch.php">monument</a>, <a href="frontsearch.php">new</a>, <a href="frontsearch.php">place</a>, <a href="frontsearch.php">roof</a>, <a href="frontsearch.php">scene</a>, <a href="frontsearch.php">skyline</a>, <a href="frontsearch.php">state</a>, <a href="frontsearch.php">street</a>, <a href="frontsearch.php">structure</a>, <a href="frontsearch.php">symbol</a>, <a href="frontsearch.php">traditional</a>, <a href="frontsearch.php">travel</a>, <a href="frontsearch.php">urban</a>, <a href="frontsearch.php">usa</a>, <a href="frontsearch.php">view</a>, <a href="frontsearch.php">york</a>
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


    </body><script src="chrome-extension://ocggccaacacpienfcgmgcihoombokbbj/pages/client/livestartpage-message-add.js"></script></html>
@endsection
