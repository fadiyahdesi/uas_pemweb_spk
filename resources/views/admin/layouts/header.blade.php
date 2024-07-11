<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href=""><img src="/img/logoutama.jpg" alt="" style="width: 90px; height: auto;" class=""></a>
    </div>
    <div class="container-fluid">
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>{{ auth()->user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#ModalPassword"><i class="lnr lnr-lock"></i> <span>Ubah Password</span></a></li>
                        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out-alt"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="modal fade" id="ModalPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color:yellow;">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Ubah Password</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/home/{password}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password Baru: </label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>