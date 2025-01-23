@extends('layouts.layout')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #000000, #ff0000);
            color: white;
        }

        h2 {
            color: white;
        }

        table {
            color: white;
        }

        .bg-white {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .hover\\:bg-gray-100:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .bg-gray-50 {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .text-gray-500 {
            color: #d1d5db;
        }

        .text-gray-900 {
            color: white;
        }
    </style>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">CRUD de Zenless Zone Zero</h2>
                <div class="flex justify-end mb-4">
                    <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="{{ route('Zenless.create') }}">Add Zenless</a>
                </div>
                <div class="overflow-x-auto">
                    <div class="hidden md:block">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Class</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Abilities</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($zenless as $zzz)
                                <tr class="hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm text-gray-900"><a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('Zenless.show', $zzz->id) }}">{{ $zzz->id }}</a></td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $zzz->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $zzz->class }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $zzz->abilities }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $zzz->age }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $zzz->role }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-2">
                                        <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('Zenless.edit', $zzz->id) }}">Edit</a>
                                        <a class="ml-2 bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('Zenless.delete', $zzz->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">No data in the database!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="block md:hidden">
                        <ul class="divide-y divide-gray-200">
                            @forelse($zenless as $zzz)
                                <li class="py-4 flex flex-col">
                                    <div class="flex justify-between items-center">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('Zenless.show', $zzz->id) }}">ID: {{ $zzz->id }}</a>
                                        <div class="flex space-x-2">
                                            <a class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('Zenless.edit', $zzz->id) }}">Edit</a>
                                            <a class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded" href="{{ route('Zenless.delete', $zzz->id) }}">Delete</a>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-900"><strong>Name:</strong> {{ $zzz->name }}</p>
                                        <p class="text-sm text-gray-900"><strong>Class:</strong> {{ $zzz->class }}</p>
                                        <p class="text-sm text-gray-900"><strong>Abilities:</strong> {{ $zzz->abilities }}</p>
                                        <p class="text-sm text-gray-900"><strong>Age:</strong> {{ $zzz->age }}</p>
                                        <p class="text-sm text-gray-900"><strong>Role:</strong> {{ $zzz->role }}</p>
                                    </div>
                                </li>
                            @empty
                                <li class="py-4 text-center text-sm text-gray-500">No data in the database!</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
