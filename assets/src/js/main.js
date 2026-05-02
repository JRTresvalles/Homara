document.addEventListener("DOMContentLoaded", () => {
    initMenu();
    initCursorFollower();
    initAccordion();
});

/* -----------------------------
   MENU TOGGLE
------------------------------ */
function initMenu() {
    const toggle = document.getElementById("nav-toggle");
    const menu = document.getElementById("nav-menu");
    const links = document.querySelectorAll(".nav__menu a");

    if (!toggle || !menu) return;

    // toggle menu
    toggle.addEventListener("click", () => {
        menu.classList.toggle("show-menu");
        toggle.classList.toggle("show-icon");
    });

    // close menu on link click
    links.forEach(link => {
        link.addEventListener("click", () => {
            menu.classList.remove("show-menu");
            toggle.classList.remove("show-icon");
        });
    });
}

/* -----------------------------
   CURSOR FOLLOWER (DESKTOP ONLY)
------------------------------ */
function initCursorFollower() {
    const isDesktop =
        window.matchMedia("(min-width: 1024px)").matches &&
        window.matchMedia("(hover: hover)").matches;

    if (!isDesktop) return;

    const cursor = document.querySelector(".cursor-follower");
    if (!cursor) return;

    let mouseX = 0,
        mouseY = 0,
        currentX = 0,
        currentY = 0;

    document.addEventListener("mousemove", (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function animate() {
        currentX += (mouseX - currentX) * 0.15;
        currentY += (mouseY - currentY) * 0.15;

        cursor.style.left = `${currentX}px`;
        cursor.style.top = `${currentY}px`;

        requestAnimationFrame(animate);
    }

    animate();

    const targets = document.querySelectorAll(".card");

    targets.forEach((el) => {
        el.addEventListener("mouseenter", () => {
            cursor.classList.add("active");
            cursor.dataset.text = "View Project";
        });

        el.addEventListener("mouseleave", () => {
            cursor.classList.remove("active");
            cursor.dataset.text = "";
        });
    });
}

/* -----------------------------
   ACCORDION
------------------------------ */
function initAccordion() {
    const items = document.querySelectorAll(".questions__item");
    if (!items.length) return;

    const toggleItem = (item) => {
        const content = item.querySelector(".questions__content");
        if (!content) return;

        const isOpen = item.classList.contains("accordion-open");

        if (isOpen) {
            content.style.height = "";
            item.classList.remove("accordion-open");
        } else {
            content.style.height = content.scrollHeight + "px";
            item.classList.add("accordion-open");
        }
    };

    items.forEach((item) => {
        const header = item.querySelector(".questions__header");
        if (!header) return;

        header.addEventListener("click", () => {
            const openItem = document.querySelector(".accordion-open");

            toggleItem(item);

            if (openItem && openItem !== item) {
                toggleItem(openItem);
            }
        });
    });
}

