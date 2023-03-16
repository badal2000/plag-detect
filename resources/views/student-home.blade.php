@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card" style="">
                        <div class="card-body">
                          <h5 class="card-title">Subject: </h5>
                          <h6 class="card-subtitle mb-2 text-muted">Teacher name: </h6>
                        </div>
                    </div>

                    <br/>

                    <div class="assignment-class card-body card" style="width:30% ; margin-bottom: 5px">
                        {{ __('View your pending Assignments!') }}
                        <br/>
                        <a href="{{ route('pending_assignments') }}">View</a>
                    </div>

                    <div class="assignment-history card">
                        {{-- assignment posts shown here --}}
                        @foreach ($recents as $recent)
                        <div class="card-body">
                            <h5 class="card-title">{{$recent->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$recent->submission_date}}</h6>
                            <p class="card-text">{{$recent->desc}}</p>
                        </div>
                        @endforeach
                    </div>

                    <a href="{{ route('student.file') }}">Show the file </a>
                    
                    
                    
                </div>

            
        </div>
    </div>
</div>
@endsection