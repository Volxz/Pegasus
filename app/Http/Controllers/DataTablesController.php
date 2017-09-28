<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DataTables;


class DataTablesController extends Controller
{
    function unapprovedPosts(){
        return Datatables::of(Post::with('user')->where('approved','0')->get())->make(true);
    }
}
