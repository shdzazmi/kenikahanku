@extends('layouts.main')
@section('title', 'Vivi & Wirdan')

<link href="{{ asset('assets/css/viviwirdan.css') }}" rel="stylesheet" type="text/css"/>
<style>

    .font-utama {
        font-family: 'Parisienne', cursive;
    }

</style>

@section('content')

    <div class="content" style="width: 100%">

        <!--Header-->
        <div class="banner-bg"></div>
        <img src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80" class="banner-image" alt="img-banner">
        <div class="banner-title">
            <h3 data-aos="zoom-in" data-aos-duration="1500" class="font-utama">The Wedding Of</h3>
            <h1 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400" class="font-utama">Vivi & Wirdan</h1>
            <h4 data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">03.07.2021</h4>
            <div data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600" id="countdown" class="countdown">
                <ul>
                    <li><span id="days"></span>Hari</li>
                    <li><span id="hours"></span>Jam</li>
                    <li><span id="minutes"></span>Menit</li>
                    <li><span id="seconds"></span>Detik</li>
                </ul>
            </div>
        </div>

        <!--Text intro-->
        <div class="card pt-5 pb-5 m-0">
            <div class="card-body text-center">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                        <h4 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh
                        </h4>
                        <div data-aos="fade-up" data-aos-duration="1500">
                            Barakallah wa baraka'alaika wa jama'a banaikumaa fii khair.
                            Teriring Doa dan ucap syukur kehadirat Allah SWT perkenankanlah dan ridhoilah kami
                            merangkaikan kasih sayang yang Engkau ciptakan di antara putra-putri kami:
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Kedua mempelai-->
        <div class="card pt-5 pb-5 m-0" style="background-color: #f6f3f2;">
            <div class="card-body">
                <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                    <div class="row" style="text-align: center;">
                        <div data-aos="fade-down" data-aos-duration="1500" class="col-sm-4 p-3">
                            <figure class="avatar avatar-xxl" style="height: 100px; width: 100px; margin-bottom: 10px;">
                                <img src="https://picturepan2.github.io/spectre/img/avatar-3.png" alt="...">
                            </figure>
                            <h1 class="font-utama" style="font-weight: normal">Vivi Liani</h1>
                            <div>Putri dari Raihan Fidan nuzband S.Hut & Siti Komala</div>
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500" class="col-sm-4 p-3">
                            <h1 class="font-utama" style="font-weight: normal">&</h1>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-4 p-3">
                            <figure class="avatar avatar-xxl" style="height: 100px; width: 100px; margin-bottom: 10px;">
                                <img src="https://picturepan2.github.io/spectre/img/avatar-2.png" alt="...">
                            </figure>
                            <h1 class="font-utama" style="font-weight: normal">Wirdan A.S D.O Ali</h1>
                            <div>Putra dari Alm. Aswin S D.O Ali S.Pi., M.MA & Darmawati A Minangkabau S.P</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Text-->
        <div class="card m-0 text-white" style="background-color: #a89c9c; border-radius: 0px">
            <div class="card-body pt-5 pb-5">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                        <div data-aos="fade-up" data-aos-duration="1500" class="konten">
                            <img src="https://i2.wp.com/moment.my.id/wp-content/uploads/2021/03/save-the-date.gif" class="attachment-large size-large" alt="" loading="lazy" />
                        </div>
                        <div data-aos="zoom-in" data-aos-duration="1500">
                            Lingkaran indah terukir di hati kami mengiringi ta'zim dan munajat kami,
                            semoga nikmat Allah SWT melimpah dalam acara Akad dan Resepsi pernikahan putra-putri kami
                            yang Insyaa Allah akan dilaksanakan pada:
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Tanggal-->
        <div class="card p-0 m-0 text-white" style="background-color: #a89c9c; border-radius: 0px">
            <div class="card-body">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                        <h3 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">Sabtu</h3>
                        <div class="date-container">
                            <div>
                                <h1 data-aos="fade-right" data-aos-duration="1500" class="datez font-utama" style="font-weight: normal">03</h1>
                            </div>
                            <div style="vertical-align: middle">
                                <h1 data-aos="fade-left" data-aos-duration="1500" class="monthz font-italic">Juli</h1>
                                <h1 data-aos="fade-left" data-aos-duration="1500" class="monthz font-italic">2021</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--Schedule-->
        <div class="card pt-3 pb-3 m-0 text-white" style="justify-content: center; background-color: #a89c9c; border-radius: 0px" >
            <div class="card-body">
                <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                    <div class="row" style="text-align: center;">
                        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-6 p-2">
                            <h2 class="font-utama" style="font-weight: normal">Akad nikah</h2>
                            <h6>08:00 wita</h6>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1500" class="col-sm-6 p-2">
                            <h2 class="font-utama" style="font-weight: normal">Resepsi</h2>
                            <h6>11:00 - 13:00 wita</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Lokasi-->
        <div class="card pt-5 m-0" style=" z-index: 3;">
            <div class="card-body">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 pb-5">
                        <h1 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">Lokasi Acara</h1>
                        <h5 data-aos="fade-up" data-aos-duration="1500">Gedung Dakwah Al-Ishlah</h5>
                        <div data-aos="fade-up" data-aos-duration="1500">
                            Jl. A. Wahab Syahranie, Gn. Kelua, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur
                        </div>
                        <div class="map-container mt-3 p-2" data-aos="zoom-in" data-aos-duration="1500">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=500&amp;height=500&amp;hl=en&amp;q=gedung dakwah al ishlah samarinda ulu&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a data-aos="fade-up" data-aos-duration="1500" target="_blank" href="https://maps.google.com/maps?ll=-0.469791,117.139128&z=15&t=m&hl=en&gl=US&mapclient=embed&daddr=Gedung%20Dakwah%20Al-Ishlah%20Jl.%20A.%20Wahab%20Syahranie%20Gn.%20Kelua%20Kec.%20Samarinda%20Ulu%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur%2075243@-0.4697911,117.1391283" class="btn btn-secondary" style="background-color: #b1a59e">Petunjuk arah</a>

                    </div>
                </div>
            </div>
        </div>

        <!--Protokol kesehatan-->
        <div class="card pb-5 m-0">
            <div class="card-body">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 pb-5">
                        <h2 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">Protokol Kesehatan</h2>
                        <div data-aos="fade-up" data-aos-duration="1500">
                            Dikarenakan sedang dalam masa pandemi, tanpa mengurangi rasa hormat, diharapkan seluruh tamu dapat mengikuti protokol kesehatan yang dianjurkan oleh pemerintah sebagai berikut:
                        </div>
                        <div class="divektor pt-3">
                            <div data-aos="zoom-in" data-aos-duration="1500" class="vektor col-sm-6">
                                <svg viewBox="0 0 150 120" xmlns="http://www.w3.org/2000/svg">
                                    <g transform="matrix(0.802756, 0, 0, 0.802756, 3.994423, 2.967319)" style="">
                                        <path fill="#f6f3f2" d="m10.53896,95.89512c-9.174,-26.053 -0.166,-56.959 20.3,-75.508s50.845,-24.66 77.5,-17.437c33.068,8.96 60.607,41.182 57.1,75.26c-2.052,19.934 -14.2,38.131 -30.668,49.543c-38.664,26.799 -107.074,16.869 -124.232,-31.858z" data-name="Path 32707" id="Path_32707"/>
                                        <g data-name="Group 45286" id="Group_45286">
                                            <path fill="#a89c9c" d="m36.32189,39.65982a9.99,9.99 0 1 1 -9.99,-9.989a9.99,9.99 0 0 1 9.99,9.989z" data-name="Path 32708" id="Path_32708"/>
                                            <path fill="#a89c9c" d="m51.83195,75.58518l-12.583,-15.775a14.911,14.911 0 0 0 -2.543,-3.419a14.446,14.446 0 0 0 -22.763,2.891l-13.006,16.3a4.292,4.292 0 0 0 0.678,6.032l0.709,0.564a4.293,4.293 0 0 0 6.033,-0.679l3.307,-4.146l0,45.084a6.249,6.249 0 0 0 6.248,6.248l0.294,0a6.248,6.248 0 0 0 6.248,-6.248l0,-32.353l4.059,0l0,32.353a6.249,6.249 0 0 0 6.248,6.248l0,0a6.248,6.248 0 0 0 6.248,-6.248l0,-45.2l3.4,4.264a4.293,4.293 0 0 0 6.034,0.679l0.708,-0.564a4.292,4.292 0 0 0 0.681,-6.031z" data-name="Path 32709" id="Path_32709"/>
                                        </g>
                                        <g data-name="Group 45287" id="Group_45287">
                                            <path fill="#a89c9c" d="m156.24701,39.65982a9.99,9.99 0 1 1 -9.989,-9.989a9.99,9.99 0 0 1 9.989,9.989z" data-name="Path 32710" id="Path_32710"/>
                                            <path fill="#a89c9c" d="m171.754,75.58518l-12.584,-15.775a14.886,14.886 0 0 0 -2.542,-3.419a14.446,14.446 0 0 0 -22.763,2.891l-13.007,16.3a4.292,4.292 0 0 0 0.679,6.032l0.709,0.564a4.293,4.293 0 0 0 6.034,-0.679l3.307,-4.146l0,45.084a6.249,6.249 0 0 0 6.248,6.248l0.293,0a6.248,6.248 0 0 0 6.248,-6.248l0,-32.353l4.059,0l0,32.353a6.249,6.249 0 0 0 6.248,6.248l0,0a6.248,6.248 0 0 0 6.248,-6.248l0,-45.2l3.4,4.264a4.293,4.293 0 0 0 6.034,0.679l0.709,-0.564a4.292,4.292 0 0 0 0.68,-6.031z" data-name="Path 32711" id="Path_32711"/>
                                        </g>
                                        <g data-name="Group 45288" id="Group_45288">
                                            <line x1="61.633" y1="78.966" y2="78.966" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke="#AFAFAF" fill="none" x2="112.415" data-name="Line 15" id="Line_15"/>
                                            <path stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke="#AFAFAF" fill="none" d="m104.7809,73.34785l8.387,5.618l-8.387,5.618" data-name="Path 32712" id="Path_32712"/>
                                            <path stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke="#AFAFAF" fill="none" d="m70.02093,73.34785l-8.389,5.618l8.389,5.618" data-name="Path 32713" id="Path_32713"/>
                                        </g>
                                    </g>
                                </svg>
                                Jaga jarak minimal 1.5 meter
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" class="vektor col-sm-6">
                                <svg id="Group_45280" data-name="Group 45280" width="152.941" height="149.495" viewBox="0 0 152.941 149.495" alt="jaga-jarak" fill="#DCE2E8" style="width: 100%;" xmlns="http://www.w3.org/2000/svg">
                                    <path id="Path_32673" data-name="Path 32673" d="M7769.57,3972.77c9.832-25.811,36.678-43.579,64.282-44.512s54.74,14.034,70.418,36.772c19.448,28.205,19.647,70.592-5.051,94.334-14.446,13.887-35.475,19.928-55.419,18C7796.971,4072.824,7751.18,4021.044,7769.57,3972.77Z" transform="translate(-7765.409 -3928.217)" style="fill: rgb(246, 243, 242);"/>
                                    <path id="Path_32674" data-name="Path 32674" d="M7984.159,4614.994c-.243-3.011-.456-6.025-.6-9.044q-.7-14.377.023-28.776c.132-2.588.283-8.187,4.013-8.2,1.762-.009,3.09,1.611,3.926,2.982a24.966,24.966,0,0,1,2.32,5.811,55.065,55.065,0,0,1,.505,29.98A25.338,25.338,0,0,1,7984.159,4614.994Zm-82.57,42.245a103.009,103.009,0,0,1-29.919-38.164,99.6,99.6,0,0,1-4.659-12.325c-1.376-4.513-2.833-9.362-2.857-14.108-.022-4.278,1.842-9.4,6.431-10.595,4.708-1.229,9.117,2.588,12.152,5.694a157.058,157.058,0,0,1,18.853,23.717Zm94.565-48.922a57.107,57.107,0,0,0,.247-28.389c-.961-3.859-2.12-8.7-5.282-11.414a5.049,5.049,0,0,0-8.013,1.5,13.2,13.2,0,0,0-1.281,4.893c-.237,2.416-.272,4.867-.354,7.292q-.262,7.876-.093,15.763c.126,5.924.456,11.841.946,17.746-24.933,8.914-69.989-2.682-79.094-5.192A171.614,171.614,0,0,0,7885.5,4587.9c-3.176-3.413-6.982-7.2-11.824-7.877-4.414-.613-8.261,2.083-10.08,6-2.223,4.777-1.229,10.192-.067,15.112a100.733,100.733,0,0,0,4.229,13.519,104.395,104.395,0,0,0,33.834,44.958v.846c15.927,10.435,34.667,19.124,54.132,18.465,19.766-.669,37.359-19.9,39.081-39.2.928-10.4.9-20.967,1.352-31.4Z" transform="translate(-7858.91 -4545.006)" style="fill: rgb(168, 156, 156);"/>
                                    <path id="Path_32675" data-name="Path 32675" d="M9642.455,6095.494a91.333,91.333,0,0,1-36.076-7.639,1.895,1.895,0,1,1,1.595-3.438c21.251,9.852,58.1,12.224,69.148-9.257a1.9,1.9,0,0,1,3.371,1.734C9673.352,6090.782,9658.063,6095.494,9642.455,6095.494Z" transform="translate(-9544.437 -5998.085)" style="fill: rgb(246, 243, 242);"/>
                                    <path id="Path_32676" data-name="Path 32676" d="M9904.744,6791.6a69.509,69.509,0,0,1-24.769-4.886,1.895,1.895,0,1,1,1.353-3.54c23.213,8.868,44.557,4.824,58.555-11.1a1.9,1.9,0,1,1,2.847,2.5A49.239,49.239,0,0,1,9904.744,6791.6Z" transform="translate(-9808.435 -6671.221)" style="fill: rgb(246, 243, 242);"/>
                                </svg>
                                Selalu memakai masker
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" class="vektor col-sm-6">
                                <svg width="157.729" height="148.689" viewBox="0 0 157.729 148.689" alt="jaga-jarak" fill="#DCE2E8" style="width: 100%;" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Group_45281" data-name="Group 45281" transform="translate(0.001)">
                                        <path id="Path_32682" data-name="Path 32682" d="M13782.51,3991.054c-14.273-23.646-11.731-55.738,4.539-78.057s44.776-34.474,72.346-32.816c34.2,2.057,67.709,28.012,71.2,62.093,2.039,19.933-6.156,40.22-19.965,54.741C13878.2,4031.108,13809.208,4035.279,13782.51,3991.054Z" transform="translate(-13773.172 -3880.031)" style="fill: rgb(246, 243, 242);"/>
                                        <path id="Path_32683" data-name="Path 32683" d="M14482.391,4653.618a10.464,10.464,0,0,1-6.445-17.636,14.837,14.837,0,0,1,12.619-25.387,9.773,9.773,0,0,1,17.273-6.081,7.563,7.563,0,0,1,14.779-2.664,8.042,8.042,0,0,1,14.645-5.51,13.089,13.089,0,0,1,16.572,15.239,10.657,10.657,0,0,1,7.465,19.453,7.924,7.924,0,0,1,1.546,15.591c6.355,5.071,7.049,15.776,1.4,21.625a14.5,14.5,0,0,1-21.971,12.078,8.1,8.1,0,0,1-15.82-2.918,7.034,7.034,0,0,1-13.9-.574c-2.981,2.83-8.336,3.209-11.357.2-2.187-2.18-1.235-5.432-2.988-7.585-2.259-2.782-6.867-2.111-9.749-4.536C14485.429,4664.053,14480.32,4653.4,14482.391,4653.618Z" transform="translate(-14447.225 -4568.129)" fill="#fefefe"/>
                                        <path id="Path_32684" data-name="Path 32684" d="M14987.739,4780.746a56.566,56.566,0,0,0,13.095,22.325c5.231,5.265,12.791,7.368,7.809,16.706-2.109,3.952-5.943,6.694-9.924,8.747-3.427,1.769-7.177,3.158-11.033,3.053-9.992-.269-11.425-8.458-16.541-14.72-5.441-6.665-13.764-10.762-21.463-14.189-9.234-4.11-18.3-8.021-25.7-15.089-7.174-6.853-11.943-16.385-15.781-25.457.191-1.282,1.188-.881,1.38-2.161l17.119,12.205c-6.674-4.759-12.974-11.543-16.337-19.1-3.114-7-7.57-14.219-7.352-22.13.047-1.7,5.443,1.909,5.592,2.019,2.739,2,5.051,5.93,7.264,8.525l14.493,17c-8.078-10.737-13.492-22.773-18.315-35.315-.891-2.312-1.353-5.619.9-6.645,2.148-.978,4.3,1.273,5.6,3.244l22.181,33.691a64.413,64.413,0,0,1-13.815-20.91c-1.264-3.044-6.448-22.762-.515-20.672,2.906,1.023,7.437,9.747,9.334,12.256q5.544,7.332,10.846,14.847c5.653,8.018,9.881,15.953,19.02,20.354a5.6,5.6,0,0,0,3.7.751c3.6-.911-2.019-19.72-2.673-23.108-.456-2.353-.633-5.359,1.446-6.55,2.263-1.293,5.033.926,6.049,3.326,2.217,5.236,5,9.745,7.416,14.868C14986.457,4759.053,14984.32,4770.086,14987.739,4780.746Z" transform="translate(-14863.848 -4682.893)" style="fill: rgb(239, 208, 213);"/>
                                        <path id="Path_32685" data-name="Path 32685" d="M15311.7,6681.444a3.99,3.99,0,1,1,6.141-1.685c.762-2.071,3.673-2.731,5.574-1.612a6.438,6.438,0,0,1,2.77,5.677,18.976,18.976,0,0,1-1.6,6.386,5.777,5.777,0,0,1-6.283,8.677c.1-.606.2-1.213.294-1.821a5.859,5.859,0,0,1-6.164,4.862,6.032,6.032,0,0,1-5.122-5.786,5.375,5.375,0,0,1-8.212-.31c-1.625-2.216-.52-4.98-.2-7.427.461-3.514.265-7.864,3.8-9.875A6.533,6.533,0,0,1,15311.7,6681.444Z" transform="translate(-15245.377 -6577.479)" fill="#fefefe"/>
                                        <path id="Path_32686" data-name="Path 32686" d="M16808.4,6049.479a3.991,3.991,0,1,1,6.141-1.686c.762-2.071,3.676-2.731,5.576-1.611a6.439,6.439,0,0,1,2.77,5.677,19.008,19.008,0,0,1-1.6,6.387,5.776,5.776,0,0,1-6.285,8.676c.1-.6.2-1.213.295-1.819a5.859,5.859,0,0,1-6.166,4.861,6.028,6.028,0,0,1-5.119-5.785,5.376,5.376,0,0,1-8.213-.31c-1.625-2.216-.52-4.98-.2-7.427.461-3.514.264-7.864,3.8-9.876A6.532,6.532,0,0,1,16808.4,6049.479Z" transform="translate(-16690.205 -5967.417)" fill="#fefefe"/>
                                        <path id="Path_32687" data-name="Path 32687" d="M17144.4,4815.645h21.174v-6.155H17144.4Z" transform="translate(-17027.559 -4777.276)" style="fill: rgb(168, 156, 156);"/>
                                        <path id="Path_32688" data-name="Path 32688" d="M17361,4613.985h6.156V4592.81H17361Z" transform="translate(-17236.65 -4568.106)" style="fill: rgb(168, 156, 156);"/>
                                        <path id="Path_32689" data-name="Path 32689" d="M14382.6,6983.292h13.666v-3.972H14382.6Z" transform="translate(-14361.478 -6871.902)" style="fill: rgb(168, 156, 156);"/>
                                        <path id="Path_32690" data-name="Path 32690" d="M14522.5,6853.135h3.973V6839.47h-3.973Z" transform="translate(-14496.529 -6736.9)" style="fill: rgb(168, 156, 156);"/>
                                    </g>
                                </svg>
                                Mencuci tangan dengan sabun/sanitizer
                            </div>
                            <div data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1000" class="vektor col-sm-6">
                                <svg width="151.141" height="151.127" viewBox="0 0 151.141 151.127" alt="jaga-jarak" fill="#DCE2E8" style="width: 100%;" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Group_45283" data-name="Group 45283" transform="translate(0.001)">
                                        <path id="Path_32691" data-name="Path 32691" d="M19957.25,3812.665c12.648-24.554,41.307-39.216,68.844-37.067s52.834,20.051,65.879,44.4c16.182,30.2,11.652,72.341-15.537,93.181-15.9,12.19-37.477,15.848-57.08,11.7C19973.324,3915.149,19933.592,3858.587,19957.25,3812.665Z" transform="translate(-19950.201 -3775.39)" style="fill: rgb(246, 243, 242);"/>
                                        <path id="Path_32714" data-name="Path 32714" d="M21629.57,5786.325a22.924,22.924,0,1,1-22.924-22.925A22.923,22.923,0,0,1,21629.57,5786.325Z" transform="translate(-21527.107 -5694.498)" fill="#fefefe"/>
                                        <path id="Path_32715" data-name="Path 32715" d="M21972.76,4488.139a9.782,9.782,0,0,1-9.781-9.781v-73.746a9.782,9.782,0,0,1,19.564,0v73.746A9.782,9.782,0,0,1,21972.76,4488.139Z" transform="translate(-21893.219 -4373.36)" fill="#fefefe"/>
                                        <path id="Path_32716" data-name="Path 32716" d="M21944.82,6113.354a11.186,11.186,0,1,1-11.186-11.184A11.185,11.185,0,0,1,21944.82,6113.354Z" transform="translate(-21854.094 -6021.526)" style="fill: rgb(168, 156, 156);"/>
                                        <line id="Line_16" data-name="Line 16" y1="31.554" transform="translate(79.542 60.273)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="4" style="stroke: rgb(168, 156, 156);"/>
                                        <line id="Line_17" data-name="Line 17" x1="7.122" transform="translate(82.2 42.109)" fill="none" stroke="#f1e0d1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                        <line id="Line_18" data-name="Line 18" x1="7.122" transform="translate(82.2 52.931)" fill="none" stroke="#f1e0d1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                        <line id="Line_19" data-name="Line 19" x1="7.122" transform="translate(82.2 63.753)" fill="none" stroke="#f1e0d1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3"/>
                                        <g id="Group_45273" data-name="Group 45273" transform="translate(47.307 118.446)">
                                            <text id="_7" data-name="7" transform="translate(12.284 16)" style="fill: rgb(168, 156, 156); font-family: SegoeUIBlack, &quot;Segoe UI&quot;; white-space: pre;" x="0" y="0">3</text>
                                            <text id="_." data-name="." transform="translate(23.18 16)" style="fill: rgb(168, 156, 156); font-family: SegoeUIBlack, &quot;Segoe UI&quot;; white-space: pre;" x="0" y="0">7</text>
                                            <text id="_2" data-name="2" transform="translate(30.535 16)" style="fill: rgb(168, 156, 156); font-family: SegoeUIBlack, &quot;Segoe UI&quot;; white-space: pre;" x="0" y="0">°</text>
                                            <text id="_" data-name="\xB0" transform="translate(42.165 15)" style="fill: rgb(168, 156, 156); font-family: SegoeUIBlack, &quot;Segoe UI&quot;; font-size: 14px; white-space: pre;" x="0" y="0">C</text>
                                        </g>
                                    </g>
                                </svg>
                                Suhu maksimal 37°C
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Kartu ucapan-->
        <div class="card m-0" style="background-color: #f6f3f2; z-index: 3;">
            <div class="card-body">
                <div class="row" style="text-align: center;">
                    <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2 mt-5">
                        <h2 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">Kartu Ucapan</h2>
                        <div data-aos="zoom-in" data-aos-duration="1500" class="card pb-3 m-0" style="border-radius: 16px">
                            <div class="card-body">
                                <div class="form-group col-sm-12">
                                    <label>Nama</label>
                                    <input id="namainput" class="form-control" placeholder="Tulis nama kamu" value="">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label>Ucapan selamat</label>
                                    <textarea id="ucapaninput" class="form-control" rows="3" maxlength="254" placeholder="Berikan ucapan selamat disini" style="height: 100px"></textarea>
                                </div>
                                <a href="javascript:void(0)" id="submitbutton" class="btn btn-secondary" style="background-color: #b1a59e">Kirim Ucapan</a>
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
                        <h2 data-aos="fade-up" data-aos-duration="1500" class="font-utama" style="font-weight: normal">Ucapan dari mereka</h2>
                        <div class="map-container p-2" data-aos="zoom-in" data-aos-duration="1500">
                            <div id="messagebox" class="message-container">

                                @foreach($ucapan as $item)
                                    <div class="card p-3 m-2" style="border-radius: 16px">
                                        <li class="media p-0">
                                            <figure class="avatar mr-2 text-white" data-initial="{{$item->nama[0]}}" style="background-color: #b1a59e"></figure>
                                            <div class="media-body text-left">
                                                <h6 class="media-title">{{$item->nama}}</h6>
                                                <div class="text-small">{{$item->ucapan}}</div>
                                                <i class="far fa-clock text-small text-muted"></i><text class="text-small text-muted" style="font-size: 12px"> {{$item->tanggal}}</text>
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


        <!--Footer-->
        <div class="card m-0">
            <div class="card-body pb-5 mb-5">
                <div class="row" style="text-align: center;">
                    <div class="col-sm-12 konten" data-aos="fade-up" data-aos-duration="1500">
                        <svg id="Terima_Kasih" data-name="Terima Kasih" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600.133" height="200.195" viewBox="0 0 600.133 200.195" class="tengah" alt="tengah" fill="#b1a59e">
                            <defs><filter id="Path_21582" x="25.977" y="4.648" width="548.094" height="193.359" filterUnits="userSpaceOnUse"><feOffset dy="3" input="SourceAlpha"></feOffset><feGaussianBlur stdDeviation="3" result="blur"></feGaussianBlur><feFlood flood-opacity="0.161"></feFlood><feComposite operator="in" in2="blur"></feComposite><feComposite in="SourceGraphic"></feComposite></filter></defs><g id="Group_884" data-name="Group 884" transform="translate(34.977 10.656)"><path id="Path_73090" data-name="Path 73090" d="M112.989-10.641q0,2.524-5.048,4.277A37.893,37.893,0,0,1,95.6-4.611a103.663,103.663,0,0,1-18.229-2.01A33.692,33.692,0,0,0,66.856,2.236,95.87,95.87,0,0,0,56.62,18.853,133.624,133.624,0,0,1,48.6,33.179a32.766,32.766,0,0,1-6.988,6.941q-11.732,8.694-24.352,8.694-6.731,0-11.007-2.851T1.98,38.577a5.955,5.955,0,0,1,1.355-3.926,4.072,4.072,0,0,1,3.225-1.636q3.038,0,3.038,3.178a3.787,3.787,0,0,1-.935,2.571,2.922,2.922,0,0,1-2.29,1.075,1.921,1.921,0,0,1-2.2-2.15q0-1.122-.374-1.122-.795,0-.795,2.29,0,3.786,3.9,6.4a16.858,16.858,0,0,0,9.605,2.617q12.526,0,22.482-11.311,4.674-5.282,12.059-17.434Q63.117-.591,76.251-6.808q-2.524-.421-7.572-1.542Q56.807-10.921,50.5-10.921q-.654,0-3.926.187a19.632,19.632,0,0,1,2.2,9.395q0,10.283-7.806,19.3T24.276,26.986a7.88,7.88,0,0,1-6.006-2.454A8.858,8.858,0,0,1,15.956,18.2q0-5.328,4.043-11.8A41.873,41.873,0,0,1,30.469-4.915a38.918,38.918,0,0,1,14.092-6.754q-3.69-5-10.509-5a23.271,23.271,0,0,0-11.607,3.348,34.692,34.692,0,0,0-10.3,9.108q-.654.889-.887.889a.367.367,0,0,1-.374-.28q0-.8,3.831-4.635,9.2-9.176,19.244-9.176,7.8,0,11.864,5.469a46.864,46.864,0,0,1,12.994-1.636,47.057,47.057,0,0,1,6.918.467Q69.053-12.6,82-9.939a51.736,51.736,0,0,1,20.753-4.721Q112.989-14.66,112.989-10.641Zm-.748.093q0-1.355-2.641-2.29a20.214,20.214,0,0,0-6.661-.935,46.986,46.986,0,0,0-19.4,4.207q1.168.187,6.216,1.122a70.7,70.7,0,0,0,13.274,1.449,17.97,17.97,0,0,0,6.5-1.052Q112.241-9.1,112.241-10.547ZM46.945-3.63a14.242,14.242,0,0,0-1.729-6.918Q34.746-8.818,25.725.25T16.7,18.1a8.1,8.1,0,0,0,2.08,5.656,6.644,6.644,0,0,0,5.118,2.29q7.9,0,15.471-9.745T46.945-3.63ZM83.145,32.1a5.639,5.639,0,0,1-.842,1.214l-2.011,2.52Q70.608,47.785,63.685,47.785a7.247,7.247,0,0,1-5.5-2.36,8.289,8.289,0,0,1-2.222-5.913Q55.966,31.1,67.7,24.7q6.17-3.365,10.049-3.365a4.312,4.312,0,0,1,2.875,1,3.1,3.1,0,0,1,1.192,2.454q0,3.365-4.394,5.726T62.743,34.931q-3.178,4.814-3.178,8.039,0,4.02,4.351,4.02,7.392,0,18.107-14.42.561-.747.936-.747A.251.251,0,0,1,83.145,32.1Zm-3.95-8.67q0-1.5-1.636-1.5-2.477,0-6.52,3.435a48.21,48.21,0,0,0-7.923,8.9,36.463,36.463,0,0,0,11.4-4.884Q79.2,26.238,79.2,23.433Zm30.592,8.624q0,.375-2.809,3.423-3.559,3.939-6.7,3.939-3.559,0-3.559-4.113a12.864,12.864,0,0,1,.561-3.319,31.832,31.832,0,0,0-4.791,5.095q-1.846,2.524-6.38,10.283-2.477-.187-2.9-.187-.187,0-2.851.187L88.03,34.931q5.749-9.348,5.749-11.592,0-1.309-1.077-1.309-2.623,0-9.508,10.072-.421.655-.749.655a.251.251,0,0,1-.187-.28.711.711,0,0,1,.187-.375l.843-1.171q7.21-9.6,9.785-9.6,3.745,0,3.745,4.814,0,3.6-3.833,9.535A37.321,37.321,0,0,1,97.612,31.1a23.5,23.5,0,0,1,4.417-6.964q2.641-2.8,4.744-2.8,1.449,0,1.449,1.262,0,2.244-6.5,6.4-1.028.654-3.085,1.916l-.561.467a12.726,12.726,0,0,0-.654,3.552q0,3.926,2.951,3.926,3.652,0,7.961-6.05.936-1.031,1.171-1.031A.248.248,0,0,1,109.788,32.057ZM125.048,12.73a4.351,4.351,0,0,1-1.379,3.062,4.139,4.139,0,0,1-3.015,1.426,1.859,1.859,0,0,1-2.1-2.1A4.176,4.176,0,0,1,120,12.145a4.32,4.32,0,0,1,3.038-1.426A1.776,1.776,0,0,1,125.048,12.73Zm.678,19.327a5.013,5.013,0,0,1-.467.749l-2.012,2.761q-8.8,12.218-13.43,12.218a4.838,4.838,0,0,1-3.673-1.566,5.473,5.473,0,0,1-1.474-3.9q0-2.711,3.225-8.226L115.186,21.7a11.057,11.057,0,0,0,2.29.327,26.917,26.917,0,0,0,3.552-.327l-10.61,17.434q-2.29,3.786-2.29,5.843,0,2.1,2.2,2.1,4.166,0,14.65-14.84.234-.467.468-.467A.248.248,0,0,1,125.726,32.057Zm52.069,0a5.011,5.011,0,0,1-.467.749l-2.012,2.761q-8.8,12.218-13.009,12.218a4.533,4.533,0,0,1-3.6-1.636,6.232,6.232,0,0,1-1.4-4.207,11.331,11.331,0,0,1,1.776-5.656q.327-.561,3.412-5,3.926-5.609,3.926-7.338a1.694,1.694,0,0,0-1.916-1.916q-6.17,0-21.173,25.333a13.78,13.78,0,0,0-2.571-.187,24.414,24.414,0,0,0-3.272.187l6.637-10.517q6.5-10.376,6.5-12.713,0-2.1-1.729-2.1-2.571,0-8.413,7.385a126.36,126.36,0,0,0-11.592,17.948,16.616,16.616,0,0,0-2.758-.187,23.581,23.581,0,0,0-3.178.187l6.684-10.517Q136.547,26,136.547,23.433q0-1.4-1.077-1.4-2.3,0-9.508,10.027-.468.654-.749.654a.251.251,0,0,1-.187-.28q0-.42,4.307-5.83,4.214-5.271,6.508-5.271a3.158,3.158,0,0,1,2.575,1.426,5.461,5.461,0,0,1,1.077,3.389q0,2.711-2.758,7.525,8.413-12.34,12.526-12.34a3.941,3.941,0,0,1,3.225,1.589,6.189,6.189,0,0,1,1.262,3.973q0,2.664-2.477,6.777,8.881-12.34,13.321-12.34a4.186,4.186,0,0,1,3.389,1.729,6.536,6.536,0,0,1,1.379,4.207,13.843,13.843,0,0,1-2.29,6.777q-.047.047-4.02,5.983-2.29,3.365-2.29,5.141a1.7,1.7,0,0,0,1.919,1.916q3.651,0,12.076-11.8l1.45-2.013.843-1.03q.234-.467.468-.467A.248.248,0,0,1,177.8,32.057Zm32.952,0q0,.983-6.831,9.081-5.522,6.647-8.7,6.647a4.374,4.374,0,0,1-3.51-1.613,6.064,6.064,0,0,1-1.357-4.043,12.176,12.176,0,0,1,1.5-5.469,63.968,63.968,0,0,1-7.151,8.834,7.257,7.257,0,0,1-4.814,2.29,5.118,5.118,0,0,1-4.16-2.127,8.358,8.358,0,0,1-1.683-5.352q0-8.974,12.667-15.892,5.562-3.085,8.974-3.085,2.9,0,2.9,2.8a8.093,8.093,0,0,1-.374,2.1l2.384-4.534a11.065,11.065,0,0,0,2.477.327,21.257,21.257,0,0,0,3.272-.327L198.057,35.4q-4.3,7.2-4.3,9.488,0,2.2,1.825,2.2,1.873,0,5.992-4.283a80.4,80.4,0,0,0,8.378-10.557q.281-.467.515-.467A.248.248,0,0,1,210.747,32.057ZM197.87,24.321q0-2.29-2.1-2.29-4.3,0-11.288,8.413t-6.988,13.6q0,3.038,2.711,3.038,3.225,0,11.171-10.7Q197.87,27.593,197.87,24.321Zm54.686-25.38q-.374.654-1.169,1.916-1.215,1.963-3.646,5.843-1.169,2.01-3.6,6.03L236.1,25.724q-4.02,6.5-6.824,11.779-3.132,5.889-5.048,9.114l-.608.935a11.4,11.4,0,0,0-2.477-.28,23.983,23.983,0,0,0-3.038.28q1.075-1.823,2.384-4.113L225.914,34q1.215-2.1,3.646-6.357l17.154-28.7a16.5,16.5,0,0,0,2.851.374A18.9,18.9,0,0,0,252.557-1.059ZM256.6,32.057a5,5,0,0,1-.468.749l-2.012,2.761q-8.843,12.218-13.336,12.218a5.228,5.228,0,0,1-3.556-1.357,4.036,4.036,0,0,1-1.544-3.09q0-1.5,2.617-6.693l.047-.188a6.531,6.531,0,0,0,.888-2.574q0-1.03-1.542-1.919a7.954,7.954,0,0,1-2.945.749q-1.636,0-1.636-.936,0-.793,1.542-.793a7.893,7.893,0,0,1,2.758.467q2.337-1.026,7.479-6.949,2.758-3.171,5.656-3.171,3.552,0,3.552,3.365a7.083,7.083,0,0,1-1.8,4.464q-1.8,2.22-3.576,2.22-2.01,0-2.01-1.823,0-1.683,3.038-3.6a2.509,2.509,0,0,0,1.262-2.244q0-1.122-1.449-1.122-2.01,0-5.048,3.543-3.88,4.429-6.31,5.5,4.861,2.247,4.861,5.2,0,1.638-2.29,6.319a7.719,7.719,0,0,0-.982,2.715q0,1.217,1.542,1.217,4.394,0,14.349-14.84.327-.467.608-.467Q256.6,31.776,256.6,32.057Zm32.812,0q0,.983-6.831,9.081-5.522,6.647-8.7,6.647a4.374,4.374,0,0,1-3.51-1.613,6.064,6.064,0,0,1-1.357-4.043,12.177,12.177,0,0,1,1.5-5.469,63.964,63.964,0,0,1-7.151,8.834,7.257,7.257,0,0,1-4.814,2.29,5.118,5.118,0,0,1-4.16-2.127,8.358,8.358,0,0,1-1.683-5.352q0-8.974,12.667-15.892,5.562-3.085,8.974-3.085,2.9,0,2.9,2.8a8.091,8.091,0,0,1-.374,2.1l2.384-4.534a11.065,11.065,0,0,0,2.477.327,21.257,21.257,0,0,0,3.272-.327L276.721,35.4q-4.3,7.2-4.3,9.488,0,2.2,1.825,2.2,1.873,0,5.992-4.283a80.406,80.406,0,0,0,8.378-10.557q.281-.467.515-.467A.248.248,0,0,1,289.412,32.057Zm-12.877-7.736q0-2.29-2.1-2.29-4.3,0-11.288,8.413t-6.988,13.6q0,3.038,2.711,3.038,3.225,0,11.171-10.7Q276.535,27.593,276.535,24.321Zm28.745-10.4q0,1.864-5.843,7.408a13.527,13.527,0,0,0-.28,2.524q0,2.711,2.477,8.6a13.113,13.113,0,0,1,1.262,4.955q0,4.207-4.09,7.292a15.648,15.648,0,0,1-9.7,3.085,7.057,7.057,0,0,1-5.071-1.8,6.36,6.36,0,0,1-1.893-4.838,11.227,11.227,0,0,1,2.5-6.824q2.5-3.319,5.165-3.319a1.855,1.855,0,0,1,.841.187l3.739-4.581q1.683-2.01,4.487-5.562a16.45,16.45,0,0,1,2.431-5.609q1.636-2.337,3.225-2.337Q305.28,13.1,305.28,13.922Zm-6.5,18.439q0-1.4-.093-2.781t-.094-3.95a27.274,27.274,0,0,1,.187-3.506q-2.617,3.319-7.572,9.348A2.3,2.3,0,0,1,292.1,33.3q0,2.758-4.534,3.739a5.8,5.8,0,0,0-3.155,1.986,5.024,5.024,0,0,0-1.332,3.3,4.105,4.105,0,0,0,1.355,3.132A4.75,4.75,0,0,0,287.8,46.71q3.926,0,7.455-4.557A15.694,15.694,0,0,0,298.783,32.361ZM323.462,12.73a4.351,4.351,0,0,1-1.379,3.062,4.139,4.139,0,0,1-3.015,1.426,1.859,1.859,0,0,1-2.1-2.1,4.176,4.176,0,0,1,1.449-2.968,4.32,4.32,0,0,1,3.038-1.426A1.776,1.776,0,0,1,323.462,12.73Zm.678,19.327a5.013,5.013,0,0,1-.467.749l-2.012,2.761q-8.8,12.218-13.43,12.218a4.838,4.838,0,0,1-3.673-1.566,5.473,5.473,0,0,1-1.474-3.9q0-2.711,3.225-8.226L313.6,21.7a11.057,11.057,0,0,0,2.29.327,26.917,26.917,0,0,0,3.552-.327l-10.61,17.434q-2.29,3.786-2.29,5.843,0,2.1,2.2,2.1,4.166,0,14.65-14.84.234-.467.468-.467A.248.248,0,0,1,324.14,32.057Zm29.961-.093a1.292,1.292,0,0,1-.468.843l-2.012,2.761q-8.8,12.218-13.1,12.218a4.681,4.681,0,0,1-3.674-1.613,5.877,5.877,0,0,1-1.427-4.043q0-3.272,3.552-8.554,5.562-8.18,5.562-9.722,0-1.823-1.916-1.823-2.8,0-7.665,5.515-4.674,5.282-12.854,20a12.477,12.477,0,0,0-2.384-.28,18.174,18.174,0,0,0-2.758.28l6.871-12.433q1.4-2.664,4.3-7.852,1.542-2.524,9.488-16.079l7.1-12.059a12.477,12.477,0,0,0,2.384.28,13.215,13.215,0,0,0,3.552-.467q-4.861,7.806-14.49,23.37l-7.245,12.059Q335.708,21.33,340.8,21.33a4.314,4.314,0,0,1,3.435,1.729,6.4,6.4,0,0,1,1.426,4.207q0,3.225-4.113,9.3-4.581,6.777-4.581,8.507a1.778,1.778,0,0,0,2.013,2.01q3.651,0,12.077-11.8l1.45-2.013.843-1.03q.234-.468.561-.468A.165.165,0,0,1,354.1,31.963Z" transform="translate(90.005 63.741)" fill="current"></path><g transform="matrix(1, 0, 0, 1, -34.98, -10.66)" filter="url(#Path_21582)"><path id="Path_21582-2" data-name="Path 21582" d="M71346.164,128106.008h510.281v-163.969h-510.281Zm515.141,5.664h-520.031c-2.7,0-4.945-1.219-4.945-2.828v-169.75c0-1.562,2.25-2.781,4.945-2.781H71861.3c2.75,0,5.117,1.219,5.117,2.781v169.75C71866.422,128110.453,71864.055,128111.672,71861.3,128111.672Z" transform="translate(-71301.35 -127925.66)" fill="current" fill-rule="evenodd"></path></g></g><g id="Group_889" data-name="Group 889" transform="translate(442.584)"><path id="Path_386" data-name="Path 386" d="M86948.938,127597.75a1.112,1.112,0,0,1-.641-.172,217.77,217.77,0,0,0-44.234-23.781c-24.25-9.609-61.008-19-98.461-9.109a1.012,1.012,0,0,1-1.359-.781,1.142,1.142,0,0,1,.781-1.391,140.494,140.494,0,0,1,53.727-3.109,193.633,193.633,0,0,1,46.2,12.344,224.681,224.681,0,0,1,44.672,24,1.316,1.316,0,0,1,.281,1.609A1.356,1.356,0,0,1,86948.938,127597.75Z" transform="translate(-86804.188 -127549.188)" fill="current" fill-rule="evenodd"></path><path id="Path_387" data-name="Path 387" d="M92294.844,127582.133c-.109,0-.3-.055-.445-.055-11.281-5.5-20.117-13.391-25.641-19a82.167,82.167,0,0,1-9.258-10.891,1.08,1.08,0,0,1,.25-1.555,1.137,1.137,0,0,1,1.617.219c.133.219,13.023,18.891,34,29.063a1.278,1.278,0,0,1,.555,1.664A1.4,1.4,0,0,1,92294.844,127582.133Z" transform="translate(-92223.672 -127541.453)" fill="current" fill-rule="evenodd"></path><path id="Path_388" data-name="Path 388" d="M100589.93,129210.633c-.2,0-.3-.164-.391-.164-11.055-4.719-19.117-15.336-23.867-23.555a92.782,92.782,0,0,1-7.836-16.562,1.012,1.012,0,0,1,.7-1.391,1.183,1.183,0,0,1,1.531.672,93.806,93.806,0,0,0,7.586,16.219c4.664,7.727,12.3,18.063,22.7,22.508a1.219,1.219,0,0,1,.609,1.555A1.112,1.112,0,0,1,100589.93,129210.633Z" transform="translate(-100468.078 -129149.383)" fill="current" fill-rule="evenodd"></path><path id="Path_389" data-name="Path 389" d="M106530.492,132317.094h-.133c-11.172-2.391-16.953-6.953-19.9-10.344a15.894,15.894,0,0,1-3.578-7.047c0-.453.164-.672.578-.734a.663.663,0,0,1,.586.563h0a14.588,14.588,0,0,0,3.391,6.547c2.75,3.234,8.25,7.625,19.172,9.844a.575.575,0,0,1,.414.672A.532.532,0,0,1,106530.492,132317.094Z" transform="translate(-106378.367 -132258.984)" fill="current" fill-rule="evenodd"></path><path id="Path_390" data-name="Path 390" d="M102963.344,129938.125h-.3c-18.945-5.172-30.062-3.062-30.148-3.062a1.241,1.241,0,0,1-1.328-.953,1.013,1.013,0,0,1,.859-1.219c.469-.219,11.781-2.391,31.258,3a1.415,1.415,0,0,1,.828,1.453A1.357,1.357,0,0,1,102963.344,129938.125Z" transform="translate(-102826.336 -129907.766)" fill="current" fill-rule="evenodd"></path><path id="Path_391" data-name="Path 391" d="M96698.094,127181.8v-.109l-2.25-.5c.172-.281.891-3,6.617-4.891,7-2.172,18.531-2.172,33.977.273a1.066,1.066,0,0,1,.945,1.281,1.207,1.207,0,0,1-1.227,1.055C96701.266,127173.469,96698.094,127181.7,96698.094,127181.8Z" transform="translate(-96631.383 -127168.211)" fill="current" fill-rule="evenodd"></path><path id="Path_392" data-name="Path 392" d="M97413.2,131904.125a3.035,3.035,0,0,1-2.3-3.672,3.109,3.109,0,0,1,3.586-2.328,3.019,3.019,0,0,1,2.359,3.609A3.1,3.1,0,0,1,97413.2,131904.125Z" transform="translate(-97341.648 -131860.875)" fill="current" fill-rule="evenodd"></path><path id="Path_393" data-name="Path 393" d="M100853.4,131978.891a3.024,3.024,0,0,1,1.367-5.891,3.025,3.025,0,1,1-1.367,5.891Z" transform="translate(-100759.461 -131935.188)" fill="current" fill-rule="evenodd"></path><path id="Path_394" data-name="Path 394" d="M105145.367,134963.781a2.986,2.986,0,0,1-2.25-3.609,3.063,3.063,0,0,1,3.672-2.172,2.8,2.8,0,0,1,2.273,3.547A3,3,0,0,1,105145.367,134963.781Z" transform="translate(-105023.453 -134900.641)" fill="current" fill-rule="evenodd"></path><path id="Path_395" data-name="Path 395" d="M107453.4,133324.188a3.066,3.066,0,0,1,1.25-6,2.953,2.953,0,0,1,2.359,3.609A3.014,3.014,0,0,1,107453.4,133324.188Z" transform="translate(-107316.391 -133271.594)" fill="current" fill-rule="evenodd"></path><path id="Path_396" data-name="Path 396" d="M108325.359,134555.922a3.255,3.255,0,0,1-2.336-3.672,3.068,3.068,0,0,1,3.641-2.219,2.864,2.864,0,0,1,2.3,3.547A3.041,3.041,0,0,1,108325.359,134555.922Z" transform="translate(-108182.664 -134495.375)" fill="current" fill-rule="evenodd"></path><path id="Path_397" data-name="Path 397" d="M110026.359,134788.172a3.331,3.331,0,0,1-2.273-3.781,3.08,3.08,0,1,1,6,1.391A3.449,3.449,0,0,1,110026.359,134788.172Z" transform="translate(-109872.602 -134725.969)" fill="current" fill-rule="evenodd"></path><path id="Path_398" data-name="Path 398" d="M109118.383,133972.2a3.191,3.191,0,0,1-2.328-3.672,3.152,3.152,0,0,1,3.641-2.437,2.909,2.909,0,0,1,2.273,3.609A3.032,3.032,0,0,1,109118.383,133972.2Z" transform="translate(-108970.531 -133915.172)" fill="current" fill-rule="evenodd"></path><path id="Path_399" data-name="Path 399" d="M108749.359,132634.891a3.018,3.018,0,0,1-2.336-3.547,2.938,2.938,0,0,1,3.617-2.219,3.053,3.053,0,0,1,2.414,3.547A2.881,2.881,0,0,1,108749.359,132634.891Z" transform="translate(-108603.852 -132586.906)" fill="current" fill-rule="evenodd"></path><path id="Path_400" data-name="Path 400" d="M107770.453,131588.938a3.156,3.156,0,0,1-2.336-3.719,2.943,2.943,0,0,1,3.641-2.172,2.856,2.856,0,0,1,2.273,3.5A3.056,3.056,0,0,1,107770.453,131588.938Z" transform="translate(-107631.305 -131547.75)" fill="current" fill-rule="evenodd"></path><path id="Path_401" data-name="Path 401" d="M106531.438,131895.953a3.047,3.047,0,0,1-2.227-3.672,2.992,2.992,0,0,1,3.617-2.109,2.841,2.841,0,0,1,2.328,3.5A2.957,2.957,0,0,1,106531.438,131895.953Z" transform="translate(-106400.531 -131852.922)" fill="current" fill-rule="evenodd"></path><path id="Path_402" data-name="Path 402" d="M103660.617,134722a3.14,3.14,0,0,1-2.25-3.781,3.04,3.04,0,0,1,5.914,1.391A3.249,3.249,0,0,1,103660.617,134722Z" transform="translate(-103548.336 -134660.406)" fill="current" fill-rule="evenodd"></path><path id="Path_403" data-name="Path 403" d="M102442.516,133888.922a2.99,2.99,0,0,1-2.336-3.5,3.041,3.041,0,1,1,5.945,1.281A2.959,2.959,0,0,1,102442.516,133888.922Z" transform="translate(-102338.117 -133832.844)" fill="current" fill-rule="evenodd"></path><path id="Path_404" data-name="Path 404" d="M101531.367,133688.188a2.961,2.961,0,0,1-2.25-3.594,3.013,3.013,0,0,1,5.891,1.266A2.953,2.953,0,0,1,101531.367,133688.188Z" transform="translate(-101432.977 -133633.266)" fill="current" fill-rule="evenodd"></path><path id="Path_405" data-name="Path 405" d="M102487.3,132311.828a2.837,2.837,0,0,1-2.25-3.547,3.073,3.073,0,0,1,3.578-2.281,3.026,3.026,0,0,1,2.336,3.672A3.062,3.062,0,0,1,102487.3,132311.828Z" transform="translate(-102382.68 -132265.906)" fill="current" fill-rule="evenodd"></path><path id="Path_406" data-name="Path 406" d="M104073.461,130141.023a3.1,3.1,0,1,1,3.609-2.391A3.113,3.113,0,0,1,104073.461,130141.023Z" transform="translate(-103958.477 -130109.164)" fill="current" fill-rule="evenodd"></path><path id="Path_407" data-name="Path 407" d="M105258.273,130402.078a3.01,3.01,0,0,1-2.3-3.562,3.138,3.138,0,0,1,3.641-2.328,2.881,2.881,0,0,1,2.3,3.609A2.973,2.973,0,0,1,105258.273,130402.078Z" transform="translate(-105135.57 -130368.625)" fill="current" fill-rule="evenodd"></path><path id="Path_408" data-name="Path 408" d="M106192.266,129653.188a3.018,3.018,0,0,1-2.3-3.555,3.041,3.041,0,0,1,5.969,1.164A3.057,3.057,0,0,1,106192.266,129653.188Z" transform="translate(-106063.477 -129624.547)" fill="current" fill-rule="evenodd"></path><path id="Path_409" data-name="Path 409" d="M107893.359,129878.742a3,3,0,0,1-2.359-3.609,2.886,2.886,0,0,1,3.641-2.336,2.967,2.967,0,0,1,2.266,3.563A3,3,0,0,1,107893.359,129878.742Z" transform="translate(-107753.406 -129848.617)" fill="current" fill-rule="evenodd"></path><path id="Path_410" data-name="Path 410" d="M107047.32,130424.969a2.826,2.826,0,0,1-2.141-3.609,2.945,2.945,0,0,1,3.469-2.336,3.043,3.043,0,0,1,2.445,3.555A3.141,3.141,0,0,1,107047.32,130424.969Z" transform="translate(-106913.102 -130391.32)" fill="current" fill-rule="evenodd"></path><path id="Path_411" data-name="Path 411" d="M102793.3,129652.1a2.959,2.959,0,0,1-2.273-3.617,3.072,3.072,0,0,1,3.586-2.273,2.96,2.96,0,0,1,2.328,3.664A3.045,3.045,0,0,1,102793.3,129652.1Z" transform="translate(-102686.688 -129623.523)" fill="current" fill-rule="evenodd"></path><path id="Path_412" data-name="Path 412" d="M104924.391,129001.211a2.955,2.955,0,0,1-2.3-3.555,3.056,3.056,0,0,1,3.609-2.445,3.07,3.07,0,1,1-1.3,6Z" transform="translate(-104803.844 -128976.773)" fill="current" fill-rule="evenodd"></path><path id="Path_413" data-name="Path 413" d="M103621.3,133751.75a3.02,3.02,0,0,1,1.336-5.891,3.045,3.045,0,0,1,2.3,3.563A2.871,2.871,0,0,1,103621.3,133751.75Z" transform="translate(-103509.25 -133696.359)" fill="current" fill-rule="evenodd"></path><path id="Path_414" data-name="Path 414" d="M104743.422,133865.031a2.8,2.8,0,0,1-2.273-3.5,2.981,2.981,0,0,1,3.609-2.391,3.27,3.27,0,0,1,2.3,3.625A3.026,3.026,0,0,1,104743.422,133865.031Z" transform="translate(-104624.109 -133809.016)" fill="current" fill-rule="evenodd"></path><path id="Path_415" data-name="Path 415" d="M105519.539,132700.063a3.1,3.1,0,0,1-2.422-3.672,3.025,3.025,0,0,1,3.672-2.266,2.859,2.859,0,0,1,2.3,3.5A3.038,3.038,0,0,1,105519.539,132700.063Z" transform="translate(-105395.031 -132651.438)" fill="current" fill-rule="evenodd"></path><path id="Path_416" data-name="Path 416" d="M101726.57,131432.391a3.343,3.343,0,0,1-2.391-3.875,3.1,3.1,0,0,1,3.617-2.172,3.088,3.088,0,0,1-1.227,6.047Z" transform="translate(-101626.805 -131392.047)" fill="current" fill-rule="evenodd"></path><path id="Path_417" data-name="Path 417" d="M95463.406,130206.883a2.94,2.94,0,0,1-2.383-3.609,3.013,3.013,0,0,1,3.609-2.281,3.062,3.062,0,0,1,2.359,3.609A2.986,2.986,0,0,1,95463.406,130206.883Z" transform="translate(-95404.484 -130174.695)" fill="current" fill-rule="evenodd"></path><path id="Path_418" data-name="Path 418" d="M97053.328,130080.188a3.173,3.173,0,0,1-2.367-3.719,2.958,2.958,0,0,1,3.617-2.227,2.877,2.877,0,0,1,2.328,3.555A3.173,3.173,0,0,1,97053.328,130080.188Z" transform="translate(-96984.063 -130048.734)" fill="current" fill-rule="evenodd"></path><path id="Path_419" data-name="Path 419" d="M95690.461,131340.922a2.879,2.879,0,0,1-2.227-3.672,2.924,2.924,0,0,1,3.563-2.172,3.11,3.11,0,0,1,2.328,3.625A3.237,3.237,0,0,1,95690.461,131340.922Z" transform="translate(-95630.211 -131301.391)" fill="current" fill-rule="evenodd"></path><path id="Path_420" data-name="Path 420" d="M98391.734,129635.156a3.042,3.042,0,0,1-2.3-3.719,2.972,2.972,0,0,1,3.586-2.227,3.045,3.045,0,0,1,2.328,3.672A3.1,3.1,0,0,1,98391.734,129635.156Z" transform="translate(-98313.813 -129606.625)" fill="current" fill-rule="evenodd"></path><path id="Path_421" data-name="Path 421" d="M93135.664,129599.969a3.161,3.161,0,0,1-2.391-3.781,3.076,3.076,0,0,1,5.977,1.445A3.215,3.215,0,0,1,93135.664,129599.969Z" transform="translate(-93091.93 -129571.664)" fill="current" fill-rule="evenodd"></path><path id="Path_422" data-name="Path 422" d="M94315.133,129383.016a3,3,0,0,1-2.422-3.5,3.119,3.119,0,0,1,3.7-2.391,2.962,2.962,0,0,1,2.227,3.719A2.865,2.865,0,0,1,94315.133,129383.016Z" transform="translate(-94263.695 -129356.211)" fill="current" fill-rule="evenodd"></path><path id="Path_423" data-name="Path 423" d="M97059.18,127890.094a3.012,3.012,0,0,1-2.312-3.672,3.02,3.02,0,0,1,5.891,1.336A2.85,2.85,0,0,1,97059.18,127890.094Z" transform="translate(-96989.953 -127872.914)" fill="current" fill-rule="evenodd"></path><path id="Path_424" data-name="Path 424" d="M97817.7,126618.984a2.988,2.988,0,1,1,1.281-5.836,3.056,3.056,0,0,1,2.328,3.609A2.975,2.975,0,0,1,97817.7,126618.984Z" transform="translate(-97743.492 -126610.258)" fill="current" fill-rule="evenodd"></path><path id="Path_425" data-name="Path 425" d="M99218.125,127460.188a3.05,3.05,0,0,1,1.359-5.945,2.983,2.983,0,0,1,2.336,3.609A3.119,3.119,0,0,1,99218.125,127460.188Z" transform="translate(-99134.844 -127445.906)" fill="current" fill-rule="evenodd"></path><path id="Path_426" data-name="Path 426" d="M99977.609,126186.07a3.082,3.082,0,0,1-2.3-3.617,3.179,3.179,0,0,1,3.7-2.3,3.033,3.033,0,0,1,2.25,3.586A2.953,2.953,0,0,1,99977.609,126186.07Z" transform="translate(-99889.336 -126180.078)" fill="current" fill-rule="evenodd"></path><path id="Path_427" data-name="Path 427" d="M102702.313,127011.031a2.972,2.972,0,0,1-2.164-3.719,2.905,2.905,0,0,1,3.5-2.227,3.023,3.023,0,0,1,2.414,3.555A3.2,3.2,0,0,1,102702.313,127011.031Z" transform="translate(-102596.32 -126999.594)" fill="current" fill-rule="evenodd"></path><path id="Path_428" data-name="Path 428" d="M101060.367,126857.063a3.124,3.124,0,0,1-2.281-3.609,3.066,3.066,0,1,1,2.281,3.609Z" transform="translate(-100965.102 -126846.586)" fill="current" fill-rule="evenodd"></path><path id="Path_429" data-name="Path 429" d="M100392.4,127720.133a3.049,3.049,0,0,1-2.281-3.555,2.954,2.954,0,0,1,3.641-2.336,3,3,0,0,1,2.336,3.555A3.128,3.128,0,0,1,100392.4,127720.133Z" transform="translate(-100301.445 -127704.172)" fill="current" fill-rule="evenodd"></path><path id="Path_430" data-name="Path 430" d="M98202.938,128325.969a3.041,3.041,0,0,1-2.227-3.727,3.009,3.009,0,0,1,5.867,1.336A3.226,3.226,0,0,1,98202.938,128325.969Z" transform="translate(-98126.32 -128305.883)" fill="current" fill-rule="evenodd"></path><path id="Path_431" data-name="Path 431" d="M95663.391,127327.922a3.018,3.018,0,0,1-2.266-3.672,2.971,2.971,0,0,1,3.641-2.164,2.886,2.886,0,0,1,2.3,3.609A3.037,3.037,0,0,1,95663.391,127327.922Z" transform="translate(-95603.289 -127314.57)" fill="current" fill-rule="evenodd"></path><path id="Path_432" data-name="Path 432" d="M94064.109,127558.188a3.047,3.047,0,0,1,1.336-5.945,3.127,3.127,0,0,1,2.359,3.609A3.293,3.293,0,0,1,94064.109,127558.188Z" transform="translate(-94014.398 -127543.18)" fill="current" fill-rule="evenodd"></path><path id="Path_433" data-name="Path 433" d="M95429.8,128600.133a3.021,3.021,0,1,1,3.594-2.336A2.9,2.9,0,0,1,95429.8,128600.133Z" transform="translate(-95371.234 -128578.359)" fill="current" fill-rule="evenodd"></path></g><g id="Group_890" data-name="Group 890" transform="translate(0 132.852)"><path id="Path_434" data-name="Path 434" d="M70542.344,141077.266h-.187a203.292,203.292,0,0,1-30.039-7.5c-15.8-5.062-38.648-14.828-57.617-31.109a1.036,1.036,0,0,1-.109-1.562.987.987,0,0,1,1.547-.062c18.758,16.016,41.266,25.625,56.906,30.672a191.055,191.055,0,0,0,25.422,6.563c-1.7-1-3.977-2.391-6.367-3.547-12.914-7.281-34.648-19.453-44.008-40.453a1.066,1.066,0,0,1,2-.734c9.031,20.063,30.367,32.234,43.148,39.125,5.336,3.109,8.977,5.109,10.164,6.891a.954.954,0,0,1,.063,1.219A.862.862,0,0,1,70542.344,141077.266Z" transform="translate(-70447.672 -141022.219)" fill="current"></path><path id="Path_435" data-name="Path 435" d="M74314.539,147945.844a119.6,119.6,0,0,1-18.062-1.562,255.668,255.668,0,0,1-26.477-6.125l.672-2.156c.5.125,48.7,15,62.727,2.906l1.477,1.594Q74328.664,147945.844,74314.539,147945.844Z" transform="translate(-74239.539 -147885.609)" fill="current"></path><path id="Path_436" data-name="Path 436" d="M74847.508,141878.859s-1.531,5.719-5.727,4.375c-4-1.219-4.8-3.937-4.969-4.609-.422-.937,2.469-2.828,4.055-3.547C74842.508,141874.344,74847.063,141875.8,74847.508,141878.859Z" transform="translate(-74802.688 -141862.859)" fill="current" fill-rule="evenodd"></path><path id="Path_437" data-name="Path 437" d="M76292.727,148892.7s4.7,3.672,1.945,6.891c-2.75,3.344-5.445,2.953-6.2,2.891-1.023,0-1.523-3.328-1.664-4.937C76286.727,148895.594,76289.977,148892.094,76292.727,148892.7Z" transform="translate(-76243.641 -148836.328)" fill="current" fill-rule="evenodd"></path><path id="Path_438" data-name="Path 438" d="M70638.336,143451.5s-.031,6.109-4.25,5.719c-4.336-.062-5.672-2.328-6.141-3-.586-.719,1.7-3.219,3.055-4.453C70632.359,143448.656,70637.172,143449,70638.336,143451.5Z" transform="translate(-70620.344 -143427.25)" fill="current" fill-rule="evenodd"></path><path id="Path_439" data-name="Path 439" d="M75923.352,143262.656s-.609,5.938-4.828,5.266c-4.336-.609-5.367-3.047-5.781-3.719-.5-.891,2-3.172,3.555-4.219C75917.711,143258.984,75922.438,143259.766,75923.352,143262.656Z" transform="translate(-75871.836 -143238.797)" fill="current" fill-rule="evenodd"></path><path id="Path_440" data-name="Path 440" d="M77819.172,149116.906s3.133,5.109-.586,7.109c-3.8,2.109-6.141.891-6.867.672-1-.344-.3-3.734.25-5.391C77812.445,149117.453,77816.727,149115.3,77819.172,149116.906Z" transform="translate(-77758.375 -149058.469)" fill="current" fill-rule="evenodd"></path><path id="Path_441" data-name="Path 441" d="M72270.414,144519.594s-.664,6-4.891,5.344c-4.3-.672-5.391-3.172-5.75-3.781-.523-1,1.977-3,3.445-4.172C72264.7,144516.047,72269.5,144516.813,72270.414,144519.594Z" transform="translate(-72241.898 -144487.906)" fill="current" fill-rule="evenodd"></path><path id="Path_442" data-name="Path 442" d="M77387.156,144613.234s1.844,5.609-2.281,6.891c-4.109,1.109-6.125-.672-6.687-1.172-.859-.547.563-3.609,1.422-5.156C77380.516,144612.172,77385.219,144611.172,77387.156,144613.234Z" transform="translate(-77327.813 -144582.797)" fill="current" fill-rule="evenodd"></path><path id="Path_443" data-name="Path 443" d="M73855.367,145462.031s1.75,5.672-2.336,6.781c-4.109,1.172-6.25-.609-6.75-1-.859-.562.5-3.672,1.469-5.219C73848.672,145460.922,73853.336,145459.813,73855.367,145462.031Z" transform="translate(-73818.25 -145426.172)" fill="current" fill-rule="evenodd"></path><path id="Path_444" data-name="Path 444" d="M79003.43,145852.906s1.477,4.828-1.969,5.891a6.129,6.129,0,0,1-5.812-.953c-.7-.547.555-2.937,1.281-4.437C78997.734,145852.016,79001.68,145850.953,79003.43,145852.906Z" transform="translate(-78935.188 -145814.688)" fill="current" fill-rule="evenodd"></path><path id="Path_445" data-name="Path 445" d="M78380.422,147307.719s1.586,4.734-1.945,5.844c-3.477,1.047-5.227-.453-5.8-.891-.609-.453.578-3.062,1.3-4.391C78374.781,147306.891,78378.727,147305.891,78380.422,147307.719Z" transform="translate(-78316.125 -147260.344)" fill="current" fill-rule="evenodd"></path><path id="Path_446" data-name="Path 446" d="M80906.039,149316.844s1.523,4.844-2,5.844a5.814,5.814,0,0,1-5.727-.906c-.75-.594.5-3.156,1.3-4.375C80900.344,149315.906,80904.344,149315,80906.039,149316.844Z" transform="translate(-80825.742 -149256.781)" fill="current" fill-rule="evenodd"></path><path id="Path_447" data-name="Path 447" d="M74625.039,148410.859s1.508,4.766-1.883,5.766c-3.445,1.125-5.312-.375-5.812-.875-.719-.453.5-3,1.281-4.391C74619.461,148410.125,74623.43,148409.188,74625.039,148410.859Z" transform="translate(-74584.453 -148356.625)" fill="current" fill-rule="evenodd"></path><path id="Path_448" data-name="Path 448" d="M77107.633,146810.969s1.609,4.891-1.977,5.781a5.917,5.917,0,0,1-5.719-.828c-.617-.625.555-3.125,1.25-4.391C77102.047,146810.141,77106.023,146809.141,77107.633,146810.969Z" transform="translate(-77051.445 -146766.766)" fill="current" fill-rule="evenodd"></path><path id="Path_449" data-name="Path 449" d="M75573.266,146201.969s1.523,4.844-2,5.781c-3.477,1-5.172-.437-5.7-.844-.781-.437.469-3.156,1.25-4.547C75567.625,146201.094,75571.57,146200.188,75573.266,146201.969Z" transform="translate(-75526.664 -146161.734)" fill="current" fill-rule="evenodd"></path><path id="Path_450" data-name="Path 450" d="M79601.172,149387.719s3.086,4.219.117,6.281c-3,2.047-5.117,1.156-5.75.938-.758-.109-.477-3-.227-4.547C79595.648,149389,79599.039,149386.656,79601.172,149387.719Z" transform="translate(-79530.906 -149327.969)" fill="current" fill-rule="evenodd"></path><path id="Path_451" data-name="Path 451" d="M80354.734,144649.328s-5.781-2.953-3.5-7.016c2.227-4.109,5.172-4.328,5.945-4.5,1.109-.156,2.414,3.281,2.891,5.172C80360.594,144644.984,80357.875,144649.375,80354.734,144649.328Z" transform="translate(-80281.82 -144608.234)" fill="current" fill-rule="evenodd"></path><path id="Path_452" data-name="Path 452" d="M78537.492,145671.2s-4.523-2.281-2.773-5.562a6.651,6.651,0,0,1,4.75-3.609c.859-.109,1.891,2.672,2.391,4.172C78542.219,145667.766,78540.055,145671.375,78537.492,145671.2Z" transform="translate(-78476.898 -145626.031)" fill="current" fill-rule="evenodd"></path><path id="Path_453" data-name="Path 453" d="M80409.477,147919.828s-5.023,1.109-5.773-2.437c-.727-3.781.938-5.453,1.328-5.844.641-.609,3.109.844,4.445,1.563C80410.781,147914.047,80411.4,147918.156,80409.477,147919.828Z" transform="translate(-80334.266 -147861.297)" fill="current" fill-rule="evenodd"></path><path id="Path_454" data-name="Path 454" d="M79032.734,147904.688s-5.117,1.219-5.812-2.453c-.641-3.547,1-5.281,1.391-5.656.586-.672,3.164.5,4.422,1.547C79034.039,147899.188,79034.7,147903.3,79032.734,147904.688Z" transform="translate(-78966.258 -147846.375)" fill="current" fill-rule="evenodd"></path><path id="Path_455" data-name="Path 455" d="M77053.992,147584.359s-5.031,1.281-5.75-2.375c-.75-3.734.969-5.234,1.414-5.734.555-.937,3.086.719,4.336,1.609C77055.3,147578.75,77055.992,147582.922,77053.992,147584.359Z" transform="translate(-77000.016 -147527.938)" fill="current" fill-rule="evenodd"></path><path id="Path_456" data-name="Path 456" d="M75437.969,147283.484s-4.945,1.172-5.727-2.5a6.429,6.429,0,0,1,1.336-5.656c.664-.672,3.141.719,4.391,1.5C75439.3,147277.875,75439.969,147281.875,75437.969,147283.484Z" transform="translate(-75394.195 -147229.031)" fill="current" fill-rule="evenodd"></path><path id="Path_457" data-name="Path 457" d="M78646.3,143413.766s-5.914-3-3.609-7.156c2.2-4.172,5.2-4.281,6.031-4.453,1.078-.328,2.328,3.219,2.945,5.109C78652.219,143409.266,78649.352,143413.875,78646.3,143413.766Z" transform="translate(-78584.109 -143380.406)" fill="current" fill-rule="evenodd"></path><path id="Path_458" data-name="Path 458" d="M76605.813,144961.984s-4.914-2.5-2.891-5.937c1.836-3.391,4.25-3.609,4.922-3.672.969-.109,1.914,2.719,2.414,4.219C76610.672,144958.328,76608.4,144962.047,76605.813,144961.984Z" transform="translate(-76557.188 -144921.016)" fill="current" fill-rule="evenodd"></path><path id="Path_459" data-name="Path 459" d="M77209.875,141861.875s-5.891-2.937-3.586-7.328c2.336-4.062,5.281-4.062,6.063-4.453,1.164-.109,2.383,3.281,2.914,5.391C77215.8,141857.375,77213.016,141861.984,77209.875,141861.875Z" transform="translate(-77156.742 -141838.188)" fill="current" fill-rule="evenodd"></path><path id="Path_460" data-name="Path 460" d="M74872.164,144183.906s-4.555-2.266-2.836-5.5c1.836-3.156,4.086-3.437,4.672-3.5.883-.156,1.773,2.563,2.25,4.109C74876.609,144180.406,74874.523,144183.906,74872.164,144183.906Z" transform="translate(-74834.68 -144148.328)" fill="current" fill-rule="evenodd"></path><path id="Path_461" data-name="Path 461" d="M73359.914,143233.359s-4.641-2.437-2.781-5.719a6.235,6.235,0,0,1,4.922-3.609c.836-.109,1.836,2.781,2.25,4.172C73364.773,143229.813,73362.555,143233.422,73359.914,143233.359Z" transform="translate(-73331.961 -143203.563)" fill="current" fill-rule="evenodd"></path><path id="Path_462" data-name="Path 462" d="M76168.484,140440.859s-4.945-4.437-1.672-7.891c3.367-3.281,6.281-2.828,7.117-2.547,1.055.047,1.469,3.719,1.469,5.656C76175.4,140438.078,76171.508,140441.922,76168.484,140440.859Z" transform="translate(-76123.273 -140427.359)" fill="current" fill-rule="evenodd"></path><path id="Path_463" data-name="Path 463" d="M71700.391,142153.641s-5.055-2-3.445-5.625c1.609-3.609,3.977-4,4.641-4.109.945-.109,2.2,2.563,2.8,4C71704.891,142149.578,71703,142153.359,71700.391,142153.641Z" transform="translate(-71682.453 -142130.156)" fill="current" fill-rule="evenodd"></path><path id="Path_464" data-name="Path 464" d="M74472.984,139979.094s-4.641,4.609-7.891,1.063a8.238,8.238,0,0,1-2.219-7.391c.25-1.062,3.859-1.062,5.914-.891C74470.766,139972.094,74474.18,139976.094,74472.984,139979.094Z" transform="translate(-74431 -139971.797)" fill="current" fill-rule="evenodd"></path><path id="Path_465" data-name="Path 465" d="M73333.586,147300.219s-4.781,4.719-7.891,1c-3.141-3.562-2.445-6.281-2.25-7.172.164-1.219,3.8-1.219,5.891-1C73331.281,147293.219,73334.781,147297.281,73333.586,147300.219Z" transform="translate(-73298.734 -147246.75)" fill="current" fill-rule="evenodd"></path><path id="Path_466" data-name="Path 466" d="M69450.172,141667.438s-4.781,4.563-7.922,1c-3.055-3.5-2.359-6.391-2.2-7.172.164-1.109,3.836-1.156,5.859-1.047C69447.922,141660.438,69451.359,141664.547,69450.172,141667.438Z" transform="translate(-69439.867 -141649.422)" fill="current" fill-rule="evenodd"></path></g></svg>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Modal opening-->
    <div class="modal fade" id="modalbuka" style="text-align: center;" data-backdrop="static">

        <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-5" style="background-image: url('https://i.pinimg.com/236x/81/68/77/8168774f8b714d65417e7615aac3f361.jpg'); background-size: cover">
                    <div class="modal-body">
                        <figure class="avatar avatar-xxl" style="height: 100px; width: 100px; margin-bottom: 10px;">
                            <img src="https://picturepan2.github.io/spectre/img/avatar-3.png" alt="...">
                        </figure>
                        <p>Kepada Yth.<br>
                        Bapak/Ibu/Saudara/i</p>
                        <h1 class="font-utama" style="font-weight: normal; color: #1a1a1a">{{$penerima}}</h1>
                        <p>Di tempat</p>
                            <br>
                        <a href="javascript:void(0)" id="openbutton" class="btn btn-secondary" style="background-color: #b1a59e">Buka Undangan</a>
                    </div>
                </div>
            </div>
        </div>


    <audio id="bgm">
        <source src="{{ asset('assets/bgm.mp3') }}" type="audio/mpeg">
    </audio>


@endsection
<script>

</script>
@push('page_scripts')

    <script>
        var namainput = document.getElementById('namainput');
        var ucapaninput = document.getElementById('ucapaninput');
        var submitbutton = document.getElementById('submitbutton');
        var bgm = document.getElementById('bgm');
        var openbutton = document.getElementById('openbutton');

        submitbutton.addEventListener("click", function (){
            if(namainput.value !== '' && ucapaninput.value !== ''){
                var url = '{{ route("ucapan.put") }}';
                var data = {
                    nama : namainput.value,
                    ucapan : ucapaninput.value
                };

                $.ajax({
                    url: url,
                    method: "POST",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        $('#messagebox').prepend(
                            '<div class="card p-3 m-2" style="border-radius: 16px">' +
                            '<li class="media p-0">' +
                            '<figure class="avatar mr-2 text-white" data-initial="'+ data.nama[0] +'" style="background-color: #b1a59e"></figure>' +
                            '<div class="media-body text-left">' +
                            '<h6 class="media-title">'+ data.nama +'</h6>'+
                            '<div class="text-small">'+ data.ucapan +'</div>' +
                            '<i class="far fa-clock text-small"></i><text class="text-small text-muted" style="font-size: 12px"> '+ data.tanggal +'</text>'+
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

        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let acara = "Jul 3, 2021 08:00:00",
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
