<?php

namespace App\Http\Controllers;
use App\Services\Interfaces\MemberServiceInterface;
use Illuminate\Support\Facades\View; 
use Illuminate\Http\Request;
use Exception;

class MemberController extends Controller
{
    private $service;
    
    public function __construct(MemberServiceInterface $service){
        $this->service = $service;

    }
     /*
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function profile()
    {
        try {
            $users = $this->service->profile();
            return view('/member/profile', compact('users'));
        } catch (Exception $e) {
            report($e);
            return View::make('error')->with('message', $e->getMessage());
               }
    }

    public function home(){
        return view('/member/home');
    }
}
