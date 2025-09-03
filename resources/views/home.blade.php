@extends('layouts.app')

@section('title', 'ホーム - ポートフォリオ')

@section('content')
<!-- ヒーローセクション -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">Bootstrap + Laravel</h1>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <i class="bi bi-calendar-event" style="font-size: 8rem;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 特徴セクション -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">実装機能</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card card-custom card-slide-in h-100 text-center">
                    <div class="card-body">
                        <h3 class="card-title text-primary">🅱️ Bootstrap 5</h3>
                        <p class="card-text">レスポンシブデザインとUI コンポーネント</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-custom card-slide-in h-100 text-center">
                    <div class="card-body">
                        <h3 class="card-title text-danger">⚡ Laravel 12</h3>
                        <p class="card-text">モダンなPHPフレームワーク</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 特徴セクション -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">使用技術</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <a href="{{ route('calendar') }}" class="btn btn-warning btn-lg" type="button">📅 カレンダー機能</a>
            </div>
        </div>
    </div>
</section>


@endsection