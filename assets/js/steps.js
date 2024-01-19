const colrBox = document.querySelectorAll(".colorbox")
const colrCode = document.querySelectorAll(".color-code")
const textColor = document.querySelectorAll(".text-clr")

colrBox.forEach(element => {
    element.addEventListener("change", () => {
        console.log("working")
        const dtaval = element.getAttribute("data-bgcolor")
        console.log(dtaval, "working")
        // colrCode.style.backgroundColor = dtaval
        colrCode.forEach(colrCodeItem => {
            colrCodeItem.style.backgroundColor = dtaval
        });
        textColor.forEach(textColorItem => {
            textColorItem.style.color = dtaval
        });
    })
});






const tabs = document.querySelectorAll("[data-tab-target]");
const tabContents = document.querySelectorAll("[data-tab-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.tabTarget);
    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    tab.classList.add("active");
    target.classList.add("active");
  });
});