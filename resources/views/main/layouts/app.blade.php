<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Reel Downloader</title>

    <style>
        .border-outer {
            display: inline-block;
            padding: 2px;
            border: 2px solid #6c757a;
            border-radius: 10px;
        }
        .navbar-brand img {
      width: 30px;
      height: 30px;
      margin-right: 8px;
    }
    .form-control:focus {
      /* box-shadow: 0 0 0 0.2rem rgba(0, 0, 0, 0.25); */
      box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
      border-color: black;
    }
    .btn-search {
      background-color: #343a40;
      color: white;
    }
    .video-section {
      position: relative;
    
      height: 300px;
      overflow: hidden;
    }
    .video-section video {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
    }
    </style>

</head>
<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
