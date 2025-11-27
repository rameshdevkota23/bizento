document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".wb-header-wrapper");
    const stickyClass = "is-sticky";

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            header.classList.add(stickyClass);
        } else {
            header.classList.remove(stickyClass);
        }
    });
});
