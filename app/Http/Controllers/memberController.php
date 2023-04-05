<?php

namespace App\Http\Controllers;
use App\Models\Member; //it is from Member model
use Illuminate\Http\Request;

class memberController extends Controller
{
    function showList()
    {
        $data = Member::All();
        return view('memberList',['members'=>$data]);
        // members should take to memberList page to show data
    }
}
