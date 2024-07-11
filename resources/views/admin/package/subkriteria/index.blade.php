@extends('admin.layouts.app')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">DATA SUB KRITERIA</h3>
				<div class="panel">
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>No.</th>
									<th>Code Sub Kriteria</th>
									<th>Nama Kriteria</th>
									<th>Sub Kriteria</th>
									<th>Nilai Bobot</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								@if($data_sub->count() > 0)
								@foreach($data_sub as $DS)
								<tr>
									<td>
										<?php
										echo $no++;
										?>
									</td>
									<td>{{ $DS->code }}</td>
									<td>{{ $DS->name }}</td>
									<td>{{ $DS->nilaik }}</td>
									<td>{{ $DS->nilaib }}</td>
								</tr>
								@endforeach
								@else
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