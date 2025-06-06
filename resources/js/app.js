import './bootstrap';
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

// より実用的なBootstrapテスト
document.body.innerHTML = `
  <div class="container mt-5">
    <div class="alert alert-success">
      <h4 class="alert-heading">Bootstrap動作中！</h4>
      <p>Bootstrap CSSが正常に適用されています。</p>
    </div>
    <button class="btn btn-primary">Bootstrapボタン</button>
  </div>
`;