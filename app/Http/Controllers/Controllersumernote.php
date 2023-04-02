<?php

namespace App\Http\Controllers;

{
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('post.index');
}