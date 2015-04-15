<?php namespace App\Commands\Comments;


use App\Comment;
use App\Repositories\CommentRepositoryInterface;
use Laracasts\Commander\CommandHandler;

class AddCommentCommandHandler implements CommandHandler {

    protected $repo;

    function __construct(CommentRepositoryInterface $repo){
        $this->repo = $repo;
    }

    /**
     * @param $command
     * @return mixed|void
     * Handler persists the comment to the data store
     */
    public function handle($command){
        $comment = Comment::add(
            $command->user_id, $command->post_id, $command->comment
        );

        $this->repo->save($comment);
    }

} 