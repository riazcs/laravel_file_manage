<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagementController extends Controller
{
    //
    public function index(){
       return view('file_manage');
    }
}
