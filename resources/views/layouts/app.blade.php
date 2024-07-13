<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('style')
</head>

<body>
    <header class="navbar  sticky-top ">
        <a class="navbar-brand" href="{{ route('posts.index') }}">
            <img src="{{ url('/images/Logo.png') }}"  width="30" height="30" class="d-inline-block align-top"alt="">
            <p>Blog</p>
        </a>
        <ul>
            <li><a href="https://github.com/Mostafa-Abdelrahman" class="fa fa-github" style="font-size: 20px;"></a></li>
            <li><a href="" class="fa fa-linkedin" style="font-size: 20px;"></a></li>
        </ul>
    </header>
    <div class="container-xxl px-4 px-xxl-2">
        <div class="content-sidebar" >
            <div class="sidebar">
                <div class="masthead">
                    <div class="masthead-content">
                        <a class="logo-link" href="/" aria-label="Axios">
                            <img class="logo"
                                src="{{ url('/images/Logo.png') }}"
                                alt="Axios">
                        </a>
                        <div class="text-content">
                            <h1 class="title">The Techo Blog</h1>
                            <p class="description">
                                Discover the latest trends, tutorials, and tips on popular and emerging programming languages. Perfect for beginners and pros alike. Join our coding community today!
                            </p>
                        </div>
                    </div>
                    <nav class="nav">
                        <a class="nav-link active" href="{{ route('posts.index') }}"> All posts</a>
                        <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
                        <a class="nav-link" href="{{ route('posts.archive') }}">Archive</a>
                    </nav>
                </div>
            </div>
            <main class="main" style=" width:1000px;">
                <div  class="posts-container ">
                    @yield('content')
                </div>
            </main>
           
        </div>
    </div>
    {{-- <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <p>Email: info@example.com</p>
                <p>Phone: +1 234 567 890</p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Your Blog. All rights reserved.</p>
        </div>
    </footer> --}}

    <script async="" src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJJ&amp;placement=bloggetbootstrapcom"
        id="_carbonads_js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
