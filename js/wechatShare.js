var qr = document.getElementById('qrcode');
var cBtn = document.getElementById('closeBtn');

function showQR(){
  qr.style.display = 'block';
  cBtn.style.display = 'none';
}

function unshowQR(){
  qr.style.display = 'none';
  cBtn.style.display = 'block';
}
