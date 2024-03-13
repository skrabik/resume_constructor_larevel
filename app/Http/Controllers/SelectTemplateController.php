<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\TemplateModel;

class SelectTemplateController extends Controller
{
    public function render ()
    {
        $data = TemplateModel::all();
//        dump($data);
        return view('select_template', ['templates' => $data]);

    }
}