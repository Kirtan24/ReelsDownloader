@extends('main.layouts.app')

@section('content')
<!-- 
    <div class="container-fluid" style="background-image: url('{{ asset('images/newImage.jpg') }}'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6 text-center">
                <div class="card" style="background: rgba(255, 255, 255, 0); backdrop-filter: blur(50px);">
                    <div class="card-body">
                    <h5 class="card-title" style="text-shadow: 0 0 10px rgba(0, 0, 0, 0.3); color: #cbd11f; font-size:35px;">Instagram Reels</h5>
                        <div class="input-group mb-3"> 
                            <input type="text" class="form-control" id="url" placeholder="Enter Instagram URL">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="pasteUrlBtn" onclick="pasteUrl()">Paste URL</button>
                            </div>~
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="border-outer">
                                <button class="btn btn-outline-secondary" onclick="loadMedia()">Load Media</button>
                            </div>
                        </div>                    
                        <div id="mediaPreview" class="mb-3"></div>
                        <button class="btn btn-success" id="downloadBtn" style="display: none;">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img class="rounded-circle" src="{{('images/newimage.jpg')}}" alt="CodX">
      CodX
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex text-right collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Link 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="display-4 fw-bold">
          Instagram Video Downloader
        </h2>
        <p class="lead">
          Paste the Instagram video link below to download.
        </p>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Paste Instagram video link here" aria-label="Paste Instagram video link here" aria-describedby="button-paste">
          <button class="btn btn-outline-dark" type="button" id="button-paste" onclick="pasteUrl()">Paste</button>
        </div>
        <button class="btn btn-dark" type="button">Search</button>
      </div>
    </div>
    <div class="video-container">
<div class="row justify-content-center mt-5">
      <div class="text-center">
        <video width="280" height="500" controls>
          <source src="{{asset('videos/oggy.mp4')}}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="text-center">
        <a class="btn btn-primary" href="{{asset('videos/oggy.mp4')}}" download>Download Video</a>
        <button class="btn btn-primary" onclick="document.querySelector('video').play()">Play Video</button>
      </div>
    </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer py-3 text-center">
  <div class="container">
    <span class="text-muted">© 2024 Company Name. All rights reserved.</span>
  </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function pasteUrl() {
            navigator.clipboard.readText().then(function(clipboardText) {
                $('#url').val(clipboardText);
            });
        }
        function loadMedia() {
            var url = $('#url').val();

            // Assuming you have an API endpoint for media loading in your Laravel routes
            $.ajax({
                url: '/load-media',
                type: 'GET',
                data: { url: url },
                success: function(data) {
                    $('#mediaPreview').html(data.preview);
                    $('#downloadBtn').show();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
@endsection
