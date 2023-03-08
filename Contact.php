<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    // use wordwrap() if lines are longer than 70 characters
    $message = wordwrap($message,70);

    // send email
    $success = @mail("example@email.com", $subject, $name . " | " . $country . " | " . $phone . " | " . $message);
    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }
}
 if(!empty($_POST['age'])) die();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Contact Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="StyleSheet.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/4b2210fd1c.js" crossorigin="anonymous"></script>
</head>
<body class="container-fluid">


    <!-- Navbar  -->
    <?php include_once 'navbar.php';?>


    <div class="row justify-content-center">
        <img src="Logo.jpg" alt="Logo" id="logo" class="col" style="object-fit: contain" />
    </div>

    <div class="row justify-content-center">
        <form name="Form" class="col-sm-11 col-md-6" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="name" class="form-label validationCustom01">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required/>
                </div>
                <div class="col-md-4">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" aria-label="Country" name="country" id="country" required>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" required />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required/>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required/>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control" required></textarea>
                </div>
            </div>

            <div>
                <label for="age" style="display:none !important" class="form-label">Age</label>
                <input type="text" name="age" style="display:none !important" tabindex="-1" autocomplete="off">
            </div>
            <div class="row mb-3">
                <div class="col-auto">
                    <button type="submit" class="btn btn-custom">Submit</button>
                </div>
            </div>
            <div class="row">
                <?php
                if(isset($errorMessage)) {
                echo "<div class='col alert alert-danger' role='alert'>An error occured, please try again.</div>";
                } else if(isset($success) && $success == true) {
                echo "<div class='col alert alert-success' role='alert'>Message sent!</div>";
                } else if(isset($success)) {
                echo "<div class='col alert alert-danger' role='alert'>An error occured, please try again.</div>";
                }
                ?>
            </div>
        </form>
    </div>


    <div class="row justify-content-center p-2">

        <div class="col-12 justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4461.002292946076!2d-0.1117634214797268!3d51.464749156393935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe29f2317cd2afd52!2sStudio%20Nine%20Brixton!5e0!3m2!1sen!2suk!4v1670940358081!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>


    <div class="row justify-content-center m-1 p-2" id="list-tab" role="tablist">
        <h1>Social Media</h1>
    </div>

    <div class="row justify-content-center p-2" style="white-space: nowrap;" id="list-tab" role="tablist">
        <button class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" onclick="window.open('https://www.instagram.com/');" type="button"> Instagram</button>
        <button class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" onclick="window.open('https://twitter.com/');" type="button">Twitter</button>
        <button class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" onclick="email()" type="button">Email</button>

        <button class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" onclick="phone()" type="button">Phone Number</button>
        <button class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" onclick="window.open('https://www.facebook.com/');" type="button">Facebook</button>
        <button class="col-auto m-1 p-2 btn-custom list-group-item list-group-item-action" onclick="window.open('https://www.linkedin.com/');" type="button">Linkedin</button>

    </div>
    <div class="row justify-content-center">
        <p class="col-auto m-1 p-2" id="button" style="display:none"> </p>
        <p class="col-auto m-1 p-2" id="button2" style="display:none"> </p>
    </div>




    <?php include_once 'footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="contact.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript"></script>
  
</body>
</html>