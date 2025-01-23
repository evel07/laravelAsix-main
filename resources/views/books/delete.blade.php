@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="bg-red-500 shadow-md rounded-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4 text-white">Delete Book</h2>
                <p class="text-white mb-4">Are you sure you want to delete the book: <strong>{{ $book->name }}</strong>?</p>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="flex justify-end">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded">Delete</button>
                    <a href="{{ route('books.index') }}" class="ml-2 bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
