@extends('layout.master')
@section('content')

    <body class="sub-page">
        <!-- header section strats -->
        @include('shared.header-sub')
        <!-- end header section -->
        <!-- book section -->
        <section class="book_section layout_padding">
            <div class="container">
                <div class="heading_container">
                    <h2>
                        Book A Table
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form_container">
                            <form action="{{ url('/book/store') }}" method="post">
                                @csrf
                                <div>
                                    <input name="name" type="text" class="form-control" placeholder="Your Name" />
                                </div>
                                <div>
                                    <input name="phone" type="text" class="form-control" placeholder="Phone Number" />
                                </div>
                                <div>
                                    <input name="email" type="email" class="form-control" placeholder="Your Email" />
                                </div>
                                <div>
                                    <select name="total" class="form-control nice-select wide">
                                        <option value="1" disabled selected>
                                            How many persons?
                                        </option>
                                        <option value="2">
                                            2
                                        </option>
                                        <option value="3">
                                            3
                                        </option>
                                        <option value="4">
                                            4
                                        </option>
                                        <option value="5">
                                            5
                                        </option>
                                    </select>
                                </div>
                                <div>
                                    <input name="date" type="date" class="form-control">
                                </div>
                                <div class="btn_box">
                                    <button type="submit">
                                        Book Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map_container ">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end book section -->
    @endsection
