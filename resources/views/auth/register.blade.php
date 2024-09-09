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
          Register
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="{{url('/register')}}" method="post">
              @csrf
              <div>
                <input type="text" class="form-control" placeholder="Your Name" name="name"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Your Username" name="username" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Your Password" name="password" />
              </div>
              <div class="btn_box">
                <button name="submit" type="submit">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->
@endsection