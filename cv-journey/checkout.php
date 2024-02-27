<?php
include 'header-journey.php';
?>
<section class="checkout-sec" style="background-image: url(../assets/images/loder-bg.png); background-position: center;">
  <div class="container">
    <form action="">
      <div class="row justify-content-between">
        <div class="col-12">
          <h1 class="page-hd">Your Checkout</h1>
        </div>
        <div class="col-md-6 col-12">
          <h4 class="card-sm-hd">Payment method</h4>
          <div class="checkout-cart-box">
            <div class="img-card">
              <img src="../assets/images/card.png" class="img-fluid">
            </div>
            <h4 class="card-sm-hd">Card Details:</h4>
            <div class="card-flieds-area">
              <div class="input-card">
                <label for="">Card Number</label>
                <input id="card-number" class="field__input" type='tel' name='card-number' placeholder='1234 5678 9123 4567' maxlength="20" />
              </div>
              <div class="input-card">
                <label for="">Full Name</label>
                <input type="text" placeholder="Mia Robertson" maxlength="20" pattern="[a-zA-Z]+([ '-][a-zA-Z]+)*">
              </div>

              <div class="input-card">
                <label for="">CVV/CVC</label>
                <input type="number" maxlength="4" placeholder="0123" pattern="[0-9]*" inputmode="numeric">
              </div>
              <div class="input-card">
                <label for="">Expiry Date</label>
                <input type="number" placeholder="01/20" pattern="[0-9]*" inputmode="numeric">
              </div>
              <div class="input-card">
                <label for="">Zip Code</label>
                <input type="number" maxlength="4" placeholder="01234" pattern="[0-9]*" inputmode="numeric">
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-5 col-12">
          <h4 class="card-sm-hd">Order summary</h4>
          <div class="preview-cv-area">
            <h5 class="your-cv">Your CV:</h5>
            <div class="image-cv-area">
              <div class="preive-cv">
                <img src="../assets/images/dragbg-img.png" class="img-fluid">
              </div>
              <img src="../assets/images/header-logo.png" class="cv-logo">
            </div>
            <hr class="preiv-line">
            <div class="d-flex justify-content-between">
              <div>
                <h4 class="checkout-price">Total</h4>
              </div>
              <div>
                <h4 class="checkout-price">$112.25</h4>
              </div>
            </div>
            <div class="pay-download">
              <a href="javascript:void()">PAY & DOWNLOAD</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<?php
include 'footer-journey.php';
?>