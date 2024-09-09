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
          Login
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{ url('/login') }}" method="post">
              @csrf
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Your Password" name="password" />
              </div>
              <div class="btn_box">
                <button style="margin-top: 15px;border: none;text-transform: uppercase;display: inline-block;
                padding: 10px 55px;background-color: #ffbe33; color: #ffffff;border-radius: 45px;
                -webkit-transition: all 0.3s;transition: all 0.3s;border: none;">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
@endsection