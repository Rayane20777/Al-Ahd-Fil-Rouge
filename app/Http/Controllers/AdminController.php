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

    public function secretaryIndex()
    {
        try {
            $secretaries = $this->service->allSecretary();
            return view('/admin/secretaries', compact('secretaries'));
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }

    public function userBan($id){
        try {
            $this->service->userBan($id);
            return redirect()->route('admin_users.index')->with('success', 'User banned successfully');
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }

    public function secretaryBan($id){
        try {
            $this->service->secretaryBan($id);
            return redirect()->route('admin_secretaries.index')->with('success', 'User banned successfully');
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }
}
