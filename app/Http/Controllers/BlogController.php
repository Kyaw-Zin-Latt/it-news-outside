<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $articles = Article::when(isset(request()->search),function ($q){
            $search = request()->search;
            return $q->orwhere("title","like","%$search%")->orwhere("description","like","%$search%");
        })->with(['user','category'])->latest("id")->paginate(7);
//        return $articles;
        return view('welcome',compact('articles'));
    }

    public function detail($id){
        $article = Article::find($id);

        return view('blog.detail',compact('article'));
    }

    public function baseOnCategory($id){
        $articles = Article::when(isset(request()->search),function ($q){
            $search = request()->search;
            return $q->orwhere("title","like","%$search%")->orwhere("description","like","%$search%");
        })->where("category_id",$id)->with(['user','category'])->latest("id")->paginate(7);
        return view('welcome',compact('articles'));

    }

    public function baseOnUser($id){
        return $id;
    }

    public function baseOnDate($date){
        return $date;
    }
}
