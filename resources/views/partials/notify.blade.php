{{-- {{json_encode(Session::all())}} --}}
@if (Session::has('success'))
<script>
  var content = {};

  content.message = '{{Session::get('success')}}';
  content.title = 'Success';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'success',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
@endif

@if (Session::has('warning'))
<script>
  var content = {};

  content.message = '{{Session::get('warning')}}';
  content.title = 'Warning!';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'warning',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
@endif

@if (Session::has('danger'))
<script>
  var content = {};

  content.message = '{{Session::get('danger')}}';
  content.title = 'Opps!';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'danger',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
@endif




@if (Session::has('info'))
<script>
  var content = {};

  content.message = '{{Session::get('info')}}';
  content.title = 'Info!';
  content.icon = 'fa fa-bell';

  $.notify(content,{
    type: 'info',
    placement: {
      from: 'top',
      align: 'right'
    },
    showProgressbar: true,
    time: 1000,
    delay: 4000,
  });
</script>
@endif


