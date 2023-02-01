@foreach ($mentors as $mentor)
<div class=" mx-auto py-12">
    <div class="flex flex-wrap -mx-6">
      <div class="w-full md:w-1/3 sm:w-1/2 px-6 py-4 animate-fade">
        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center justify-center">
          <img class="w-32 h-32 rounded-full mx-auto mb-4" src="{{ asset('images/'.$mentor->photo) }}" alt="{{ $mentor->name }}">
          <h2 class="text-lg font-medium mb-2">{{ $mentor->name }}</h2>
          <p class="text-gray-600 mb-4">{{ $mentor->profession }}</p>
          <p class="text-gray-600">{{ $mentor->description }}</p>
        </div>
      </div>
    </div>
</div>
@endforeach