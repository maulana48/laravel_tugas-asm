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

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    Role
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                @if ($u['role'] == $filter['role'] && $u['active'] == true)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $u['nama'] ?>
                        </th>
                        <th scope="row" class="py-4 px-6 w-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="{{ asset($u['foto']) }}" alt="">
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class=""><?= $u['bio'] ?></p>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $u['active'] ?>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $u['role'] ?>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="py-4 px-6">
                            <a href="{{ route('user.show', $loop->iteration) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

@endsection