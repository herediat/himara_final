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
                    <h1>ROOMS</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Rooms</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="rooms-list-view">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        @foreach ($roomListAll as $item)
                        <!-- ITEM -->
                        <div class="room-list-item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href={{ route("roomLast",$item->id)  }}><img src="{{ asset('storage/images/'. $item->img) }}"
                                                class="img-fluid" alt="Image"></a>
                                    </figure>
                                    {{-- {{ asset("images/rooms/single/single1.jpg") }} --}}
                                </div>
                                <div class="col-lg-5">
                                    <div class="room-info">
                                        <h3 class="room-title">
                                            <a href={{ route("roomLast",$item->id)  }}>{{ $item->titre }}</a>
                                        </h3>
                                        <span class="room-rates">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                        </span>
                                        <p>{{ $item->description }}</p>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Breakfast Included"
                                                data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                            {{-- <span>Beds: 1 King</span>
                                            <span>Max Guests: 2</span> --}}
                                            <span>Beds: {{ $item->litMax }} King</span>
                                            <span>Max Guests: {{ $item->personMax }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="room-price">
                                        <span class="price">{{ $item->prix }}</span>
                                        <a href="room.html" class="btn btn-sm">view <br> details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach


  

                        {{ $roomListAll->links('pagination::bootstrap-4') }}

                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="sidebar">
                            <aside class="widget noborder">
                                <div class="search">
                                    <form action="{{ route("RoomSearch") }}" class="widget-search"  method="POST">
                                        @csrf
                                        <input type="search" placeholder="Search" onfocus="this.placeholder='' " onblur="this.placeholder='Search'" name="data">
                                        <button class="btn-search" id="searchsubmit" type="submit">
                                           <button class="btn-search" id="searchsubmit" type="submit">

                                               <i class="fa fa-search"></i>
                                           </button>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">CATEGORIES</h4>
                                <ul class="categories">
                                    @foreach ($categoryRoom as $item)
                                    <li>
                                        {{-- <a href="#">Single Room<span class="posts-num">51</span></a> --}}
                                        <a href={{ route("roomCategorie",$item->id) }}>{{ $item->nom }}<span class="posts-num">{{ count($item->rooms) }}</span></a>
                                    </li>

                                    @endforeach
                                </ul>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    {{-- @dd($tagRoom) --}}
                                    @foreach ($tagRoom as $item)

                                    <a href={{ route("tagRooms", $item->id) }}>
                                        <span class="tag">{{ $item->nom }}</span>
                                    </a>
                                    @endforeach
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('partials.footer')
        
    </div>
    @include('partials.notification')

    @endsection
