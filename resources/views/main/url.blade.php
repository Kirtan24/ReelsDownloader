@extends('main.layouts.app')

@section('content')

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
                            </div>
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
    </div>

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
                    // Display media preview (you might need to adapt this based on the actual response)
                    $('#mediaPreview').html(data.preview);

                    // Show the download button
                    $('#downloadBtn').show();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
@endsection
