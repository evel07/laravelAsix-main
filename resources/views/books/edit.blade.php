@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-red-500 shadow-md rounded-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4 text-white">Edit Book</h2>
                <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="name" class="block text-gray-300">Nom:</label>
                        <input type="text" name="name" id="name" value="{{ $book->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-gray-300">Autor:</label>
                        <input type="text" name="author" id="author" value="{{ $book->author }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="releaseYear" class="block text-gray-300">Any de publicació:</label>
                        <input type="number" name="releaseYear" id="releaseYear" value="{{ $book->releaseYear }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="genre" class="block text-gray-300">Gènere:</label>
                        <input type="text" name="genre" id="genre" value="{{ $book->genre }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-300">Preu:</label>
                        <input type="number" step="0.01" name="price" id="price" value="{{ $book->price }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Update Book</button>
                        <a href="{{ route('books.index') }}" class="ml-2 bg-indigo-500 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
