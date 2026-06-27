@extends('layouts.app')

@section('title', 'Create Todo')

@section('content')
<div class="max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Create New Todo</h2>

    <div class="bg-white rounded-lg shadow p-6">
        <form action="{{ route('todos.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text"
                       name="title"
                       id="title"
                       value="{{ old('title') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 @error('title') border-red-500 @enderror"
                       required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea name="description"
                          id="description"
                          rows="4"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create Todo
                </button>
                <a href="{{ route('todos.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
