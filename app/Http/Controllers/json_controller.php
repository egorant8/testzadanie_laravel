<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class json_controller extends Controller
{
    public  function    checkJson(Request $reg)
    {
        if (    $reg['json'] != "")
        {
            return  "Генерирую код";
        }
    }
}
