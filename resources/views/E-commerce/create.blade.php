@extends('components.parent')
@section('content')
    
	<div class="d-flex my-4">
		<h1 class="h2">Create New Siswa</h1>
	</div>
    <div class="mb-4">
        <a href="{{ route('ec.index') }}" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Back to home</a>
    </div>
	<div class="col-lg-8 mt-2">
		<form action="{{ route('ec.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		  <div class="mb-3">
			<label for="nama" class="form-label mr-4">Nama</label>
			<input type="text" class="form-control rounded-xl @error('nama') is-invalid @enderror" name="nama" id="nama" required autofocus value="{{ old('nama') }}">
			@error('nama')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		  </div>
		  <div class="mb-3 d-none">
			  <label for="harga" class="form-label mr-4">Harga</label>
			  <input type="number" class="form-control rounded-xl @error('harga') is-invalid @enderror form-siswa" name="harga" id="harga" autofocus value="{{ old('harga') }}">
			  @error('harga')
				  <div class="text-red">
					  {{ $message }}
				  </div>
			  @enderror
		  </div>
		  <div class="mb-3">
			<label for="diskon" class="form-label mr-4">Diskon</label>
			<input type="number" class="form-control rounded-xl @error('diskon') is-invalid @enderror" name="diskon" id="diskon" required autofocus value="{{ old('diskon') }}">
			@error('diskon')
				<div class="invalid-feedback">
					{{ $message }}
				</div>
			@enderror
		  </div>
		  <div class="mb-3">
			<label for="foto" class="form-label mr-4">Tambahkan Foto</label>
			<input type="file" name="foto" id="foto">
		  </div>
			<div class="mb-4">
				<button type="submit" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Submit</button>
			</div>
		</form>
	</div>


    
	<script>
        const role = document.querySelector("#role");
        const none = document.querySelectorAll(".d-none");
        const formSiswa = document.querySelectorAll(".form-siswa");

		role.addEventListener('change', (e) => {
			if(e.target.value == 4){
				[].forEach.call(none, function(e) {
					e.classList.remove("d-none");
					// let a = e.children[1].classList.add("")
					// console.log(e);
					// console.log();
				});
  			// classList.remove("d-none");
			}
			console.log(e.target.value)
		});


        role.addEventListener("keyup", function() {
            let preslug = role.value;				// njukuk role.value
            preslug = preslug.replace(/ /g,"-");	// rplc spasi(char sebelum /g) dg "-"
            slug.value = preslug.toLowerCase();		// mengisi slug dg lowercase hasilnya
        });
		
	</script>
@endsection
    


