@extends('main.layouts.app')

@section('content')
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

        <div class="video-container mt-3">
                  <div class="text-left">
                    <img src="https://proxy.mediadownloader.app/get?__sig=BcgFedWQrVCoeddsgTkzmg&__expires=1711777749&uri=https%3A%2F%2Finstagram.fcai19-5.fna.fbcdn.net%2Fv%2Ft51.29350-15%2F434678537_293982490238452_8806089932300817191_n.jpg%3Fstp%3Ddst-jpg_e15_fr_p1080x1080%26_nc_ht%3Dinstagram.fcai19-5.fna.fbcdn.net%26_nc_cat%3D1%26_nc_ohc%3DH1uELiaQ7sUAX-Nf3Ck%26edm%3DAP_V10EBAAAA%26ccb%3D7-5%26oh%3D00_AfCR_BAdZiZFDqw2DBQm_jAcRPS_4hmIYV6jV65HEYtHvA%26oe%3D660829BB%26_nc_sid%3D2999b8&__srvid=instagram&__cid=mTY2wLHa1yPMcXBdrchsqQ" alt="Thumbnails" id="thumb" style="border-radius:20px;" width="200" height="200">
                  </div>
                  <button class="btn btn-primary mt-3" id="downloadButton">Download</button>
                </div>
      </div>
    </div>
    <div class="preview-section" id="preview-section">
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

    $("#searchButton").click(function() {
      var instagramLink = $("#url").val();
      
      $.ajax({
          url: "{{url('/download-reels')}}",
          method: 'POST',
          contentType: 'application/json',
          data: JSON.stringify({ reels_url: instagramLink }),
          success: function(response) {
            if(response.video){
              var copiedLinkHtml = "<p>Copied Link: " + instagramLink + "</p>";
              var videoHtml = `<div class="video-container mt-3">
                  <div class="text-center">
                    
                  </div>
                  <button class="btn btn-primary mt-3" id="downloadButton">Download</button>
                </div>`;
              $("#preview-section").html(videoHtml);
            } else {
              console.error('No video URL found in response');
            }
          },
          error: function(xhr, status, error) {
            console.error('Error:', error);
          }
      });
    });

    $(document).on('click', '#downloadButton', function() {
        var videoUrl = $("#video source").attr('src');
        var downloadLink = document.createElement('a');
        downloadLink.href = videoUrl;
        downloadLink.download = 'instagram_video.mp4';
        downloadLink.click();
    });
  });
</script>
@endsection
<!-- <video width="280" height="500" id="video" style="border-radius:20px;" controls autoplay>
                      <source src="${response.video}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video> -->
                    <!-- <iframe src="${response.video}" width="280" height="500" id="video" style="border-radius:20px;" frameborder="0" allowfullscreen></iframe> -->