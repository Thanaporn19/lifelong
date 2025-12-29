<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('homepage');  // ชี้ไปยังไฟล์ homepage.php ของเรา
    }
}
