@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Title:</label>
            <input name="title" class="border w-full" required>
        </div>
        <div>
            <label>Author:</label>
            <input name="author" class="border w-full" required>
        </div>
        <div>
            <label>Genre:</label>
            <input name="genre" class="border w-full" required>
        </div>
        <div>
            <label>Published Year:</label>
            <input name="published_year" class="border w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Save</button>
    </form>
@endsection
