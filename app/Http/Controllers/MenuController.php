<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menuItems = json_decode(File::get(resource_path('json/menu.json')), true);
        return view('index', compact('menuItems'));
    }
}
