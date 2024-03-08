@extends('main.layouts.app')

@section('content')
<!-- Content Section -->
<section class="py-5 mb-3">
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
          <input type="text" id="url" class="form-control" placeholder="Paste Instagram video link here" aria-label="Paste Instagram video link here" aria-describedby="button-paste" />
          <button class="btn btn-outline-dark" type="button" id="button-paste">Paste</button>
        </div>
        <button class="btn btn-dark" type="button">Search</button>
      </div>
    </div>
    <div class="video-container mt-3">
      <div class="text-center">
        <video width="280" height="500" style="border-radius:20px;" controls>
          <source src="{{asset('videos/oggy.mp4')}}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
    <div class="row justify-content-center mt-3">
      <div class="text-center">
        <a class="btn btn-dark" href="{{asset('videos/oggy.mp4')}}" download>Download Video</a>
      </div>
    </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  var btnPaset = $("#button-paste").click(function (e) { 
    e.preventDefault();
    navigator.clipboard.readText().then(function(clipboardText) {
      $('#url').val(clipboardText);
    });
  });
  // function pasteUrl() {
  //   navigator.clipboard.readText().then(function(clipboardText) {
  //     $('#url').val(clipboardText);
  //   });
  // }
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
