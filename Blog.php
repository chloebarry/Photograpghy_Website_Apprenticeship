<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Blog Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="StyleSheet.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4b2210fd1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="Script.js" type="text/javascript"></script>
</head>
<body class="container-fluid">


    <!-- Navbar  -->
   <?php include_once 'navbar.php';?>

   
    <div class="row justify-content-center">
        <img src="Logo.jpg" alt="Logo" id="logo" class="col " style="object-fit: contain" />
    </div>

    <div class="row " >
    <div class="col pe-0">
        <div class="container  mt-2">
            <div class="row g-2 justify-content-center">
                <div class="col-sm-12 col-md-12 m-1 card text-center card border-dark">
                    <div class="card-body">
                        <h5 class="card-title">Travelling around London</h5>
                        <p class="card-text"><small class="text-muted">12/10/2022</small></p>
                        <img src="IMAGE (19).jpg" class="card-img-top" alt="Bridge">
                        <p class="card-text p-1">This is photography. This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.</p>

                        <a href="https://www.blogger.com/about/?bpli=1" class="btn-custom p-2" style="width: 20%;">Click here</a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 m-1 card text-center card border-dark">
                    <div class="card-body">
                        <h5 class="card-title">Horse Racing</h5>

                        <p class="card-text"><small class="text-muted">04/04/2022</small></p>
                        <img src="IMAGE (23).jpg" class="card-img-top" alt="Bridge">

                        <p class="card-text p-1">This is photography. This is photography.This is photography.This is photography. This is photography.This is photography.This is photography. This is photography.This is photography.This is photography. This is photography.This is photography.This is photography. This is photography.This is photography.</p>

                        <a href="https://www.blogger.com/about/?bpli=1" class="btn-custom p-2">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-sm-12 col-md-5 ps-0">
        <div class="container  mt-2">
            <div class="row g-2">
                <div class="col-sm-12 col-md-12 m-1 card text-center card border-dark">
                    <div class="card-body">
                        <img src="IMAGE (14).jpg" class="w-100 rounded-circle" alt="Bridge">
                        <p class="card-text">This is photography. This is photography.This is photography.This is photography. This is photography.This is photography.This is photography.This is photography.This is photography.This is photography.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 m-1 card text-center card border-dark">
                    <div class="card-body">
                        <div class="row row-cols-sm-2 row-cols-md-4 text-center">
                            <div class="col p-sm-1 p-md-3"><a href="https://www.facebook.com/" target="_blank" class="fa fa-lg fa-facebook" style="color: black;"></a></div>
                            <div class="col p-sm-1 p-md-3"><a href="https://twitter.com/" target="_blank" class="fa fa-lg fa-twitter" style="color: black;"></a></div>
                            <div class="col p-sm-1 p-md-3"><a href="https://www.linkedin.com/" target="_blank" class="fa fa-lg fa-linkedin" style="color: black;"></a></div>
                            <div class="col p-sm-1 p-md-3 pr-5"><a href="https://www.instagram.com/" target="_blank" class="fa fa-lg fa-instagram" style="color: black;"></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 m-1 card text-center card border-dark">
                    <div class="card-body text-center">
                        <p class="card-text p-2">See more pictures below.</p>
                        <a class="btn-custom p-2 " href="photo catalogue.php">Click here</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <?php include_once 'footer.php';?>

</body>
</html>