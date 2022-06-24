@extends('layouts.user-app')

@section('title')
Home
@endsection

@section('active1')
active
@endsection

@section('body')
<body class="home" style="background-image: url({{ asset('/img/bg/background-home1.png') }})">
    @section('content')
        <div class="content flex-grow d-flex flex-column">
            <div class="soc-med">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-steam"></i></a>
                <a href=""><i class="fa-brands fa-discord"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="up-down-container d-flex">
                <a href="#section1" class="scroll-up"><span class="material-symbols-outlined">expand_less</span></a>
                <a href="#section2" class="scroll-down"><span class="material-symbols-outlined">expand_more</span></a>
            </div>
            <section id="section1" class="hero">
                <span id="prev" class="material-symbols-outlined color-white">arrow_back</span>
                <div class="carousel-container">
                    @foreach ($projects as $project)
                    <div class="carousel-items">
                        <div class="description-cont">
                            <p>{{ $project->description }}</p>
                        </div>
                        <div class="image-cont">
                            <div class="img-wrapper">
                                <img src="{{ asset('img/projects/bg/00_main_page_bg/' . $project->main_page_bg ) }}" alt="">
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- indicators --}}
                    <div class="indicators-wrapper">
                        <div class="forRelative">
                            <div class="indicators-cont">
                                @foreach ($projects as $project)
                                    <div class="indicators"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <span id="next" class="material-symbols-outlined color-white">arrow_forward</span>
            </section>
            <section id="section2" class="hero"></section>
            <section id="section3" class="hero"></section>
            <section id="section4" class="hero"></section>
        </div>

        <script src="{{ asset('js/user-side/homepage.js') }}"></script>
    @endsection
</body>
@endsection
