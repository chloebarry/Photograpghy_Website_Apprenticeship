<!-- Navbar  -->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="white-space: nowrap;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item links ">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { ?> active <?php   }  ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item links">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'photo catalogue.php') { ?> active <?php   }  ?>" href="photo catalogue.php">Photo Catalogue</a>
                </li>
                <li class="nav-item links">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') { ?> active <?php   }  ?>" href="blog.php">Blog</a>
                </li>
                  <li class="nav-item links">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') { ?> active <?php   }  ?>" href="contact.php">Contact</a>
                </li>
                <li class="nav-item links">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'about me.php') { ?> active <?php   }  ?>" href="about me.php">About Me</a>
                </li>
            </ul>
        </div>
    </div>
</nav>