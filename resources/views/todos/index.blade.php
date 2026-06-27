@extends('layouts.app')

@section('title', 'All Todos')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-3xl font-bold text-gray-800">My Todos</h2>
    <a href="{{ route('todos.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add New Todo
    </a>
</div>

@if($todos->isEmpty())
    <div class="bg-white rounded-lg shadow p-8 text-center">
        <p class="text-gray-600 text-lg">No todos yet. Create your first one!</p>
    </div>
@else
    <div class="space-y-4">
        @foreach($todos as $todo)
            <div class="bg-white rounded-lg shadow p-6 flex items-center justify-between">
                <div class="flex items-center space-x-4 flex-1">
                    <form action="{{ route('todos.toggle', $todo) }}" method="POST">
                        @csrf
                        <input type="checkbox"
                               onchange="this.form.submit()"
                               {{ $todo->completed ? 'checked' : '' }}
                               class="w-5 h-5 text-blue-600 cursor-pointer">
                    </form>

                    <div class="flex-1">
                        <h3 class="text-lg font-semibold {{ $todo->completed ? 'line-through text-gray-500' : 'text-gray-800' }}">
                            {{ $todo->title }}
                        </h3>
                        @if($todo->description)
                            <p class="text-gray-600 mt-1 {{ $todo->completed ? 'line-through' : '' }}">
                                {{ $todo->description }}
                            </p>
                        @endif
                        <p class="text-sm text-gray-400 mt-2">
                            Created: {{ $todo->created_at->format('M d, Y') }}
                        </p>
                    </div>
                </div>

                <div class="flex space-x-2">
                    <a href="{{ route('todos.edit', $todo) }}"
                       class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection
