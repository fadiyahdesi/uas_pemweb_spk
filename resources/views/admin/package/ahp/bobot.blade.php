@extends('admin.layouts.app')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-body">
						<form id="matrixForm">
							@csrf
							<table id="matrixForm" class="table table-bordered">
								<H3>Pairwase Comparison Matrix</H3>
								<thead>
									<tr>
										<th>KRITERIA</th>
										<th>Rating Gmaps (C1)</th>
										<th>Harga (C2)</th>
										<th>Fasilitas (C3)</th>
										<th>Checkup (C4)</th>
										<th>Ket. Softlen (C5)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Rating Gmaps</td>
										<td><input type="number" name="c1_c1" value="1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c1_c2" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
										<td><input type="number" name="c1_c3" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
										<td><input type="number" name="c1_c4" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
										<td><input type="number" name="c1_c5" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
									</tr>
									<tr>
										<td>Harga</td>
										<td><input type="text" name="c2_c1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c2_c2" value="1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c2_c3" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
										<td><input type="number" name="c2_c4" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
										<td><input type="number" name="c2_c5" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
									</tr>
									<tr>
										<td>Fasilitas</td>
										<td><input type="text" name="c3_c1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="c3_c2" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c3_c3" value="1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c3_c4" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
										<td><input type="number" name="c3_c5" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
									</tr>
									<tr>
										<td>Checkup</td>
										<td><input type="text" name="c4_c1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="c4_c2" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="c4_c3" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c4_c4" value="1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c4_c5" min="1" max="9" class="form-control bg-yellow" oninput="calculate()"></td>
									</tr>
									<tr>
										<td>Ket. Softlen</td>
										<td><input type="text" name="c5_c1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="c5_c2" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="c5_c3" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="c5_c4" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="number" name="c5_c5" value="1" readonly class="form-control" style="background-color: lightgrey;"></td>
									</tr>
									<tr>
										<td><strong>Total</strong></td>
										<td><input type="text" name="total_c1" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="total_c2" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="total_c3" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="total_c4" readonly class="form-control" style="background-color: lightgrey;"></td>
										<td><input type="text" name="total_c5" readonly class="form-control" style="background-color: lightgrey;"></td>
									</tr>
								</tbody>
							</table>

							<div class="row">
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="normalizeMatrix();">Normalisasi</button>
								</div>
							</div>
						</form>

						<br>

						<form>
							<div id="normalizedMatrix" style="display:none;">
								<h3 class="page-title">Normalized Matrix</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>KRITERIA</th>
											<th>Rating Gmaps (C1)</th>
											<th>Harga (C2)</th>
											<th>Fasilitas (C3)</th>
											<th>Checkup (C4)</th>
											<th>Ket. Softlen (C5)</th>
										</tr>
									</thead>
									<tbody id="normalizedMatrixBody">
										<!-- Filled dynamically -->
									</tbody>
								</table>
								<div class="col-md3">
									<button type="button" class="btn btn-warning" onclick="checkConsistency();">Cek Konsistensi</button>
								</div>
								<br>
							</div>
						</form>

						<br>

						<form>
							<div id="consistencyCheck" style="display:none;">
								<h3 class="page-title">Nilai Konsistensi</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>BOBOT</th>
											<th>EIGEN</th>
										</tr>
									</thead>
									<tbody id="consistencyCheckBody">
										<!-- Filled dynamically -->
									</tbody>
								</table>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>t</th>
											<th>CI</th>
											<th>RI</th>
											<th>CR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td id="t-value"></td>
											<td id="ci-value"></td>
											<td id="ri-value">1.12</td>
											<td id="cr-value"></td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="calculateRating();">Next</button>
								</div>
							</div>
						</form>

						<br>
						<br>

						<form>
							<div id="calculateRating" style="display:none;">
								<h3 class="page-title">Normalisasi Rating Gmaps</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th class=" style="background-color: lightgrey;">A1</th>
											<th class="bg-green">A2</th>
											<th class="bg-green">A3</th>
											<th class="bg-green">A4</th>
											<th class="bg-green">A5</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="bg-yellow">A1</td>
											<td><input type="number" name="rating_rating" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="rating_harga" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="rating_fasilitas" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="rating_checkup" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="rating_ket_softlen" class="form-control" oninput="calculateRating()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A2</td>
											<td><input type="number" name="harga_rating" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="harga_harga" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_fasilitas" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="harga_checkup" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="harga_ket_softlen" class="form-control" oninput="calculateRating()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A3</td>
											<td><input type="number" name="fasilitas_rating" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="fasilitas_harga" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="fasilitas_fasilitas" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_checkup" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="fasilitas_ket_softlen" class="form-control" oninput="calculateRating()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A4</td>
											<td><input type="number" name="checkup_rating" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="checkup_harga" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="checkup_fasilitas" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="checkup_checkup" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="checkup_ket_softlen" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A5</td>
											<td><input type="number" name="ket_softlen_rating" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="ket_softlen_harga" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="ket_softlen_fasilitas" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="ket_softlen_checkup" min="1" max="5" class="form-control" oninput="calculateRating()"></td>
											<td><input type="number" name="ket_softlen_ket_softlen" value="1" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td><strong>Total</strong></td>
											<td><input type="text" name="total_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
										<tr>
											<td><strong>Normalisasi</strong></td>
											<td><input type="text" name="normalisasi_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="calculateHarga();">Next</button>
								</div>
								<br>
							</div>
						</form>

						<br>
						<br>

						<form>
							<div id="calculateHarga" style="display:none;">
								<h3 class="page-title">Normalisasi Harga</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th class="bg-green">A1</th>
											<th class="bg-green">A2</th>
											<th class="bg-green">A3</th>
											<th class="bg-green">A4</th>
											<th class="bg-green">A5</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="bg-yellow">A1</td>
											<td><input type="number" name="rating_rating" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="rating_harga" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="rating_fasilitas" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="rating_checkup" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="rating_ket_softlen" class="form-control" oninput="calculateHarga()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A2</td>
											<td><input type="number" name="harga_rating" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="harga_harga" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_fasilitas" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="harga_checkup" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="harga_ket_softlen" class="form-control" oninput="calculateHarga()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A3</td>
											<td><input type="number" name="fasilitas_rating" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="fasilitas_harga" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="fasilitas_fasilitas" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_checkup" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="fasilitas_ket_softlen" class="form-control" oninput="calculateHarga()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A4</td>
											<td><input type="number" name="checkup_rating" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="checkup_harga" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="checkup_fasilitas" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="checkup_checkup" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="checkup_ket_softlen" class="form-control" oninput="calculateHarga()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A5</td>
											<td><input type="number" name="ket_softlen_rating" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="ket_softlen_harga" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="ket_softlen_fasilitas" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="ket_softlen_checkup" class="form-control" oninput="calculateHarga()"></td>
											<td><input type="number" name="ket_softlen_ket_softlen" value="1" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td><strong>Total</strong></td>
											<td><input type="text" name="total_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
										<tr>
											<td><strong>Normalisasi</strong></td>
											<td><input type="text" name="normalisasi_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="calculateFasilitas();">Next</button>
								</div>
								<br>
							</div>
						</form>

						<br>
						<br>

						<form>
							<div id="calculateFasilitas" style="display:none;">
								<h3 class="page-title">Normalisasi Fasilitas</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th class="bg-green">A1</th>
											<th class="bg-green">A2</th>
											<th class="bg-green">A3</th>
											<th class="bg-green">A4</th>
											<th class="bg-green">A5</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="bg-yellow">A1</td>
											<td><input type="number" name="rating_rating" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="rating_harga" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="rating_fasilitas" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="rating_checkup" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="rating_ket_softlen" class="form-control" oninput="calculateFasilitas()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A2</td>
											<td><input type="number" name="harga_rating" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="harga_harga" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_fasilitas" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="harga_checkup" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="harga_ket_softlen" class="form-control" oninput="calculateFasilitas()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A3</td>
											<td><input type="number" name="fasilitas_rating" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="fasilitas_harga" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="fasilitas_fasilitas" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_checkup" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="fasilitas_ket_softlen" class="form-control" oninput="calculateFasilitas()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A4</td>
											<td><input type="number" name="checkup_rating" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="checkup_harga" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="checkup_fasilitas" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="checkup_checkup" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="checkup_ket_softlen" class="form-control" oninput="calculateFasilitas()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A5</td>
											<td><input type="number" name="ket_softlen_rating" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="ket_softlen_harga" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="ket_softlen_fasilitas" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="ket_softlen_checkup" class="form-control" oninput="calculateFasilitas()"></td>
											<td><input type="number" name="ket_softlen_ket_softlen" value="1" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td><strong>Total</strong></td>
											<td><input type="text" name="total_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
										<tr>
											<td><strong>Normalisasi</strong></td>
											<td><input type="text" name="normalisasi_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="calculateCheckup();">Next</button>
								</div>
								<br>
							</div>
						</form>
						
						<br>
						<br>

						<form>
							<div id="calculateCheckup" style="display:none;">
								<h3 class="page-title">Normalisasi Layanan Checkup</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th class="bg-green">A1</th>
											<th class="bg-green">A2</th>
											<th class="bg-green">A3</th>
											<th class="bg-green">A4</th>
											<th class="bg-green">A5</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="bg-yellow">A1</td>
											<td><input type="number" name="rating_rating" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="rating_harga" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="rating_fasilitas" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="rating_checkup" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="rating_ket_softlen" class="form-control" oninput="calculateCheckup()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A2</td>
											<td><input type="number" name="harga_rating" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="harga_harga" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_fasilitas" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="harga_checkup" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="harga_ket_softlen" class="form-control" oninput="calculateCheckup()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A3</td>
											<td><input type="number" name="fasilitas_rating" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="fasilitas_harga" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="fasilitas_fasilitas" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_checkup" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="fasilitas_ket_softlen" class="form-control" oninput="calculateCheckup()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A4</td>
											<td><input type="number" name="checkup_rating" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="checkup_harga" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="checkup_fasilitas" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="checkup_checkup" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="checkup_ket_softlen" class="form-control" oninput="calculateCheckup()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A5</td>
											<td><input type="number" name="ket_softlen_rating" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="ket_softlen_harga" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="ket_softlen_fasilitas" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="ket_softlen_checkup" class="form-control" oninput="calculateCheckup()"></td>
											<td><input type="number" name="ket_softlen_ket_softlen" value="1" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td><strong>Total</strong></td>
											<td><input type="text" name="total_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
										<tr>
											<td><strong>Normalisasi</strong></td>
											<td><input type="text" name="normalisasi_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="calculateSoft();">Next</button>
								</div>
								<br>
							</div>
						</form>

						<br>
						<br>

						<form>
							<div id="calculateSoft" style="display:none;">
								<h3 class="page-title">Normalisasi Ketersediaan Softlen</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th class="bg-green">A1</th>
											<th class="bg-green">A2</th>
											<th class="bg-green">A3</th>
											<th class="bg-green">A4</th>
											<th class="bg-green">A5</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="bg-yellow">A1</td>
											<td><input type="number" name="rating_rating" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="rating_harga" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="rating_fasilitas" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="rating_checkup" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="rating_ket_softlen" class="form-control" oninput="calculateSoft()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A2</td>
											<td><input type="number" name="harga_rating" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="harga_harga" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_fasilitas" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="harga_checkup" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="harga_ket_softlen" class="form-control" oninput="calculateSoft()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A3</td>
											<td><input type="number" name="fasilitas_rating" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="fasilitas_harga" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="fasilitas_fasilitas" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_checkup" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="fasilitas_ket_softlen" class="form-control" oninput="calculateSoft()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A4</td>
											<td><input type="number" name="checkup_rating" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="checkup_harga" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="checkup_fasilitas" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="checkup_checkup" value="1" readonly class="form-control bg-white"></td>
											<td><input type="number" name="checkup_ket_softlen" class="form-control" oninput="calculateSoft()"></td>
										</tr>
										<tr>
											<td class="bg-yellow">A5</td>
											<td><input type="number" name="ket_softlen_rating" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="ket_softlen_harga" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="ket_softlen_fasilitas" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="ket_softlen_checkup" class="form-control" oninput="calculateSoft()"></td>
											<td><input type="number" name="ket_softlen_ket_softlen" value="1" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td><strong>Total</strong></td>
											<td><input type="text" name="total_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="total_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
										<tr>
											<td><strong>Normalisasi</strong></td>
											<td><input type="text" name="normalisasi_rating" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_harga" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_fasilitas" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_checkup" readonly class="form-control bg-light"></td>
											<td><input type="text" name="normalisasi_ket_softlen" readonly class="form-control bg-light"></td>
										</tr>
									</tbody>
								</table>
								<div class="col-md-3">
									<button type="button" class="btn btn-warning" onclick="calculateRanking();">Next</button>
								</div>
								<br>
							</div>
						</form>

						<br>
						<br>

						<form id="calculateRankingForm">
							<div id="calculateRanking">
								<h3 class="page-title">PERANKINGAN</h3>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th>Rating Gmaps</th>
											<th>Harga</th>
											<th>Fasilitas</th>
											<th>Layanan Checkup</th>
											<th>Ketersediaan Softlen</th>
											<th>Bobot</th>
											<th>Hasil</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Optik Kustin Tegal</td>
											<td><input type="number" name="rating_gmaps_a1" value="0.2173913043" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_a1" value="0.1401869159" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_a1" value="0.2142857143" readonly class="form-control bg-white"></td>
											<td><input type="number" name="layanan_checkup_a1" value="0.2222222222" readonly class="form-control bg-white"></td>
											<td><input type="number" name="ketersediaan_softlen_a1" value="0.25" readonly class="form-control bg-white"></td>
											<td><input type="number" name="bobot_a1" value="0.4221132243" readonly class="form-control bg-white"></td>
											<td><input type="number" name="hasil_a1" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td>Optik FaVaa</td>
											<td><input type="number" name="rating_gmaps_a2" value="0.2173913043" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_a2" value="0.2803738318" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_a2" value="0.2142857143" readonly class="form-control bg-white"></td>
											<td><input type="number" name="layanan_checkup_a2" value="0.2222222222" readonly class="form-control bg-white"></td>
											<td><input type="number" name="ketersediaan_softlen_a2" value="0.25" readonly class="form-control bg-white"></td>
											<td><input type="number" name="bobot_a2" value="0.19510036" readonly class="form-control bg-white"></td>
											<td><input type="number" name="hasil_a2" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td>Optik B. Riski Tegal</td>
											<td><input type="number" name="rating_gmaps_a3" value="0.2173913043" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_a3" value="0.2803738318" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_a3" value="0.1428571429" readonly class="form-control bg-white"></td>
											<td><input type="number" name="layanan_checkup_a3" value="0.2222222222" readonly class="form-control bg-white"></td>
											<td><input type="number" name="ketersediaan_softlen_a3" value="0.125" readonly class="form-control bg-white"></td>
											<td><input type="number" name="bobot_a3" value="0.2186297718" readonly class="form-control bg-white"></td>
											<td><input type="number" name="hasil_a3" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td>Optik Tegal Aziz</td>
											<td><input type="number" name="rating_gmaps_a4" value="0.2173913043" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_a4" value="0.1869158879" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_a4" value="0.2142857143" readonly class="form-control bg-white"></td>
											<td><input type="number" name="layanan_checkup_a4" value="0.1111111111" readonly class="form-control bg-white"></td>
											<td><input type="number" name="ketersediaan_softlen_a4" value="0.125" readonly class="form-control bg-white"></td>
											<td><input type="number" name="bobot_a4" value="0.1087648853" readonly class="form-control bg-white"></td>
											<td><input type="number" name="hasil_a4" readonly class="form-control bg-white"></td>
										</tr>
										<tr>
											<td>Optik Melawai</td>
											<td><input type="number" name="rating_gmaps_a5" value="0.1304347826" readonly class="form-control bg-white"></td>
											<td><input type="number" name="harga_a5" value="0.1121495327" readonly class="form-control bg-white"></td>
											<td><input type="number" name="fasilitas_a5" value="0.2142857143" readonly class="form-control bg-white"></td>
											<td><input type="number" name="layanan_checkup_a5" value="0.2222222222" readonly class="form-control bg-white"></td>
											<td><input type="number" name="ketersediaan_softlen_a5" value="0.25" readonly class="form-control bg-white"></td>
											<td><input type="number" name="bobot_a5" value="0.05539175851" readonly class="form-control bg-white"></td>
											<td><input type="number" name="hasil_a5" readonly class="form-control bg-white"></td>
										</tr>
									</tbody>
								</table>

								<!-- Table to display calculated results -->
								<table id="resultTable" class="table table-bordered mt-4" style="display:none;">
									<thead>
										<tr>
											<th>Alternatif</th>
											<th>Hasil</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Optik Kustin Tegal</td>
											<td id="result_a1"></td>
										</tr>
										<tr>
											<td>Optik FaVaa</td>
											<td id="result_a2"></td>
										</tr>
										<tr>
											<td>Optik B. Riski Tegal</td>
											<td id="result_a3"></td>
										</tr>
										<tr>
											<td>Optik Tegal Aziz</td>
											<td id="result_a4"></td>
										</tr>
										<tr>
											<td>Optik Melawai</td>
											<td id="result_a5"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</form>

						<br>

						<script>
							function calculate() {
								const form = document.getElementById('matrixForm');

								// Calculate and update green cells
								const cells = [{
										row: 2,
										col: 1,
										name: "c2_c1"
									},
									{
										row: 3,
										col: 1,
										name: "c3_c1"
									},
									{
										row: 3,
										col: 2,
										name: "c3_c2"
									},
									{
										row: 4,
										col: 1,
										name: "c4_c1"
									},
									{
										row: 4,
										col: 2,
										name: "c4_c2"
									},
									{
										row: 4,
										col: 3,
										name: "c4_c3"
									},
									{
										row: 5,
										col: 1,
										name: "c5_c1"
									},
									{
										row: 5,
										col: 2,
										name: "c5_c2"
									},
									{
										row: 5,
										col: 3,
										name: "c5_c3"
									},
									{
										row: 5,
										col: 4,
										name: "c5_c4"
									}
								];

								cells.forEach(cell => {
									const yellowInput = form.querySelector(`input[name="c${cell.col}_c${cell.row}"]`);
									if (yellowInput && yellowInput.value !== '') {
										const greenInput = form.querySelector(`input[name="${cell.name}"]`);
										if (greenInput) {
											greenInput.value = (1 / parseFloat(yellowInput.value)).toFixed(9);
										}
									}
								});

								// Calculate total for each column
								const totals = [1, 2, 3, 4, 5].map(col => {
									let sum = 0;
									for (let row = 1; row <= 5; row++) {
										const input = form.querySelector(`input[name="c${row}_c${col}"]`);
										if (input && input.value !== '') {
											sum += parseFloat(input.value);
										}
									}
									return sum;
								});

								totals.forEach((total, index) => {
									const totalInput = form.querySelector(`input[name="total_c${index + 1}"]`);
									if (totalInput) {
										totalInput.value = total.toFixed(9);
									}
								});

								// Call checkConsistency to update the consistency check results
								checkConsistency();
							}

							function normalizeMatrix() {
								const form = document.getElementById('matrixForm');
								const normalizedMatrixBody = document.getElementById('normalizedMatrixBody');
								normalizedMatrixBody.innerHTML = '';

								for (let row = 1; row <= 5; row++) {
									const tr = document.createElement('tr');
									const td = document.createElement('td');
									td.textContent = `C${row}`;
									tr.appendChild(td);

									for (let col = 1; col <= 5; col++) {
										const td = document.createElement('td');
										const valueField = form.querySelector(`input[name="c${row}_c${col}"]`);
										const totalField = form.querySelector(`input[name="total_c${col}"]`);
										if (valueField && totalField) {
											td.textContent = (parseFloat(valueField.value) / parseFloat(totalField.value)).toFixed(6);
										}
										tr.appendChild(td);
									}

									normalizedMatrixBody.appendChild(tr);
								}

								document.getElementById('normalizedMatrix').style.display = 'block';
							}

							function checkConsistency() {
								const form = document.getElementById('matrixForm');
								const consistencyCheckBody = document.getElementById('consistencyCheckBody');
								consistencyCheckBody.innerHTML = '';

								const weights = [];
								const eigenvalues = [];
								const totals = Array(5).fill(0);

								for (let row = 1; row <= 5; row++) {
									let weight = 0;
									for (let col = 1; col <= 5; col++) {
										const valueField = form.querySelector(`input[name="c${row}_c${col}"]`);
										const totalField = form.querySelector(`input[name="total_c${col}"]`);
										if (valueField && totalField) {
											weight += parseFloat(valueField.value) / parseFloat(totalField.value);
										}
									}
									weight = weight / 5;
									weights.push(weight);

									const eigenvalue = weight * parseFloat(form.querySelector(`input[name="total_c${row}"]`).value);
									eigenvalues.push(eigenvalue);
								}

								for (let row = 0; row < weights.length; row++) {
									const tr = document.createElement('tr');
									let td = document.createElement('td');
									td.textContent = weights[row].toFixed(6);
									tr.appendChild(td);

									td = document.createElement('td');
									td.textContent = eigenvalues[row].toFixed(6);
									tr.appendChild(td);

									consistencyCheckBody.appendChild(tr);
								}

								const tValue = eigenvalues.reduce((a, b) => a + b, 0);
								const ciValue = (tValue - 5) / 4;
								const crValue = ciValue / 1.12;

								document.getElementById('t-value').textContent = tValue.toFixed(6);
								document.getElementById('ci-value').textContent = ciValue.toFixed(6);
								document.getElementById('cr-value').textContent = crValue.toFixed(6);

								// Consistency Check Message
								const consistencyMessage = document.createElement('div');
								consistencyMessage.id = 'consistencyMessage';
								consistencyMessage.style.fontWeight = 'bold';
								consistencyMessage.style.marginTop = '10px';

								if (crValue < 0.1) {
									consistencyMessage.textContent = 'Konsisten';
									consistencyMessage.style.color = 'green';
								} else {
									consistencyMessage.textContent = 'Tidak Konsisten';
									consistencyMessage.style.color = 'red';
								}

								const existingMessage = document.getElementById('consistencyMessage');
								if (existingMessage) {
									existingMessage.remove();
								}

								document.getElementById('consistencyCheck').appendChild(consistencyMessage);
								document.getElementById('consistencyCheck').style.display = 'block';
							}

							function calculateRating() {
								const form = document.getElementById('calculateRating');

								// Define criteria and values
								const criteria = ['rating', 'harga', 'fasilitas', 'checkup', 'ket_softlen'];
								const values = {
									rating: {
										harga: 1,
										fasilitas: 1,
										checkup: 1,
										ket_softlen: 1
									},
									harga: {
										rating: 1,
										fasilitas: 1,
										checkup: 1,
										ket_softlen: 1.666666667
									},
									fasilitas: {
										rating: 1,
										harga: 1,
										checkup: 1,
										ket_softlen: 1.666666667
									},
									checkup: {
										rating: 1,
										harga: 1,
										fasilitas: 1,
										ket_softlen: 1.666666667
									},
									ket_softlen: {
										rating: 0.6,
										harga: 0.6,
										fasilitas: 0.6,
										checkup: 0.6
									}
								};

								// Calculate white cells (matrix values)
								criteria.forEach(row => {
									criteria.forEach(col => {
										if (row !== col) {
											const inputCell = form.querySelector(`input[name="${row}_${col}"]`);
											if (inputCell) {
												inputCell.value = values[row][col];
												const resultCell = form.querySelector(`input[name="${col}_${row}"]`);
												if (resultCell) {
													resultCell.value = (1 / values[row][col]).toFixed(9);
												}
											}
										}
									});
								});

								// Calculate total for each row
								const totals = criteria.map(row => {
									let sum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											sum += parseFloat(input.value);
										}
									});
									return sum;
								});

								// Calculate normalized totals (sum of each row divided by the sum of all values in that row)
								criteria.forEach((row, rowIndex) => {
									let rowSum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											rowSum += parseFloat(input.value);
										}
									});
									const totalInput = form.querySelector(`input[name="total_${row}"]`);
									if (totalInput) {
										totalInput.value = (rowSum / rowSum).toFixed(9); // This should always be 1, but let's keep it for structure
									}

									const normInput = form.querySelector(`input[name="normalisasi_${row}"]`);
									if (normInput) {
										normInput.value = (totals[rowIndex] / totals.reduce((acc, val) => acc + val, 0)).toFixed(10);
									}
								});

								document.getElementById('calculateRating').style.display = 'block';
							}

							function calculateHarga() {
								const form = document.getElementById('calculateHarga');

								// Define criteria and values
								const criteria = ['rating', 'harga', 'fasilitas', 'checkup', 'ket_softlen'];
								const values = {
									rating: {
										harga: 0.5,
										fasilitas: 0.5,
										checkup: 0.75,
										ket_softlen: 1.25
									},
									harga: {
										rating: 2,
										fasilitas: 1,
										checkup: 1.5,
										ket_softlen: 2.5
									},
									fasilitas: {
										rating: 2,
										harga: 1,
										checkup: 1.5,
										ket_softlen: 2.5
									},
									checkup: {
										rating: 1.333333333,
										harga: 0.6666666667,
										fasilitas: 0.6666666667,
										ket_softlen: 1.666666667
									},
									ket_softlen: {
										rating: 0.8,
										harga: 0.4,
										fasilitas: 0.4,
										checkup: 0.6
									}
								};

								// Calculate white cells (matrix values)
								criteria.forEach(row => {
									criteria.forEach(col => {
										if (row !== col) {
											const inputCell = form.querySelector(`input[name="${row}_${col}"]`);
											if (inputCell) {
												inputCell.value = values[row][col];
												const resultCell = form.querySelector(`input[name="${col}_${row}"]`);
												if (resultCell) {
													resultCell.value = (1 / values[row][col]).toFixed(9);
												}
											}
										}
									});
								});

								// Calculate totals based on the sum of each column
								const totals = criteria.map(col => {
									return criteria.reduce((sum, row) => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											return sum + parseFloat(input.value);
										}
										return sum;
									}, 0);
								});

								// Calculate normalization values
								criteria.forEach((row, rowIndex) => {
									let rowSum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											rowSum += parseFloat(input.value);
										}
									});

									// Set normalized total values for each criterion
									const totalInput = form.querySelector(`input[name="total_${row}"]`);
									if (totalInput) {
										totalInput.value = (rowSum).toFixed(10);
									}

									// Set normalization values for each criterion
									const normInput = form.querySelector(`input[name="normalisasi_${row}"]`);
									if (normInput) {
										normInput.value = (rowSum / totals.reduce((acc, val) => acc + val, 0)).toFixed(10);
									}
								});

								document.getElementById('calculateHarga').style.display = 'block';
							}

							function calculateFasilitas() {
								const form = document.getElementById('calculateFasilitas');

								// Define criteria and values
								const criteria = ['rating', 'harga', 'fasilitas', 'checkup', 'ket_softlen'];
								const values = {
									rating: {
										harga: 1,
										fasilitas: 1.5,
										checkup: 1,
										ket_softlen: 1
									},
									harga: {
										rating: 1,
										fasilitas: 1.5,
										checkup: 1,
										ket_softlen: 1
									},
									fasilitas: {
										rating: 0.6666666667,
										harga: 0.6666666667,
										checkup: 1,
										ket_softlen: 0.6666666667
									},
									checkup: {
										rating: 1,
										harga: 1,
										fasilitas: 1.5,
										ket_softlen: 1
									},
									ket_softlen: {
										rating: 1,
										harga: 1,
										fasilitas: 1.5,
										checkup: 1
									}
								};

								// Set matrix values for all combinations
								criteria.forEach(row => {
									criteria.forEach(col => {
										if (row !== col) {
											const inputCell = form.querySelector(`input[name="${row}_${col}"]`);
											if (inputCell) {
												inputCell.value = values[row][col];
												const resultCell = form.querySelector(`input[name="${col}_${row}"]`);
												if (resultCell) {
													resultCell.value = (1 / values[row][col]).toFixed(9);
												}
											}
										}
									});
								});

								// Calculate totals based on the sum of each column
								const totals = criteria.map(col => {
									return criteria.reduce((sum, row) => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											return sum + parseFloat(input.value);
										}
										return sum;
									}, 0);
								});

								// Calculate normalization values
								criteria.forEach((row, rowIndex) => {
									let rowSum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											rowSum += parseFloat(input.value);
										}
									});

									// Set normalized total values for each criterion
									const totalInput = form.querySelector(`input[name="total_${row}"]`);
									if (totalInput) {
										totalInput.value = (rowSum).toFixed(10);
									}

									// Set normalization values for each criterion
									const normInput = form.querySelector(`input[name="normalisasi_${row}"]`);
									if (normInput) {
										normInput.value = (rowSum / totals.reduce((acc, val) => acc + val, 0)).toFixed(10);
									}
								});

								document.getElementById('calculateFasilitas').style.display = 'block';
							}

							function calculateCheckup() {
								const form = document.getElementById('calculateCheckup'); // Adjust if the form ID is different

								// Define criteria and values
								const criteria = ['rating', 'harga', 'fasilitas', 'checkup', 'ket_softlen'];
								const values = {
									rating: {
										harga: 1,
										fasilitas: 1,
										checkup: 2,
										ket_softlen: 1
									},
									harga: {
										rating: 1,
										fasilitas: 1,
										checkup: 2,
										ket_softlen: 1
									},
									fasilitas: {
										rating: 1,
										harga: 1,
										checkup: 2,
										ket_softlen: 1
									},
									checkup: {
										rating: 0.5,
										harga: 0.5,
										fasilitas: 0.5,
										ket_softlen: 0.5
									},
									ket_softlen: {
										rating: 1,
										harga: 1,
										fasilitas: 1,
										checkup: 2
									}
								};

								// Set matrix values for all combinations
								criteria.forEach(row => {
									criteria.forEach(col => {
										if (row !== col) {
											const inputCell = form.querySelector(`input[name="${row}_${col}"]`);
											if (inputCell) {
												inputCell.value = values[row][col];
												const resultCell = form.querySelector(`input[name="${col}_${row}"]`);
												if (resultCell) {
													resultCell.value = (1 / values[row][col]).toFixed(9);
												}
											}
										}
									});
								});

								// Calculate totals based on the sum of each column
								const totals = criteria.map(col => {
									return criteria.reduce((sum, row) => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											return sum + parseFloat(input.value);
										}
										return sum;
									}, 0);
								});

								// Calculate normalization values
								criteria.forEach((row, rowIndex) => {
									let rowSum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											rowSum += parseFloat(input.value);
										}
									});

									// Set total values for each criterion
									const totalInput = form.querySelector(`input[name="total_${row}"]`);
									if (totalInput) {
										totalInput.value = (rowSum).toFixed(10);
									}

									// Set normalization values for each criterion
									const normInput = form.querySelector(`input[name="normalisasi_${row}"]`);
									if (normInput) {
										normInput.value = (rowSum / totals.reduce((acc, val) => acc + val, 0)).toFixed(10);
									}
								});

								document.getElementById('calculateCheckup').style.display = 'block';
							}

							function calculateSoft() {
								const form = document.getElementById('calculateSoft'); // Adjust if the form ID is different

								// Define criteria and values
								const criteria = ['rating', 'harga', 'fasilitas', 'checkup', 'ket_softlen'];
								const values = {
									rating: {
										harga: 1,
										fasilitas: 2,
										checkup: 2,
										ket_softlen: 1
									},
									harga: {
										rating: 1,
										fasilitas: 2,
										checkup: 2,
										ket_softlen: 1
									},
									fasilitas: {
										rating: 0.5,
										harga: 0.5,
										checkup: 1,
										ket_softlen: 0.5
									},
									checkup: {
										rating: 0.5,
										harga: 0.5,
										fasilitas: 1,
										ket_softlen: 0.5
									},
									ket_softlen: {
										rating: 1,
										harga: 1,
										fasilitas: 2,
										checkup: 2
									}
								};

								// Set matrix values for all combinations
								criteria.forEach(row => {
									criteria.forEach(col => {
										if (row !== col) {
											const inputCell = form.querySelector(`input[name="${row}_${col}"]`);
											if (inputCell) {
												inputCell.value = values[row][col];
												const resultCell = form.querySelector(`input[name="${col}_${row}"]`);
												if (resultCell) {
													resultCell.value = (1 / values[row][col]).toFixed(9);
												}
											}
										}
									});
								});

								// Calculate totals based on the sum of each column
								const totals = criteria.map(col => {
									return criteria.reduce((sum, row) => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											return sum + parseFloat(input.value);
										}
										return sum;
									}, 0);
								});

								// Calculate normalization values
								const normalizations = criteria.map((row, index) => {
									let rowSum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											rowSum += parseFloat(input.value);
										}
									});
									return rowSum / totals.reduce((acc, val) => acc + val, 0);
								});

								// Update the form inputs with calculated totals and normalizations
								criteria.forEach((row, index) => {
									let rowSum = 0;
									criteria.forEach(col => {
										const input = form.querySelector(`input[name="${row}_${col}"]`);
										if (input && input.value !== '') {
											rowSum += parseFloat(input.value);
										}
									});

									// Set total values for each criterion
									const totalInput = form.querySelector(`input[name="total_${row}"]`);
									if (totalInput) {
										totalInput.value = (rowSum).toFixed(10);
									}

									// Set normalization values for each criterion
									const normInput = form.querySelector(`input[name="normalisasi_${row}"]`);
									if (normInput) {
										normInput.value = (rowSum / totals.reduce((acc, val) => acc + val, 0)).toFixed(10);
									}
								});

								// Display the form
								document.getElementById('calculateSoft').style.display = 'block';
							}

							function calculateRanking() {
								const form = document.getElementById('calculateRankingForm');
								const rows = form.querySelectorAll('tbody tr');

								rows.forEach(function(row, index) {
									const ratingGmaps = parseFloat(row.querySelector('input[name^="rating_gmaps"]').value);
									const harga = parseFloat(row.querySelector('input[name^="harga"]').value);
									const fasilitas = parseFloat(row.querySelector('input[name^="fasilitas"]').value);
									const layananCheckup = parseFloat(row.querySelector('input[name^="layanan_checkup"]').value);
									const ketersediaanSoftlen = parseFloat(row.querySelector('input[name^="ketersediaan_softlen"]').value);

									// Assuming weights are available as inputs in each row with specific names like bobot_a1, bobot_a2, etc.
									const bobotA1 = parseFloat(document.querySelector('input[name="bobot_a1"]').value);
									const bobotA2 = parseFloat(document.querySelector('input[name="bobot_a2"]').value);
									const bobotA3 = parseFloat(document.querySelector('input[name="bobot_a3"]').value);
									const bobotA4 = parseFloat(document.querySelector('input[name="bobot_a4"]').value);
									const bobotA5 = parseFloat(document.querySelector('input[name="bobot_a5"]').value);

									const hasil = (ratingGmaps * bobotA1) + (harga * bobotA2) + (fasilitas * bobotA3) + (layananCheckup * bobotA4) + (ketersediaanSoftlen * bobotA5);
									row.querySelector('input[name^="hasil_a"]').value = hasil.toFixed(10);
								});

								// Show the result table and populate the results
								const resultTable = document.getElementById('resultTable');
								resultTable.style.display = 'table';

								// Populate results in the result table
								const resultRows = resultTable.querySelectorAll('tbody tr');
								resultRows.forEach(function(row, index) {
									const hasilValue = rows[index].querySelector('input[name^="hasil_a"]').value;
									row.querySelector('td[id^="result_a"]').textContent = hasilValue;
								});
							}

						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection