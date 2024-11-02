<!-- Navigation -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="images/logoo.png" alt="alternative"></a>
        <a href="index.html" class="text-unlis"><span class="green fs-5">Football <span class="white">Academique</span></span></a>
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">Desi</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('home') ? 'active' : ''  }}" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('academie') ? 'active' : '' }}" href="{{ route('academie') }}">L'académique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('inscription') ? 'active' : '' }}" href="{{ route('inscription') }}">Inscription</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('contact') ? 'active' : ''}} " href="{{ route('contact') }}">Contactez-Nous</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation --
