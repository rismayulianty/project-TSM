@extends('layouts.app')
@section('content')
<header>
        <div class="container">
            <div class="intro-text">
              <h1>Tambah Prestasi</h1>
              {!! Form::open(['url'=>route('prestasi.store'), 'method'=>'post', 'files'=>'true', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal']) !!}
                    @include('backend.prestasi._form')
                    {!! Form::close() !!}    
             
            </div>
        </div>
    </header>
@endsection