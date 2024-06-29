@extends('main.layouts.app')
@section('content')
<hero id="hero">
  <section class="py-5 mb-3 d-flex align-items-center" id="search" style="min-height: 100vh;">
    <div class="container">
      <!-- https://www.instagram.com/p/C57onyGP0OM/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA== -->

      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <h2 class="display-4 fw-bold" id="title">
            <div>Instagram <span id="typing" style="background: #121FCF; background: linear-gradient(to right, rgba(85,88,218,1) 0%, rgba(95,209,249,1) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></span></div>
            <div><span>Downloader</span></div>
          </h2>
          <p class="lead" id="description">
            Paste the link below to download.
          </p>
          <form me thod="post">
            <div class="input-group mb-3">
              <input type="text" name="url" id="url" class="form-control" placeholder="Paste the link here...">
              <button class="btn btn-dark" type="button" id="button-paste" onclick="pasteUrl()">Paste</button>
            </div>
            <button class="btn btn-dark" type="button" id="searchButton">Search</button>
          </form>
        </div>
      </div>

      <!-- Loading -->
      <div id="loader" class="d-none">
        <svg style="background-color: rgba(0, 0, 0, 0.70);
        width:100%;
        height:100%;
        left: 50%;
        top: 50%;
        z-index: 2;
        position: fixed;
        transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 187.3 93.7">
          <defs>
            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:rgba(85, 88, 218, 1); stop-opacity:1" />
              <stop offset="100%" style="stop-color:rgba(95, 209, 249, 1); stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke-width="4" fill="none" id="outline" stroke="url(#gradient)"></path>
          <path d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" stroke-width="4" stroke="url(#gradient)" fill="none" opacity="0.05" id="outline-bg"></path>
        </svg>
      </div>

      <!-- Preview -->
      <div style="margin-top: 10px;" id="preview" class="d-none">
      </div>
    </div>
  </section>

  <!-- How to download -->
  <section id="how-to-download">
    <div class="container mt-5">
      <div class="text-left mb-4">
        <h1 class="display-4 fw-bold" style="background: #121FCF; background: linear-gradient(to right, rgba(85,88,218,1) 0%, rgba(95,209,249,1) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Download Instagram Reels/Post</h1>
        <p class="ps-2">CodX - Video Downloader is a free, fast, and user-friendly tool that helps you download Instagram Reels videos to your device. You can easily save any Reels video to your phone or computer and view it offline anytime.</p>
      </div>

      <div class="mb-4">
        <h2 class="p-2">Steps to Download.</h2>
        <ol class="list">
          <div class="row">
            <li class="item col-sm-4">
              <h2 class="headline">Find Video</h2>
              <span>Find the reels/post you want to download.</span>
            </li>
            <li class="item col-sm-4">
              <h2 class="headline">Copy Link</h2>
              <span>Copy the URL/Link of the reels/post.</span>
            </li>
            <li class="item col-sm-4">
              <h2 class="headline">Visit site</h2>
              <span>Visit our site: <a href="{{url('/')}}">CodX - Video Downloader</a></span>
            </li>
            <li class="item col-sm-4">
              <h2 class="headline">Paste Link</h2>
              <span>Paste the copied URL/Link into the input box.</span>
            </li>
            <li class="item col-sm-4">
              <h2 class="headline">Search</h2>
              <span>Click the "Search" button to find video.</span>
            </li>
            <li class="item col-sm-4">
              <h2 class="headline">Download</h2>
              <span>Click the "Download" button to save the file to your device.</span>
            </li>
          </div>
        </ol>
      </div>

      <div class="mb-4">
        <h2>How Our Downloader Works</h2>
        <p class="ps-2">Our Instagram Reels downloader is a simple tool that allows you to download Reels, Videos, and Photos from Instagram without a watermark. All you need to do is enter the URL/Link of the content you wish to download.</p>
        <h5 class="ps-2">Key Features:</h5>
        <ul class="custom-list">
          <li><span class="bold-point custom-item">High Quality:</span> Download Reels videos in their original quality without any watermarks.</li>
          <li><span class="bold-point custom-item">Device Compatibility:</span> Save Reels videos to any device, including mobile phones, iPhones, iPads, PCs, or tablets.</li>
          <li><span class="bold-point custom-item">No Software Required:</span> Download Instagram Reels online directly through your browser without needing to install any software.</li>
          <li><span class="bold-point custom-item">Completely Free:</span> Our service is always free to use. We support our platform through minimal ads to maintain and develop our services further.</li>
          <li><span class="bold-point custom-item">Privacy Guaranteed:</span> No login or personal information is required to use our tool, ensuring your privacy. You can use our service to download unlimited Reels videos for free.</li>
        </ul>
      </div>

      <div class="mb-4">
        <h2>Why Choose our Downloader?</h2>
        <p class="ps-2">Our downloader offers a fast and efficient way to download Instagram Reels videos. It takes only a few seconds to fetch the video from the provided link and download it directly to your device's gallery. Our tool ensures a seamless and quick download experience.</p>
      </div>
    </div>
  </section>
</hero>
@endsection

@section('script')
<script>
  const texts = ["Posts", "Reels"];
  let currentIndex = 0;
  let currentText = '';
  let isDeleting = false;
  let typingSpeed = 200;

  const typingElement = document.getElementById('typing');

  function type() {
    const fullText = texts[currentIndex];
    if (isDeleting) {
      currentText = fullText.substring(0, currentText.length - 1);
    } else {
      currentText = fullText.substring(0, currentText.length + 1);
    }

    typingElement.textContent = currentText;

    if (!isDeleting && currentText === fullText) {
      setTimeout(() => {
        isDeleting = true;
        typingSpeed = 100;
      }, 1000);
    } else if (isDeleting && currentText === '') {
      isDeleting = false;
      currentIndex = (currentIndex + 1) % texts.length;
      typingSpeed = 200;
    }

    setTimeout(type, typingSpeed);
  }

  type();

  function pasteUrl() {
    navigator.clipboard.readText().then(function(clipboardText) {
      $('#url').val(clipboardText);
    });
  }

  VANTA.TRUNK({
    el: "#search",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    scaleMobile: 1.00,
    color: 0x2C71F2,
    backgroundColor: 0xffffff,
    spacing: 4.00,
    chaos: 4.50
  });

  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $("#button-reels").click(function(e) {
      e.preventDefault();
      $("#title").text("Instagram Reels Downloader.");
      $("#description").text("Paste the Instagram reels link below to download.");
      $("#url").attr("placeholder", "Paste Instagram reels link here");
    });

    $("#button-post").click(function(e) {
      e.preventDefault();
      $("#title").text("Instagram Post Downloader.");
      $("#description").text("Paste the Instagram post link below to download.");
      $("#url").attr("placeholder", "Paste Instagram post link here");
    });

    $("#button-story").click(function(e) {
      e.preventDefault();
      $("#title").text("Instagram Story Downloader.");
      $("#description").text("Paste the Instagram story link below to download.");
      $("#url").attr("placeholder", "Paste Instagram story link here");
    });

    $("#button-music").click(function(e) {
      e.preventDefault();
      $("#title").text("Instagram Music Downloader.");
      $("#description").text("Paste the Instagram music link below to download.");
      $("#url").attr("placeholder", "Paste Instagram music link here");
    });

    $("#url").blur(function(e) {
      e.preventDefault();
      if ($("#url").text() != "") {
        $("#url").attr('class', 'form-control is-valid');
      }
    });

    $("#how-to").click(function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $('#how-to-download').offset().top
      }, 100);
    });

    $('#searchButton').on('click', function(event) {
      event.preventDefault();

      if ($("#url").val() != "") {
        $("#url").attr('class', 'form-control');
        $("#loader").attr('class', '');
        $("#preview").empty();

        var instagramLink = $("#url").val();
        console.log(instagramLink);

        $.ajax({
          url: "{{ url('/download-reels') }}",
          method: 'POST',
          contentType: 'application/json',
          data: JSON.stringify({
            reels_url: instagramLink
          }),
          success: function(response) {
            $("#loader").attr('class', 'd-none');
            if (response.error) {
              $("#url").attr('class', 'form-control is-invalid');
            }
            if (response.links) {
              let links = response.links;
              let previewContent = '';
              let rowContent = '';

              links.forEach((link, index) => {
                rowContent += `
                <div class="col-sm-4">
                  <div class="card">
                    <img src="${link.thumbnail}" alt="Card Image">
                    <div class="overlay">
                      <a href="${link.download}" class="link-button" download download="download-${index}" target="_blank">Download</a>
                    </div>
                  </div>
                </div>`;

                if ((index + 1) % 3 === 0) {
                  previewContent += `<div class="row d-flex justify-content-center">${rowContent}</div>`;
                  rowContent = '';
                }
              });

              if (rowContent !== '') {
                previewContent += `<div class="row">${rowContent}</div>`;
              }

              $("#preview").html(previewContent);
              $("#preview").attr('class', 'justify-content-center');
            }
          },
          error: function(xhr, status, error) {
            $('#loader').hide();
            $('#preview-section').html('<div class="alert alert-danger" role="alert">Error: ' + error + '</div>');
          }
        });
      } else {
        $("#url").attr('class', 'form-control is-invalid');
      }
    });
  });
</script>

@endsection