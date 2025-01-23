@extends('layouts.layout')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="shadow-md rounded-lg overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4 text-white">CRUD de Books</h2>
                <div class="mb-4">
                    <a href="{{ route('books.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">Add Book</a>
                </div>
                @if($books->isEmpty())
                    <p class="text-gray-300">No books found.</p>
                @else
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-white bg-gradient-to-r from-black via-red-800 to-black">
                            <thead>
                            <tr>
                                <th class="py-2 px-4 bg-blue-500 text-white">ID</th>
                                <th class="py-2 px-4">NOM</th>
                                <th class="py-2 px-4">AUTOR</th>
                                <th class="py-2 px-4">ANY DE PUBLICACIÓ</th>
                                <th class="py-2 px-4">GÈNERE</th>
                                <th class="py-2 px-4">PREU</th>
                                <th class="py-2 px-4">ACCIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                                <tr class="bg-gradient-to-r from-black via-red-800 to-black">
                                    <td class="py-2 px-4 bg-blue-100">{{ $book->id }}</td>
                                    <td class="py-2 px-4">{{ $book->name }}</td>
                                    <td class="py-2 px-4">{{ $book->author }}</td>
                                    <td class="py-2 px-4">{{ $book->releaseYear }}</td>
                                    <td class="py-2 px-4">{{ $book->genre }}</td>
                                    <td class="py-2 px-4">{{ $book->price }} €</td>
                                    <td class="py-2 px-4">
                                        <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-2 rounded">Edit</a>
                                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

<style>
    body {
        background: linear-gradient(135deg, #000000, #ff0000); /* Fons negre degradat a vermell */
        color: white;
    }

    h2 {
        color: white;
    }

    table {
        color: white;
        width: 100%;
        table-layout: auto; /* Permet a la taula ajustar-se automàticament */
        background: linear-gradient(135deg, #000000, #ff0000); /* Aplica el mateix fons que la pàgina */
    }

    th, td {
        text-align: left;
        padding: 8px;
        white-space: nowrap; /* Assegura que el contingut de la taula no es trenqui en diverses línies */
        overflow: hidden;
        text-overflow: ellipsis; /* Afegeix punts suspensius si el text és massa llarg */
    }

    th {
        background-color: #333333;
        color: white;
    }

    th.bg-blue-500 {
        background-color: #007BFF; /* Color blau per a la capçalera */
    }

    td.bg-blue-100 {
        background-color: #0056b3; /* Color blau fosc per a les cel·les */
    }

    tr {
        background: linear-gradient(135deg, #000000, #ff0000); /* Aplica el mateix fons degradat a totes les files */
    }

    tr:nth-child(even) {
        background: rgba(255, 255, 255, 0.1); /* Fons semitransparent per a files parells */
    }

    tr:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Fons semitransparent més clar al passar el ratolí */
    }

    .bg-white {
        background-color: rgba(255, 255, 255, 0.9);
    }

    .overflow-x-auto {
        overflow-x: auto;
    }
</style>
