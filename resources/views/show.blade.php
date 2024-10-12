@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Kategori</h1>
    <p><strong>ID:</strong> {{ $category->id }}</p>
    <p><strong>Nama:</strong> {{ $category->name }}</p>
    <a href="{{ route('category.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
