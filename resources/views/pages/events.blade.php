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
                    <h1>UPCOMING EVENTS</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Upcoming Events</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main>
            <div class="container">
                <div class="row">
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">31</div>
                                <div class="month">January</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Family Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">17</div>
                                <div class="month">Mars</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Traditional Music Festival</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">05</div>
                                <div class="month">July</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Summer Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">16</div>
                                <div class="month">August</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Wedding Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">10</div>
                                <div class="month">September</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Pool Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">20</div>
                                <div class="month">October</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Season Closing Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">06</div>
                                <div class="month">November</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Beer Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="col-lg-3 col-md-6">
                        <div class="event-item mb30">
                            <div class="date">
                                <span class="event-calendar"></span>
                                <div class="day">28</div>
                                <div class="month">November</div>
                            </div>
                            <div class="details">
                                <h6 class="title">
                                    <a href="event-details.html">Latin Dance Party</a>
                                </h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                            <div class="align-center">
                                <a class="btn btn-sm btn-dark" href="event-details.html">MORE DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="load-more">
                    LOAD MORE EVENTS
                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>
    @include('partials.notification')

    @endsection
