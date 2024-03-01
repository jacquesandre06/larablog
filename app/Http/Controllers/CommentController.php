<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)

{
    // On récupère les données du formulaire
    $content = $request['content'];
    $articleId = $request['articleId'];
    

    Comment::create([
        'content' => $content,
        'article_id' => $articleId,
        'user_id' => Auth::user()->id
    ]);
   
    
        return redirect()->back();
    }
}

