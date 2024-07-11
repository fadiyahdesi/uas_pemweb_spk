@extends('admin.layouts.app')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="panel col-md-6 col-md-offset-3">
                    <div class="panel-heading">
                        <h3 class="panel-title">Form Update Data Rumah</h3>
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