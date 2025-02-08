document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        const preloader = document.getElementById("custom-preloader");
        if (preloader) {
            preloader.classList.add("hidden");
            setTimeout(() => preloader.style.display = "none", 500);
        }
    }, 1500); // Adjust delay as needed
});
