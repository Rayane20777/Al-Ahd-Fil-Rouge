<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\AdminServiceInterface;
use Exception;
use Illuminate\Support\Facades\View; 


class AdminController extends Controller
{
    private $service;

    public function __construct(AdminServiceInterface $service){
        $this->service = $service;

    }
    /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        try {
            $users = $this->service->allMember();
            return view('/admin/users', compact('users'));
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }
}
