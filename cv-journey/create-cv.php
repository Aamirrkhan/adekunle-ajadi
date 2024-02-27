<?php
include './header-journey.php';
?>
<section class="form-area">
   <div class="container-fluid container-padding-set">
      <div class="col-12">
         <form id="signUpForm" action="#!">
            <div class="cv-fields flex-section">
               <div class="cv-tabs">
                  <div class="form-header">
                     <span class="stepIndicator"><i class="fa-regular fa-user"></i> Profile</span>
                     <span class="stepIndicator">About Me</span>
                     <span class="stepIndicator">Experience</span>
                     <span class="stepIndicator">Academia</span>
                     <span class="stepIndicator">Languages</span>
                     <span class="stepIndicator">Skills</span>
                     <span class="stepIndicator">Certifications</span>
                     <!-- <span class="stepIndicator">Finalize</span> -->
                  </div>
               </div>
               <div class="forms-inputs-divz">
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Let's begin with the profile.</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields">
                        <div class="fields-create">
                           <!-- <div class="fields-line">
                              <label for=""><span>Image:</span></label>
                              <div class="img-fields images-upload-width">
                                  <img src="../assets/images/uploadimg.png" class="upload-set-width" id="upload-img-set">
                                  <input type="file" class="image-upload-file" id="uploadImg-input">
                                  <img src="../assets/images/uploadicon.png" class="iconupload">
                              </div>
                              </div> -->
                           <div class="fields-line">
                              <label for=""><span>Full Name:</span></label>
                              <div class="img-fields">
                                 <input type="text" placeholder="" id="name-fields">
                              </div>
                           </div>
                           <div class="fields-line">
                              <label for=""><span>Designation:</span></label>
                              <div class="img-fields">
                                 <input type="text" placeholder="" id="designation-fields">
                              </div>
                           </div>
                           <div class="fields-line">
                              <label for=""><span>Phone:</span></label>
                              <div class="img-fields">
                                 <input type="number" placeholder="" id="phone-fields">
                              </div>
                           </div>
                           <div class="fields-line">
                              <label for=""><span>Email:</span></label>
                              <div class="img-fields">
                                 <input type="email" placeholder="" id="email-fields">
                              </div>
                           </div>
                           <div class="fields-line">
                              <label for=""><span>Address:</span></label>
                              <div class="img-fields">
                                 <input type="text" placeholder="" id="address-fields">
                              </div>
                           </div>
                           <!-- <div class="fields-line last-fields">
                                 <label for=""><span>Website</span><input type="text" id="labeltextchange" placeholder="Website"></label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="website-fields">
                                 </div>
                              </div> -->
                        </div>
                        <div class="addmore-btn">
                           <button id="profile-addmore"></button>
                        </div>
                     </div>
                  </div>
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Summary of Professional Experience</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields">
                        <div class="about-text-editor">
                           <h4>Description About Your Professional Life:</h4>
                           <div class="flex-editor">
                              <div class="toolbar">
                                 <div class="btn-toolbarlist btn-toolbar">
                                    <button type="button" onclick="formatDoc('bold')"><i class='bx bx-bold'></i></button>
                                    <button type="button" onclick="formatDoc('italic')"><i class='bx bx-italic'></i></button>
                                    <button type="button" onclick="formatDoc('underline')"><i class='bx bx-underline'></i></button>
                                    <button type="button" onclick="formatDoc('justifyLeft')"><i class='bx bx-align-left'></i></button>
                                    <button type="button" onclick="formatDoc('justifyCenter')"><i class='bx bx-align-middle'></i></button>
                                    <button type="button" onclick="formatDoc('justifyRight')"><i class='bx bx-align-right'></i></button>
                                    <button type="button" onclick="formatDoc('insertUnorderedList')"><i class='bx bx-list-ul'></i></button>
                                    <button type="button" onclick="formatDoc('insertOrderedList')"><i class='bx bx-list-ol'></i></button>
                                 </div>
                              </div>
                              <div id="content" contenteditable="true" spellcheck="false">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Summary of Experience.</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields company-area">
                        <div data-group="clone-group-0" class="fields-container">
                           <div class="fields-create company-clone-box">
                              <div class="addmore-exp">
                                 <button type="button"><i class="fa-solid fa-pen"></i> Add more experience in this company</button>
                                 <!-- <button type="button" class="company-delet-box"><i class="fa-solid fa-trash"></i> Delete</button> -->
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Company Name:</span></label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="company-name">
                                 </div>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Position:</span></label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="positionCom">
                                 </div>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Time Period:</span></label>
                                 <div class="img-fields">
                                    <input type="input" placeholder="" id="time-period-fields">
                                 </div>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span class="border-none">Description</span></label>
                                 <div class="img-fields">
                                    <div class="flex-area-textcom">
                                       <textarea name="" placeholder="" id="company-discription"></textarea>
                                       <div class="buttonclone">
                                          <button type="button" class="minusbtn">-</button>
                                          <button type="button" class="plusebtn">+</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" class="drage-btn">
                                 <i class="fa-solid fa-bars"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="addmore-btn steps-fields">
                        <button type="button" class="company-cloneBtn">+ Add More</button>
                     </div>
                  </div>
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Summary of Academics.</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields acadm-area-box">
                        <div data-group="clone-group-0" class="education-fields-container">
                           <div class="fields-create acadm-clone-box">
                              <div class="addmore-exp">
                                 <button type="button"></button>
                                 <button type="button"><i class="fa-solid fa-trash"></i> Delete</button>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Institute Name:</span></label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="institute-name">

                                 </div>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Degree:</span></label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="degree">
                                 </div>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Completion Year:</span></label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="completion-year">
                                 </div>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span class="border-none">Description</span></label>
                                 <div class="img-fields">
                                    <div class="flex-area-textac">
                                       <textarea name="" placeholder="" id="institute-discr"></textarea>
                                       <div class="buttonclone">
                                          <button type="button" class="minusbtnac">-</button>
                                          <button type="button" class="plusebtnac">+</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" class="drage-btn">
                                 <i class="fa-solid fa-bars"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="addmore-btn steps-fields ">
                        <button type="button" class="acadm-cloneBtn">+ Add More</button>
                     </div>
                  </div>
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Achievements & Rewards.</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields achive-label-radius">
                        <div data-group="clone-group-0" class="language-fields-container">
                           <div class="fields-create achivement-box">
                              <div class="addmore-exp">
                                 <button type="button"></button>
                                 <button type="button"><i class="fa-solid fa-trash"></i> Delete</button>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span>Language</span>
                                 </label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="language2">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="addmore-btn steps-fields">
                        <button type="button" class="achivement-btn">+ Add More</button>
                     </div>
                  </div>
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Your Valuable Skills</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields skills-area-content-fields">
                        <div data-group="clone-group-0" class="skills-fields-container">
                           <div class="fields-create skill-box-contents">
                              <div class="addmore-exp">
                                 <button type="button"></button>
                                 <button type="button"><i class="fa-solid fa-trash"></i> Delete</button>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span class="border-none">Skills</span>
                                 </label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" class="skill-input">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="addmore-btn steps-fields">
                        <button type="button" class="skillbtn">+ Add More</button>
                     </div>
                  </div>
                  <div class="step">
                     <div class="step-hd">
                        <div><img src="../assets/images/form-hd-img.png" class="img-fluid"></div>
                        <div>
                           <h2>Your Valuable Certifications</h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                     </div>
                     <div class="steps-fields certificate-area-content-fields">
                        <div data-group="clone-group-0" class="certif-fields-container">
                           <div class="fields-create certificate-box">
                              <div class="addmore-exp">
                                 <button type="button"></button>
                                 <button type="button"><i class="fa-solid fa-trash"></i> Delete</button>
                              </div>
                              <div class="fields-line">
                                 <label for=""><span class="border-none">Certifications</span>
                                 </label>
                                 <div class="img-fields">
                                    <input type="text" placeholder="" id="certifications-fields">
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                     <div class="addmore-btn steps-fields">
                        <button type="button" class="certificate-more-btn">+ Add More</button>
                     </div>
                  </div>


               </div>
               <div class="cv-preview-temp">
                  <!-- <section class="template-one">
                     <div class="head-pro">
                        <h1 class="name-fields">EMILY DAVID</h1>
                        <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                     </div>
                     <div class="temp-one-career-expirance">
                        <div class="flex-contact-expirence temp-one">
                           <div class="contact">
                              <h4 class="hd-line-btm">CONTACT</h4>
                              <ul class="list-cont">
                                 <li class=""><span class="text-phone"><a href="tel:(234) 567-8900">(234) 567-8900</a></span> <span class="icon-list"><i class="fa-solid fa-phone"></i></span></li>
                                 <li class=""><span class="text-email"><a href="mailto:Emily@yahoo.com">Emily@yahoo.com</a></span> <span class="icon-list"><i class="fa-regular fa-envelope"></i></span></li>
                                 <li class=""><span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"><i class="fa-solid fa-location-pin"></i></span></li>
                              </ul>
                           </div>
                           <div class="expiren">
                              <h4 class="hd-line-btm">Career Objective</h4>
                              <p class="aboutme-para">
                                 Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                              </p>
                           </div>
                           <div class="education-box">
                              <div class="education-data">
                                 <h4 class="hd-line-btm">Education</h4>
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
                           <div class="laguage-box">
                              <h4 class="hd-line-btm">Languages</h4>
                              <ul class="laguage-ul">
                                 <div data-group="clone-group-0" class="language-box-area-container">
                                    <li class="lang-list">English</li>
                                 </div>
                              </ul>
                           </div>
                        </div>
                        <div class="expirence-box">
                           <div class="expirence">
                              <h4 class="hd-line-btm">Experience</h4>
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
                              <h4 class="hd-line-btm">Skills</h4>
                              <ul class="skills-ul">
                                 <div data-group="clone-group-0" class="skills-content">
                                    <li class="skills-lists">Safety Monitoring</li>
                                 </div>
                              </ul>
                           </div>
                           <div class="skills-box">
                              <h4 class="hd-line-btm">Certifications</h4>
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
                              <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                           </div>
                           <div class="flex-contact-expirence">
                              <div class="contact">
                                 <h4 class="hd-line-btm">CONTACT</h4>
                                 <ul class="list-cont">
                                    <li class=""><span class="text-phone"><a href="tel:(234) 567-8900">(234) 567-8900</a></span> <span class="icon-list"><i class="fa-solid fa-phone"></i></span></li>
                                    <li class=""><span class="text-email"><a href="mailto:Emily@yahoo.com">Emily@yahoo.com</a></span> <span class="icon-list"><i class="fa-regular fa-envelope"></i></span></li>
                                    <li class=""><span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"><i class="fa-solid fa-location-pin"></i></span></li>
                                 </ul>
                              </div>
                              <div class="expiren">
                                 <h4 class="hd-line-btm">Career Objective</h4>
                                 <p class="aboutme-para">
                                    Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                 </p>
                              </div>
                           </div>
                           <div class="expirence-box">
                              <div class="expirence">
                                 <h4 class="hd-line-btm">Experience</h4>
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
                                 <h4 class="hd-line-btm">Education</h4>
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
                                 <h4 class="hd-line-btm">Languages</h4>
                                 <ul class="laguage-ul">
                                    <div data-group="clone-group-0" class="language-box-area-container">
                                       <li class="lang-list">English</li>
                                    </div>
                                 </ul>
                              </div>
                              <div class="skills-box">
                                 <h4 class="hd-line-btm">Skills</h4>
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
                                 <h4 class="hd-line-btm">Certifications</h4>
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
                  <!-- <section class="template-three">
                     <div class="preview-cv-template">
                        <div class="flex-third-cv">
                           <div class="namearea-third-cv">
                              <div class="head-pro">
                                 <h1 class="name-fields">EMILY DAVID</h1>
                                 <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                              </div>
                              <div class="contact">
                                 <h4 class="hd-line-btm">CONTACT</h4>
                                 <ul class="list-cont">
                                    <li class=""><i class="fa-solid fa-phone"></i><span class="text-phone"> (234) 567-8900</span> <span class="icon-list"></span></li>
                                    <li class=""><i class="fa-regular fa-envelope"></i><span class="text-email"> Emily@yahoo.com</span> <span class="icon-list"></span></li>
                                    <li class=""><i class="fa-solid fa-location-pin"></i> <span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"></span></li>
                                 </ul>
                              </div>
                              <div class="expiren">
                                 <h4 class="hd-line-btm">CAREER OBJECTIVE</h4>
                                 <p class="aboutme-para">
                                    Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                 </p>
                              </div>
                           </div>
                           <div class="expirance-third-cv">
                              <div class="expirence-box">
                                 <div class="expirence">
                                    <h4 class="hd-line-btm">Experience</h4>
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
                                    <h4 class="hd-line-btm">Education</h4>
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
                                 <h4 class="hd-line-btm">Skills</h4>
                                 <ul class="skills-ul">
                                    <div data-group="clone-group-0" class="skills-content">
                                       <li class="skills-lists">Safety Monitoring</li>
                                    </div>
                                 </ul>
                              </div>
                              <div class="skills-box">
                                 <h4 class="hd-line-btm">Certifications</h4>
                                 <ul class="certiciation-ul">
                                    <div data-group="clone-group-0" class="certi-content-box">
                                       <li class="certiciation-list">Safety Monitoring</li>
                                    </div>
                                 </ul>
                              </div>
                              <div class="laguage-box">
                                 <h4 class="hd-line-btm">Languages</h4>
                                 <ul class="laguage-ul">
                                    <div data-group="clone-group-0" class="language-box-area-container">
                                       <li class="lang-list">English</li>
                                    </div>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section> -->
                  <!-- <section class="template-four">
                     <div class="preview-cv-template">
                        <div class="four-head">
                           <h1 class="name-fields">EMILY DAVID</h1>
                           <div class="span-line"></div>
                           <h4 class="position-company">SENIOR MAINTENANCE MANAGER</h4>
                        </div>
                        <div class="flex-area-contect-expir">
                           <div class="expri-box-four">
                              <div class="expirence-box">
                                 <div class="expirence">
                                    <h4 class="hd-line-btm">Experience</h4>
                                    <div data-group="clone-group-0" class="company-box-container">
                                       <div class="company-box">
                                          <div class="">
                                             <h4 class="subject-hd compny-name">MAINTENANCE AND ENGINEERING MANAGER</h4>
                                          </div>
                                          <div class="d-flex gap-2 align-items-center">
                                             <h4 class="subject-hd date-company">July 2020 - Present</h4> <span>|</span>
                                             <h4 class="subject-para position-text">lott Incorporation, Texas</h4>
                                          </div>
                                          <li class="para-expirecnc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At nostrum sunt illum, suscipit ab numquam molestiae possimus rerum sint error et optio nemo perspiciatis in quidem nobis cum inventore alias.</li>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="education-box">
                                 <div class="education-data">
                                    <h4 class="hd-line-btm">Education</h4>
                                    <div data-group="clone-group-0" class="education-box-area-container">
                                       <div class="mb-3 education-box-area">
                                          <h4 class="subject-hd institute-discr-para">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                          <span class="degree-name">Expected graduation</span><span class="degree-date">Jan 2024</span>
                                          <div><span class="font-weight-thin institute-nme"> ROWAN UNIVERSITY — NJ</span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="skills-box">
                                 <h4 class="hd-line-btm">Skills</h4>
                                 <ul class="skills-ul">
                                    <div data-group="clone-group-0" class="skills-content">
                                       <li class="skills-lists">Safety Monitoring</li>
                                    </div>
                                 </ul>
                              </div>
                              <div class="skills-box">
                                 <h4 class="hd-line-btm">Certifications</h4>
                                 <ul class="certiciation-ul">
                                    <div data-group="clone-group-0" class="certi-content-box">
                                       <li class="certiciation-list">Safety Monitoring</li>
                                    </div>
                                 </ul>
                              </div>
                              <div class="laguage-box">
                                 <h4 class="hd-line-btm">Languages</h4>
                                 <ul class="laguage-ul">
                                    <div data-group="clone-group-0" class="language-box-area-container">
                                       <li class="lang-list">English</li>
                                    </div>
                                 </ul>
                              </div>
                           </div>
                           <div class="contact-box-four">
                              <div class="contact">
                                 <h4 class="hd-line-btm">CONTACT</h4>
                                 <ul class="list-cont">
                                    <li class=""><i class="fa-solid fa-phone"></i><span class="text-phone"> (234) 567-8900</span> <span class="icon-list"></span></li>
                                    <li class=""><i class="fa-regular fa-envelope"></i><span class="text-email"> Emily@yahoo.com</span> <span class="icon-list"></span></li>
                                    <li class=""><i class="fa-solid fa-location-pin"></i> <span class="text-address">North Brunswick, New york 08873 address</span> <span class="icon-list"></span></li>
                                 </ul>
                              </div>
                              <div class="expiren">
                                 <h4 class="hd-line-btm">CAREER OBJECTIVE</h4>
                                 <p class="aboutme-para">
                                    Resume Summary Strong attention to detail highlights. Including the Ability to grasp technical concepts quickly and apply that knowledge to Maintenance and Engineering efforts within the team. Knowledge in building distributed, highly available applications. Manage engineering team and maintain
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </section> -->
                  <section class="templ-five">
                     <div class="preview-cv-template">
                        <div class="blue-bg-area">
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
                              <h4 class="hd-line-btm">Experience</h4>
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
                              <h4 class="hd-line-btm">Education</h4>
                              <div data-group="clone-group-0" class="education-box-area-container">
                                 <div class="mb-3 education-box-area">
                                    <h4 class="subject-hd institute-nme">MASTERS IN ENGINEERING MANAGEMENT CANDIDATE</h4>
                                    <h4 class="subject-hd d-flex align-items-center justify-content-between set-edu-line"><span class="degree-name">Expected graduation</span> <span class="degree-date">Jan 2024</span> </h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="skills-box w-100">
                           <h4 class="hd-line-btm">Skills</h4>
                           <ul class="skills-ul">
                              <div data-group="clone-group-0" class="skills-content">
                                 <li class="skills-lists">Safety Monitoring</li>
                              </div>
                           </ul>
                        </div>
                        <div class="skills-box w-100">
                           <h4 class="hd-line-btm">Certifications</h4>
                           <ul class="certiciation-ul">
                              <div data-group="clone-group-0" class="certi-content-box">
                                 <li class="certiciation-list">Safety Monitoring</li>
                              </div>
                           </ul>
                        </div>
                        <div class="laguage-box w-100">
                           <h4 class="hd-line-btm">Languages</h4>
                           <ul class="laguage-ul">
                              <div data-group="clone-group-0" class="language-box-area-container">
                                 <li class="lang-list">English</li>
                              </div>
                           </ul>
                        </div>
                     </div>
                  </section>
                  <div class="form-footer d-flex">
                     <button type="button" id="prevBtn" onclick="nextPrev(-1)">GO BACK</button>
                     <button type="button" id="nextBtn" onclick="nextPrev(1)" class="capture-cv">Continue</button>
                     <button type="button" onclick="captureAndDownloadCV()" class="btn-download">Download CV</button>
                  </div>
               </div>

            </div>
         </form>
      </div>
   </div>
</section>
<?php
include 'footer-journey.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

<script src="step-form.js"></script>
<script src="cv-preivew.js"></script>
<script src="../assets/js/language.js"></script>

<!-- Company Discription -->
<script>
   $(document).ready(function() {
      function updateParaExpirecnc() {
         $('.para-expirecnc').each(function(index) {
            var value = $('.flex-area-textcom textarea').eq(index).val() || 'Default Text';
            $(this).text(value);
         });
      }

      $('.plusebtn').click(function() {
         var $clone = $('.flex-area-textcom:last').clone(true);
         $clone.find('textarea').val('');
         $clone.insertAfter('.flex-area-textcom:last');
         $('<li class="para-expirecnc"></li>').appendTo('.company-box');
         updateParaExpirecnc();
      });
      $(document).on('click', '.minusbtn', function() {
         if ($('.flex-area-textcom').length > 1) {
            var indexToRemove = $(this).closest('.flex-area-textcom').index();
            $(this).closest('.flex-area-textcom').remove();
            $('.company-box .para-expirecnc').eq(indexToRemove).remove();
            updateParaExpirecnc();
         }
      });
      $(document).on('input', '.flex-area-textcom textarea', function() {
         updateParaExpirecnc();
      });
   });
</script>

<script>
   $(document).ready(function() {
      function updateParaExpirecnc() {
         $('.education-box-area .para-expirecnc').each(function(index) {
            var value = $('.flex-area-textac textarea').eq(index).val() || 'Default Text';
            $(this).text(value);
         });
      }

      $('.plusebtnac').click(function() {
         var $clone = $('.flex-area-textac:last').clone(true);
         $clone.find('textarea').val('');
         $clone.insertAfter('.flex-area-textac:last');
         $('<li class="para-expirecnc"></li>').appendTo('.education-box-area');
         updateParaExpirecnc();
      });
      $(document).on('click', '.minusbtnac', function() {
         if ($('.flex-area-textac').length > 1) {
            var indexToRemove = $(this).closest('.flex-area-textac').index();
            $(this).closest('.flex-area-textac').remove();
            $('.education-box-area .para-expirecnc').eq(indexToRemove).remove();
            updateParaExpirecnc();
         }
      });
      $(document).on('input', '.flex-area-textac textarea', function() {
         updateParaExpirecnc();
      });
   });
</script>
<!-- Academica Dicscription -->
<!-- <script>
   $(document).ready(function() {
      // Function to create or update <li> elements based on textareas
      function updateEducationLi() {
         $('.education-box-area li').remove(); // Remove existing <li>s to avoid duplication
         $('.acadm-clone-box .flex-area-textac textarea').each(function() {
            var value = $(this).val() || 'Default Description';
            $('<li class="para-expirecnc-edu">' + value + '</li>').appendTo('.education-box-area');
         });
      }

      $('#academia-plus').click(function() {
         var $clone = $('.acadm-clone-box .flex-area-textac:last').clone(true);
         $clone.find('textarea').val('');
         $clone.insertAfter('.acadm-clone-box .flex-area-textac:last');
         updateEducationLi(); // Update the <li> elements to reflect the new textarea
      });

      $(document).on('click', '#academia-minu', function() {
         if ($('.acadm-clone-box .flex-area-textac').length > 1) {
            $(this).closest('.flex-area-textac').remove();
            updateEducationLi(); // Update the <li> elements after removing a textarea
         }
      });

      $(document).on('input', '.acadm-clone-box .flex-area-textac textarea', function() {
         updateEducationLi(); // Update <li> elements as the user types in a textarea
      });
   });
</script> -->
<script>
   $(document).ready(function() {
      var cloneCounter = 1;
      $('.company-cloneBtn').click(function() {
         var fieldsClone = $('.fields-create.company-clone-box').first().clone(true);
         var companyBoxClone = $('.company-box').first().clone(true);
         fieldsClone.find('input, textarea').val('');
         var groupId = 'clone-group-' + cloneCounter;
         var fieldsContainer = $('<div></div>').attr('data-group', groupId).addClass('fields-container').append(fieldsClone);
         var companyBoxContainer = $('<div></div>').attr('data-group', groupId).addClass('company-box-container').append(companyBoxClone);
         var deleteBtn = $('<button type="button" class="company-delet-box"> <i class="fa-solid fa-trash"></i> Delete</button>').click(function() {
            var groupToDelete = $(this).parent().attr('data-group');
            $('div[data-group="' + groupToDelete + '"]').remove();
         });
         fieldsContainer.append(deleteBtn);
         $('.expirence-box').append(companyBoxContainer);
         $('.steps-fields.company-area').append(fieldsContainer);
         cloneCounter++;
      });
      $('body').on('input', '.fields-create.company-clone-box input, .fields-create.company-clone-box textarea', function() {
         var inputIndex = $(this).closest('.fields-create.company-clone-box').find('input, textarea').index(this);
         var groupIdentifier = $(this).closest('[data-group]').attr('data-group');
         var correspondingCompanyBox = $('div[data-group="' + groupIdentifier + '"]').find('.company-box');
         switch (inputIndex) {
            case 0:
               correspondingCompanyBox.find('.compny-name').text($(this).val());
               console.log(correspondingCompanyBox.find('.compny-name').text($(this).val()), "company-name")
               break;
            case 1:
               correspondingCompanyBox.find('.subject-para').text($(this).val());
               break;
            case 2:
               correspondingCompanyBox.find('.date-company').text($(this).val());
               break;
            case 3:
               correspondingCompanyBox.find('.para-expirecnc').text($(this).val());
               break;
         }
      });
   });
</script>
<script>
   $(document).ready(function() {
      var cloneCounter = 1;
      $('.acadm-cloneBtn').click(function() {
         var fieldsClone = $('.fields-create.acadm-clone-box').first().clone(true);
         var companyBoxClone = $('.education-box-area').first().clone(true);
         fieldsClone.find('input, textarea').val('');
         var groupId = 'clone-group-' + cloneCounter;
         var fieldsContainer = $('<div></div>').attr('data-group', groupId).addClass('education-fields-container').append(fieldsClone);
         var companyBoxContainer = $('<div></div>').attr('data-group', groupId).addClass('education-box-area-container').append(companyBoxClone);
         var deleteBtn = $('<button type="button" class="company-delet-box"> <i class="fa-solid fa-trash"></i> Delete</button>').click(function() {
            var groupToDelete = $(this).parent().attr('data-group');
            $('div[data-group="' + groupToDelete + '"]').remove();
         });
         fieldsContainer.append(deleteBtn);
         $('.education-data').append(companyBoxContainer);
         $('.steps-fields.acadm-area-box').append(fieldsContainer);
         cloneCounter++;
      });
      $('body').on('input', '.fields-create.acadm-clone-box input, .fields-create.acadm-clone-box textarea', function() {
         var inputIndex = $(this).closest('.fields-create.acadm-clone-box').find('input, textarea').index(this);
         var groupIdentifier = $(this).closest('[data-group]').attr('data-group');
         var correspondingCompanyBox = $('div[data-group="' + groupIdentifier + '"]').find('.education-box-area');
         switch (inputIndex) {
            case 0:
               correspondingCompanyBox.find('.institute-nme').text($(this).val());
               console.log(correspondingCompanyBox.find('.institute-name').text($(this).val()), "institute-name")
               break;
            case 1:
               correspondingCompanyBox.find('.degree-name').text($(this).val());
               break;
            case 2:
               correspondingCompanyBox.find('.degree-date').text($(this).val());
               break;
            case 3:
               correspondingCompanyBox.find('.institute-discr-para').text($(this).val());
               break;
         }
      });
   });
</script>
<!-- Language Code -->
<script>
   $(document).ready(function() {
      function updateLanguageBox(input, groupId) {
         var value = input.val();
         var languageBoxAreaContainer = $('.laguage-ul').find(`.language-box-area-container[data-group="${groupId}"]`);
         languageBoxAreaContainer.find('.lang-list').first().text(value);
      }
      $('.language-fields-container').first().find('input').on("input", function(e) {
         var groupId = $(this).closest('.language-fields-container').data('group');
         updateLanguageBox($(this), groupId);
      });
      $('.achivement-btn').click(function() {
         var fieldsClone = $('.fields-create.achivement-box').first().clone(true);
         var companyBoxClone = $('.lang-list').first().clone(true).text("");
         var cloneCounter = $('.language-fields-container').length;
         var groupId = 'clone-group-' + cloneCounter;
         var fieldsContainer = $('<div></div>').attr('data-group', groupId).addClass('language-fields-container').append(fieldsClone);
         var companyBoxContainer = $('<div></div>').attr('data-group', groupId).addClass('language-box-area-container').append(companyBoxClone);
         $('.laguage-ul').append(companyBoxContainer);
         $('.achive-label-radius').append(fieldsContainer);
         fieldsContainer.find('input').on("input", function() {
            updateLanguageBox($(this), groupId);
         });
         fieldsContainer.find('.fa-trash').parent('button').on("click", function() {
            var groupId = $(this).closest('.language-fields-container').data('group');
            $(`div[data-group="${groupId}"]`).remove();
         });
         cloneCounter++;
      });
      $('.fields-create.achivement-box').first().find('.fa-trash').parent('button').on("click", function() {
         var groupId = $(this).closest('.language-fields-container').data('group');
         $(`div[data-group="${groupId}"]`).remove();
      });
   });
</script>
<script>
   // Skills Code

   $(document).ready(function() {
      $('.skills-area-content-fields').find(".skills-fields-container").first().find('input').on("input", function(e) {
         var datattr = $('.skills-ul').find(".skills-content").first().find('.skills-lists').first().text(e.target.value);
      });
      var cloneCounter = 1;
      $('.skillbtn').click(function() {
         var fieldsClone = $('.fields-create.skill-box-contents').first().clone(true);
         var companyBoxClone = $('.skills-lists').first().clone(true).text(''); // Clear text for cloned element
         var groupId = 'clone-group-' + cloneCounter;
         var fieldsContainer = $('<div></div>').attr('data-group', groupId).addClass('skills-fields-container').append(fieldsClone);
         var companyBoxContainer = $('<div></div>').attr('data-group', groupId).addClass('skills-content').append(companyBoxClone);
         $('.skills-area-content-fields').append(fieldsContainer);
         $('.skills-ul').append(companyBoxContainer);

         $(fieldsContainer).find('input').on("input", function(e) {
            $(companyBoxContainer).find('.skills-lists').text(e.target.value);
         });
         initializeDeleteEvent(fieldsContainer);
         cloneCounter++;
      });

      function initializeDeleteEvent(container) {
         $(container).find('.fa-trash').parent('button').on("click", function() {
            var groupId = $(this).closest('.skills-fields-container').data('group');
            $('.skills-area-content-fields').find(`.skills-fields-container[data-group="${groupId}"]`).remove();
            $('.skills-ul').find(`.skills-content[data-group="${groupId}"]`).remove();
         });
      }
      initializeDeleteEvent($('.skills-area-content-fields'));
   });
</script>
<script>
   // Certificate Code
   $(document).ready(function() {
      $('.certificate-area-content-fields').find(".certif-fields-container").first().find('input').on("input", function(e) {
         var datattr = $('.certiciation-ul').find(".certi-content-box").first().find('.skills-lists').first().text(e.target.value);
      });
      var cloneCounter = 1;
      $('.certificate-more-btn').click(function() {
         var fieldsClone = $('.fields-create.certificate-box').first().clone(true);
         var companyBoxClone = $('.skills-lists').first().clone(true).text(''); // Clear text for cloned element
         var groupId = 'clone-group-' + cloneCounter;
         var fieldsContainer = $('<div></div>').attr('data-group', groupId).addClass('certif-fields-container').append(fieldsClone);
         var companyBoxContainer = $('<div></div>').attr('data-group', groupId).addClass('certi-content-box').append(companyBoxClone);
         $('.certificate-area-content-fields').append(fieldsContainer);
         $('.certiciation-ul').append(companyBoxContainer);

         $(fieldsContainer).find('input').on("input", function(e) {
            $(companyBoxContainer).find('.skills-lists').text(e.target.value);
         });
         initializeDeleteEvent(fieldsContainer);

         cloneCounter++;
      });

      function initializeDeleteEvent(container) {
         $(container).find('.fa-trash').parent('button').on("click", function() {
            var groupId = $(this).closest('.certif-fields-container').data('group');
            $('.certificate-area-content-fields').find(`.certif-fields-container[data-group="${groupId}"]`).remove();
            $('.certiciation-ul').find(`.certi-content-box[data-group="${groupId}"]`).remove();
         });
      }
      initializeDeleteEvent($('.certificate-area-content-fields'));
   });
</script>