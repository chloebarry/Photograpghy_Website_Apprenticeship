<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>About Me Page</title>
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
        <img src="Logo.jpg" alt="Logo" id="logo" class="col" style="object-fit: contain" />
    </div>


    <div class="row ">
        <div class="col container m-2">
            <div class="row">

                <img src="IMAGE (14).jpg" class="col-auto" alt="Bridge">


            </div>

        </div>
        <div class="col-sm-12 col-md-6 container m-2">
            <div class="row">
                <div class="text-wrap col-auto">

                    <h1 class="mb-2" style="text-align: left;">Photographers Name</h1>
                    <p>This is theabout me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is theabout me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.</p>
                    <p > Paragraph 2. This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section. </p>
                    <p>Paragraph 3. This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is thea bout me section.This is theabout me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.This is theabout me section.This is the about me section.This is the about me section.This is the about me section.This is the about me section.</p>


                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto">
                    <div id="opacity" class="arrow bounce">
                        <svg height="25" width="50">
                            <polygon points="0,0 25,10 50,0 25,25" fill="#c0c0c0" stroke-width="0" stroke="rgba(255,255,255,.3)" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>


    </div>


    <div class="row justify-content-center mt-2 mb-5">
        <div class="col-sm-12 col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            My work
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. My work. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Previous Clients
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">I have work with weddings and nature photography. I have work with weddings and nature photography.I have work with weddings and nature photography. I have work with weddings and nature photography.I have work with weddings and nature photography.I have work with weddings and nature photography.I have work with weddings and nature photography.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            About my Photography tools 
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">I use a camera. I use a camera.I use a camera.I use a camera.I use a camera.I use a camera.I use a camera. I use a camera.I use a camera.I use a camera.</div>
            </div>

        </div>
        </div>

</div>
</div>

        <?php include_once 'footer.php';?>

</body>
</html>