@extends('layouts.app')

@section('title', 'Profil')

@section('active', 'profile')

@push('styles')
<style>
    .profile-wrap { max-width: 560px; margin: 0 auto; }
    .profile-head { text-align: center; padding-bottom: 22px; border-bottom: 1px solid var(--line); margin-bottom: 8px; }
    .avatar {
        width: 110px; height: 110px; border-radius: 50%;
        background: linear-gradient(135deg, var(--accent), var(--accent-dark));
        color: #ffffff; font-size: 3rem; font-weight: 800;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 14px;
    }
    .profile-head h2 { margin-bottom: 8px; }
    .section-title { margin: 18px 0 6px; }
    .info-row { display: flex; justify-content: space-between; gap: 12px; padding: 12px 0; border-bottom: 1px solid var(--line); }
    .info-row:last-child { border-bottom: 0; }
    .info-row span:first-child { color: var(--muted); }
    .info-row strong { text-align: right; }
</style>
@endpush

@section('content')
<div class="profile-wrap">
    <div class="card">
        <div class="profile-head">
            <div class="avatar">{{ strtoupper(substr($username, 0, 1)) }}</div>
            <h2>{{ $username }}</h2>
        </div>

        <h2 class="section-title">Data Diri & Target</h2>
        <div class="info-row"><span>Username</span><strong>{{ $username }}</strong></div>
        <div class="info-row"><span>Target</span><strong>{{ $profil['target'] }}</strong></div>
        <div class="info-row"><span>Berat badan</span><strong>{{ $profil['berat'] }}</strong></div>
        <div class="info-row"><span>Tinggi badan</span><strong>{{ $profil['tinggi'] }}</strong></div>
    </div>
</div>
@endsection
