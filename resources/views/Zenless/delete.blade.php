@extends('layouts.layout')

@section('content')
    <div style="max-width: 700px; margin: 0 auto; margin-top: 50px;">
        <div style="background-color: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden;">
            <div style="padding: 24px; border-bottom: 1px solid #e2e8f0;">
                <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 16px;">Delete Zenless</h2>
                <p style="margin-bottom: 24px; color: #4a5568;">Segur que vols eliminar el personatge: <strong>{{ $zenless->name }}</strong>?</p>
                <form action="{{ route('Zenless.destroy', $zenless->id) }}" method="POST" style="display: flex; justify-content: flex-end; gap: 16px;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: red; color: white; padding: 10px 20px; border-radius: 5px; border: none;">Eliminar</button>
                    <a href="{{ route('Zenless.index') }}" style="background-color: gray; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Back to List</a>
                </form>
            </div>
        </div>
    </div>
@endsection
