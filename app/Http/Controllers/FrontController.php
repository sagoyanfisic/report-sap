<?php

namespace reportesap\Http\Controllers;

use Illuminate\Http\Request;

use reportesap\Http\Requests;
use reportesap\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }


}
