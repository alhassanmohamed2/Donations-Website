<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {
        $images_path = [
            '../../public/images/sheep.png',
            '../../public/images/bigcow.jpg',
            '../../public/images/cow.jpg',
            '../../public/images/artwell.jpg',
            '../../public/images/bigwell.jpg',
            '../../public/images/artwellelect.jpg',
            '../../public/images/handwell.jpg',
            '../../public/images/water.jpg'
        ];
        $names = [
            'خراف',
            'سهم بقيمة 1/7 بقرة (البقرة 7 أسهم)',
            'أبقار',
            'بئر ارتوازي يدوي',
            'بئر ارتوازي بالكهرباء-للمشاركة',
            'بئر ارتوازي بالكهرباء',
            'بئر يدوي',
            'وصلات مياه'
        ];

        return view('home', [
            "images_path" => $images_path,
            "names" => $names
        ]);
    }
    public function about()

    {
        $old_clients_data = App::get('database')->selectAll('about_data', conditions: ['completed' => 1]);
        return view('about', ["data_array" => $old_clients_data]);
    }
    public function admin()
    {
        session_start();
        if (isset($_SESSION["email"]) && isset($_SESSION["pass"])) {
            redirect("dashboard");
        } else {
            return view('admin');
        }
    }
}