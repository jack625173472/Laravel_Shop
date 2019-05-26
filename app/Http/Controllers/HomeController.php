<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    //首頁
    public function indexPage(){
        $binding = [
            'title' => '首頁',
        ];
        return view('home.index', $binding);
    }
}