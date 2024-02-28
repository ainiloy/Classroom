<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }} | Student Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

            <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/assets/css/theme.min.css" rel="stylesheet" type="text/css" />




    <!-- Plugins css -->
    <link href="{{asset('backend')}}/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend')}}/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />


    <link href="{{asset('backend')}}/plugins/dropify/dropify.min.css" rel="stylesheet" type="text/css" />

</head>

<body>


    <!-- Begin page -->
    <div id="layout-wrapper">

        @yield('content')


    </div>
    <!-- END layout-wrapper -->


    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/metismenu.min.js"></script>
    <script src="{{asset('backend')}}/assets/js/waves.js"></script>
    <script src="{{asset('backend')}}/assets/js/simplebar.min.js"></script>




    <!-- third party js -->
    <script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/buttons.flash.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/dataTables.select.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{asset('backend')}}/assets/pages/datatables-demo.js"></script>





    <!-- Morris Js-->
    <script src="{{asset('backend')}}/plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="{{asset('backend')}}/plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="{{asset('backend')}}/assets/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="{{asset('backend')}}/assets/js/theme.js"></script>




    <script src="{{asset('backend')}}/plugins/dropify/dropify.min.js"></script>

    <script src="{{asset('backend')}}/assets/pages/fileuploads-demo.js"></script>

    @yield('script')

<script>

  $( document ).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  });


  @if (Session::has('message'))
  var type = "{{ Session::get('alert-type', 'info') }}"
  switch(type){
      case 'info':

          toastr.options.timeOut = 10000;
          toastr.info("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();
          break;
      case 'success':

          toastr.options.timeOut = 10000;
          toastr.success("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();

          break;
      case 'warning':

          toastr.options.timeOut = 10000;
          toastr.warning("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();

          break;
      case 'error':

          toastr.options.timeOut = 10000;
          toastr.error("{{Session::get('message')}}");
          var audio = new Audio('audio.mp3');
          audio.play();

          break;
  }
  @endif



  $('#summernote').summernote();
  $('.summernote').summernote();





</script>







</body>


</html>
