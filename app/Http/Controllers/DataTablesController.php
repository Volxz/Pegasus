<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class DataTablesController extends Controller
{
    function unapprovedPosts()
    {
        return DataTables::of(Post::with('user')->where('approved', '0')->get())->make(true);
    }

    function approvedPosts()
    {
        return DataTables::of(Post::with('user')->where('approved', '1')->get())->make(true);
    }

    function deletedPosts()
    {
        return DataTables::of(Post::onlyTrashed()->with('user')->get())->make(true);
    }

    function users()
    {
        return DataTables::of(User::all())->make(true);
    }

    function admins(){
        return DataTables::of(User::where('admin',1)->get())->make(true);
    }
}
