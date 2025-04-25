<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends BaseController {

    public function index()
    {
        $comments = Comment::all();

        return View::make('comments.index')->with('comments', $comments);
    }
}