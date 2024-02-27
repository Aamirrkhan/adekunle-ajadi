<?php
include 'header-journey.php';
?>
<style>
    .footer-sing {
        padding-top: 20px;
        color: #929292;
        font-family: Poppins;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 28.5px;
        padding-bottom: 20px;
        border-top: 1px solid #767676;
        background: transparent !important;
        position: absolute;
        width: 100%;
        bottom: 0;
    }

    @media (max-width: 1600px) {
        .footer-sing {
            bottom: -100px;
        }

        section.thanksyou:before {
            bottom: 66px;
        }
    }
    @media (max-width: 1280px) {
        .footer-sing {
            bottom: -75px;
        }

    }
</style>
<section class="thanksyou">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12 z-index">
                <div class="thanksbox">
                    <i class="fa-solid fa-heart"></i>
                    <h2>THANK YOU</h2>
                    <h4 class="foryou">for your</h4>
                    <h2>PURCHASE!</h2>
                </div>

                <div class="goback">
                    <a href="javascript:void()">GO BACK TO HOME</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer-journey.php';
?>