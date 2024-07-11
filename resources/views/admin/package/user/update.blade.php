@extends('admin.layouts.app')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Update Data User</h3>
                    </div>
                    <div class="panel-body">
                        @foreach($data_user as $DU)
                        <form action="/admin/user/formedit/updateuser/{id}" method="post">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" name="name" placeholder="Nama Lengkap" type="text" value="{{ $DU->name }}">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" name="email" placeholder="Email" type="text" value="{{ $DU->email }}" readonly>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                            <br>
                            <div class="">
                                <label class="fancy-radio">
                                    <input name="role" value="Admin" type="radio" {{$DU->role == 'Admin'? 'checked' : ''}}>
                                    <span><i></i>Admin</span>
                                </label>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-danger" onclick="kembaliuser();">Cancel</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <script>
                        function kembaliuser() {
                            window.location.href = "/admin/user";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection