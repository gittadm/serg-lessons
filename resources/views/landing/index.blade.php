@extends('landing.layout.app')

@section('title')
    Главная страница
@endsection

@section('css2')
    <link href="{{ asset("land/css/styles.css") }}" rel="stylesheet" />
    <style>
        h2.post-title {
            color: red;
        }
    </style>
@endsection

@section('main')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                        <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on September 24, 2023
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset("land/js/scripts.js") }}"></script>
    <script>
        // alert(1);
    </script>
@endsection
