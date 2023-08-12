<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;


class LogicController extends Controller
{
    public $comments = [
        [
            'name' => 'Prince',
            'time' => '10mins ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus qui veritatis, officia neque explicabo sit natus iste vitae nesciunt laboriosam totam soluta nam accusantium in a architecto commodi modi doloremque!'
        ],

        [
            'name' => 'Collins',
            'time' => '9mins ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus qui veritatis, officia neque explicabo sit natus iste vitae nesciunt laboriosam totam soluta nam accusantium in a architecto commodi modi doloremque!'
        ],

        [
            'name' => 'Kele',
            'time' => '8mins ago',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus qui veritatis, officia neque explicabo sit natus iste vitae nesciunt laboriosam totam soluta nam accusantium in a architecto commodi modi doloremque!'
        ]

        ];

    public function index() {
        return view('index');
    }

    public function comment() {
        return view('comment', ['comments' => $this->comments]);
    }

    public function post(Request $request) {
        array_unshift( $this->comments, [
            'name' => 'John Doe',
            'time' => Carbon::now()->diffForHumans(),
            'body' => $request->comment
    ]);
        return view('comment', ['comments' => $this->comments]);
    }
}
