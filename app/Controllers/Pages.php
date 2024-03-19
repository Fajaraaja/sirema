<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Sirema - Home'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Sirema - About'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Sirema - Contact'
        ];
        return view('pages/contact', $data);
    }
}
