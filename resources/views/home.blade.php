@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 




                 <div class="card">
                      <div class="card-body">
                         <h4 class="card-title">Installed Packages</h4>
                    
                     </div>
                     <ul class="list-group list-group-flush">
                         <li class="list-group-item">Frontend Scaffolding</li>
                         <li class="list-group-item">Laravel Passport   <a class="float-right" href="{{ route('passport') }}" > Passport Page</a> </li>
                         <li class="list-group-item">Pusher Channels    <a class="float-right" href="{{ route('pusher') }}" > Test Pusher</a> </li>
                         <li class="list-group-item">FireBase    <a class="float-right" href="{{ route('firebase') }}" > Test FireBase</a> </li>
                      </ul>
                 </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
