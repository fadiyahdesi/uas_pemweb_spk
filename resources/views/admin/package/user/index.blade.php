@extends('admin.layouts.app')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
					<div class="col-md-6">
						<h3>DATA USER</h3>
					</div>
					<br>
					<div class="text-right">
						<a href="/admin/user/form">
							<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i> Tambah Data User</button>
						</a>
					</div>
				<br>
			<div class="panel">
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th style="width: 10%;">No</th>
								<th style="width: 15%;">Nama</th>
								<th style="width: 15%;">Email</th>
								<th style="width: 15%;">Role</th>
								<th style="width: 20%;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							@if($data_user->count() > 0)
							@foreach($data_user as $DU)
							<tr>
								<td>
									<?php
									echo $no++;
									?>
								</td>
								<td>{{ $DU->name }}</td>
								<td>{{ $DU->email }}</td>
								<td>{{ $DU->role }}</td>
								<td>
									<button type="button" class="btn btn-info btn-warning" href="">
										<a href="/admin/user/formedit/{{ $DU->id }}" style="color:white;">Update</a>
									</button>
									<button type="button" class="btn btn-danger btn-toastr">
										<a href="/admin/user/hapususer/{{ $DU->id }}" style="color:white;">Delete</a>
									</button>
								</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td colspan="6">Data tidak tersedia</td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection