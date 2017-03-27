<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset ="UTF-8">
		<title>Forms</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<form action ="" method="post" class="form-horizontal">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type ="text" class="form-control" name="nama" @if(isset($nama)) value={{ $nama }} @endif>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type ="email" class="form-control" name="email" @if(isset($email)) value={{ $email }} @endif>
						</div>
						<div class="form-group">
							<b>Jenis Kelamin</b>
							<div class="radio">
								<label>
									<input type="radio" name="gender" value="M" @if(isset($gender) && $gender=="M") checked @endif>Laki-Laki <br>
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="gender" value="F" @if(isset($gender) && $gender=="F") checked @endif>Perempuan
								</label>
							</div>
						</div>
						<div class="form-group">
							<b>Senjata Pilihan</b>
							<br>
							<small>Bisa pilih lebih dari satu</small>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="weapon[]" value="Muramasa" @if(isset($weapon) && in_array("Muramasa", $weapon)) checked @endif>Muramasa
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="weapon[]" value="Masamune" @if(isset($weapon) && in_array("Masamune", $weapon)) checked @endif>Masamune
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="weapon[]" value="Sangeyasha" @if(isset($weapon) && in_array("Sangeyasha", $weapon)) checked @endif>Sangeyasha
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="weapon[]" value="Chunchunmaru" @if(isset($weapon) && in_array("Chunchunmaru", $weapon)) checked @endif>Chunchunmaru
								</label>
							</div>
						</div>
						<button type ="submit" class="btn btn-warning">Submit</button>
					</form>
					<br>
					@if(isset($nama)) Halo, {{ $nama }} @endif
					<br>
					@if(isset($email)) Email kamu {{ $email }} @endif
					<br>
					@if(isset($gender)) Kamu seorang
						@if($gender=="M")Laki-Laki
						@elseif($gender=="F")Perempuan
						@endif
					@endif
					<br>
					@if(isset($weapon))
					Senjata Pilihan:
					<br>
						@foreach ($weapon as $wp)
						-> {{ $wp }} <br>
						@endforeach
					@endif
					<br>
				</div>
			</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</body>
</html>