@extends('layouts.app')

@section('title', 'Galeri Foto')

@section('content')
<div class="section-header">
    <h2>Galeri Dokumentasi</h2>
    <p>Kumpulan momen, ruang kerja, dan eksplorasi visual.</p>
</div>

<div class="grid-gallery">
    @foreach ($galeri as $foto)
        <div class="card gallery-card">
            <div class="gallery-img-wrapper">
                <img src="{{ asset($foto['file']) }}" alt="{{ $foto['judul'] }}" onerror="this.src='https://placehold.co/600x400/F5F5F7/1D1D1F?text=Foto+Galeri'">
            </div>
            <div class="gallery-info">
                <span class="badge">{{ $foto['kategori'] }}</span>
                <h3>{{ $foto['judul'] }}</h3>
                <p>{{ $foto['deskripsi'] }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection