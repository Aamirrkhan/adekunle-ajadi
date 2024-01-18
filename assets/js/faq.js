
var acc = document.getElementsByClassName("accordion-btn");

for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        // Close all panels
        closeAllPanels();

        // Toggle the active class for the clicked button
        this.classList.toggle("active");

        // Toggle the display of the associated panel
        var panel = this.previousElementSibling;
        if (panel.style.display === "none" || panel.style.display === "") {
            panel.style.display = "block";
        } else {
            panel.style.display = "none";
        }
    });
}

function closeAllPanels() {
    for (var j = 0; j < acc.length; j++) {
        acc[j].classList.remove("active");
        var panel = acc[j].previousElementSibling;
        panel.style.display = "none";
    }
}
