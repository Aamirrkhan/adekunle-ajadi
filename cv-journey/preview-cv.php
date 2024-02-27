<?php
include './header-journey.php';
?>
<section class="form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="leftarea">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="d-flex align-items-center gap-1"><img src="../assets/images/spell-icon.png" alt="">Spell Check</span>
                                <span><i class="fa-solid fa-angle-right"></i></span>
                            </div>
                            <div class="accordion-content d-none">
                                <!-- <p>Content for section 1</p> -->
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="d-flex align-items-center gap-1"><img src="../assets/images/spell-icon2.png" alt="">Templates & Colors</span>
                                <span><i class="fa-solid fa-angle-right"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="color-picker d-flex align-items-center gap-3 flex-wrap justify-content-between">
                                    <div>
                                        <input type="radio" id="unset" name="fav_language" value="unset" class="colorbox">
                                        <label for="unset" class="white-color"></label>
                                    </div>
                                    <div>
                                        <input type="radio" id="black" name="fav_language" value="black" class="colorbox" data-bgcolor="#3f3f3f">
                                        <label for="black" class="black-color"></label>
                                    </div>
                                    <div>
                                        <input type="radio" id="blue" name="fav_language" value="blue" class="colorbox" data-bgcolor="#03396c">
                                        <label for="blue" class="blue-color"></label>
                                    </div>
                                    <div>
                                        <input type="radio" id="pink" name="fav_language" value="pink" class="colorbox" data-bgcolor="#b23d8f">
                                        <label for="pink" class="pink-color"></label>
                                    </div>
                                    <div>
                                        <input type="radio" id="yellow" name="fav_language" value="yellow" class="colorbox" data-bgcolor="#f3bc4c">
                                        <label for="yellow" class="yellow-color"></label>
                                    </div>
                                    <div>
                                        <input type="radio" id="orange" name="fav_language" value="orange" class="colorbox" data-bgcolor="#ff7e26">
                                        <label for="orange" class="orange-color"></label>
                                    </div>
                                    <div>
                                        <input type="radio" id="orange-light" name="fav_language" value="orange-light" class="colorbox" data-bgcolor="#d97430">
                                        <label for="orange-light" class="orange-light-color"></label>
                                    </div>
                                </div>
                                <div class="cv-previ-select mt-3 d-flex justify-content-start align-items-center gap-2 flex-wrap overflow-hidden">
                                    <button class="border-none">
                                        <img src="../assets/images/choose1.png" alt="" srcset="">
                                    </button>
                                    <button class="border-none">
                                        <img src="../assets/images/choose2.jpg" alt="" srcset="">
                                    </button>
                                    <button class="border-none">
                                        <img src="../assets/images/choose3.png" alt="" srcset="">
                                    </button>
                                    <button class="border-none">
                                        <img src="../assets/images/choose4.png" alt="" srcset="">
                                    </button>
                                    <button class="border-none">
                                        <img src="../assets/images/choose5.png" alt="" srcset="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="d-flex align-items-center gap-1"><img src="../assets/images/spell-icon3.png" alt="">Styling Tools</span>
                                <span><i class="fa-solid fa-angle-right"></i></span>
                            </div>
                            <div class="accordion-content">
                                <div class="thirds-cont">
                                    <div class="head-third">
                                        <h4>Heading:</h4>
                                        <span class="large-hd">AaBbCcDd</span>
                                    </div>
                                    <div class="head-third">
                                        <h4>Sub-Heading:</h4>
                                        <span class="mid-hd">AaBbCcDd</span>
                                    </div>
                                    <div class="head-third">
                                        <h4>Body Text:</h4>
                                        <span class="small-hd">AaBbCcDd</span>
                                    </div>
                                </div>
                                <div class="font-family">
                                    <label for="cars w-100">Font Style</label>

                                    <select name="cars" id="cars">
                                        <option value="volvo">Poppins</option>
                                        <option value="saab">Poppins</option>
                                        <option value="mercedes">Poppins</option>
                                        <option value="audi">Poppins</option>
                                    </select>
                                </div>
                                <div class="rangeslider-area">
                                    <div class="slidecontainer">
                                        <p>Section Spacing</p>
                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                    </div>
                                    <div class="slidecontainer">
                                        <p>Paragraph Spacing</p>
                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                    </div>
                                    <div class="slidecontainer">
                                        <p>Line Spacing</p>
                                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-12">
                <div class="addmore-exp justify-content-end">
                    <button type="button"><i class="fa-solid fa-pen"></i> Your Cv name</button>
                </div>
                <!-- <div class="preview-img">
                    <img src="../assets/images/previewmain.png" class="img-fluid">
                </div> -->
                <!-- <section class="">
                    <div class="preview-cv-template ">
                        <div class="blue-bg-area color-code">
                            <div class="namebox">
                                <h1 class="name-fields">EMILY DAVID</h1>
                                <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                            </div>
                            <div class="conbox">
                                <ul class="list-cont">
                                    <li class="">
                                        <div class="text-con">Phone Number </div><span class="text-phone"> (234) 567-8900</span> <span class="icon-list"></span>
                                    </li>
                                    <li class="">
                                        <div class="text-con">Email</div><span class="text-email"> Emily@yahoo.com</span> <span class="icon-list"></span>
                                    </li>
                                    <li class="">
                                        <div class="text-con">Address</div> <span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="about-me-five">
                            <p class="aboutme-para">
                                Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                            </p>
                        </div>
                        <div class="expirence-box w-100">
                            <div class="expirence">
                                <h4 class="hd-line-btm text-clr">Experience</h4>
                                <div data-group="clone-group-0" class="company-box-container">
                                    <div class="company-box">
                                        <h4 class="subject-hd compny-name">MAINTENANCE AND ENGINEERING MANAGER</h4>
                                        <div class="d-flex justify-content-between align-items-center border-line-five">
                                            <h4 class="subject-para position-text">lott Incorporation, Texas</h4>
                                            <h4 class="subject-hd date-company">July 2020 - Present</h4>
                                        </div>
                                        <li class="para-expirecnc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum sunt illum, suscipit ab numquam molestiae possimus rerum sint error et optio nemo perspiciatis in quidem nobis cum inventore alias.</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="education-box w-100">
                            <div class="education-data">
                                <h4 class="hd-line-btm text-clr">Education</h4>
                                <div data-group="clone-group-0" class="education-box-area-container">
                                    <div class="mb-3 education-box-area">
                                        <h4 class="subject-hd institute-nme">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                        <h4 class="subject-hd d-flex align-items-center justify-content-between set-edu-line"><span class="degree-name">Expected graduation</span> <span class="degree-date">Jan 2024</span> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-box w-100">
                            <h4 class="hd-line-btm text-clr">Skills</h4>
                            <ul class="skills-ul">
                                <div data-group="clone-group-0" class="skills-content">
                                    <li class="skills-lists">Safety Monitoring</li>
                                </div>
                            </ul>
                        </div>
                        <div class="skills-box w-100">
                            <h4 class="hd-line-btm text-clr">Certifications</h4>
                            <ul class="certiciation-ul">
                                <div data-group="clone-group-0" class="certi-content-box">
                                    <li class="certiciation-list">Safety Monitoring</li>
                                </div>
                            </ul>
                        </div>
                        <div class="laguage-box w-100">
                            <h4 class="hd-line-btm text-clr">Languages</h4>
                            <ul class="laguage-ul">
                                <div data-group="clone-group-0" class="language-box-area-container">
                                    <li class="lang-list">English</li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </section> -->
                <!-- <section>
                    <div class="preview-cv-template">
                        <div class="four-head color-code">
                            <h1 class="name-fields">EMILY DAVID</h1>
                            <div class="span-line"></div>
                            <h4 class="position-company color-code">SENIOR MAINTENANCE MANAGER</h4>
                        </div>
                        <div class="flex-area-contect-expir">
                            <div class="expri-box-four">
                                <div class="expirence-box">
                                    <div class="expirence">
                                        <h4 class="hd-line-btm text-clr">Experience</h4>
                                        <div data-group="clone-group-0" class="company-box-container">
                                            <div class="company-box">
                                                <div class="">
                                                    <h4 class="subject-hd compny-name">MAINTENANCE AND ENGINEERING MANAGER</h4>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <h4 class="subject-hd date-company text-clr">July 2020 - Present</h4> <span>|</span>
                                                    <h4 class="subject-para position-text">lott Incorporation, Texas</h4>
                                                </div>
                                                <li class="para-expirecnc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum sunt illum, suscipit ab numquam molestiae possimus rerum sint error et optio nemo perspiciatis in quidem nobis cum inventore alias.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="education-box">
                                    <div class="education-data">
                                        <h4 class="hd-line-btm text-clr">Education</h4>
                                        <div data-group="clone-group-0" class="education-box-area-container">
                                            <div class="mb-3 education-box-area">
                                                <h4 class="subject-hd institute-discr-para">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                                <span class="degree-name text-clr">Expected graduation</span><span class="degree-date text-clr">Jan 2024</span>
                                                <div><span class="font-weight-thin institute-nme"> ROWAN UNIVERSITY — NJ</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills-box">
                                    <h4 class="hd-line-btm text-clr">Skills</h4>
                                    <ul class="skills-ul">
                                        <div data-group="clone-group-0" class="skills-content">
                                            <li class="skills-lists">Safety Monitoring</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="skills-box">
                                    <h4 class="hd-line-btm text-clr">Certifications</h4>
                                    <ul class="certiciation-ul">
                                        <div data-group="clone-group-0" class="certi-content-box">
                                            <li class="certiciation-list">Safety Monitoring</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="laguage-box">
                                    <h4 class="hd-line-btm text-clr">Languages</h4>
                                    <ul class="laguage-ul">
                                        <div data-group="clone-group-0" class="language-box-area-container">
                                            <li class="lang-list">English</li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-box-four">
                                <div class="contact">
                                    <h4 class="hd-line-btm text-clr">CONTACT</h4>
                                    <ul class="list-cont">
                                        <li class=""><i class="fa-solid fa-phone text-clr"></i><span class="text-phone"> (234) 567-8900</span> <span class="icon-list"></span></li>
                                        <li class=""><i class="fa-regular fa-envelope text-clr"></i><span class="text-email"> Emily@yahoo.com</span> <span class="icon-list"></span></li>
                                        <li class=""><i class="fa-solid fa-location-pin text-clr"></i> <span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"></span></li>
                                    </ul>
                                </div>
                                <div class="expiren">
                                    <h4 class="hd-line-btm text-clr">CAREER OBJECTIVE</h4>
                                    <p class="aboutme-para">
                                        Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- <section class="">
                    <div class="head-pro color-code">
                        <h1 class="name-fields">EMILY DAVID</h1>
                        <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                    </div>
                    <div class="temp-one-career-expirance">
                        <div class="flex-contact-expirence temp-one">
                            <div class="contact">
                                <h4 class="hd-line-btm text-clr">CONTACT</h4>
                                <ul class="list-cont">
                                    <li class=""><span class="text-phone"><a href="tel:(234) 567-8900">(234) 567-8900</a></span> <span class="icon-list"><i class="fa-solid fa-phone text-clr"></i></span></li>
                                    <li class=""><span class="text-email"><a href="mailto:Emily@yahoo.com">Emily@yahoo.com</a></span> <span class="icon-list"><i class="fa-regular fa-envelope text-clr"></i></span></li>
                                    <li class=""><span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"><i class="fa-solid fa-location-pin text-clr"></i></span></li>
                                </ul>
                            </div>
                            <div class="expiren">
                                <h4 class="hd-line-btm text-clr">Career Objective</h4>
                                <p class="aboutme-para">
                                    Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                </p>
                            </div>
                            <div class="education-box">
                                <div class="education-data">
                                    <h4 class="hd-line-btm text-clr">Education</h4>
                                    <div data-group="clone-group-0" class="education-box-area-container">
                                        <div class="mb-3 education-box-area">
                                            <span class="degree-name text-clr">Expected graduation</span><span class="degree-date text-clr">Jan 2024</span>
                                            <h4 class="subject-hd"></h4>
                                            <h4 class="subject-hd institute-discr-para">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                            <span class="font-weight-thin institute-nme"> ROWAN UNIVERSITY — NJ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="laguage-box">
                                <h4 class="hd-line-btm text-clr">Languages</h4>
                                <ul class="laguage-ul">
                                    <div data-group="clone-group-0" class="language-box-area-container">
                                        <li class="lang-list">English</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="expirence-box">
                            <div class="expirence">
                                <h4 class="hd-line-btm text-clr">Experience</h4>
                                <div data-group="clone-group-0" class="company-box-container">
                                    <div class="company-box">
                                        <div class="">
                                            <h4 class="subject-hd date-company">July 2020 - Present</h4>
                                            <h4 class="subject-hd compny-name">MAINTENANCE AND ENGINEERING MANAGER</h4>
                                        </div>
                                        <h4 class="subject-para position-text">lott Incorporation, Texas</h4>
                                        <li class="para-expirecnc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum sunt illum, suscipit ab numquam molestiae possimus rerum sint error et optio nemo perspiciatis in quidem nobis cum inventore alias.</li>
                                    </div>
                                </div>
                            </div>
                            <div class="skills-box">
                                <h4 class="hd-line-btm text-clr">Skills</h4>
                                <ul class="skills-ul">
                                    <div data-group="clone-group-0" class="skills-content">
                                        <li class="skills-lists">Safety Monitoring</li>
                                    </div>
                                </ul>
                            </div>
                            <div class="skills-box">
                                <h4 class="hd-line-btm text-clr">Certifications</h4>
                                <ul class="certiciation-ul">
                                    <div data-group="clone-group-0" class="certi-content-box">
                                        <li class="certiciation-list">Safety Monitoring</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- <section class="template-two">
                    <div class="preview-cv-template">
                        <div class="profile-tem">
                            <h1 class="name-fields">EMILY DAVID</h1>
                            <div class="before-line">
                                <h4 class="position-company color-code">SENIOR MAINTENANCE MANAGER</h4>
                            </div>
                            <div class="flex-contact-expirence">
                                <div class="contact">
                                    <h4 class="hd-line-btm text-clr">CONTACT</h4>
                                    <ul class="list-cont">
                                        <li class=""><span class="text-phone"><a href="tel:(234) 567-8900">(234) 567-8900</a></span> <span class="icon-list"><i class="fa-solid fa-phone text-clr"></i></span></li>
                                        <li class=""><span class="text-email"><a href="mailto:Emily@yahoo.com">Emily@yahoo.com</a></span> <span class="icon-list"><i class="fa-regular fa-envelope text-clr"></i></span></li>
                                        <li class=""><span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"><i class="fa-solid fa-location-pin text-clr"></i></span></li>
                                    </ul>
                                </div>
                                <div class="expiren">
                                    <h4 class="hd-line-btm text-clr">Career Objective</h4>
                                    <p class="aboutme-para">
                                        Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                    </p>
                                </div>
                            </div>
                            <div class="expirence-box">
                                <div class="expirence">
                                    <h4 class="hd-line-btm text-clr">Experience</h4>
                                    <div data-group="clone-group-0" class="company-box-container">
                                        <div class="company-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4 class="subject-hd compny-name">MAINTENANCE AND ENGINEERING MANAGER</h4>
                                                <h4 class="subject-hd date-company">July 2020 - Present</h4>
                                            </div>
                                            <h4 class="subject-para position-text">lott Incorporation, Texas</h4>
                                            <li class="para-expirecnc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum sunt illum, suscipit ab numquam molestiae possimus rerum sint error et optio nemo perspiciatis in quidem nobis cum inventore alias.</li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="education-box">
                                <div class="education-data">
                                    <h4 class="hd-line-btm text-clr">Education</h4>
                                    <div data-group="clone-group-0" class="education-box-area-container">
                                        <div class="mb-3 education-box-area">
                                            <h4 class="subject-hd institute-discr-para">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                            <h4 class="subject-hd"><span class="degree-name">Expected graduation</span> <span class="degree-date">Jan 2024</span> <span class="line">|</span> <span class="font-weight-thin institute-nme"> ROWAN UNIVERSITY — NJ</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-skill-language">
                                <div class="laguage-box">
                                    <h4 class="hd-line-btm text-clr">Languages</h4>
                                    <ul class="laguage-ul">
                                        <div data-group="clone-group-0" class="language-box-area-container">
                                            <li class="lang-list">English</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="skills-box">
                                    <h4 class="hd-line-btm text-clr">Skills</h4>
                                    <ul class="skills-ul">
                                        <div data-group="clone-group-0" class="skills-content">
                                            <li class="skills-lists">Safety Monitoring</li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex-skill-language">
                                <div class="laguage-box">
                                </div>
                                <div class="skills-box">
                                    <h4 class="hd-line-btm text-clr">Certifications</h4>
                                    <ul class="certiciation-ul">
                                        <div data-group="clone-group-0" class="certi-content-box">
                                            <li class="certiciation-list">Safety Monitoring</li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <section class="template-three">
                    <div class="preview-cv-template">
                        <div class="flex-third-cv">
                            <div class="namearea-third-cv color-code">
                                <div class="head-pro color-code">
                                    <h1 class="name-fields">EMILY DAVID</h1>
                                    <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                                </div>
                                <div class="contact">
                                    <h4 class="hd-line-btm text-clr">CONTACT</h4>
                                    <ul class="list-cont">
                                        <li class=""><i class="fa-solid fa-phone text-clr"></i><span class="text-phone"> (234) 567-8900</span> <span class="icon-list"></span></li>
                                        <li class=""><i class="fa-regular fa-envelope text-clr"></i><span class="text-email"> Emily@yahoo.com</span> <span class="icon-list"></span></li>
                                        <li class=""><i class="fa-solid fa-location-pin text-clr"></i> <span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"></span></li>
                                    </ul>
                                </div>
                                <div class="expiren">
                                    <h4 class="hd-line-btm text-clr">CAREER OBJECTIVE</h4>
                                    <p class="aboutme-para">
                                        Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                    </p>
                                </div>
                            </div>
                            <div class="expirance-third-cv">
                                <div class="expirence-box">
                                    <div class="expirence">
                                        <h4 class="hd-line-btm text-clr">Experience</h4>
                                        <div data-group="clone-group-0" class="company-box-container">
                                            <div class="company-box">
                                                <div class="">
                                                    <h4 class="subject-hd date-company">July 2020 - Present</h4>
                                                    <h4 class="subject-hd compny-name">MAINTENANCE AND ENGINEERING MANAGER</h4>
                                                </div>
                                                <h4 class="subject-para position-text">lott Incorporation, Texas</h4>
                                                <li class="para-expirecnc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum sunt illum, suscipit ab numquam molestiae possimus rerum sint error et optio nemo perspiciatis in quidem nobis cum inventore alias.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="education-box">
                                    <div class="education-data">
                                        <h4 class="hd-line-btm text-clr">Education</h4>
                                        <div data-group="clone-group-0" class="education-box-area-container">
                                            <div class="mb-3 education-box-area">
                                                <span class="degree-name">Expected graduation</span><span class="degree-date">Jan 2024</span>
                                                <h4 class="subject-hd"></h4>
                                                <h4 class="subject-hd institute-discr-para">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                                <span class="font-weight-thin institute-nme"> ROWAN UNIVERSITY — NJ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills-box">
                                    <h4 class="hd-line-btm text-clr">Skills</h4>
                                    <ul class="skills-ul">
                                        <div data-group="clone-group-0" class="skills-content">
                                            <li class="skills-lists">Safety Monitoring</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="skills-box">
                                    <h4 class="hd-line-btm text-clr">Certifications</h4>
                                    <ul class="certiciation-ul">
                                        <div data-group="clone-group-0" class="certi-content-box">
                                            <li class="certiciation-list">Safety Monitoring</li>
                                        </div>
                                    </ul>
                                </div>
                                <div class="laguage-box">
                                    <h4 class="hd-line-btm text-clr">Languages</h4>
                                    <ul class="laguage-ul">
                                        <div data-group="clone-group-0" class="language-box-area-container">
                                            <li class="lang-list">English</li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="form-footer d-flex justify-content-end align-items-center mt-5">
                    <button type="button" id="prevBtn">Edit Resume</button>
                    <button type="button" id="nextBtn">Continue</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer-journey.php';
?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const accordionItems = document.querySelectorAll(".accordion-item");

        accordionItems.forEach((item) => {
            const header = item.querySelector(".accordion-header");
            const content = item.querySelector(".accordion-content");

            header.addEventListener("click", () => {
                accordionItems.forEach((otherItem) => {
                    if (otherItem !== item) {
                        otherItem.classList.remove("active");
                        otherItem.querySelector(".accordion-content").style.display = "none";
                    }
                });

                item.classList.toggle("active");
                content.style.display =
                    content.style.display === "block" ? "none" : "block";
            });
        });
    });


    // Color Picker

    const colrBox = document.querySelectorAll(".colorbox");
    const colrCode = document.querySelectorAll(".color-code");
    const textColor = document.querySelectorAll(".text-clr");

    colrBox.forEach((element) => {
        element.addEventListener("change", () => {
            console.log("working");
            const dtaval = element.getAttribute("data-bgcolor");
            console.log(dtaval, "working");
            colrCode.forEach((colrCodeItem) => {
                colrCodeItem.style.backgroundColor = dtaval;
            });
            textColor.forEach((textColorItem) => {
                textColorItem.style.color = dtaval;
            });
        });
    });
</script>
<script>
</script>