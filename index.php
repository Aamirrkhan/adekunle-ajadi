<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/singup-page.css" />
    <link
      rel="shortcut icon"
      href="assets/images/logo-icon.png"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Adekunle Ajadi</title>
  </head>
  <body>
    <div class="header-login">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-6">
            <div class="login">
              <a href="builder.php" class="logo-text d-flex align-items-center">
                <img src="assets/images/header-logo.png" alt="" class="img-fluid"/>
              </a>
            </div>
          </div>
          <div class="col-6">
            <div class="user-icons float-end">
              <a href="#!"><i class="fa-solid fa-user"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="sign-up-apge">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center hd-singup">
              WELCOME TO THE FUTURE OF RESUME BUILDING SITE
            </h1>
          </div>
          <div class="col-12">
            <div class="form-container-area  right-panel-active" id="container-form">
              <div class="form-container sign-up-container">
                <form action="#">
                  <h1 class="creat-sinup-hd">Create Account</h1>
                  <div class="social-container">
                    <a href="#" class="social"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a href="#" class="social"
                      ><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="social"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </div>
                  <div class="or-line"><hr><span>Or</span><hr></div>
                  <input type="text" placeholder="Name" />
                  <input type="email" placeholder="Email" />
                  <input type="password" placeholder="Password" />
                  <button class="signup-btn">Sign Up</button>
                </form>
              </div>
              <div class="form-container sign-in-container">
                <form action="#">
                  <h1 class="creat-sinup-hd">Sign in</h1>
                  <input type="email" placeholder="Email" />
                  <input type="password" placeholder="Password" />
                  <a href="#" class="forget-btn">Forgot your password?</a>
                  <button class="signup-btn" type="submit">Sign In</button>
                </form>
              </div>
              <div class="overlay-container">
                <div class="overlay">
                  <div class="overlay-panel overlay-left login-text">
                    <h1>Welcome!</h1>
                    <p>
                        To keep connected with us, please log in with your info
                    </p>
                    <button class="ghost" id="signIn">Log in</button>
                  </div>
                  <div class="overlay-panel overlay-right login-text">
                    <h1>Hello, Explorer!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp" type="submit">Sign Up</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mobile-sign-form">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 text-center">
                        <h1 class="creat-sinup-hd">Create Account</h1>
                        <div class="social-container">
                          <a href="#" class="social"
                            ><i class="fab fa-facebook-f"></i
                          ></a>
                          <a href="#" class="social"
                            ><i class="fa-brands fa-google"></i></a>
                          <a href="#" class="social"
                            ><i class="fab fa-linkedin-in"></i
                          ></a>
                        </div>
                        <div class="or-line"><hr><span>Or</span><hr></div>
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <button class="signup-btn">Sign Up</button>
                </div>
                <div class="col-md-6 col-12 text-center">
                        <h1 class="creat-sinup-hd">Sign in</h1>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#" class="forget-btn">Forgot your password?</a>
                    <button class="signup-btn" type="submit">Sign In</button>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-sing">
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
    </footer>
    
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/singup.js"></script>
  </body>
</html>
