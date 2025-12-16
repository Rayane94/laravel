<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        return "Article portant l’identifiant $id";
    }
}
