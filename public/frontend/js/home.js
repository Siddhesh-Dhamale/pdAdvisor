// home slider

// Initialize Swiper
const icons = document.querySelectorAll(".icon-trigger");

const updateActiveIcon = (index) => {
    icons.forEach((icon) => icon.classList.remove("active"));
    const activeIcon = document.querySelector(
        `.icon-trigger[data-slide="${index}"]`
    );
    if (activeIcon) activeIcon.classList.add("active");
};

const heroSwiper = new Swiper(".hero-swiper", {
    loop: true,
    effect: "slide",
    speed: 600,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    on: {
        slideChange: function () {
            const realIndex = this.realIndex; // correct index even in loop mode
            updateActiveIcon(realIndex);
        },
    },
});

// Initial icon activation
updateActiveIcon(heroSwiper.realIndex);

// Handle icon click
icons.forEach((icon) => {
    icon.addEventListener("click", () => {
        const index = parseInt(icon.getAttribute("data-slide"));
        heroSwiper.slideToLoop(index); // use slideToLoop if loop: true
        updateActiveIcon(index);
    });
});

// QA slider

const QAswiper = new Swiper(".industrySwiper", {
    loop: false,
    speed: 700,
    effect: "slide",
});

document.querySelectorAll(".QAbutton").forEach((button) => {
    button.addEventListener("click", () => {
        if (QAswiper.isEnd) {
            window.location.href = "#";
        } else {
            QAswiper.slideNext();
        }
    });
});

// QA slider end

