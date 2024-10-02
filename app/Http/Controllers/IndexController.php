<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index(){
        return view('admin.account_block');
    }
}
