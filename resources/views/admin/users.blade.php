@extends('admin.base')
@section('title','Isu - DevBasic')
@section('main')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-label-left input_mask">
                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                                   placeholder="username" name="Username">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess3" placeholder="fullname"
                                   name="Fullname">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="email" class="form-control has-feedback-left" id="inputSuccess4"
                                   placeholder="Email" name="email">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <div class="col-md-6 col-sm-6  form-group has-feedback">
                            <input type="tel" class="form-control" id="inputSuccess5" placeholder="Phone" name="phone">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Address</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 ">Date Of Birth <span
                                        class="required">*</span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text"
                                       required="required" type="text" onfocus="this.type='date'"
                                       onmouseover="this.type='date'" onclick="this.type='date'"
                                       onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function () {
                                            input.type = 'text';
                                        }, 60000);
                                    }
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="x_title">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add User
            </button>
        </div>
    </div>
    {{$users}}
    <div class="row">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manager User
                    <small></small>
                </h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Birth Day</th>
                        <th>Updated At</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$user->username}}</td>
                            <td>{{$user->fullname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->birthday}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@stop