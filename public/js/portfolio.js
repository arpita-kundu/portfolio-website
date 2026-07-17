const menuToggle = document.querySelector(".menu-toggle");
const navLinks = document.querySelector(".nav-links");
const dropdown = document.querySelector(".dropdown");
const dropdownToggle = document.querySelector(".dropdown-toggle");

if (menuToggle && navLinks) {
    menuToggle.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });
}

if (dropdown && dropdownToggle) {
    dropdownToggle.addEventListener("click", () => {
        const isOpen = dropdown.classList.toggle("open");
        dropdownToggle.setAttribute("aria-expanded", String(isOpen));
    });

    document.addEventListener("click", (event) => {
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove("open");
            dropdownToggle.setAttribute("aria-expanded", "false");
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            dropdown.classList.remove("open");
            dropdownToggle.setAttribute("aria-expanded", "false");
        }
    });
}

document.querySelectorAll(".nav-links a").forEach((link) => {
    link.addEventListener("click", () => {
        navLinks?.classList.remove("active");
        dropdown?.classList.remove("open");
        dropdownToggle?.setAttribute("aria-expanded", "false");
    });
});
