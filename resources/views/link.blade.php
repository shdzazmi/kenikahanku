@extends('layouts.app')
@section('title', 'Link Undangan')

@section('content')
    <section class="section">
        <div class="section-header">
            <h4 class="page__heading">Link Undangan Bella & Adam</h4>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Cara Menggunakan</h4>
                        </div>
                        <div class="card-body">
                            <p>Untuk <b class="text-success">Whatsapp</b>: Klik Icon <i class="fab fa-whatsapp text-success"></i> untuk kirim ke WA penerima, <i>Nomor WA penerima wajib sudah di tambahkan ke kontak</i></p>
                            <p>Untuk <b class="text-danger">Instagram</b>: Klik Icon <i class="far fa-clipboard"></i>
                                untuk copy
                                teks undangan, lalu klik
                                icon <i class="fab fa-instagram text-danger"></i> untuk buka DM IG penerima, <i>IG private harus sudah saling follow back</i></p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <h5>Adam</h5>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableKawal"
                                        role="button">Kawal</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableStation"
                                        role="button">Station</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableSD" role="button">SD</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableSMP"
                                        role="button">SMP</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableSMK"
                                        role="button">SMK</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableKuliah"
                                        role="button">Kuliah</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#table2m1t"
                                        role="button">2m1t</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableKelelawar"
                                        role="button">Kelelawar</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableMerch"
                                        role="button">Merch</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableIG" role="button">IG</a>
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <h5>Bella</h5>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableBotanic"
                                        role="button">Botanic</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableTheHotel"
                                        role="button">The Hotel</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableSMPSMK"
                                        role="button">SMP SMK</a>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#tableIGBella"
                                        role="button">IG</a>
                                </div>
                            </div>
                            <div class="collapse" id="tableKawal">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $no = 1;
                                        @endphp

                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Rifki dan Kesendiriannya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Rifki dan Kesendiriannya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282189998564','Rifki dan Kesendiriannya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="collapse" id="tableStation">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Rifani dan Erna</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Rifani dan Erna')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282251088774','Rifani dan Erna')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Risky Dan Calon Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Risky Dan Calon Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282138039435','Risky Dan Calon Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableSD">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Vivi dan Suami</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Vivi dan Suami')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6283832225531','Vivi dan Suami')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Seima dan Suami</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Seima dan Suami')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282154181897','Seima dan Suami')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Dillah dan Gita</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Dillah dan Gita')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281649462805','Dillah dan Gita')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Galang dan Ading</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Galang dan Ading')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281254445992','Galang dan Ading')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Rahmi dan Patner</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Rahmi dan Patner')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285752036176','Rahmi dan Patner')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableSMP">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Ardi dan Istri </td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Ardi dan Istri ')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282154728477','Ardi dan Istri ')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Gilang dan Calon istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Gilang dan Calon istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('628118454040','Gilang dan Calon istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Bahrul dan Jodoh</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Bahrul dan Jodoh')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281327619687','Bahrul dan Jodoh')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Dody dan Calon Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Dody dan Calon Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282354995373','Dody dan Calon Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Kaisar dan Odi</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Kaisar dan Odi')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282243128430','Kaisar dan Odi')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Raihan dan Nia</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Raihan dan Nia')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281522642609','Raihan dan Nia')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Epi dan Para Wanitanya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Epi dan Para Wanitanya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282152333928','Epi dan Para Wanitanya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Primus dan Sherly</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Primus dan Sherly')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281256699724','Primus dan Sherly')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Ladut dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Ladut dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285751981309','Ladut dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Rizky dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Rizky dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281254486367','Rizky dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Windy dan Patner</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Windy dan Patner')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282153925992','Windy dan Patner')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Bagus dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Bagus dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285249949705','Bagus dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Adit Jambul dan El</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Adit Jambul dan El')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285717593617','Adit Jambul dan El')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Dian dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Dian dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281346340805','Dian dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Edo dan Patner</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Edo dan Patner')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285349192149','Edo dan Patner')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Sulis dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Sulis dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282155209427','Sulis dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Imam dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Imam dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282251470621','Imam dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableSMK">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Dimas dan Calon Istrinya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Dimas dan Calon Istrinya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285248168889','Dimas dan Calon Istrinya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Arroza dan ……</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Arroza dan ……')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282261215750','Arroza dan ……')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Bambang dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Bambang dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282138338589','Bambang dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Fikri dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Fikri dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281395004445','Fikri dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Guntur dan Sherly</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Guntur dan Sherly')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285325394992','Guntur dan Sherly')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Okta dan Calon Suami</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Okta dan Calon Suami')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285250250940','Okta dan Calon Suami')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Devi dan Reza</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Devi dan Reza')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282254002831','Devi dan Reza')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Yunita dan Calon Suami</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Yunita dan Calon Suami')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285247293339','Yunita dan Calon Suami')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableKuliah">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Willyardo dan Calon Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Willyardo dan Calon Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285346897319','Willyardo dan Calon Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Nando dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Nando dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282210947539','Nando dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Herman dan Calon Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Herman dan Calon Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281313608040','Herman dan Calon Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Dina dan Calon Suami</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Dina dan Calon Suami')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6283854016832','Dina dan Calon Suami')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Iqbal dan Juju</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Iqbal dan Juju')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281346234657','Iqbal dan Juju')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Katon dan Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Katon dan Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282149881752','Katon dan Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Rahmat dan Wanitanya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Rahmat dan Wanitanya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282213091502','Rahmat dan Wanitanya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Oliv dan Rhe</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Oliv dan Rhe')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285388278713','Oliv dan Rhe')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Nurvita dan Calon Suami</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Nurvita dan Calon Suami')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282114753945','Nurvita dan Calon Suami')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Reza dan Semua wanitanya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Reza dan Semua wanitanya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285173238297','Reza dan Semua wanitanya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Vegi dan Idol KPOP</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Vegi dan Idol KPOP')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285161019979','Vegi dan Idol KPOP')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="table2m1t">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Ali dan Patner</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Ali dan Patner')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282256273191','Ali dan Patner')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Andi dan Ayu</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Andi dan Ayu')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282150289321','Andi dan Ayu')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Angga Dan Cindy</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Angga Dan Cindy')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285158220203','Angga Dan Cindy')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Iqbal dan Dhea</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Iqbal dan Dhea')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281351832687','Iqbal dan Dhea')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Dede dan Hmmmm</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Dede dan Hmmmm')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282150013423','Dede dan Hmmmm')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableKelelawar">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Sultan dan Kesendirian</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Sultan dan Kesendirian')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6289637180724','Sultan dan Kesendirian')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Melan dan Konsersamarinda</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Melan dan Konsersamarinda')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285705988336','Melan dan Konsersamarinda')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Belen dan Kejombloannya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Belen dan Kejombloannya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6281244274934','Belen dan Kejombloannya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Acajelos dan Tukang Beli </td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Acajelos dan Tukang Beli ')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285246566410','Acajelos dan Tukang Beli ')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableMerch">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Jamal dan Semua Wanitanya</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Jamal dan Semua Wanitanya')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282156401799','Jamal dan Semua Wanitanya')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Bare dan Calon Istri</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Bare dan Calon Istri')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6282225555236','Bare dan Calon Istri')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>Rian dan Jodoh</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'Rian dan Jodoh')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><button class="btn btn-success btn-sm"
                                                    onclick="openWA('6285753567389','Rian dan Jodoh')"><i
                                                        class="fab fa-whatsapp"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableIG">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>adz_ichzn</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'adz_ichzn')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><a class="btn btn-danger btn-sm" href="https://ig.me/m/adz_ichzn/"><i
                                                        class="fab fa-instagram"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="collapse" id="tableBotanic">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><th scope="row">{{ $no++ }}</th><td>ibu aulia & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'ibu aulia & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085250691096','ibu aulia & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>elisa</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'elisa')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('083899616633','elisa')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>sandra</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'sandra')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085821708806','sandra')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>tary</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'tary')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('088245302984','tary')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>dijah</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'dijah')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082149631266','dijah')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>dela</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'dela')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('083127360033','dela')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>feni & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'feni & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('089689473109','feni & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>nisaa & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'nisaa & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085751869908','nisaa & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>cicak & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'cicak & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('081522579841','cicak & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>ava</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'ava')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('087888561434','ava')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>kak everly</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'kak everly')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('089507714154','kak everly')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>jenna & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'jenna & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085849033708','jenna & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>tiara & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'tiara & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082250936616','tiara & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>widia</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'widia')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('089688726069','widia')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>melin</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'melin')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('083153879551','melin')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>cindy & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'cindy & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085752524293‬','cindy & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>ocha</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'ocha')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('087715716223','ocha')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>kak ibrahim & istri tercinta</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'kak ibrahim & istri tercinta')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082125167915‬','kak ibrahim & istri tercinta')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="collapse" id="tableTheHotel">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><th scope="row">{{ $no++ }}</th><td>hotel</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'hotel')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('the','hotel')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>om ijay & istri</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'om ijay & istri')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('0895704159616','om ijay & istri')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>patrick & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'patrick & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('081213083355','patrick & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>duta persahabatan smd</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'duta persahabatan smd')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085246058104','duta persahabatan smd')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>sari & keluarga</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'sari & keluarga')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082155206935','sari & keluarga')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>utari & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'utari & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('081363252828','utari & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>gusti & ipeh</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'gusti & ipeh')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082153715067','gusti & ipeh')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>sukma & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'sukma & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085822547376','sukma & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>anak gw & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'anak gw & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082154331524','anak gw & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>putwi</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'putwi')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('083844725064','putwi')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>bocil</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'bocil')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('081349859767','bocil')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>fina</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'fina')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('0895322235282','fina')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>zela</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'zela')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('081346313430','zela')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>chessa</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'chessa')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082254571034','chessa')"><i class="fab fa-whatsapp"></i></button></td></tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="collapse" id="tableSMPSMK">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><th scope="row">{{ $no++ }}</th><td>tika & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'tika & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('081346144589','tika & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>mia & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'mia & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082214323508','mia & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>pera & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'pera & suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('082254400080','pera & suami')"><i class="fab fa-whatsapp"></i></button></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>theresa & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'theresa & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><button class="btn btn-success btn-sm" onclick="openWA('085251111069','theresa & calon suami')"><i class="fab fa-whatsapp"></i></button></td></tr>

                                    </tbody>
                                </table>
                            </div>

                            <div class="collapse" id="tableIGBella">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Copy teks</th>
                                            <th scope="col">Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><th scope="row">{{ $no++ }}</th><td>sinta</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'sinta')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/cioanocia/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>mila & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'mila & suami')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/mlawr2/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>indy & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'indy & suami')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/indybgg/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>ira & calon suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'ira & calon suami')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/irastizhra/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>nadin</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'nadin')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/nchndrwnta/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>maul</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'maul')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/littlesun_asteroids/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>fathur & istri</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'fathur & istri')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/fathuraman_/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>mira & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'mira & suami')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/mirara_11/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>desi & suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'desi & suami')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/ichhy_/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>ainun</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'ainun')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/jaryah_ainun/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>
                                        <tr><th scope="row">{{ $no++ }}</th><td>kak friska dan suami</td><td><button class="btn btn-primary btn-sm" onclick="copyUndangan(this, 'kak friska dan suami')"><i class="fas fa-clipboard"></i></button></td><td><a class="btn btn-danger btn-sm" href="https://ig.me/m/friskawardhani_/" target="_blank"><i class="fab fa-instagram"></i></a></td></tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.collapse').on('show.bs.collapse', function() {
                $('.collapse').not(this).collapse('hide');
            });
        });

        function generateText(nama) {
            return `Assalamu'alaikum Wr. Wb
Bismillahirrahmanirrahim. 

Yth. Bapak/Ibu/Saudara/i
${nama}

Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i teman sekaligus sahabat, untuk menghadiri acara Pernikahan kami :

Bella & Adam

Berikut link undangan kami, untuk info lengkap dari acara bisa kunjungi :

https://kenikahanku-production.up.railway.app/${encodeURIComponent(nama)}

Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.

Mohon maaf perihal undangan hanya di bagikan melalui pesan ini.

Terima kasih banyak atas perhatiannya.

Wassalamu'alaikum Wr. Wb

Kami yang berbahagia
*Bella & Adam*`;
        }

        function copyUndangan(button, nama) {
            var icon = button.querySelector('i');
            icon.classList.remove('fa-clipboard');
            icon.classList.add('fa-check');
            const text = generateText(nama);

            navigator.clipboard.writeText(text);
        }

        function openWA(nohp, nama) {
            if (nohp.startsWith("0")) {
                nohp = "62" + nohp.substring(1);
            }

            const text = generateText(nama);
            const encoded = encodeURIComponent(text);

            const url = `https://wa.me/${nohp}?text=${encoded}`;
            window.open(url, '_blank');
        }
    </script>
@endsection
