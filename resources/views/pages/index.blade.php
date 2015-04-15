@extends('layouts.default')

@section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            Generic Blog
            <small>Just a Laravel Demo</small>
        </h1>

        <!-- Blog Posts -->
        @foreach($posts as $post)
            <h2>
                {!! link_to_route('post.show', $post->title, [$post->slug]) !!}
            </h2>
            <p class="lead">
                by <span class="glyphicon glyphicon-user"></span><a href="index.php">{{$post->user->username}}</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
            <hr>
            <img class="img-responsive" src="{{$post->image}}" alt="">
            <hr>
            <p>{{$post->body}}</p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
        @endforeach



        <!-- Pager -->

            {!!$posts->appends(Request::except('page'))->render()!!}


    </div>

    <!-- Blog Sidebar Widgets Column -->
    @include('layouts.partials.sidebar')

</div>


@stop

