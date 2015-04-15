@extends('layouts.default')

@section('content')
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <!-- Blog Post -->

            <!-- Title -->
            <h1>{{$post->title}}</h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">{{$post->user->username}}</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-responsive" src="{{$post->image}}" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead">{{$post->body}}</p>

            <hr>

            <!-- Comments Form -->

            @if(Auth::check())
                @include('layouts.partials.commentbox')
            @else
                <h4>Please, {!!link_to('auth/login', 'Log in')!!} to leave a comment</h4>
            @endif


            <hr>

            <!-- Posted Comments -->
            @include('layouts.partials.comments')
            {!!$comments->appends(Request::except('page'))->render()!!}




        </div>

       @include('layouts.partials.sidebar')
</div>

@stop