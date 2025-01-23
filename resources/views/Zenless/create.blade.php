@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Add New Zenless</h2>
                <form action="{{ route('Zenless.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Nom:</label>
                        <input type="text" name="name" id="name" placeholder="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="class" class="block text-gray-700">Classe:</label>
                        <input type="text" name="class" id="class" placeholder="class" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="abilities" class="block text-gray-700">Abilitats:</label>
                        <input type="number" name="abilities" id="abilities" placeholder="abilities" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="age" class="block text-gray-700">Edat:</label>
                        <input type="text" name="age" id="age" placeholder="age" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="role" class="block text-gray-700">Rol:</label>
                        <input type="number" name="role" id="role" placeholder="role" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Add Zenless</button>
                        <a href="{{ route('Zenless.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
