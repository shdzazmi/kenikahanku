@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Link Undangan Bella & Adam</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableKawal" role="button">Kawal</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableStation"
                                role="button">Station</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableSD" role="button">SD</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableSMP" role="button">SMP</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableSMK" role="button">SMK</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableKuliah" role="button">Kuliah</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#table2m1t" role="button">2m1t</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableKelelawar"
                                role="button">Kelelawar</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableMerch" role="button">Merch</a>
                            <a class="btn btn-primary" data-toggle="collapse" href="#tableIG" role="button">IG</a>

                            <table class="table mt-4">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">No HP</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Copy Isi teks</th>
                                        <th scope="col">Link WA</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="collapse" id="tableKawal">
                                <table class="table">
                                    <tbody>

                                        @php
                                            $no = 1;
                                        @endphp

                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6282189998564</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6282251088774</td>
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
                                            <td>6282138039435</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6283832225531</td>
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
                                            <td>6282154181897</td>
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
                                            <td>6281649462805</td>
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
                                            <td>6281254445992</td>
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
                                            <td>6285752036176</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6282154728477</td>
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
                                            <td>628118454040</td>
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
                                            <td>6281327619687</td>
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
                                            <td>6282354995373</td>
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
                                            <td>6282243128430</td>
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
                                            <td>6281522642609</td>
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
                                            <td>6282152333928</td>
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
                                            <td>6281256699724</td>
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
                                            <td>6285751981309</td>
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
                                            <td>6281254486367</td>
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
                                            <td>6282153925992</td>
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
                                            <td>6285249949705</td>
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
                                            <td>6285717593617</td>
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
                                            <td>6281346340805</td>
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
                                            <td>6285349192149</td>
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
                                            <td>6282155209427</td>
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
                                            <td>6282251470621</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6285248168889</td>
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
                                            <td>6282261215750</td>
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
                                            <td>6282138338589</td>
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
                                            <td>6281395004445</td>
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
                                            <td>6285325394992</td>
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
                                            <td>6285250250940</td>
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
                                            <td>6282254002831</td>
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
                                            <td>6285247293339</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6285346897319</td>
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
                                            <td>6282210947539</td>
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
                                            <td>6281313608040</td>
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
                                            <td>6283854016832</td>
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
                                            <td>6281346234657</td>
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
                                            <td>6282149881752</td>
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
                                            <td>6282213091502</td>
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
                                            <td>6285388278713</td>
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
                                            <td>6282114753945</td>
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
                                            <td>6285173238297</td>
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
                                            <td>6285161019979</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6282256273191</td>
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
                                            <td>6282150289321</td>
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
                                            <td>6285158220203</td>
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
                                            <td>6281351832687</td>
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
                                            <td>6282150013423</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6289637180724</td>
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
                                            <td>6285705988336</td>
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
                                            <td>6281244274934</td>
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
                                            <td>6285246566410</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>6282156401799</td>
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
                                            <td>6282225555236</td>
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
                                            <td>6285753567389</td>
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
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <td>adz_ichzn</td>
                                            <td>adz_ichzn</td>
                                            <td><button class="btn btn-primary btn-sm"
                                                    onclick="copyUndangan(this, 'adz_ichzn')"><i
                                                        class="fas fa-clipboard"></i></button></td>
                                            <td><a class="btn btn-success btn-sm" href="https://ig.me/m/adz_ichzn/"><i
                                                        class="fab fa-instagram"></i></a></td>
                                        </tr>
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
