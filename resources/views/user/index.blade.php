@php

    $users = [
            [
            'nama' => "asd",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asd", 
            'role' => "user",
            ],
            [
            'nama' => "asdf",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => false,
            'alamat' => "asdf", 
            'role' => "admin",
            ],
            [
            'nama' => "asdc",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdc", 
            'role' => "admin",
            ],
            [
            'nama' => "asdg",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdg", 
            'role' => "user",
            ],
            [
            'nama' => "asde",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => false,
            'alamat' => "asde", 
            'role' => "user",
            ],
            [
            'nama' => "asdr",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdr", 
            'role' => "admin",
            ],
            [
            'nama' => "asdv",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdv", 
            'role' => "user",
            ],
            [
            'nama' => "asds",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => false,
            'alamat' => "asds", 
            'role' => "user",
            ],
            [
            'nama' => "asdd",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdd", 
            'role' => "admin",
            ],
            [
            'nama' => "asdde",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdde", 
            'role' => "admin",
            ],
    ];    

    $filter = [
    'active' => true,
    'role' => "admin"
    ];

@endphp
@extends('components.parent')
@section('content')
    <table class="max-w-[1000px] text-sm text-left text-gray-500 dark:text-gray-400 border-4 border-gray text-center m-auto">
        <thead class="text-xs text-white uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama
                </th>
                <th scope="col" class="py-3 px-6">
                    Foto
                </th>
                <th scope="col" class="py-3 px-6">
                    Bio
                </th>
                <th scope="col" class="py-3 px-6">
                    Aktif
                </th>
                <th scope="col" class="py-3 px-6">
                    Alamat
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Detail
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                @if ($u['role'] == $filter['role'] && $u['active'] == true)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u['nama'] }}
                        </th>
                        <th scope="row" class="py-4 px-6 w-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset($u['foto']) }}" alt="">
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class="">{!! $u['bio'] !!}</p>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($u['active']) aktif @else mati @endif
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class="">{{ $u['alamat'] }}</p>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u['role'] }}
                        </th>
                        <td class="py-4 px-6">
                            <a href="{{ route('user.show', $loop->iteration) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>


@endsection