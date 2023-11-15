<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Medical Center</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +94 755 809 737</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> aabith619@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://github.com/DSCaki"><span class="mai-logo-github"></span></a>
              <a href="https://www.linkedin.com/in/akthar-aki-578b45129/"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Med</span>-Center</a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href={{url('/')}}>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{url('about')}}>About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{url('team')}}>Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{url('blog')}}>News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{url('contact')}}>Contact</a>
            </li>

            <!-- .login user -->
            @if(Route::has('login'))
            @auth

                <li class="nav-item">
                    <a class="nav-link" style="background-color:springgreen; font-weight: bold"
                    href={{url('myappointment')}}>My Appointment</a>
                </li>

                <x-app-layout>
                </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif
            <!-- .end user -->

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  <div class="bg-light" style="background-image: url(../assets/img/appo.jpg);">
    <div class="page-section pb-8">
      <div class="container">
        <main class="table">
            <section class="table__header">
                <h1>My Appointments</h1>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Doctor Name <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Message <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Cancle <span class="icon-arrow"></span></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($appoint as $appoints)

                        <tr>
                            <td>{{$appoints->doctor}}</td>
                            <td>{{$appoints->date}}</td>
                            <td>{{$appoints->message}}</td>
                            <td>
                                <p class="status {{ $appoints->status === 'approved' ? 'delivered' : ($appoints->status === 'canceled' ? 'cancelled' : 'pending') }}">{{$appoints->status}}</p>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this?')" href="{{url('cancle_appoint', $appoints->id)}}"><p class="status cancelled">Cancle</p></a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </section>
        </main>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->
@include('user.footer')
</body>

</html>
