<x-layout>
    <x-slot name="title">Create a Job</x-slot>
    <h3> Create a job </h3>

    <form action="/jobs" method="POST">
        @csrf
        <div class="mb-2">
            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
            @error('title')
                <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-2">
            <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
            @error('description')
                <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
            @enderror
        </div>
      
        <button type="submit">Submit</button>
    </form>
</x-layout>