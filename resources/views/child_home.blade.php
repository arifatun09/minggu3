@extends('home')

@section('title', 'Home')

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
                    <li class="nav-item active">
                        <a href="http://127.0.0.1:8000/home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
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

@section('sidebar')
@parent
<div class="row tm-2-rows-md-down-1 tm-margin-t-mid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h3 class="tm-gold-text tm-title tm-margin-b-30">Related Posts</h3>
        <div class="media tm-related-post">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="{{ asset('classic/img/tm-img-240x120-1.jpg') }}" alt="Generic placeholder image">
                </a>
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>\
                <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
            </div>
        </div>
         <div class="media tm-related-post">
             <div class="media-left media-middle">
                 <a href="#">
                    <img class="media-object" src="{{ asset('classic/img/tm-img-240x120-2.jpg') }}" alt="Generic placeholder image">
                </a>
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
            </div>
        </div>
        <div class="media tm-related-post">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="{{ asset('classic/img/tm-img-240x120-3.jpg') }}" alt="Generic placeholder image">
                </a>
            </div>
            <div class="media-body">
                <a href="#"><h4 class="media-heading tm-gold-text tm-margin-b-15">Lorem ipsum dolor</h4></a>
                <p class="tm-small-font tm-media-description">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
@parent
<div class="tm-2-col-left">
    <h3 class="tm-gold-text tm-title">Pellentesque fermentum mauris et posuere</h3>
    <p class="tm-margin-b-30">Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
    <img src="{{ asset('classic/img/tm-img-660x330-1.jpg') }}" alt="Image" class="tm-margin-b-40 img-fluid">
    <p>
        Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.
    </p>
    <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis.</p>
    <p class="m-b-2"> Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis. Mauris id vulputate lectus, id fermentum sapien.
    </p>
    <a href="#" class="tm-btn text-uppercase">Read More</a>
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