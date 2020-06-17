@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
           
    <script type="application/javascript" src="https://js.pusher.com/6.0/pusher.min.js"></script>

    <newcomment></newcomment>

    <script type="application/javascript">  

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('3eb7f8753d692e1e4759', {
      cluster: 'ap2'
    });
    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
 



        </div>
    </div>
</div>




 
 
@endsection
