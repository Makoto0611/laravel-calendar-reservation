@extends('layouts.app')

@section('title', 'カレンダー予約システム')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">カレンダー予約システム</h1>
            
            <!-- カレンダー表示エリア -->
            <div class="card card-custom">
                <div class="card-body">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 予約確認Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">予約確認</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm">
                    <div class="mb-3">
                        <label for="bookingDate" class="form-label">予約日</label>
                        <input type="text" class="form-control" id="bookingDate" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="bookingTime" class="form-label">予約時間</label>
                        <select class="form-select" id="bookingTime">
                            <option value="09:00">09:00 - 10:00</option>
                            <option value="10:00">10:00 - 11:00</option>
                            <option value="11:00">11:00 - 12:00</option>
                            <option value="14:00">14:00 - 15:00</option>
                            <option value="15:00">15:00 - 16:00</option>
                            <option value="16:00">16:00 - 17:00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="customerName" class="form-label">お名前</label>
                        <input type="text" class="form-control" id="customerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="customerEmail" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" id="customerEmail" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
                <button type="button" class="btn btn-primary" id="confirmBooking">予約確定</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<!-- FullCalendar CSS -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/main.min.css' rel='stylesheet' />
@endpush

@push('scripts')
<!-- FullCalendar JavaScript -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/main.min.js'></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
    
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'ja',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        dateClick: function(info) {
            // 過去の日付はクリック不可
            const today = new Date();
            const clickedDate = new Date(info.dateStr);
            
            if (clickedDate < today.setHours(0,0,0,0)) {
                alert('過去の日付は予約できません');
                return;
            }
            
            // 予約モーダルを表示
            document.getElementById('bookingDate').value = info.dateStr;
            bookingModal.show();
        },
        events: [
            // サンプルイベント（後でデータベースから取得）
            {
                title: '予約済み',
                start: '2024-12-25',
                backgroundColor: '#dc3545',
                borderColor: '#dc3545'
            }
        ]
    });
    
    calendar.render();
    
    // 予約確定処理
    document.getElementById('confirmBooking').addEventListener('click', function() {
        const bookingData = {
            date: document.getElementById('bookingDate').value,
            time: document.getElementById('bookingTime').value,
            name: document.getElementById('customerName').value,
            email: document.getElementById('customerEmail').value
        };
        
        // バリデーション
        if (!bookingData.name || !bookingData.email) {
            alert('名前とメールアドレスは必須です');
            return;
        }
        
        // TODO: Ajax通信でサーバーに送信
        console.log('予約データ:', bookingData);
        alert('予約が完了しました！\n' + 
              '日付: ' + bookingData.date + '\n' +
              '時間: ' + bookingData.time);
        
        bookingModal.hide();
        
        // フォームリセット
        document.getElementById('bookingForm').reset();
    });
});
</script>
@endpush
