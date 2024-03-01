<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;


class CommentController extends Controller
{
    public function store(User $user , Request $request , Article $articleId)

{
    // On récupère les données du formulaire
    $data = $request->only(['content', 'article_id']);

    Comment::create([
        'content' => $content,
        'article_id' => $articleId,
        'user_id' => Auth::user()->id
    ]);
    
        return view('public.show', [
            'article' => $article,
            'user' => $user
        ]);
    }
}

