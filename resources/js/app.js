import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// インタラクティブコンポーネントのテスト
// document.body.innerHTML = `
//   <div class="container mt-5">
//     <div class="alert alert-success">
//       <h4 class="alert-heading">Bootstrap動作中！</h4>
//       <p>インタラクティブコンポーネントをテスト中です。</p>
//     </div>
    
//     <!-- Modal トリガーボタン -->
//     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservationModal">
//       予約フォーム（Modal）
//     </button>
    
//     <!-- Modal本体 -->
//     <div class="modal fade" id="reservationModal" tabindex="-1">
//       <div class="modal-dialog">
//         <div class="modal-content">
//           <div class="modal-header">
//             <h5 class="modal-title">カレンダー予約</h5>
//             <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
//           </div>
//           <div class="modal-body">
//             <form>
//               <div class="mb-3">
//                 <label for="reservationDate" class="form-label">予約日</label>
//                 <input type="date" class="form-control" id="reservationDate">
//               </div>
//               <div class="mb-3">
//                 <label for="reservationTime" class="form-label">予約時間</label>
//                 <select class="form-select" id="reservationTime">
//                   <option>09:00 - 10:00</option>
//                   <option>10:00 - 11:00</option>
//                   <option>11:00 - 12:00</option>
//                 </select>
//               </div>
//             </form>
//           </div>
//           <div class="modal-footer">
//             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">キャンセル</button>
//             <button type="submit" class="btn btn-primary" form="reservationForm">
//                 予約確定
//             </button>
//           </div>
//         </div>
//       </div>
//     </div>
//   </div>
// `;