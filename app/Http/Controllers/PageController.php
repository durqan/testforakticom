<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Parsing_File;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function table()
    {
        $parsing = new Parsing_File();
        $result = $parsing->getData($_FILES['file']['tmp_name']);
        array_shift($result);

        return view('table', [
             'data' => $result]);
    }
}
