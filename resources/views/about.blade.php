@extends('layouts.app')

@section('title', 'Tentang Saya')

@section('content')
<div class="section-header">
    <h2>Profil & Kompetensi</h2>
    <p>{{ $bio }}</p>
</div>

<div class="grid-cards">
    @foreach ($keahlian as $index => $item)
        <div class="card">
            <div class="card-header">
                <span class="badge">0{{ $index + 1 }} • {{ $item['tingkat'] }}</span>
            </div>
            <h3>{{ $item['kategori'] }}</h3>
            <p>{{ $item['deskripsi'] }}</p>
        </div>
    @endforeach
</div>
@endsection