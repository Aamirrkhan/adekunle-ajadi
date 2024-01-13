<?php
include "assets/components/header.php";
?>
<div class="humb-links">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex align-items-center humb-links-list">
                    <li><a href="#!"><i class="fa-solid fa-house"></i> Home</a></li>
                    <span>></span>
                    <li><a href="blog.php">Blogs</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="banner-blogs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-text-banner mb-5">
                    <h2 class="sec-hd">Blogs</h2>
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard <br> dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="tabs-area">
                            <ul class="tabs mb-5 tabslist-list">
                                <li data-tab-target="#all-tab" class="active tab">All</li>
                                <li data-tab-target="#career-advice">Career Advice</li>
                                <li data-tab-target="#cover-letter">Cover Letter Help</li>
                                <li data-tab-target="#cv-help">CV Help</li>
                                <li data-tab-target="#interview">Interview</li>
                                <li data-tab-target="#job-hunting">Job Hunting</li>
                                <li data-tab-target="#resume-help">Resume Help</li>
                            </ul>

                            <div class="search-box">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <input type="text" placeholder="Search here">
                            </div>

                            <div class="tab-content">
                                <div id="all-tab" data-tab-content class="active">
                                All
                                </div>
                                <div id="career-advice" data-tab-content>
                                Career Advice
                                </div>
                                <div id="cover-letter" data-tab-content>
                                Cover Letter Help
                                </div>
                                <div id="cv-help" data-tab-content>
                                CV Help
                                </div>
                                <div id="interview" data-tab-content>
                                Interview
                                </div>
                                <div id="job-hunting" data-tab-content>
                                Job Hunting
                                </div>
                                <div id="resume-help" data-tab-content>
                                Resume Help
                                </div>
                            </div>
                    </div>
            </div>
        </div>
    </div>
</section>


<?php
include "assets/components/footer.php";
?>
<script src="assets/js/blogs.js"></script>