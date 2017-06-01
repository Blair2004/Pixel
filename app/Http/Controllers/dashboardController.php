<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data         =   new \stdClass;
        $this->data->menus  =   config( 'dashboard.menus' );
    }

    public function index()
    {
        $this->data->pageTitle      =   'Dashboard';
        return view( 'dashboard.index', ( array ) $this->data );
    }

    /**
     * Module Controller
    **/

    public function modules()
    {
        $this->data->pageTitle      =   'Modules';
        return view( 'dashboard.modules', ( array ) $this->data );
    }

    /**
     * Settings Controller
    **/

    public function settings()
    {
        $this->data->pageTitle      =   'Settings';
        return view( 'dashboard.settings', ( array ) $this->data );
    }

    /**
     * Users Controller
    **/

    public function users()
    {
        $this->data->pageTitle      =   'Users';
        return view( 'dashboard.users', ( array ) $this->data );
    }
}
