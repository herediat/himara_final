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
                    <h1>Blog</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href={{ route('home') }}>Home</a>
                        </li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <!-- POSTS -->
                        <div class="blog-posts">
                            @foreach ($blog as $item)
                                <!-- POST -->
                                <article class="post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="post-thumbnail">
                                                <figure class="gradient-overlay-hover link-icon">
                                                    <a href={{ route("blogLast",$item->id)  }}>
                                                        <img src="{{ asset('/storage/images/'. $item->img) }}"
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="post-details">
                                                <h2 class="post-title">
                                                    <a href={{ route("blogLast",$item->id)  }}>{{ $item->title }}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="author">
                                                <a href="#"><img src={{ asset('images/users/admin.jpg') }} width="16" alt="Image">{{ $item->auteur }}</a>
                                                    </span>
                                                    <span class="date">
                                                        <a href="#">
                                                            <i class="fa fa-clock-o"></i>{{ $item->creation }}</a>
                                                    </span>
                                                    <span class="comments">
                                                        <a href="#">
                                                            <i class="fa fa-commenting-o"></i>1 Comment</a>
                                                    </span>
                                                    <span class="category">
                                                        <i class="fa fa-folder-open-o"></i>IN
                                                        <a href="#">News</a>,
                                                        <a href="#">Events</a>
                                                    </span>
                                                </div>
                                                <p>{{ Str::limit($item->description, 250) }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        @if (count($blog) >= 2)
                        {{ $blog->links('pagination::bootstrap-4') }}

                        @endif
                    </div>
                    <!-- SIDEBAR -->
                    <div class="col-lg-3 col-12">

                        <div class="sidebar">
                            {{-- research --}}

                            <aside class="widget noborder">
                                <div class="search">
                                    <form class="widget-search" action="{{ route('search') }}">
                                    @csrf
                                        <input type="search" placeholder="Search" onfocus="this.placeholder ='' " onblur="this.placeholder='Search' " name="data">

                                        <button class="btn-search" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>

                            <!-- WIDGlateET -->
                            <aside class="widget">
                                <h4 class="widget-title">CATEGORIES</h4>
                                <ul class="categories">
                                    @foreach ($categoryArticle as $item)
                                   
                                    <li>
                                        
                                        <a href={{ route("blogCategorie",$item->id)  }}> {{ $item->nom }}<span class="posts-num">{{ count($item->articles) }}</span></a>
                                    </li>
                                    

                                    @endforeach
                                </ul>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <htag4 class="widget-title">Latest Posts</h4>
                                <div class="latest-posts">
                                    @foreach ($blogLast as $item)
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    
                                                    <a href={{ route("blogLast",$item->id)  }}>
                                                        <img src="{{ asset('/images/blog/'. $item->img) }}"
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href={{ route("blogLast",$item->id)  }}>{{ $item->title }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    @foreach ($tag as $item)
                                    <a href={{ route("tagCategorie",$item->id)  }}>
                                        <span class="tag">{{ $item->nom }}</span></a>

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
