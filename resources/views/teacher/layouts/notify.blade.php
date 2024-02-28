@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

@if(Session::has('fail'))
    <div class="alert alert-danger">
       {{Session::get('fail')}}
    </div>
@endif


@if(Session::has('warning'))
    <div class="alert alert-danger">
       {{Session::get('warning')}}
    </div>
@endif


@if(Session::has('info'))
    <div class="alert alert-danger">
       {{Session::get('info')}}
    </div>
@endif


<!-- @if(Session::has('success'))
  <script type="text/javascript">
     swal({
         title:'Success!',
         text:"{{Session::get('success')}}",
         timer:5000,
         type:'success'
     }).then((value) => {
     }).catch(swal.noop);
 </script>
 @endif -->


<!--  @if(Session::has('fail'))
 <script type="text/javascript">
    swal({
        title:'Oops!',
        text:"{{Session::get('fail')}}",
        type:'error',
        timer:5000
    }).then((value) => {
    }).catch(swal.noop);
</script>
@endif -->