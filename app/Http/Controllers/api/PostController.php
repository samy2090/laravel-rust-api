<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Http\Traits\apiTrait;
use App\Models\Post;

class PostController extends Controller
{
    use apiTrait;
    public function index(){
        
        $posts      = PostResource::collection(Post::get());
        $message    = '';
        $status     = 200;

        return $this->apiResponse($posts ,$message ,$status );
    }
    
    public function showPost($id)
    {
        $post = Post::find($id);
        $message    = '';
        $status     = 200;
        if($post){
        return $this->apiResponse(new PostResource($post) ,$message ,$status );
        }
        else{
            
        return $this->apiResponse('null' ,'error' ,404 );
        }
    }
}
