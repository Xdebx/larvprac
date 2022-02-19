<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View;
use View;


class ArticleController extends Controller
{
    public function index(){
        //return 'From article index';
        return View::make('form');
    }
    public function show($articleId){
        //return 'From article index';
        return 'Article is: '. $articleId;
    }
}
