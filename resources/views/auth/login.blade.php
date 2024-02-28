
<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 15:32:42 GMT -->
<head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }} | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">
    
        <!-- App css -->
        <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend')}}/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    
    </head>

<body class="bg-primary">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-4 mt-3">
                                                <a href="index.html">
                                                    <span><img src="{{asset('backend')}}/assets/images/logo-dark.png" alt="" height="26"></span>
                                                </a>
                                            </div>

                                            @if (session('status'))
                                                <div class="mb-4 font-medium text-sm text-green-600">
                                                    {{ session('status') }}
                                                </div>
                                            @endif


                                            <form method="POST" action="{{ route('login') }}" class="p-2">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="john@deo.com" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <!-- <a href="pages-recoverpw.html" class="text-muted float-right">Forgot your password?</a> -->
                                                    <label for="password">Password</label>
                                                    <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password" value="{{ old('password') }}">
                                                </div>
            
                                             
                                                <div class="mb-3 text-center">
                                                    <button type="submit" class="btn btn-primary btn-block" type="submit"> Sign In </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->
            
                                   <!--  <div class="row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-white-50 mb-0">Create an account? <a href="pages-register.html" class="text-white-50 ml-1"><b>Sign Up</b></a></p>
                                        </div>
                                    </div> -->
            
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/metismenu.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/waves.js"></script>
    <script src="{{asset('backend')}}/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="{{asset('backend')}}/assets/js/theme.js"></script>

</body>


<!-- Mirrored from myrathemes.com/lunoz/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Nov 2022 15:32:42 GMT -->
</html>