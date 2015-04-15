@foreach($comments as $comment)
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object" src="{{$comment->user->avatar}}" alt="">
    </a>
    <div class="media-body">
        <h4 class="media-heading">{{$comment->user->username}}
            <small>{{$comment->created_at}}</small>
        </h4>
        {{$comment->body}}
    </div>
</div>
@endforeach