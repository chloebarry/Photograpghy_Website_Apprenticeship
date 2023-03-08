<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/4b2210fd1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="Script.js" type="text/javascript"> </script>
    <link href="StyleSheet.css" rel="stylesheet" />
</head>

<body class="container-fluid">

    <?php include_once 'navbar.php';?>

    <div class="row justify-content-center">
        <img src="Logo.jpg" alt="Logo" id="logo" class="col" style="object-fit: contain" />
    </div>

    
  
    <div class="row justify-content-center">
        <div class="col">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="IMAGE (9).jpg" class="d-block w-100 carousel-item-image" alt="River">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-nowrap">Photographers Name Studio</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGE (10).jpg" class="d-block w-100 carousel-item-image" alt="mountains">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-nowrap">Photographers Name Studio</h5>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="IMAGE (5).jpg" class="d-block w-100 carousel-item-image" alt="Poppy">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-nowrap">Photographers Name Studio</h5>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <div class="row pt-4 pb-2">
        <div class="col" id="position">
            <h1>Click the buttons below</h1>
        </div>
    </div>

    <div class="row pb-4 pt-2">
        <div class="col text-center" id="btn-position">
            <a  href="photo catalogue.php" target="_blank" class="btn btn-dark custom-hover"> Photos </a>
            <a  href="https://www.instagram.com/" target="_blank" class="btn hover" style="border: black solid 2px;"> Instagram </a>
        </div>
    </div>

    <br />

    <?php include_once 'footer.php';?>


</body>
</html>