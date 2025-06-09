<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $allUsers = DB::table('users')->get();
        $firstUser = DB::table('users')->first();
        $userNames = DB::table('users')->pluck('name');
        $userCount = DB::table('users')->count();
        $orderedUsers = DB::table('users')->orderBy('name')->get();
        $limitedUsers = DB::table('users')->limit(2)->get();

        return view('user.index', compact(
            'allUsers',
            'firstUser',
            'userNames',
            'userCount',
            'orderedUsers',
            'limitedUsers'
        ));
    }
}