@extends('layouts.index')

@section('content')

    @include('partials.navMobile')
    @include('partials.topbar')
    @include('partials.navbar')



    <div class="wrapper mm-page mm-slideout" id="mm-0">
        <div class="parallax-mirror"
            style="visibility: visible; z-index: 0; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 116.5px, 0px); height: 535px; width: 966px;">
        </div>

        {{-- @foreach ($blog as $item) --}}

        <div class="blog-post-cover gradient-overlay op5" data-src="{{ asset('/images/blog/'. $blog->img) }}"
            data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0"
            style="margin-top: 0px;">
            <div class="container inner">
                <h2 class="blog-post-title">{{ $blog->title }}</h2>
                <div class="blog-post-info">
                    <img alt="" src="{{ asset('images/users/admin.jpg') }}" class="author-avatar" width="16">
                    <p>by
                        <span>
                            <a href="#">{{ $blog->auteur }}</a></span>
                    </p>
                    <p>on
                        <time datetime="2017-09-27T06:52:20+00:00">{{ $blog->creation }}</time>
                    </p>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}

        <main class="post-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <article class="entry">
                            <div class="details">
                                <p class="dropcap">{{$blog->description}}
                                </p>
                                <p>{{ Str::limit($blog->description, 250) }}
                                    <a href="#">{{ Str::limit($blog->description, 15) }}</a>
                                    {{ Str::limit($blog->description, 450) }}
                                </p>
                                <blockquote>
                                    <p class="quote-text">{{ Str::limit($blog->description, 25) }}
                                        <a href="#" data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                            data-original-title="Marius Doe">Mauris
                                        </a>{{ Str::limit($blog->description, 250) }}
                                    </p>
                                </blockquote>
                                <p>{{ $blog->description }}</p>
                                <figure>
                                    <img src={{ asset("images/blog/post/blog-post1.jpg") }} class="img-fluid">
                                    <figcaption>Image Caption
                                        <span class="source">
                                            <a href="#">
                                                <i class="fa fa-link" aria-hidden="true"></i>
                                                pexeles.com</a></span>
                                    </figcaption>
                                </figure>
                                <p>{{ $blog->description }}</p>
                                <div class="row image-gallery">
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href={{ asset("images/blog/post/blog-post2.jpg") }}>
                                                    <img src={{ asset("images/blog/post/blog-post2.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href={{ asset("images/blog/post/blog-post3.jpg") }}>
                                                    <img src={{ asset("images/blog/post/blog-post3.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href={{ asset("images/blog/post/blog-post4.jpg") }}>
                                                    <img src={{ asset("images/blog/post/blog-post4.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-3">
                                        <figure>
                                            <div class="gradient-overlay-hover image-icon sm">
                                                <a href={{ asset("images/blog/post/blog-post5.jpg") }}>
                                                    <img src={{ asset("images/blog/post/blog-post5.jpg") }} class="img-fluid">
                                                </a>
                                            </div>
                                            <figcaption>Image Caption</figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <p>{{ $blog->description }}
                                    </p>
                                <div class="meta-post">
                                    <div class="tags">
                                        <span>
                                            <i class="fa fa-tags"></i>
                                            TAGS</span>
                                        <a href="#" rel="tag">Himara</a>
                                        <a href="#" rel="tag">Holiday</a>
                                        <a href="#" rel="tag">Summer</a>
                                    </div>
                                    <div class="share">
                                        <span>
                                            <i class="fa fa-share-alt"></i>
                                            SHARE</span>
                                        <div class="social-media">
                                            <a class="facebook" href="#" data-toggle="tooltip"
                                                data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="twitter" href="#" data-toggle="tooltip"
                                                data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="googleplus" href="#" data-toggle="tooltip"
                                                data-original-title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="pinterest" href="#" data-toggle="tooltip"
                                                data-original-title="Pinterest">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div id="comments">
                            <div class="section-title">
                                <h4>COMMENTS</h4>
                                <p class="section-subtitle">Leave your comment</p>
                            </div>
                            <ul id="comments-list" class="comments-list">
                                {{-- @dump($comment) --}}
                                @foreach ($comment as $item)
                                @if ($item->validate)


                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar"><img src="{{ asset('/images/blog/'. $item->photoProfil) }}" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment_content">
                                                <h4 class="author-name">
                                                    <a href="#">{{ $item->name }}</a>
                                                </h4>

                                                <td>
                                                    <form action="/comments/{{$item->id}}/delete" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button style="" type="submit" class="reply_link btn text-danger">Delete</button>
                                                    </form>
                                                </td>


                                                <span class="comment_info">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">
                                                        <time datetime="2017-10-01T19:56:36+00:00">{{ $item->created_at }}</time>
                                                    </a>
                                                </span>
                                                <div class="comment_said_text">
                                                    <p>{{$item->commentaire}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            <div class="section-title mt100">
                                <h4>LEAVE YOUR COMMENT</h4>
                                <p class="section-subtitle">Write your comment</p>
                            </div>

                            <form id="comment-form" class="comment-form" action="/{{ $blog->id }}/commentaires" method="POST">
                                @csrf
                                <div class="row">
                                    @guest
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Name*" name="name" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" class="form-control" placeholder="Email*" name="email" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Website" name="website" value="">
                                    </div>
                                    @endguest
                                    <div class="col-md-12">
                                        <textarea class="form-control"  placeholder="Write Your Comment" name="commentaire" value="" ></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn float-right" type="submit">
                                            POST YOUR COMMENT
                                        </button>
                                        <div class="align-left">*Your email address will not be published.</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        @include('partials.footer')
    </div>
    @include('partials.notification')

    @endsection
