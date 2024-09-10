@extends('layout.master')
@section('content')

    <body class="sub-page">
        <!-- header section strats -->
        @include('shared.header-sub')
        <!-- end header section -->

        <!-- food section -->


        <section class="food_section layout_padding-bottom py-5" style="z-index: 5">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our Menu
                    </h2>
                </div>

                <ul class="filters_menu">
                    <li class="active" data-filter="*">All</li>
                    @foreach ($tags as $tag)
                        <li data-filter=".<?= strtolower($tag->name) ?>">{{ $tag->name }}</li>
                    @endforeach
                </ul>

                <div class="filters-content">
                    <div class="row grid">
                        @foreach ($items as $item)
                            <div class="col-sm-6 col-lg-4 all {{ $item->tag_lower }}">
                                <div class="box">
                                    <div>
                                        <div class="img-box">
                                            <img src="{{ asset($item->image) }}" alt="">
                                        </div>
                                        <div class="detail-box">
                                            <h5>
                                                {{ $item->title }}
                                            </h5>
                                            <p>
                                                {{ $item->license }}
                                            </p>
                                            <div class="options">
                                                <h6>
                                                    ${{ $item->price }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="btn-box">
                    <a href="{{ url('/menu') }}">
                        View More
                    </a>
                </div>
            </div>
        </section>

        <!-- end food section -->
    @endsection
