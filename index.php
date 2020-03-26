<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="container">
        <div class="page-title">
            <p>CONTACT US</p>
        </div>
        <div class="row mt-5 align-items-center"> 
            <div class="col-md-5">
                <p id="corporate">Corporate Head Office</p>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-map-marker" aria-hidden="true"></i></span>124, Ozumba Mbadiwe Avenue, <br>V.I, Lagos.</li>
                    <li><span class="fa-li"><i class="fa fa-phone" aria-hidden="true"></i></span>+234-804-789-4512</li>
                    <li><span class="fa-li"><i class="fa fa-envelope" aria-hidden="true"></i></span>info@goaltracker.com</li>
                    <li><span class="fa-li"><i class="fa fa-globe" aria-hidden="true"></i></span>www.goaltracker.com</li>
                </ul>
                
                <div class="logo-group">
                    <span class="linkedin mr-3"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span>
                    <span class="github mr-3"><i class="fa fa-github" aria-hidden="true"></i></span>
                    <span class="twitter mr-3"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                </div>
            </div>
            <!--FORM COLUMN-->
            <div class="col-md-7">
            <div class="form-section pb-5">
                <form action="./handleform.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        <p class="ml-5 mt-2">Your input must have at least four characters</p>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control">
                        <p class="ml-5 mt-2">Your input is not in the correct format for a standard email address</p>  
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone">Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" class="form-control d-block">
                    </div>
                    <div class="form-group mt-3">
                        <label for="msg">Message</label>
                        <textarea name="msg" id="msg" class="form-control d-block">Your message body here...</textarea>
                        <p class="ml-5 mt-2">Your input muust have a minimum of 20 characters</p> 
                    </div>
                    <input type="submit" name="send" value="SEND" class="btn btn-warning text-white d-block mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--scripts--> 
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="contact.js"></script>
</body>
</html>