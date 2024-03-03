@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
    <!-- chart  -->
    <div class="m-2 shadow-md">
        <h2 class="text-xl p-2">Bar Chart</h2>
        <div id="chart" class="w-full "></div>
    </div>
    <!-- //user list -->
    <div class="overflow-x-auto m-2 shadow-md">
        <table class="w-full">
            <thead class="bg-gray-100 rounded-sm">
                <tr>
                    <th class="text-left">Avatar</th>
                    <th class="text-left">User Name</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Phone</th>
                    <th class="text-left">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                            alt="">
                    </td>
                    <td>Rabiul Islam</td>
                    <td>rir.cse.71@gmail.com</td>
                    <td>+8801750009149</td>
                    <td><span
                            class="bg-green-50 text-green-700 px-3 py-1 ring-1 ring-green-200 text-xs rounded-md">Active</span>
                    </td>
                    <td>
                        <div class="flex justify-between gap-1">
                            <i title="Edit"
                                class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                            <i title="View"
                                class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                            <i title="Delete"
                                class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </td>
                    <td>Rahim Mia</td>
                    <td>rahim@gmail.com</td>
                    <td>0000000000000</td>
                    <td><span
                            class="bg-red-50 text-red-700 px-3 py-1 ring-1 ring-red-200 text-xs rounded-md">Deleted</span>
                    </td>
                    <td>
                        <div class="flex justify-between gap-1">
                            <i title="Edit"
                                class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                            <i title="View"
                                class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                            <i title="Delete"
                                class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </td>
                    <td>Kuddus Ali</td>
                    <td>kuddus@gmail.com</td>
                    <td>+1111111111111111</td>
                    <td><span
                            class="bg-yellow-50 text-yellow-700 px-3 py-1 ring-1 ring-yellow-200 text-xs rounded-md">In
                            Active</span></td>
                    <td>
                        <div class="flex justify-between gap-1">
                            <i title="Edit"
                                class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                            <i title="View"
                                class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                            <i title="Delete"
                                class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </td>
                    <td>Taheri</td>
                    <td>taheri@gmail.com</td>
                    <td>+67676767676767</td>
                    <td><span
                            class="bg-yellow-50 text-yellow-700 px-3 py-1 ring-1 ring-yellow-200 text-xs rounded-md">In
                            Active</span></td>
                    <td>
                        <div class="flex justify-between gap-1">
                            <i title="Edit"
                                class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                            <i title="View"
                                class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                            <i title="Delete"
                                class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </td>
                    <td>Akkas Ali</td>
                    <td>akkas@gmail.com</td>
                    <td>+45454545454565</td>
                    <td><span
                            class="bg-yellow-50 text-yellow-700 px-3 py-1 ring-1 ring-yellow-200 text-xs rounded-md">In
                            Active</span></td>
                    <td>
                        <div class="flex justify-between gap-1">
                            <i title="Edit"
                                class="fa-solid fa-pencil p-1 text-green-500 rounded-full cursor-pointer"></i>
                            <i title="View"
                                class="fa-solid fa-eye p-1 text-violet-500 rounded-full cursor-pointer"></i>
                            <i title="Delete"
                                class="fa-solid fa-trash p-1 text-red-500 rounded-full cursor-pointer"></i>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
