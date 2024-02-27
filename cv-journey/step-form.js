// Upload Image

// const imageInputs = document.querySelector("#uploadImg-input");
// const showImgs = document.querySelector("#upload-img-set");
// const cvProfileImgs = document.querySelector("#profile-image-cv");
// imageInputs.addEventListener("change", function (event) {
//   if (event.target.files && event.target.files[0]) {
//     const reader = new FileReader();
//     reader.onload = function (e) {
//       showImgs.src = e.target.result;
//       cvProfileImgs.src = e.target.result;
//     };
//     reader.readAsDataURL(event.target.files[0]);
//   }
// });

// profile Add More

// const profileAddMore = document.querySelector("#profile-addmore");
// profileAddMore.addEventListener("click", function (e) {
//   e.preventDefault();
//   const elementToClone = document.querySelector(".last-fields");
//   const clone = elementToClone.cloneNode(true);
//   clone.querySelectorAll("[id]").forEach((el) => el.removeAttribute("id"));

//   const removeButton = document.createElement("button");
//   removeButton.type = "button";
//   removeButton.className = "deletefields fa-solid fa-trash";
//   removeButton.addEventListener("click", function () {
//     clone.remove();
//   });
//   clone.appendChild(removeButton);
//   elementToClone.parentNode.appendChild(clone);
// });

// Step Form Fields

var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("step");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "inline";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == x.length - 1) {
    document.getElementById("nextBtn").innerHTML = "Submit";

  } else {
    document.getElementById("nextBtn").innerHTML = "Continue";
  }
  fixStepIndicator(n);
}
function captureAndDownloadCV() {
  html2canvas(document.querySelector(".preview-cv-template")).then(canvas => {
      canvas.toBlob(function(blob) {
          var link = document.createElement('a');
          link.download = 'Resume_Abrm.png';
          link.href = URL.createObjectURL(blob);
          link.click();
          URL.revokeObjectURL(link.href);
      });
  });
}
function nextPrev(n) {
  var x = document.getElementsByClassName("step");
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("signUpForm").submit();
    return false;
  }
  showTab(currentTab);
}

function validateForm() {
  return true; 
}

function fixStepIndicator(n) {
  var x = document.getElementsByClassName("stepIndicator");
  for (var i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}

// Text Editor Code

function formatDoc(cmd, value = null) {
  if (value) {
    document.execCommand(cmd, false, value);
  } else {
    document.execCommand(cmd);
  }
}

const content = document.getElementById("content");
content.addEventListener("mouseenter", function () {
  const a = content.querySelectorAll("a");
  a.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      content.setAttribute("contenteditable", "false");
      item.target = "_blank";
    });
    item.addEventListener("mouseleave", function () {
      content.setAttribute("contenteditable", "true");
    });
  });
});
const showCode = document.getElementById("show-code");
let active = false;
showCode.addEventListener("click", function (e) {
  e.dataset.active = !active;
  active = !active;
  if (active) {
    content.textContent = content.innerHTML;
    content.setAttribute("contenteditable", "false");
  } else {
    content.innerHTML = content.textContent;
    content.setAttribute("contenteditable", "true");
  }
});
