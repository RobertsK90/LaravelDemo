<div class="well">
    <h4>Leave a Comment:</h4>
    {!!Form::open()!!}
        <div class="form-group">
            {!!Form::textarea('comment', '', ['class' => 'form-control', 'rows' => 3])!!}
        </div>
        {!!Form::submit('Comment', ['class' => 'btn btn-primary'])!!}
    {!!Form::close()!!}
</div>