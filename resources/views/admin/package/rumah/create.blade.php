@extends('admin.layouts.app')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Input Optik</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('postrumah') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input class="form-control" placeholder="Nama Optik" name="tipe" type="text">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input class="form-control" placeholder="Alamat Optik" name="tipe" type="text">
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-danger" onclick="kembalirumah();">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
                        function kembalirumah() {
                            window.location.href = "/admin/rumah";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection