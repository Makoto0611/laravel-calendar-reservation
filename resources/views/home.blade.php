@extends('layouts.app')

@section('title', 'ホーム - ポートフォリオ')

@section('content')
<!-- ヒーローセクション -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold">Bootstrap + Laravel</h1>
                <p class="lead">カレンダー予約機能付きポートフォリオサイト</p>
                <button class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#reservationModal">
                    📅 予約フォーム
                </button>
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
        <h2 class="text-center mb-5">使用技術</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card card-custom card-slide-in h-100 text-center">
                    <div class="card-body">
                        <h3 class="card-title text-primary">🅱️ Bootstrap 5</h3>
                        <p class="card-text">レスポンシブデザインとUI コンポーネント</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom card-slide-in h-100 text-center">
                    <div class="card-body">
                        <h3 class="card-title text-danger">⚡ Laravel 12</h3>
                        <p class="card-text">モダンなPHPフレームワーク</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-custom card-slide-in h-100 text-center">
                    <div class="card-body">
                        <h3 class="card-title text-success">📅 カレンダー機能</h3>
                        <p class="card-text">予約システムとイベント管理</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 予約Modal (既存のテストコードを移植) -->
<div class="modal fade" id="reservationModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">カレンダー予約</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="reservationDate" class="form-label">予約日</label>
                        <input type="date" class="form-control" id="reservationDate">
                    </div>
                    <div class="mb-3">
                        <label for="reservationTime" class="form-label">予約時間</label>
                        <select class="form-select" id="reservationTime">
                            <option>09:00 - 10:00</option>
                            <option>10:00 - 11:00</option>
                            <option>11:00 - 12:00</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                <button type="submit" class="btn btn-primary">予約確定</button>
            </div>
        </div>
    </div>
</div>
@endsection