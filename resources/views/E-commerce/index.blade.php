@extends('components.parent')
@section('content')
	<div class="d-flex my-4">
		<h1 class="text-center text-green-300 text-[30px] font-bold">Product List</h1>
	</div>
    <div class="mb-4">
        <a href="{{ route('ec.create') }}" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Tambahkan Product</a>
    </div>
    <div class="flex flex-wrap bg-amber-100 justify-center">
    @foreach ($listB as $b)
        <div class="px-4 py-4 mb-8">
            <div class="w-72 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg h-[300px] w-full"
                    src="{{ asset($b['foto']) }}" />
                <div class="px-5 py-3 space-y-2">
                    <h3 class="text-lg">{{ $b['nama'] }}</h3>
                    <div class="space-x-2">
                        <span class="px-3 py-0.5 border border-blue-500 text-[11px] text-blue-500">Free Ship</span>
                        <span class="px-3 py-0.5 border border-blue-500 text-[11px] text-blue-500">7 Day Return</span>
                    </div>
                    <p class="space-x-2">
                        <span class="text-2xl font-semibold">{{ $b['harga'] }}</span>
                        <span class="text-sm line-through text-gray-500">{{ $b['harga'] + $b['harga']/10 }}</span>
                        <span class="text-sm text-red-700">{{ $b['diskon'] }}% off</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="{{ route('ec.show', $b->id) }}"
                            class="px-4 py-2 bg-green-600 hover:bg-green-400 text-center text-sm text-white rounded duration-300">
                            Lihat Detail</a>

                        <a href="#" title="Add to Favorites"
                            class="text-2xl text-gray-300 hover:text-red-500 duration-300">&hearts;</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('ec.edit', $b->id) }}" class="py-[5px] px-[10px] rounded-lg bg-blue-400 text-white">Edit Product</a>
                <a href="{{ route('ec.destroy', $b->id) }}" class="py-[5px] px-[10px] rounded-lg bg-red-500 text-white">Hapus Product</a>
            </div>
        </div>     
    @endforeach
    </div>
@endsection