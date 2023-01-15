<?php

namespace App\Controllers;

use App\Core\App;

class DashboardController
{
    public function index()
    {
        session_start();
        if (isset($_SESSION["email"]) && isset($_SESSION["pass"])) {
            $old_clients_data = App::get('database')->selectAll('about_data', conditions: ['completed' => 1]);
            $new_clients_data = App::get('database')->selectAll('about_data', conditions: ['completed' => 0]);
            $start = 0;
            $end = 21;
            return view('dashboard', [
                'showDatabase' => App::get('database')->check_table_exists('about_data'),
                "old_clients_data" => $old_clients_data,
                "new_clients_data" => $new_clients_data,
                "messageToClient" => 'شكرا لك لتواصلك معانا , برجاء ارسال سعر المنتج على الرقم التالى و سوف يتم ارسال الفيديو الخاص بتسليم هذا المنتج لكم مع خالص تمنياتكم بالنجاح والسداد'
            ]);
        } else {
            redirect('admin');
        }
    }

    public function tables_creation()
    {
        foreach (App::get('tables') as $name => $table) {
            App::get('database')->create_table($name, $table);
        }
        redirect('dashboard');
    }
    public function aboutData()
    {
        parse_str(parse_url($_POST['youtube-link'], PHP_URL_QUERY), $my_array_of_vars);
        $youtupe_link = "https://www.youtube.com/embed/" . $my_array_of_vars['v'] . "?rel=0";

        App::get('database')->insert('about_data', [
            'name' => $_POST['name'],
            'fal_type' => $_POST['type'],
            'youtupe_link' => $youtupe_link,
            'price' => $_POST['price'],
            'phone' => $_POST['countrycode'] . $_POST['phone']
        ]);
        return view('dashboard');
    }
    public function delete()
    {
        App::get('database')->delete("about_data", ["id" => array_keys($_POST)[0]]);
        redirect('dashboard');
    }

    public function update_customer_state()
    {
        App::get('database')->delete("about_data", ["id" => array_keys($_POST)[0]]);
        redirect('dashboard');
    }

    public function completeCustomer()

    {
        return view("complete", ["id" => array_keys($_POST)[0]]);
    }
    public function doneCustomer()

    {
        parse_str(parse_url($_POST['youtube-link'], PHP_URL_QUERY), $my_array_of_vars);
        $youtupe_link = "https://www.youtube.com/embed/" . $my_array_of_vars['v'] . "?rel=0";
        App::get('database')->update(
            "about_data",
            parameters: ['youtupe_link' => $youtupe_link, 'completed' => 1, "price" => $_POST['price']],
            conditions: ['id' => array_keys($_POST)[1]]
        );
        redirect('dashboard');
    }
}