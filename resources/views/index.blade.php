@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Daftar Kategori</h1>
    <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah Kategori</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
