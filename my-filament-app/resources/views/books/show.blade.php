@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Book Details</h1>

    <div class="bg-white p-6 rounded shadow">
        <p><strong>Title:</strong> {{ $book->title }}</p>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Genre:</strong> {{ $book->genre }}</p>
        <p><strong>Published Year:</strong> {{ $book->published_year }}</p>
        <p><strong>Created At:</strong> {{ $book->created_at->format('d M Y h:i A') }}</p>
    </div>

    <div class="mt-6">
        <a href="{{ route('books.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Back to List</a>
        <a href="{{ route('books.edit', $book) }}" class="bg-yellow-500 text-white px-4 py-2 rounded ml-2">Edit Book</a>
        <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
        </form>
    </div>
@endsection
