@extends('layouts.app')

@section('content')

    <style>
        body {
            background: red; /* For browsers that do not support gradients */
            /* For Safari 5.1 to 6.0 */
            background: -webkit-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);
            /* For Opera 11.1 to 12.0 */
            background: -o-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);
            /* For Fx 3.6 to 15 */
            background: -moz-linear-gradient(left, red, orange, yellow, green, blue, indigo, violet);
            /* Standard syntax */
            background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
        }
    </style>
    <img src="img/404.png" alt="Rawr 404 not found" class="logo center-block">
    <h1 class="text-center">Error Message</h1>
    <p class="text-center">Error code</p>
@endsection