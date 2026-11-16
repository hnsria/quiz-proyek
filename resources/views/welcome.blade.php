@extends('layouts.app')

@section('title', 'Welcome — ' . $panggilan)

@section('content')
<section class="hero-section">
    <span class="badge">{{ $jurusan }}</span>
    <h1 class="hero-title">Halo, saya {{ $nama }}.</h1>
    <p class="hero-subtitle">Biasa dipanggil <strong>{{ $panggilan }}</strong> {{ $tagline }}</p>
    
    <div class="hero-actions">
        <a href="{{ route('about') }}" class="btn btn-primary">Kenali Lebih Lanjut</a>
        <a href="{{ route('gallery') }}" class="btn btn-secondary">Lihat Galeri</a>
    </div>
</section>
@endsection