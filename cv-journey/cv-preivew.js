document.addEventListener("DOMContentLoaded", function () {
  const elements = document.querySelectorAll(
    ".steps-fields input, .steps-fields textarea"
  );
  elements.forEach(function (element) {
    element.addEventListener("keyup", function (event) {
      if (event.target.id === "name-fields") {
        document.querySelector(".name-fields").innerText = event.target.value
          ? event.target.value
          : "EMILY DAVID";
      }
      if (event.target.id === "designation-fields") {
        document.querySelector(".position-company").innerText = event.target
          .value
          ? event.target.value
          : "SENIOR MAINTENANCE MANAGER";
      }
      if (event.target.id === "phone-fields") {
        document.querySelector(".text-phone").innerText = event.target.value
          ? event.target.value
          : "(234) 567-8900";
      }
      if (event.target.id === "email-fields") {
        document.querySelector(".text-email").innerText = event.target.value
          ? event.target.value
          : "Emily@yahoo.com";
      }
      if (event.target.id === "address-fields") {
        document.querySelector(".text-address").innerText = event.target.value
          ? event.target.value
          : "North Brunswick, New york 08873 address";
      }
      if (event.target.id === "certifications-fields") {
        document.querySelector(".certiciation-list").innerText = event.target
          .value
          ? event.target.value
          : " ";
      }
      console.log(event.target.id + ": " + event.target.value);
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
    var contentDiv = document.getElementById('content');
    var aboutMePara = document.querySelector('.aboutme-para');

    // Function to update aboutMePara content
    function updateAboutMePara() {
        aboutMePara.innerHTML = contentDiv.innerHTML;
    }

    contentDiv.addEventListener('input', updateAboutMePara);

    window.formatDoc = function(command) {
        document.execCommand(command, false, null);
        updateAboutMePara();  
    };
});


