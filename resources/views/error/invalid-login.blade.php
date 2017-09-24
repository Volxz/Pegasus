@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="padding-top: 10vh;">Please Login with your @LJCDS.org Email</h1>
                <a href="/oauth/google"><button class="btn pri center-block" style="margin-top: 5vh;">Retry</button></a>
            </div>
        </div>
    </div>
    @endsection