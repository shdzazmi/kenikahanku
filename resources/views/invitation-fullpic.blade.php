@extends('layouts.main')
@section('title', 'Bella & Adam')

<link href="{{ asset('assets/css/invitation-fullpic.css') }}" rel="stylesheet" type="text/css" />
<style>
    .font-utama {
        font-family: 'Gloock', serif;
        font-weight: normal;
    }
</style>

@section('content')

    <div class="content" style="width: 100%">

        <!--Header-->
        @include('invitation-fullpic.header')

        <!--Divider-->
        <div class="divider disabled-element" data-aos="zoom-in" data-aos-duration="1500">
            <img src="{{ asset('image/divider4.png') }}" alt="divider4"
                style="--x-mobile: 50%; --x-desktop: 50%; max-width: 125px;">
        </div>

        <!--Text Intro-->
        @include('invitation-fullpic.intro')

        <!--Divider-->
        <div class="divider disabled-element" data-aos="fade-right" data-aos-duration="1500">
            <img src="{{ asset('image/divider1.png') }}" alt="divider1" style="--x-mobile: 25%; --x-desktop: 25%;">
        </div>

        <!--Kedua mempelai-->
        @include('invitation-fullpic.mempelai_bini')
        <div class="divider disabled-element fly" data-aos="zoom-in" data-aos-duration="1500">
            <img src="{{ asset('image/divider7.png') }}" class="stepin" alt="divider7"
                style="--x-mobile: 50%; --x-desktop: 50%; max-width: 150px;">
        </div>
        @include('invitation-fullpic.mempelai_laki')

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos-offset="-10" data-aos="fade-left" data-aos-duration="1500">
            <img src="{{ asset('image/divider2.png') }}" alt="divider2" style="--x-mobile: 85%; --x-desktop: 70%;">
        </div>

        <!--Schedule-->
        @include('invitation-fullpic.schedule')

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos-offset="-10" data-aos="fade-left" data-aos-duration="1500">
            <img src="{{ asset('image/divider3.png') }}" class="stepin" alt="divider3"
                style="--x-mobile: 80%; --x-desktop: 80%; top: -30px;">
        </div>

        <!--Lokasi-->
        @include('invitation-fullpic.lokasi')

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos="fade-right" data-aos-duration="1500">
            <img src="{{ asset('image/divider5.png') }}" class="stepin" alt="divider5"
                style="--x-mobile: 20%; --x-desktop: 20%;">
        </div>

        <!--Gallery-->
        @include('invitation-fullpic.gallery')

        <!--Divider-->
        <div class="divider disabled-element fly" data-aos-offset="-10" data-aos="fade-left" data-aos-duration="1500">
            <img src="{{ asset('image/divider6.png') }}" alt="divider6"
                style="max-height: 120px; width:auto; --x-mobile: 85%; --x-desktop: 70%;">
        </div>

        <!--Gift-->
        @include('invitation-fullpic.gift')

        <!--Divider muka bela-->
        <div class="divider disabled-element" data-aos="zoom-out-right" data-aos-duration="1500">
            <img src="{{ asset('image/divider10.png') }}" class="stepin" alt="divider10"
                style="--x-mobile: 25%; --x-desktop: 25%; max-width: 250px; top: 50px;">
        </div>
        <!--Kartu ucapan-->
        @include('invitation-fullpic.ucapan')

        <!--Divider muka adam-->
        <div class="divider disabled-element" data-aos="zoom-out-left" data-aos-duration="1500">
            <img src="{{ asset('image/divider9.png') }}" class="stepin" alt="divider9"
                style="--x-mobile: 75%; --x-desktop: 75%; max-width: 250px; top: 20px;">
        </div>

        @include('invitation-fullpic.ucapan_mereka')


        <!--Divider-->
        <div class="divider disabled-element" data-aos="fade-right" data-aos-duration="1500">
            <img src="{{ asset('image/divider4.png') }}" alt="divider4"
                style="--x-mobile: 25%; --x-desktop: 25%; max-width: 125px;">
        </div>

        <!--Footer-->
        @include('invitation-fullpic.footer')
    </div>


    <!--Modal opening-->
    @include('invitation-fullpic.modal')

    <audio autoplay loop id="bgm">
        <source src="{{ asset('bgm.mp3') }}" type="audio/mpeg">
    </audio>

@endsection
@push('page_scripts')
    <script>
        var namainput = document.getElementById('namainput');
        var ucapaninput = document.getElementById('ucapaninput');
        var submitbutton = document.getElementById('submitbutton');
        var bgm = document.getElementById('bgm');
        var openbutton = document.getElementById('openbutton');

        submitbutton.addEventListener("click", function() {
            if (namainput.value !== '' && ucapaninput.value !== '') {
                var url = '{{ route('ucapan.put') }}';
                var data = {
                    nama: namainput.value,
                    ucapan: ucapaninput.value
                };

                $.ajax({
                    url: url,
                    method: "POST",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $('#messagebox').prepend(
                            '<div data-aos="zoom-in" data-aos-duration="1500" class="card p-3 m-2" style="border-radius: 16px">' +
                            '<li class="media p-0">' +
                            '<figure class="avatar mr-2 text-white" data-initial="' + data.nama[0] +
                            '" style="background-color: #b1a59e"></figure>' +
                            '<div class="media-body text-left">' +
                            '<h6 class="media-title">' + data.nama + '</h6>' +
                            '<div class="text-small">' + data.ucapan + '</div>' +
                            '<i class="far fa-clock text-small text-muted"></i><text class="text-small text-muted" style="font-size: 12px"> ' +
                            data.tanggal + '</text>' +
                            '</div>' +
                            '</li>' +
                            '</div>'
                        );
                        namainput.value = '';
                        ucapaninput.value = '';
                    }
                })
            } else {
                alert('Lengkapi nama dan ucapan!')
            }
        });

        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let acara = "March 29, 2026 08:00:00",
                countDown = new Date(acara).getTime(),
                x = setInterval(function() {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                        headline.innerText = "It's our wedding day!";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                    }
                    //seconds
                }, 0)
        }());
    </script>
@endpush
