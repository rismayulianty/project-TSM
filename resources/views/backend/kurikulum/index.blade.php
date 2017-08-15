@extends('layouts.app')

@section('content')
<header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">


        <div class="row">
            
            <!-- Article main content -->
            
            <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>KURIKULUM TEKNIK SEPEDA MOTOR</h2><br>
                    <a href="{{ route('prestasi.create') }}" class="btn btn-primary">Tambah kurikulum</a>
                    <hr class="star-primary">
                </div>
                <div class="row">
        <div class="box">
            <div class="col-lg-12">
                
                <h2 class="intro-text text-center">Jajaran Kurikulum</h2>
                <hr>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="/assets/img/kaprog/krkm.png" alt="">
                    <h3>Cevi Noor Alamsyah</h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="/assets/img/kaprog/rpl.png" alt="">
                    <h3>Ute juli Kurnia</h3>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="/assets/img/kaprog/tsm.png" alt="">
                    <h3>Romi Romianto</h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
            </div>
         </div>

    </section>

        </div>
    </div>  <!-- /container -->
@endsection