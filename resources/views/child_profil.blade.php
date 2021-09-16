@extends('profil')

@section('title', 'Profil')

@section('header')
<div class="container-fluid">
    <div class="tm-header-inner">
        <a href="#" class="navbar-brand tm-site-name">Classic</a>
                    
        <!-- navbar -->
        <nav class="navbar tm-main-nav">

            <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                &#9776;
            </button>
                            
            <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="http://127.0.0.1:8000/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a href="http://127.0.0.1:8000/profil" class="nav-link">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>                        
            </div>
                        
        </nav>  

    </div>                                  
</div>
@endsection

<!-- @section('sidebar')
@endsection -->

@section('content')
@parent
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
    <h3 class="tm-gold-text">Identitas Diri</h3>
    
    <table style="width: 70%">
        <tr>
            <th>NIM</th>
            <td>2031710118</td>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <td>Arifatun Nisa</td>
        </tr>
        <tr>
            <th>Nama Panggilan</th>
            <td>Arik</td>
        </tr>               
        <tr>
            <th>Kelas</th>
            <td>2E</td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td>Manajemen Informatika</td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td>Teknologi Informasi</td>
        </tr>
        <tr>
            <th>Tempat/Tanggal Lahir</th>
            <td>Kediri, 09 Mei 2021</td>
        </tr>
        <tr>
            <th>Anak ke</th>
            <td>1 dari 2 bersaudara</td>
        </tr>
        <tr>                
            <th>Jenis Kelamin</th>
            <td>Perempuan</td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>Islam</td>
        </tr>
        <tr>
            <th>Nomor Telepon</th>
            <td>08574875****</td>
        </tr>
        <tr>
            <th>Kewarganegaraan</th>                
            <td>Indonesia</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>arifatunnisa.090501@gmail.com</td>
        </tr>
    </table>

    <h3 class="tm-gold-text">Keterangan Tempat Tinggal</h3>
    <table style="width: 127%">
        <tr>
            <th>Alamat Rumah</th>
            <td>Jln. KH. Ahmad Dahlan, Rt 002 Rw 002, Dsn. Tangkilan Lor</td>
        </tr>
        <tr>
            <th>Desa</th>
            <td>Padangan</td>
        </tr>
        <tr>
            <th>Kecamatan</th>                
            <td>Kayen Kidul</td>
        </tr>
        <tr>
            <th>Kota/Kabupaten</th>
            <td>Kediri</td>
        </tr>
        <tr>               
            <th>Provinsi</th>
            <td>Jawa Timur</td>
        </tr>
    </table>
</div>
@endsection

@section('footer')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="tm-footer-content-box">
                <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Proin eu posuere felis</h3>
                <div class="tm-gray-bg">
                    <p>Classic is free HTML CSS website template provided by templatemo for everyone. Feel free to use it.</p>
                    <p>Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                    <p><strong>Danny Egg (Executive)</strong></p>    
                </div>    
            </div>                                        
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="tm-footer-content-box tm-footer-links-container">
                <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Nulla tortor dolor</h3>
                <nav>
                    <ul class="nav">
                        <li><a href="#" class="tm-footer-link">Tincidunt non faucibus</a></li>
                        <li><a href="#" class="tm-footer-link">Vestibulum tempor</a></li>
                        <li><a href="#" class="tm-footer-link">Fusce non turpis euismod</a></li>
                        <li><a href="#" class="tm-footer-link">Lorem ipsum dolor sit</a></li>
                        <li><a href="#" class="tm-footer-link">Nam in augue consectetur</a></li>
                        <li><a href="#" class="tm-footer-link">Text Link Color #CCCC66</a></li>
                    </ul>
                </nav>
            </div>        
        </div>
        <!-- Add the extra clearfix for only the required viewport 
            http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
        -->
        <div class="clearfix hidden-lg-up"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
            <div class="tm-footer-content-box">
                                
                <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Etiam mollis ornare</h3>
                <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                <a href="#" class="tm-btn tm-btn-gray text-uppercase">Read More</a>

            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

            <div class="tm-footer-content-box">
                        
                <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                <div class="tm-margin-b-30">
                    <img src="{{ asset('classic/img/tm-img-100x100-1.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                    <img src="{{ asset('classic/img/tm-img-100x100-2.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                    <img src="{{ asset('classic/img/tm-img-100x100-3.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                    <img src="{{ asset('classic/img/tm-img-100x100-4.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                    <img src="{{ asset('classic/img/tm-img-100x100-5.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                    <img src="{{ asset('classic/img/tm-img-100x100-6.jpg') }}" alt="Image" class="tm-footer-thumbnail">
                </div>
                <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus. Sed vestibulum non neque.</p>
                <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>
            </div>             
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 tm-copyright-col">
            <p class="tm-copyright-text">Copyright 2016 Your Company Name</p>
        </div>
    </div>
</div>
@endsection