<div class="card pt-5 pb-5 m-0" style="background-color: #f8f5f2; z-index: 3;">
    <div class="card-body text-center">
        <div class="row" style="text-align: center;">
            <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 p-2">
                <h1 data-aos="fade-up" data-aos-duration="1500" class="font-utama pb-4" style="font-weight: normal;">
                    Wedding Gift
                </h1>

                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200"
                    style="color: #6c757d; margin-bottom: 30px;">
                    Buat beli merch / tiket konser.
                </div>

                <div class="row justify-content-center">
                    <!-- Bank BCA -->
                    <div class="col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-duration="1500"
                        data-aos-delay="400">
                        <div class="card shadow-sm" style="border-radius: 15px; border: none; background: #6c757d;">
                            <div class="card-body p-4 text-left">
                                <img src="{{ asset('image/mandiri.png') }}" class="mb-4" alt="mandiri"
                                    style="max-width: 100px; position: absolute; top: 25px; right: 25px;">
                                <div class="d-flex align-items-center pt-4 mt-4 mb-1">
                                    <h3 id="rek-bca" class="m-0 text-white"
                                        style="letter-spacing: 2px; font-weight: normal">1480 0193 7490 2
                                    </h3>
                                    <button onclick="salinRekening('rek-bca', this)"
                                        class="btn btn-sm btn-outline-white ml-3"
                                        style="border-radius: 50%; width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;"
                                        title="Salin Rekening">
                                        <i class="far fa-copy"></i>
                                    </button>
                                </div>
                                <p class="mb-4 text-light" style="font-size: 14px;">RIFKI ADAM MAULANA</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bank Mandiri -->
                    {{-- <div class="col-md-6 col-sm-12 mb-4" data-aos="zoom-in" data-aos-duration="1500"
                        data-aos-delay="600">
                        <div class="card shadow-sm" style="border-radius: 15px; border: none; background: #ffffff;">
                            <div class="card-body p-4 text-left">
                                <h5 style="font-weight: bold; color: #003d79; font-style: italic;">Mandiri</h5>
                                <div class="d-flex align-items-center mt-3 mb-1">
                                    <h3 id="rek-mandiri" class="m-0" style="letter-spacing: 2px;">0987 6543 21</h3>
                                    <button onclick="salinRekening('rek-mandiri', this)"
                                        class="btn btn-sm btn-outline-secondary ml-3"
                                        style="border-radius: 50%; width: 35px; height: 35px; padding: 0; display: flex; align-items: center; justify-content: center;"
                                        title="Salin Rekening">
                                        <i class="far fa-copy"></i>
                                    </button>
                                </div>
                                <p class="mb-0 text-muted" style="font-size: 14px;">a.n. Bella</p>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function salinRekening(id, btn) {
        const rekening = document.getElementById(id).textContent.replace(/\s+/g, '');
        navigator.clipboard.writeText(rekening);

        // Ubah icon menjadi centang
        const icon = btn.querySelector('i');
        const originalClass = icon.className;
        icon.className = 'fas fa-check text-success';

        // Kembalikan ke icon semula setelah 2 detik
        setTimeout(() => {
            icon.className = originalClass;
        }, 2000);
    }
</script>
