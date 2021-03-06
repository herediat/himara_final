@extends('layouts.app')

@section('content')
<h1>test</h1>

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blog edit</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" action="{{ route('blogs.update',$blogs->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")

                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">titre</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="titre" name="title" value="{{ old('title',$blogs->title) }}">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Description</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'image" name="description" value="{{ old('description',$blogs->description) }}">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Auteur</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            placeholder="Nom de l'auteur" name="auteur" value="{{ old('auteur',$blogs->auteur) }}">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Creation</label>
                                        <input type="date" id="first-name-column" class="form-control"
                                            placeholder="creation" name="creation" value="{{ old('creation',$blogs->creation) }}">
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">img</label>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- File uploader with validation -->
                                            <div class="filepond--root with-validation-filepond filepond--hopper"
                                                data-style-button-remove-item-position="left"
                                                data-style-button-process-item-position="right"
                                                data-style-load-indicator-position="right"
                                                data-style-progress-indicator-position="right"
                                                data-style-button-remove-item-align="false" style="height: 76px;">
                                                <input class="filepond--browser" type="file"
                                                    id="filepond--browser-7d64d55se" name="img"
                                                    aria-controls="filepond--assistant-7d64d55se"
                                                    aria-labelledby="filepond--drop-label-7d64d55se" accept="image/png"
                                                    multiple="" required="">
                                                <div class="filepond--drop-label"
                                                    style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                    <label for="filepond--browser-7d64d55se"
                                                        id="filepond--drop-label-7d64d55se" aria-hidden="true"><br> Drag
                                                        &amp; Drop your files or
                                                        <span class="filepond--label-action"
                                                            tabindex="0">Browse</span>
                                                    </label>
                                                </div>
                                                <div class="filepond--list-scroller"
                                                    style="transform: translate3d(0px, 60px, 0px);">
                                                    <ul class="filepond--list" role="list"></ul>
                                                </div>
                                                <div class="filepond--panel filepond--panel-root" data-scalable="true">
                                                    <div class="filepond--panel-top filepond--panel-root"></div>
                                                    <div class="filepond--panel-center filepond--panel-root"
                                                        style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);">
                                                    </div>
                                                    <div class="filepond--panel-bottom filepond--panel-root"
                                                        style="transform: translate3d(0px, 68px, 0px);"></div>
                                                </div><span class="filepond--assistant"
                                                    id="filepond--assistant-7d64d55se" role="status" aria-live="polite"
                                                    aria-relevant="additions"></span>
                                                <div class="filepond--drip"></div>
                                                <fieldset class="filepond--data"></fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 col-12">
                                    <h6>Select your category please</h6>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect01" name="categorie_article_id">
                                            <option >Choose category...</option>
                                            @foreach ($categorieArticle as $item)
                                                <option @if($item->id == $blogs->categorie_article_id) selected @endif value="{{ $item->id }}">{{ $item->nom }}</option>
                                            @endforeach

                                        </select>
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">

                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p>choose your tag</p>
                                                    <ul class="list-unstyled mb-0">
                                                        @foreach ($tag as $item)
                                                        <li class="d-inline-block me-2 mb-1">
                                                            <div class="form-check">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="form-check-input form-check-success"  name="tag[]"
                                                                    value="{{ $item->id }}"
                                                                    @if($blogs->tags->contains($item->id)) checked  @endif id="customColorCheck1">
                                                                    <label class="form-check-label" for="customColorCheck1">{{ $item->nom }}</label>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
