<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/singup-page.css" />
    <link rel="shortcut icon" href="assets/images/logo-icon.png" type="image/x-icon" />
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
                        <a href="builder.php" class="logo-text d-flex align-items-center">
                            <img src="assets/images/header-logo.png" alt="" class="img-fluid" />
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

    <section class="forget-password" style="background-image: url(assets/images/Vector-platform.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9 col-md-12">
                    <div class="forget-sec">
                        <h1>Check Your Mail</h1>
                        <p class="para-forget">
                            Enter the 4-digit verification code we’ve sent you on your given email address
                        </p>
                        <div class="otp-field">
                            <input type="number" maxlength="1" />
                            <input type="number" maxlength="1" />
                            <input type="number" maxlength="1" />
                            <input type="number" maxlength="1" />
                            <!-- <input type="text" maxlength="1" /> -->
                        </div>

                        <div class="text-center"><button class="submit-forget">Verify</button></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-sing">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-12">
                    <p>© <script>
                            document.write(new Date().getFullYear())
                        </script> Abrm technology LLC. All rights reserved</p>
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
    <script>
        const inputs = document.querySelectorAll(".otp-field input");

        inputs.forEach((input, index) => {
            input.dataset.index = index;
            input.addEventListener("keyup", handleOtp);
            input.addEventListener("paste", handleOnPasteOtp);
        });

        function handleOtp(e) {
            /**
             * <input type="text" 👉 maxlength="1" />
             * 👉 NOTE: On mobile devices `maxlength` property isn't supported,
             * So we to write our own logic to make it work. 🙂
             */
            const input = e.target;
            let value = input.value;
            let isValidInput = value.match(/[0-9a-z]/gi);
            input.value = "";
            input.value = isValidInput ? value[0] : "";

            let fieldIndex = input.dataset.index;
            if (fieldIndex < inputs.length - 1 && isValidInput) {
                input.nextElementSibling.focus();
            }

            if (e.key === "Backspace" && fieldIndex > 0) {
                input.previousElementSibling.focus();
            }

            if (fieldIndex == inputs.length - 1 && isValidInput) {
                submit();
            }
        }

        function handleOnPasteOtp(e) {
            const data = e.clipboardData.getData("text");
            const value = data.split("");
            if (value.length === inputs.length) {
                inputs.forEach((input, index) => (input.value = value[index]));
                submit();
            }
        }

        function submit() {
            console.log("Submitting...");
            // 👇 Entered OTP
            let otp = "";
            inputs.forEach((input) => {
                otp += input.value;
                input.disabled = true;
                input.classList.add("disabled");
            });
            console.log(otp);
            // 👉 Call API below
        }
    </script>
</body>

</html>