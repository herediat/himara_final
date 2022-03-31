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
                    <h1>Style Guide</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Style Guide</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="demo-page">
            <div class="container">
                <div class="entry">
                    <h1>H1 Heading</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex in,
                        luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio. Proin
                        dui turpis, venenatis non eleifend sed, varius at erat.
                        Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque metus
                        in augue.</p>
                    <h2>H2 Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex in,
                        luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio. Proin
                        dui turpis, venenatis non eleifend sed, varius at erat.
                        Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque metus
                        in augue.</p>
                    <h3>H3 Heading</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex in,
                        luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio. Proin
                        dui turpis, venenatis non eleifend sed, varius at erat.
                        Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque metus
                        in augue.</p>
                    <h4>H4 Heading</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex in,
                        luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio. Proin
                        dui turpis, venenatis non eleifend sed, varius at erat.
                        Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque metus
                        in augue.</p>
                    <h5>H5 Heading</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex in,
                        luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio. Proin
                        dui turpis, venenatis non eleifend sed, varius at erat.
                        Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque metus
                        in augue.</p>
                    <h6>H6 Heading</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex in,
                        luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio. Proin
                        dui turpis, venenatis non eleifend sed, varius at erat.
                        Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque metus
                        in augue.</p>
                    <h4>Left aligned image</h4>
                    <figure class="alignleft">
                        <img src="images/blog/blog-post1.jpg" width="400" alt="Image">
                        <figcaption>Image Caption</figcaption>
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque fuga blanditiis aut ipsam quas
                        quibusdam odio dignissimos enim reiciendis. Dolorem, eveniet nisi nostrum et error obcaecati
                        reprehenderit laudantium libero voluptatum amet quod
                        accusamus modi, fugiat labore earum distinctio similique cupiditate illum quis. Quisquam eius
                        molestias numquam nemo expedita provident laboriosam autem nulla aliquid! Enim quibusdam
                        asperiores voluptatem, debitis officia perferendis velit temporibus
                        soluta expedita porro, repellendus fugiat nihil hic excepturi similique minus, ab dolore eaque
                        quisquam provident magnam. Fuga necessitatibus autem dolor consectetur, cum commodi cumque alias
                        ex rerum libero voluptate corporis dolorum nemo, quae qui
                        laboriosam repellat porro praesentium tenetur, possimus nesciunt. Impedit delectus iste id quam
                        molestiae quas nam voluptas natus culpa esse asperiores, non quod doloribus aut qui voluptatem.
                        Dolores necessitatibus, ipsam corrupti consectetur
                        voluptatem mollitia tempore non ex explicabo. Corporis reprehenderit assumenda expedita
                        inventore cum nobis officiis voluptatum, velit nesciunt modi iste quis ullam dolorum distinctio
                        eum mollitia aperiam dolor reiciendis quo ducimus tenetur officia
                        fugit quaerat illum. Hic et, iste nulla distinctio alias autem dignissimos asperiores odit
                        velit, maiores placeat dolorem delectus doloribus deserunt vitae voluptatem! Non aspernatur,
                        maiores corporis officia suscipit iste sint culpa laudantium
                        voluptate perspiciatis nulla odio adipisci, obcaecati, sapiente aut accusantium nisi. Quibusdam
                        magnam in recusandae, harum numquam doloribus ea, dolorum quam ut explicabo, molestiae minima
                        eaque accusantium, inventore blanditiis. Ad libero, fugiat
                        delectus, veniam consequatur alias fuga impedit? Excepturi in, harum quos quas repellat illum,
                        ipsam, iure atque consectetur hic nisi natus quae assumenda saepe, deleniti dignissimos delectus
                        impedit dolore.</p>
                    <h4>Right aligned image</h4>
                    <figure class="alignright">
                        <img src="images/blog/blog-post2.jpg" width="400" alt="Image">
                        <figcaption>Image Caption</figcaption>
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere voluptatibus perferendis quas
                        numquam aperiam odio labore, saepe distinctio vel corporis voluptates placeat. Ex provident
                        adipisci beatae, quis, delectus eveniet quaerat. Facere
                        temporibus molestiae voluptatem dolores eius velit fuga, perferendis, numquam expedita corporis
                        saepe necessitatibus recusandae. Quis molestiae possimus id, aspernatur vitae? Maiores explicabo
                        pariatur, qui, maxime mollitia deserunt esse minus ut
                        neque iusto. Beatae perferendis nostrum obcaecati velit, distinctio nesciunt quisquam
                        consequuntur, accusantium incidunt earum ipsa explicabo. Cumque veniam, enim provident ipsam
                        ipsum? Voluptas facilis ipsum tempora iste nihil quae sed, sunt sequi
                        eum alias officiis atque amet tempore minima quibusdam perspiciatis tenetur, accusantium ipsam
                        quasi nulla rem. Rem unde tempora similique dolore ratione autem fuga, omnis eveniet ut,
                        quibusdam ex minus dicta corporis, laudantium nostrum deserunt
                        accusamus! At dolorem reiciendis, voluptatem sequi laudantium ullam. Recusandae impedit dolore
                        quidem reprehenderit aspernatur consequuntur a, consequatur sint fuga, eum, numquam. Natus
                        itaque, accusamus aperiam! Commodi cumque impedit deserunt porro
                        placeat esse, explicabo eligendi tenetur quia, vitae alias odio, necessitatibus, dicta.
                        Molestiae perferendis vitae pariatur quisquam, totam in tempore veritatis blanditiis adipisci
                        asperiores eaque labore, sed ab quibusdam eligendi commodi! Natus
                        aut eligendi ab reprehenderit temporibus vero quo aliquam doloribus, itaque laborum aperiam sit,
                        numquam voluptatibus iste. Nisi quae alias eligendi ex, inventore fugit deserunt cupiditate
                        rerum facere aperiam vero obcaecati repudiandae optio
                        pariatur, neque odit dolore, repellendus consequatur! Repellendus aperiam, consectetur eligendi
                        eos iusto voluptate natus sapiente sit cumque consequatur aut optio adipisci qui veniam nobis
                        consequuntur dolores quod, eius ad possimus.</p>
                    <p>&nbsp;</p>
                    <h4>Blockquote</h4>
                    <p>&nbsp;</p>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit&nbsp;<a
                                href="https://www.eagle-themes.com/fiore/blog-post.html#" data-toggle="tooltip"
                                data-placement="top" data-trigger="hover"
                                data-original-title="Marius Doe">Mauris&nbsp;</a>non laoreet dui, Morbi lacus massa,
                            euismod ut turpis molestie</p>
                    </blockquote>
                    <p>&nbsp;</p>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam augue eros, ultrices sit amet ex
                            in, luctus mattis sem. Maecenas metus elit, convallis at lectus nec, interdum gravida odio.
                            Proin dui turpis, venenatis non eleifend sed, varius at erat.
                            Aenean rutrum, urna ut finibus ultrices, turpis ante vehicula turpis, eget pharetra neque
                            metus in augue. In est ipsum, faucibus pellentesque suscipit in, porta ac quam.</p>
                    </blockquote>
                    <p>&nbsp;</p>
                    <h4>Unordered list</h4>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ul>
                    <p>&nbsp;</p>
                    <h4>Ordered list</h4>
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Lorem ipsum dolor sit amet</li>
                    </ol>
                    <p>&nbsp;</p>
                    <h4>Table</h4>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Nickname</td>
                                <td>Number</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>13</td>
                            </tr>
                            <tr>
                                <td>Eve</td>
                                <td>Doe</td>
                                <td>94</td>
                            </tr>
                            <tr>
                                <td>Jane</td>
                                <td>Doe</td>
                                <td>77</td>
                            </tr>
                            <tr>
                                <td>Ina</td>
                                <td>Aldrich</td>
                                <td>16</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        @include('partials.footer')
    </div>
    @include('partials.notification')
@endsection
