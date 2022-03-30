<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // $feed = \Feeds::make('https://www.sendinblue.com/feed/', 10);
        $feed = \Feeds::make('https://blog.enguehard.info/feed/', 10);
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );

        return view('welcome', compact('data'));
    }
}
