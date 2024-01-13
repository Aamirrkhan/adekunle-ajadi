function setActive(index) {
        var links = document.querySelectorAll('.humb-links-list li a');
        links.forEach(function(link, i) {
            if (i === index) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Check the current URL and set active class accordingly
    document.addEventListener('DOMContentLoaded', function() {
        var currentUrl = window.location.href;
        var links = document.querySelectorAll('.humb-links-list li a');
        links.forEach(function(link, i) {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    });




    const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})