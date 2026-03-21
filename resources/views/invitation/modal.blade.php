<div class="modal fade" id="modalbuka" style="text-align: center;" data-backdrop="static">

    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"
            style="border-radius: 36px; background-image: url('{{ asset('image/modal-cover.jpg') }}'); background-size: cover">
            <div class="modal-body">
                <img src="{{ asset('image/logo.png') }}" alt="logo BA"
                    style="height: 100px; width: 100px; margin-bottom: 10px;">
                <p>Kepada Yth.<br>
                    Bapak/Ibu/Saudara/i</p>
                <h1 class="font-utama" style="font-weight: normal; color: #1a1a1a">{{ $penerima }}</h1>
                <p>Di tempat</p>
                <br>
                <a href="javascript:void(0)" id="openbutton" class="btn btn-secondary"
                    style="background-color: #b1a59e">Buka Undangan</a>
            </div>
        </div>
    </div>
</div>
