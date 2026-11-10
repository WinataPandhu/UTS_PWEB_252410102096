@extends('layouts.app')

@section('title', 'Jadwal Workout')

@section('active', 'pengelolaan')

@push('styles')
<style>
    .page-head { margin-bottom: 22px; }
    .day-card {
        display: flex; flex-direction: column; gap: 8px;
        transition: transform .15s, border-color .15s;
    }
    .day-card:hover { transform: translateY(-4px); border-color: var(--accent); }
    .day-top { display: flex; justify-content: space-between; align-items: center; }
    .day-name { font-weight: 800; font-size: 1.1rem; }
    .day-latihan { font-weight: 600; font-size: 1.05rem; }
    .day-meta { color: var(--muted); font-size: .92rem; }
    .day-meta strong { color: var(--text); }
</style>
@endpush

@section('content')
<div class="page-head">
    <h1>Jadwal Workout Mingguan</h1>
    <p class="muted">Rencana latihan milik <strong class="accent">{{ $username }}</strong>, {{ count($jadwal) }} hari dalam seminggu.</p>
</div>

<div class="grid grid-cards">
    @foreach ($jadwal as $item)
        <div class="card day-card">
            <div class="day-top">
                <span class="day-name">{{ $item['hari'] }}</span>
                <span class="badge {{ $item['status'] === 'Terjadwal' ? 'badge-ok' : 'badge-rest' }}">{{ $item['status'] }}</span>
            </div>
            <div class="day-latihan">{{ $item['latihan'] }}</div>
            <div class="day-meta">
                @if ($item['durasi'] > 0)
                    Pukul <strong>{{ $item['jam'] }}</strong> · {{ $item['durasi'] }} menit
                @else
                    <strong>Tanpa jadwal latihan</strong>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection
