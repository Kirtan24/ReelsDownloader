<!-- Navbar -->
<nav class="navbar navbar-expand-sm border border-bottom">
  <div class="container-fluid">
    <a href="{{ url('/') }}"><img src="{{ asset('images/icon2.png') }}" alt="CodX" width="100" height="30"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="how-to" href="#">How To Download?</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

