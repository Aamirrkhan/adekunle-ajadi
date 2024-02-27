<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/slick.css" />
    <link rel="stylesheet" href="../assets/css/reset.css" />    
    <link rel="stylesheet" href="../assets/css/reponsive.css" />
    <link rel="stylesheet" href="../assets/css/steps-form.css" />
    <link rel="shortcut icon" href="../assets/images/logo-icon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Adekunle Ajadi</title>
</head>

<body>
    <div class="header-login">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-6">
                    <div class="login">
                        <a href="../builder.php" class="logo-text d-flex align-items-center">
                            <img src="../assets/images/header-logo.png" alt="" class="img-fluid" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class="step-forms-sec">
        <div class="container-fluid">
            <div class="cont-bg-set">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-12">
                        <div class="step-hd">
                            <h1>How would you like to start?</h1>
                        </div>
                        <form action="">
                            <div class="d-flex justify-content-center fields-row">
                                <div class="btns-radios">
                                    <div class="recom-label">
                                        <p>Recommended</p>
                                    </div>
                                    <input type="radio" placeholder="Build a New Resume" id="build-resume" name="resume">
                                    <label class="btns-form" for="build-resume">
                                        Build a New Resume
                                        <p>We'll guide you through each section.</p>
                                    </label>
                                </div>
                                <div class="btns-radios upload-img">
                                    <input type="file" name="" id="upload-resume">
                                    <label for="upload-resume">
                                        Upload Your Current Resume
                                        <p class="pararbreak">We'll move everything to <br> your new template.</p>
                                        <!-- <p class="img-path-name">We'll move everything to your new template.</p> -->
                                    </label>
                                </div>


                            </div>
                        </form>
                        <p class="step-center-para mt-4">By clicking “Create a New Resume” or “Upload My Current Resume”, you agree to our <a href="javascript:void()">Terms and Conditions</a> and <a href="javascript:void()">Privacy Policy.</a></p>
                    </div>
                </div>
                <div class="btm-large-img">
                    <img src="../assets/images/section-bottom.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>



    <!-- <footer class="footer-sing">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-12">
                    <p>© <script>document.write(new Date().getFullYear())</script> Abrm technology LLC. All rights reserved</p>
                </div>
                <div class="col-md-6 col-12">
                    <p class="float-end">Privacy Policy - Terms & Conditions</p>
                </div>
            </div>
        </div>
    </footer> -->


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/steps.js"></script>
</body>

</html>