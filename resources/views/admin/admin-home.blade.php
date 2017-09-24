@extends('layouts.admin')

@section('admin')


    <div id="wrapper">

        <!-- Navigation -->

        <!-- /.navbar-top-links -->

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

                        <div id="page-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">Dashboard</h1>
                                </div>
                                <!-- /.col-lg-12 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-comments fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">amount_posts</div>
                                                    <div>Pending Posts</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-users fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge">amount_users</div>
                                                    <div>Users</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Details</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- /.row -->
                                <div class="conatiner">
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
                                <!-- /.row -->
                            </div>
                            <!-- /#page-wrapper -->

                        </div>
@endsection
