@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel">
				<div class="panel-body">
					<h2>Pengertian Metode AHP</h2>
					<p>Analytic Hierarchy Process (AHP) adalah suatu metode untuk mengambil keputusan dengan cara menyusun hirarki kriteria, membandingkan pasangan elemen secara berpasangan, dan menentukan bobot untuk setiap elemen dalam hirarki tersebut. AHP digunakan untuk membantu dalam membuat keputusan yang kompleks dengan mempertimbangkan berbagai aspek dan faktor.</p>

					<h2>Skala Kepentingan 1-9 dalam AHP</h2>
					<p>Dalam metode AHP, nilai kepentingan digunakan untuk membandingkan elemen-elemen secara berpasangan. Nilai-nilai ini berkisar dari 1 hingga 9, dengan makna sebagai berikut:</p>

					<ul class="importance-scale">
						<li><i></i><strong>1</strong> - Sama pentingnya</li>
						<li><i></i><strong>2</strong> - Nilai di antara 1 dan 3</li>
						<li><i></i><strong>3</strong> - Sedikit lebih penting</li>
						<li><i></i><strong>4</strong> - Nilai di antara 3 dan 5</li>
						<li><i></i><strong>5</strong> - Lebih penting</li>
						<li><i></i><strong>6</strong> - Nilai di antara 5 dan 7</li>
						<li><i></i><strong>7</strong> - Sangat penting</li>
						<li><i></i><strong>8</strong> - Nilai di antara 7 dan 9</li>
						<li><i></i><strong>9</strong> - Mutlak penting</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection