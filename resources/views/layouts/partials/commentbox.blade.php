<div class="well">
    <h4>Leave a Comment:</h4>

    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    {!!Form::open(['route' => 'comments.store'])!!}
        <div class="form-group">
            {!!Form::textarea('comment', '', ['class' => 'form-control', 'rows' => 3])!!}
        </div>
        {!!Form::hidden('post_id', $post->id)!!}
        {!!Form::submit('Comment', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
</div>