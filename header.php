<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/reset.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/reponsive.css" />
  <link rel="stylesheet" href="assets/css/language.css" />
  <link rel="shortcut icon" href="assets/images/logo-icon.png" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Adekunle Ajadi</title>
  <style>
    .dropdown.dropdown-language {
    width: 130px;
}

.dropdown.dropdown-language button {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.dropdown.dropdown-language button img {
    width: 20% !important;
}
.dropdown.dropdown-language button {
    background: transparent;
    border: none;
    color: black;
    font-weight: 600;
    text-transform: uppercase;
}

button.flag_link.dropdown-item {
    font-weight: 400;
    text-transform: capitalize !important;
    justify-content: start;
}

button.flag_link.dropdown-item img {
    margin-right: 10px;
}
  </style>
</head>

<body>
  <header class="main-header">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="width-content">
          <a href=".">
            <img src="assets/images/header-logo.png" alt="" class="img-fluid header-logo" />
          </a>
        </div>
        <div class="w-100">
          <div class="navbar-head">
            <div class="d-flex justify-content-end">
              <ul class="d-flex justify-content-between align-items-center navlist-head mobile-humber">
                <li class="menuclosedbtn-up"><button class="mobile-menu-closed"><i class="fa-solid fa-xmark"></i></button></li>
                <li class="none-header"><a href="." class="login-btn-header humber-show">Log in</a></li>
                <li><a href="builder.php">BUilder</a></li>
                <li class="resume-drop">
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="javascript:void()" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      RESUME
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="resume-letter.php">RESUME</a></li>

                    </ul>
                  </div>
                </li>
                <li class="coverr-drop">
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="javascript:void()" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      COVER LETTER
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li>
                        <a class="dropdown-item" href="cover-letter.php">COVER LETTER</a>
                      </li>
                      
                    </ul>
                  </div>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="#!">Jobs</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <ul class="d-flex justify-content-between align-items-center navlist-head">
                <li>
                  <div class="translater-area" style="display: none;">
                    <div id="google_translate_element"></div>
                  </div>
                  <div class="dropdown dropdown-language">
                    <button class="btn btn-secondary dropdown-toggle trans-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img class="img-fluid main-flg" src="./assets/images/flag1.png" alt="">
                      English
                    </button>
                    <ul class="dropdown-menu flag">
                      <li>
                        <button class="flag_link eng dropdown-item default" data-lang="en">
                          <img class="img-fluid" src="./assets/images/flag1.png" alt="">
                          English
                        </button>
                      </li>
                      <li>
                        <button class="flag_link chi dropdown-item" data-lang="zh-CN">
                          <img class="img-fluid" src="./assets/images/flag.png" alt="">
                          Chinese
                        </button>
                      </li>
                      <li>
                        <button class="flag_link chi dropdown-item" data-lang="it">
                          <img class="img-fluid" src="./assets/images/flag3.png" alt="">
                          Italiano
                        </button>
                      </li>
                    </ul>
                  </div>

                  <!-- <div class="js">
                            <div
                              class="language-picker js-language-picker"
                              data-trigger-class="btn btn--subtle"
                            >
                              <form action="" class="language-picker__form">
                                <label for="language-picker-select"
                                  >Select your language</label
                                >
                                <select
                                  name="language-picker-select"
                                  id="language-picker-select"
                                >
                                  <option lang="de" value="deutsch">Deutsch</option>
                                  <option lang="en" value="english" selected>
                                    English
                                  </option>
                                  <option lang="fr" value="francais">Français</option>
                                  <option lang="it" value="italiano">Italiano</option>
                                </select>
                              </form>
                            </div>
                          </div> -->
                </li>
                <li class="login-none"><a href="." class="login-btn-header">Log in</a></li>
                <li class="mobile-menu-open"><button class="mobile-menu"><i class="fa-solid fa-bars"></i></button></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="loader-resume">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10">
          <div class="laoder-section">
            <img src="assets/images/loader-img.png">
            <h4>Let's Create a resume for the </h4>
            <h1>top sales associate</h1>
            <h4>in you! </h4>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script>
    var flags = document.getElementsByClassName('flag_link');
    const mainflg = document.querySelector('.main-flg');

    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,zh-CN,it',
      }, 'google_translate_element');
    }

    Array.prototype.forEach.call(flags, function(e) {
      e.addEventListener('click', function() {
        var lang = e.getAttribute('data-lang');
        var languageSelect = document.querySelector("select.goog-te-combo");
        languageSelect.value = lang;
        var img = e.querySelector('.img-fluid')
        console.log(img.src)
        mainflg.src = img.src
        languageSelect.dispatchEvent(new Event("change"));
      });
    });
  </script>
  <script is:inline type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>