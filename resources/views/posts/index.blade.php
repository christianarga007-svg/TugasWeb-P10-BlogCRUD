@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Daftar Artikel Blog</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
            + Tambah Artikel
        </a>
    </div>

    @if(session('success'))
        <x-alert type="success">
            {{ session('success') }}
        </x-alert>
    @endif

    <div class="grid gap-4">
        @forelse($posts as $post)
            <x-card>
                <h2 class="text-xl font-bold">{{ $post->title }}</h2>
                <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 100) }}</p>
                <div class="mt-4 flex space-x-2 text-sm">
                    <a href="{{ route('posts.edit', $post->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                    
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </div>
            </x-card>
        @empty
            <div class="text-center p-6 bg-white shadow rounded text-gray-500">
                Belum ada artikel. Ayo klik tombol "+ Tambah Artikel" di atas!
            </div>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
@endsection