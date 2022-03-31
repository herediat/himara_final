@extends('layouts.index')

@section('content')

@include('partials.navMobile')

    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        @include('partials.topbar')

        @include('partials.navbar')


        <!-- ========== PAGE TITLE ========== -->
        <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="inner">
                    <h1>GALLERY</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="gallery-page">
            <!-- FILTERS -->
            <div class="container">
                <div class="gallery-filters">
                    <a href="#" data-filter="*" class="filter active">ALL</a>
                    @foreach ($categoryImage as $item)
                    <a href="#" data-filter=".{{ $item->filter }}" class="filter">{{ $item->nom }}</a>
                    @endforeach
                </div>
            </div>
            <!-- GALLERY -->
            <div class="container">
                <div class="grid image-gallery row">
                    @foreach ($imageAll as $item)
                    <!-- ITEM -->
                    
                    <div class="gallery-item {{ $item->categorie_image->filter }} col-md-3">
                        <figure class="gradient-overlay image-icon">
                            
                                <a href="{{ asset('/storage/images/'. $item->url) }}">


                        
                        <img src="{{ asset('/storage/images/'. $item->url) }}" class="img-fluid" alt="Image">
                            </a>
                            <figcaption>{{ $item->nom }}</figcaption>
                        </figure>
                    </div>

                    @endforeach

                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>
    @include('partials.notification')

    

    @endsection
