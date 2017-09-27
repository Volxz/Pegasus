<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DataTables;


class DataTablesController extends Controller
{
    function unapprovedPosts(){
        return DataTables::eloquent(Post::where('approved',0))->make(true);
    }
}
