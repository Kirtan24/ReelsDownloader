@extends('main.layouts.app')

@section('content')
<!-- Content Section -->
<section class="py-5 mb-3">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="row col text-center">
        <button class="btn" type="button" id="button-reels">
          <img class="img-fluid" src="{{asset('images/reels.gif')}}" width="50px" height="50px" alt="Reels">
        </button>
        <span>Reels</span>
      </div>
      <div class="row col text-center">
        <button class="btn" type="button" id="button-post">
          <img class="img-fluid" src="{{asset('images/post.gif')}}" width="50px" height="50px" alt="Post">
        </button>
        <span>Post</span>
      </div>
      <div class="row col text-center">
        <button class="btn" type="button" id="button-story">
          <img class="img-fluid" src="{{asset('images/storie.gif')}}" width="50px" height="50px" alt="Story">
        </button>
        <span>Story</span>
      </div>
      <!-- <div class="row col text-center">
        <button class="btn" type="button" id="button-music">
          <img class="img-fluid" src="{{asset('images/music.gif')}}" width="50px" height="50px" alt="Music">
        </button>
        <span>Music</span>
      </div> -->
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="display-4 fw-bold" id="title">
          Instagram Reels Downloader.
        </h2>
        <p class="lead" id="description">
          Paste the Instagram reels link below to download.
        </p>
        <form method="post">
          <div class="input-group mb-3">
            <input type="text" id="url" class="form-control" placeholder="Paste Instagram reels link here" />
            <button class="btn btn-outline-dark" type="button" id="button-paste" onclick="pasteUrl()">Paste</button>
          </div>
          <button class="btn btn-dark" type="button" id="searchButton">Search</button>
        </form>
      </div>
    </div>
    <div class="preview-section">
     <!-- <div class="video-container mt-3">
       <div class="text-center">
         <video width="280" height="500" style="border-radius:20px;" controls>
           <source src="{{asset('videos/oggy.mp4')}}" type="video/mp4">
           Your browser does not support the video tag.
         </video>
       </div> -->
     <!-- </div>
     <div class="row justify-content-center mt-3">
       <div class="text-center">
         <a class="btn btn-dark" id="download-link" href="{{asset('videos/oggy.mp4')}}" download>Download Video</a>
       </div>
     </div> -->
    </div>
  </div>
</section>
@endsection

@section('script')
<script>
  function pasteUrl() {
      navigator.clipboard.readText().then(function(clipboardText) {
      $('#url').val(clipboardText);
    });
  }

  $(document).ready(function() {
    // Set CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#button-reels").click(function (e) { 
  e.preventDefault();
  $("#title").text("Instagram Reels Downloader.");
  $("#description").text("Paste the Instagram reels link below to download.");
  $("#url").attr("placeholder", "Paste Instagram reels link here");
});

$("#button-post").click(function (e) { 
  e.preventDefault();
  $("#title").text("Instagram Post Downloader.");
  $("#description").text("Paste the Instagram post link below to download.");
  $("#url").attr("placeholder", "Paste Instagram post link here");
});

$("#button-story").click(function (e) { 
  e.preventDefault();
  $("#title").text("Instagram Story Downloader.");
  $("#description").text("Paste the Instagram story link below to download.");
  $("#url").attr("placeholder", "Paste Instagram story link here");
});

$("#button-music").click(function (e) { 
  e.preventDefault();
  $("#title").text("Instagram Music Downloader.");
  $("#description").text("Paste the Instagram music link below to download.");
  $("#url").attr("placeholder", "Paste Instagram music link here");
});

    // Click event handler for Search button
    $("#searchButton").click(function() {
      var instagramLink = $("#url").val();
      
      $.ajax({
          url: "{{url('/download-reels')}}",
          method: 'POST',
          contentType: 'application/json',
          data: JSON.stringify({ reels_url: instagramLink }),
          success: function(data) {
            var copiedLinkHtml = "<p>Copied Link: " + instagramLink + "</p>";
            var videoHtml = `<div class="video-container mt-3">
              <div class="text-center">
                <video width="280" height="500" id="reelsVideo" style="border-radius:20px;" controls>
                  <source src="${data.video_url}" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>`;
            $("#resultContainer").html(copiedLinkHtml + videoHtml + '<br><button id="downloadButton">Download</button>');
          },
          error: function(xhr, status, error) {
            console.error('Error:', error);
          }
      });
    });

    $(document).on('click', '#downloadButton', function() {
        var videoUrl = $("#reelsVideo source").attr('src');
        
        var downloadLink = document.createElement('a');
        downloadLink.href = videoUrl;
        downloadLink.download = 'instagram_video.mp4';
        downloadLink.click();
    });
  });
</script>
@endsection
