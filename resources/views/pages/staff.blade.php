@extends('layouts.index')

@section('content')

    @include('partials.navMobile')
    {{-- <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav> --}}
    <!-- ========== WRAPPER ========== -->

    <div class="wrapper">
        @include('partials.topbar')

        @include('partials.navbar')


        <!-- ========== PAGE TITLE ========== -->
        <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="inner">
                    <h1>OUR STAFF</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Our Staff</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="location-page">
            <div class="container">
                <div class="row">

                    @foreach ($team as $item)
                    {{-- @if ($loop->iteration != 1 && $loop->iteration < 9 && $loop->iteration > 1) --}}
                    @if ($loop->iteration != 1 )
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="staff-item">
                            <figure>
                                <img src={{ asset("/storage/images/". $item->img) }} class="img-fluid" alt="Image">
                                <div class="position">{{ $item->fonction->fonction }}</div>
                            </figure>
                            <div class="details">
                                <h5>{{ $item->fullname }}</h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>

                    @else
                    {{-- @elseif ($loop->iteration == 1) --}}

                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="staff-item">
                            <figure>
                                <img src={{ asset("/storage/images/". $houseKeeper->img) }} class="img-fluid" alt="Image">
                                <div class="position">{{ $houseKeeper->fonction->fonction }}</div>
                            </figure>
                            <div class="details">
                                <h5>{{ $houseKeeper->fullname }}</h5>
                                <p>{{ $houseKeeper->description }}</p>
                            </div>
                        </div>
                    </div>

                    @endif
                    @endforeach


                    
 
                </div>
            </div>
        </main>
        @include('partials.footer')
        
    </div>

    @include('partials.notification')
    

    @endsection
