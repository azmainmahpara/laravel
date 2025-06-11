@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Title:</label>
            <input name="title" value="{{ $book->title }}" class="border w-full" required>
        </div>
        <div>
            <label>Author:</label>
            <input name="author" value="{{ $book->author }}" class="border w-full" required>
        </div>
        <div>
            <label>Genre:</label>
            <input name="genre" value="{{ $book->genre }}" class="border w-full" required>
        </div>
        <div>
            <label>Published Year:</label>
            <input name="published_year" value="{{ $book->published_year }}" class="border w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Update</button>
    </form>
@endsection
