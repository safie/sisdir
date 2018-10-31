<div class="modal" id="mymodal">
  <div class="modal-background"></div>
  <div class="modal-content">

  <!--konten yang akan muncul saat tombol di klik-->
    <div class="box is-info" style="margin-top: 200px">

          <div class="content">
            <p><b>Alamat:</b><br>
              {{ $datas->alamat_seksyen }}
            </p>
          </div>

    </div>
    <!--akhir dari konten-->

  </div>
  <button class="modal-close is-large" aria-label="close" id="btnclose"></button>
</div>
