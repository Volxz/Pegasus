@extends('layouts.admin')

@section('admin')
    <style>
        a.checkx:hover{

            cursor: pointer;
        }
        .fa-arrow-right {
            color: #308929;
        }
        .fa-arrow-right:hover {
            color: #307629;
        }
        .fa-trash{


            color: #892b31
        }
        .fa-trash:hover{


            color: #6e282e
        }
    </style>
<div class="container">
    <div class="row">
        <div class="new-post">
            <table class="table dataTable display" id="datatable">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Post Title</th>
                    <th>Type</th>
                    <th>Date Submited</th>
                    <th>Delete</th>
                    <th>View</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>My Essay</td>
                    <td>Art</td>
                    <td>11-12-17</td>
                    <td ><a href="#" class="checkx"><i class="fa fa-trash fa-2x"></i></a>    </td>
                    <td ><a href="#" class="checkx"><i class="fa fa-arrow-right fa-2x"></i></a>    </td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>My Essay</td>
                    <td>Essay</td>
                    <td>11-12-17</td>
                    <td ><a href="#" class="checkx"><i class="fa fa-trash fa-2x"></i></a>  </td>
                    <td ><a href="#" class="checkx"><i class="fa fa-arrow-right fa-2x"></i></a>    </td>
                </tr>
                <tr>
                    <td>John</td>
                    <td>My Essay</td>
                    <td>Short Fiction</td>
                    <td>11-12-17</td>
                    <td ><a href="#" class="checkx"><i class="fa fa-trash fa-2x"></i></a>  </td>
                    <td ><a href="#" class="checkx"><i class="fa fa-arrow-right fa-2x"></i></a>    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
    @endsection