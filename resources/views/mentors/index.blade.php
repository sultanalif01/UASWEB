<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Mentors') }}
        </h2>
    </x-slot>
    <div class="">
        <a href="{{ route('mentors.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg">Create</a>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @foreach ($mentors as $mentor)
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover object-center" src="{{ asset('images/'.$mentor->photo) }}" alt="{{ $mentor->name }}">
                        <div class="px-6 py-4">
                            <h2 class="text-lg font-medium text-gray-800 mb-2">{{ $mentor->name }}</h2>
                            <p class="text-sm text-gray-600 mb-4">{{ $mentor->profession }}</p>
                            <p class="text-gray-700 text-base">{{ $mentor->description }}</p>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('mentors.show', $mentor->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded-lg">Show</a>
                                <a href="{{ route('mentors.edit', $mentor->id) }}" class="bg-cyan-500 text-white px-4 py-2 rounded-lg">Edit</a>
                                <form action="{{ route('mentors.destroy', $mentor->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        </div>
        </x-app-layout>
