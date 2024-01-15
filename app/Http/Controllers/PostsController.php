<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        // Получаем все посты из базы данных
        $posts = Post::all();

        // Передаем данные в вид и отображаем страницу
        return view('posts.index', compact('posts'));
    }
}