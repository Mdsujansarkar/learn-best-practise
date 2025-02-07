<?php 
declare(strict_types=1);
namespace App\Services;
use App\Models\Post;
class PostService{
    public function getAllPost(){
        return Post::orderBy('id')->cursorPaginate(10);
    }
}