@php
    $users = [
            [
            'nama' => "asd",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore fugit dolores est doloremque, inventore
            modi aspernatur, culpa, perferendis minus delectus ut cum itaque iure nobis sunt! Eius, sunt dolorem?",
            'active' => true,
            'role' => "user",
            ],
            [
            'nama' => "asdf",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus magnam libero ut! Corporis aliquid labore
            praesentium nostrum. Fugit fuga consequatur officiis dolore eius fugiat consequuntur voluptate, quo nesciunt porro
            labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laboriosam veritatis quibusdam dolorum ad quaerat
            repudiandae, fuga illum rerum velit consequuntur, rem iure fugit molestiae qui eos quisquam beatae earum.",
            'active' => false,
            'role' => "admin",
            ],
            [
            'nama' => "asdc",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id a corporis cumque pariatur! Laboriosam eaque
            facere cum eveniet neque unde repellendus repellat fugit. Minus delectus quaerat similique accusamus enim?",
            'active' => true,
            'role' => "admin",
            ],
            [
            'nama' => "asdg",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore fugit dolores est doloremque, inventore
            modi aspernatur, culpa, perferendis minus delectus ut cum itaque iure nobis sunt! Eius, sunt dolorem?",
            'active' => true,
            'role' => "user",
            ],
            [
            'nama' => "asde",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus magnam libero ut! Corporis aliquid labore
            praesentium nostrum. Fugit fuga consequatur officiis dolore eius fugiat consequuntur voluptate, quo nesciunt porro
            labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laboriosam veritatis quibusdam dolorum ad quaerat
            repudiandae, fuga illum rerum velit consequuntur, rem iure fugit molestiae qui eos quisquam beatae earum.",
            'active' => false,
            'role' => "user",
            ],
            [
            'nama' => "asdr",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id a corporis cumque pariatur! Laboriosam eaque
            facere cum eveniet neque unde repellendus repellat fugit. Minus delectus quaerat similique accusamus enim?",
            'active' => true,
            'role' => "admin",
            ],
            [
            'nama' => "asdv",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore fugit dolores est doloremque, inventore
            modi aspernatur, culpa, perferendis minus delectus ut cum itaque iure nobis sunt! Eius, sunt dolorem?",
            'active' => true,
            'role' => "user",
            ],
            [
            'nama' => "asds",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus magnam libero ut! Corporis aliquid labore
            praesentium nostrum. Fugit fuga consequatur officiis dolore eius fugiat consequuntur voluptate, quo nesciunt porro
            labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laboriosam veritatis quibusdam dolorum ad quaerat
            repudiandae, fuga illum rerum velit consequuntur, rem iure fugit molestiae qui eos quisquam beatae earum.",
            'active' => false,
            'role' => "user",
            ],
            [
            'nama' => "asdd",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id a corporis cumque pariatur! Laboriosam eaque
            facere cum eveniet neque unde repellendus repellat fugit. Minus delectus quaerat similique accusamus enim?",
            'active' => true,
            'role' => "admin",
            ],
            [
            'nama' => "asdde",
            'foto' => '/img/error.png',
            'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure id a corporis cumque pariatur! Laboriosam eaque
            facere cum eveniet neque unde repellendus repellat fugit. Minus delectus quaerat similique accusamus enim?",
            'active' => true,
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

    <div class="p-10">
        <!--Card 1-->
        <div class=" w-full lg:max-w-full lg:flex border border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 ">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset($users[$id]['foto']) }}')" title="Mountain">
        </div>
        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $users[$id]['nama'] }}</div>
                <p class="text-gray-700 text-base">{{ $users[$id]['bio'] }}</p>
                </div>
                <div class="flex items-center gap-4">
                <p class="text-gray-900 leading-none">@if ($users[$id]['active']) aktif @endif</p>
                <p>|</p>
                <div class="text-sm">
                    <p class="text-gray-600">{{ $users[$id]['role'] }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection