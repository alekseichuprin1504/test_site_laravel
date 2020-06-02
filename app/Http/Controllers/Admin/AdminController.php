<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

	/**
     * Display admin page.
     */
    public function index()
    {
        $data = ['title' => 'Панель администратора'];
        return view('admin.index',$data);
    }
}
