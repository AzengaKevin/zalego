<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * The first page of the dashboard
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     *
     * @return  Response
     */
    public function student()
    {

    }

}
