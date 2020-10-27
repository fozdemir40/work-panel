<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsItem;

class NewsItemController extends Controller
{
    public function index(){
        $newsItems = NewsItem::all();

        return view('news.index', [
            'newsItems' => $newsItems,
        ]);

    }

    public function create(){
        echo 'create';
    }

    public function show($id){


        try {
            $newsItem = NewsItem::find($id);
        } catch (\Exception $e) {
            echo $e;
        }

        return view('news.detail', [
            'newsItem' => $newsItem,
        ]);
    }
}
