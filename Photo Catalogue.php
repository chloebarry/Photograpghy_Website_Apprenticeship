<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Photo Catalogue Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="StyleSheet.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4b2210fd1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="Script.js" type="text/javascript"></script>
</head>
<body class="container-fluid">


    <?php include_once 'navbar.php';?>



    <div class="row justify-content-center">
        <img src="Logo.jpg" alt="Logo" id="logo" class="col" style="object-fit: contain" />
    </div>


    <div class="row">

        <img class="col p-0  col-sm-12 col-md-12" style="max-height: 70vh; object-fit: cover;" src="IMAGE (24).jpg" alt="train" />
    </div>
 

    <div class="row justify-content-center p-2">

        <h1>Photographers Name Portfolio </h1>


    </div>

    <div class="row justify-content-center" id="list-tab" role="tablist">
        <a class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action active" id="list-animals-list" data-bs-toggle="list" href="#list-animals" role="tab" aria-controls="list-animals">Animals</a>
        <a class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" id="list-farming-list" data-bs-toggle="list" href="#list-farming" role="tab" aria-controls="list-farming">Farming</a>
        <a class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" id="list-landscapes-list" data-bs-toggle="list" href="#list-landscapes" role="tab" aria-controls="list-landscapes">Landscapes</a>
        <a class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" id="list-nature-list" data-bs-toggle="list" href="#list-nature" role="tab" aria-controls="list-nature">Nature</a>
        <a class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" id="list-sport-list" data-bs-toggle="list" href="#list-sport" role="tab" aria-controls="list-sport">Sport</a>
        <a class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" id="list-transport-list" data-bs-toggle="list" href="#list-transport" role="tab" aria-controls="list-transport">Transport</a>

        <div class="col-12">
            <div class="tab-content w-100" id="nav-tabContent">
                <div class="row tab-pane fade show active w-100 m-0 text-center" id="list-animals" role="tabpanel" aria-labelledby="list-animals-list">
                    <img class="cursor-pointer col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (3).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (4).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (6).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (12).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (17).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (18).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (21).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (22).jpg" alt="animal" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (27).jpg" alt="animal" />
                </div>

                <div class="row tab-pane fade w-100 m-0 text-center" id="list-farming" role="tabpanel" aria-labelledby="list-farming-list">
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (14).jpg" alt="farming" />
                </div>

                <div class="row tab-pane fade w-100 m-0 text-center" id="list-landscapes" role="tabpanel" aria-labelledby="list-landscapes-list">
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (11).jpg" alt="landscape" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (13).jpg" alt="landscape" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (16).jpg" alt="landscape" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (19).jpg" alt="landscape" />
                </div>

                <div class="row tab-pane fade w-100 m-0 text-center" id="list-nature" role="tabpanel" aria-labelledby="list-nature-list">
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (1).jpg" alt="nature" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (5).jpg" alt="nature" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (9).jpg" alt="nature" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (10).jpg" alt="nature" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (20).jpg" alt="nature" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (29).jpg" alt="nature" />
                </div>

                <div class="row tab-pane fade w-100 m-0 text-center" id="list-sport" role="tabpanel" aria-labelledby="list-sport-list">
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (7).jpg" alt="sport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (8).jpg" alt="sport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (23).jpg" alt="sport" />
                </div>

                <div class="row tab-pane fade w-100 m-0 text-center" id="list-transport" role="tabpanel" aria-labelledby="list-transport-list">
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (2).jpg" alt="transport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (15).jpg" alt="transport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (24).jpg" alt="transport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (25).jpg" alt="transport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (26).jpg" alt="transport" />
                    <img class="col p-0 m-sm-2 m-md-2 col-sm-12 col-md-3" src="IMAGE (28).jpg" alt="transport" />
                </div>
            </div>
        </div>
    </div>




    <?php include_once 'footer.php';?>

</body>
</html>