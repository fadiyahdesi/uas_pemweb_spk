@extends('admin.layouts.app')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="col-md-6">
				<h3>DATA OPTIK</h3>
			</div>
			<br>
			<div class="text-right">
				<a href="/admin/rumah/form">
					<button type="button" class="btn btn-primary btn-toastr"><i class="fa fa-plus-square"></i>Tambah Data Optik</button>
				</a>
			</div>
		</div>
		<br>
		<div class="panel">
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Optik</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						@if($data_rumah->count() > 0)
						@foreach($data_rumah as $DK)
						<tr>
							<td>
								<?php
								echo $no++;
								?>
							</td>
							<td>{{ $DK->nama }}</td>
							<td>{{ $DK->alamat }}</td>
							<td>
								<button type="button" class="btn btn-info btn-warning" href="">
									<a href="/admin/rumah/formedit/{{ $DK->id }}" style="color:white;">Update</a>
								</button>
								<button type="button" class="btn btn-danger btn-toastr">
									<a href="/admin/rumah/hapusrumah/{{ $DK->id }}" style="color:white;">Delete</a>
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
@endsection