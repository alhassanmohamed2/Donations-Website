<?php


namespace App\Controllers;

use App\Core\App;

class BuyController

{
    public function index()

    {
        return view('buy', ["type" => $_GET['type']]);
    }
    public function buy()
    {
        App::get('database')->insert('about_data', [
            'name' => $_POST['cus_name'],
            'phone' => $_POST['countrycode'] . $_POST['phone'],
            'fal_type' => $_POST['type'],
            'completed' => 0
        ]);
        return redirect('');
    }
}