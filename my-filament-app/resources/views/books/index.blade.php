@extends('layout')

@section('content')
    <h1 class="text-4xl font-bold mb-6 text-center text-emerald-800">📘 My Book Library</h1>

    <div class="flex justify-end mb-6">
        <a href="{{ route('books.create') }}" class="bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-600 hover:to-green-700 text-white font-semibold px-6 py-2 rounded-full shadow-lg transition">
            ➕ Add New Book
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-300 text-green-800 rounded-lg shadow">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow rounded-xl overflow-hidden">
            <thead class="bg-gradient-to-r from-green-500 to-emerald-600 text-white">
                <tr>
                    <th class="text-left px-6 py-3 text-sm uppercase font-semibold tracking-wider">Title</th>
                    <th class="text-left px-6 py-3 text-sm uppercase font-semibold tracking-wider">Author</th>
                    <th class="text-left px-6 py-3 text-sm uppercase font-semibold tracking-wider">Genre</th>
                    <th class="text-left px-6 py-3 text-sm uppercase font-semibold tracking-wider">Year</th>
                    <th class="text-left px-6 py-3 text-sm uppercase font-semibold tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $book)
                    <tr class="border-b hover:bg-green-50 transition">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->author }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->genre }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $book->published_year }}</td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
                            <a href="{{ route('books.show', $book) }}" class="text-blue-600 hover:text-blue-800 font-medium">View</a>
                            <a href="{{ route('books.edit', $book) }}" class="text-yellow-600 hover:text-yellow-800 font-medium">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('Delete this book?')" class="text-red-600 hover:text-red-800 font-medium">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center px-6 py-4 text-gray-500">No books found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
