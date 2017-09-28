@extends('layouts.admin')

@section('admin')
    <style>
        a.checkx:hover{

            cursor: pointer;
        }
        .fa-check {
            color: #308929;
        }
        .fa-check:hover {
            color: #307629;
        }
        .fa-times{


            color: #892b31
        }
        .fa-times:hover{


            color: #6e282e
        }
    </style>
<div class="container">
    <div class="row">
        <div class="new-post">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Post Title</th>
                    <th>Type</th>
                    <th>Date Submited</th>
                    <th>Approve/Deny</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>My Essay</td>
                    <td>Art</td>
                    <td>11-12-17</td>
                    <td ><a href="#" class="checkx"><i class="fa fa-check fa-2x"></i></a>    <a href="#" class="checkx"><i class="fa fa-times fa-2x"></i></a>  </td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>My Essay</td>
                    <td>Essay</td>
                    <td>11-12-17</td>
                    <td ><a href="#" class="checkx"><i class="fa fa-check fa-2x"></i></a>    <a href="#" class="checkx"><i class="fa fa-times fa-2x"></i></a>  </td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>My Essay</td>
                    <td>Short Fiction</td>
                    <td>11-12-17</td>
                    <td ><a href="#" class="checkx"><i class="fa fa-check fa-2x"></i></a>    <a href="#" class="checkx"><i class="fa fa-times fa-2x"></i></a>  </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
    @endsection