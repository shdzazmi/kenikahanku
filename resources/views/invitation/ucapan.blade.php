<!--Ucapan form-->
<div class="card m-0" style="background-color: #f6f3f2; z-index: 3;">
    <div class="card-body">
        <div class="row" style="text-align: center;">
            <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-5">
                <h2 data-aos="fade-up" data-aos-duration="1500" class="font-utama pb-2" style="font-weight: normal">
                    Kartu Ucapan</h2>
                <div data-aos="zoom-in" data-aos-duration="1500" class="card pb-3 m-0" style="border-radius: 16px">
                    <div class="card-body">
                        <div class="form-group col-sm-12">
                            <label>Nama</label>
                            <input id="namainput" class="form-control" placeholder="Tulis nama kamu" value="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Ucapan selamat</label>
                            <textarea id="ucapaninput" class="form-control" rows="3" maxlength="254"
                                placeholder="Berikan ucapan selamat kepada kedua mempelai" style="height: 100px"></textarea>
                        </div>
                        <a href="javascript:void(0)" id="submitbutton" class="btn btn-secondary"
                            style="background-color: #b1a59e">Kirim Ucapan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Ucapan dari mereka-->
<div class="card pb-5 m-0" style="background-color: #f6f3f2; z-index: 3;">
    <div class="card-body">
        <div class="row" style="text-align: center;">
            <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-3">
                <h2 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">
                    Ucapan dari mereka</h2>
                <div class="map-container p-2" data-aos="zoom-in" data-aos-duration="1500">
                    <div id="messagebox" class="message-container"
                        style="max-height: 500px; overflow-y: auto; overflow-x: hidden; padding-right: 5px;">

                        @foreach ($ucapan as $item)
                            <div class="card p-3 m-2" style="border-radius: 16px">
                                <li class="media p-0">
                                    <figure class="avatar mr-2 text-white" data-initial="{{ $item->nama[0] }}"
                                        style="background-color: #b1a59e"></figure>
                                    <div class="media-body text-left">
                                        <h6 class="media-title">{{ $item->nama }}</h6>
                                        <div class="text-small">{{ $item->ucapan }}</div>
                                        <i class="far fa-clock text-small text-muted"></i><text
                                            class="text-small text-muted" style="font-size: 12px">
                                            {{ $item->tanggal }}</text>
                                    </div>
                                </li>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
