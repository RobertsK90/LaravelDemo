<?php namespace App\Commands\Comments;


use Laracasts\Commander\CommandHandler;

class AddCommentCommandHandler implements CommandHandler {

    public function handle($command){
        dd($command);
    }

} 