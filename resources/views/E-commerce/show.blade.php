@extends('components.parent')
@section('content')
    <div class="p-10  bg-amber-100">
        <div class="mb-4">
            <a href="{{ route('ec.index') }}" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Back to home</a>
        </div>
        <!--Card 1-->
        <div class=" w-full lg:max-w-full lg:flex border border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 ">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('img/' . $barang->foto) }}')" title="Mountain">
        </div>
        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <h3 class="text-lg">{{ $barang->nama }}</h3>
                <p class="space-x-2 flex items-baseline">
                    <span class="text-2xl font-semibold">{{ $barang->harga }}</span>
                    <span class="text-sm line-through text-gray-500">{{ $barang->harga + $barang->harga/10 }}</span>
                    <span class="text-sm text-red-700">{{ $barang->diskon }}% off</span>
                </p>
                </div>
                <div class="flex items-center gap-4">
                <div class="space-x-2">
                    <span class="px-3 py-0.5 border border-blue-500 text-[11px] text-blue-500">Free Ship</span>
                    <span class="px-3 py-0.5 border border-blue-500 text-[11px] text-blue-500">7 Day Return</span>
                </div>
                <p>|</p>
                <a href="#" title="Add to Favorites" class="text-2xl text-gray-300 hover:text-red-500 duration-300">&hearts;</a>
            </div>
        </div>
        </div>
    </div>


    {{-- <div class="flex flex-wrap">
        <div class="px-4 py-4">
            <div class="w-72 bg-white drop-shadow-md rounded-lg">
                <img class="object-cover rounded-tl-lg rounded-tr-lg"
                    src="" />
                <div class="px-5 py-3 space-y-2">
                    
                    <p class="space-x-2">
                        <span class="text-2xl font-semibold">{{ $barang->harga }}</span>
                        <span class="text-sm line-through text-gray-500">{{ $barang->harga + $barang->harga/10 }}</span>
                        <span class="text-sm text-red-700">{{ $barang->diskon }} off</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="#"
                            class="px-4 py-2 bg-red-600 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                            Add to Cart</a>

                        <a href="#" title="Add to Favorites"
                            class="text-2xl text-gray-300 hover:text-red-500 duration-300">&hearts;</a>
                    </div>
                </div>
            </div>

        </div> 
    </div> --}}
@endsection