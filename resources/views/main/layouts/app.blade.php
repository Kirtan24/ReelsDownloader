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

/* Custom CSS for dropdown */
.navbar-nav .nav-item.dropdown:hover .dropdown-menu {
  display: block;
}
.nav-link{
  transition:all 0.2s ease-in-out;
}
.nav-link:hover {
  color:black;
}
.dropdown-menu {
  margin-top: 0;
  background-color: #fff;
  border-radius: 5px;
}

.dropdown-item {
  transition:all 0.2s ease-in-out;
  font-weight:100;
}

.dropdown-item:hover {
  color:black;
  font-weight:400;
  padding-left:20px;
  background-color: #f8f9fa;
}

::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #fff;
}

::-webkit-scrollbar
{
	width: 5px;
	background-color: #fff;
}

::-webkit-scrollbar-thumb
{
	background-color: #000;
  border-radius:5px;
}

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

    .footer{
      position: fixed;
      bottom:0;
      width:100%;
      background-color:#fff;
    }
    </style>

</head>
<body>
    <!-- Navbar -->
      @include('main.layouts.header')
    <!-- /Navbar -->

    <!-- Content -->
      @yield('content')
    <!-- /Content -->

    <!-- Navbar -->
      @include('main.layouts.footer')
    <!-- /Navbar -->

    <script>
      document.querySelector('.navbar-toggle').addEventListener('click', function() {
        document.querySelector('.navbar-links').classList.toggle('open');
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
