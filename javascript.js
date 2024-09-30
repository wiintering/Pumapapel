// JavaScript to set the active class on the current link
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-item a');
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });
});

