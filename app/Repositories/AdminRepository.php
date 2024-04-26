<?php


namespace App\Repositories;

use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Models\Member;
use App\Models\Secretary;

class AdminRepository implements AdminRepositoryInterface
{

    

    public function allMember()
    {
        return Member::with('user')->get();
    }

    public function allSecretary()
    {
        return Secretary::with('user')->get();
    }
    public function userBan($id)
    {
        $user = Member::find($id);
        $user->delete();
    }

    public function secretaryBan($id)
    {
        $user = Secretary::find($id);
        $user->delete();
    }
}