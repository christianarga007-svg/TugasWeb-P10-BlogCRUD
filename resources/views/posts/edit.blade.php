@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md border border-gray-200">
        <h1 class="text-2xl font-bold mb-6 text-yellow-600">Edit Artikel</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Judul Artikel</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" 
                    class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('title') border-red-500 focus:ring-red-500 @enderror">
                
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Isi Konten</label>
                <textarea name="content" rows="6" 
                    class="w-full border p-2 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('content') border-red-500 focus:ring-red-500 @enderror">{{ old('content', $post->content) }}</textarea>
                
                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('posts.index') }}" class="text-gray-500 hover:text-gray-800 hover:underline">Kembali</a>
                <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded shadow hover:bg-yellow-600 font-bold">
                    Perbarui Artikel
                </button>
            </div>
        </form>
    </div>
@endsection