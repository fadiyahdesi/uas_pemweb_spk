@extends('admin.layouts.app')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="col-md-6">
				<h3>Data Kriteria</h3>
			</div>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="panel">
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th style="width: 10%;">No</th>
									<th style="width: 15%;">ID Kriteria</th>
									<th style="width: 15%;">Nama Kriteria</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@if($data_kriteria->count() > 0)
								@foreach($data_kriteria as $DK)
								<tr>
									<td>
										<?php
										echo $no++;
										?>
									</td>
									<td>{{ $DK->code }}</td>
									<td>{{ $DK->name }}</td>
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
</div>
@endsection