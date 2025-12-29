<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // ชี้ไปที่ไฟล์ app/Views/login.php
        return view('login');
    }
}