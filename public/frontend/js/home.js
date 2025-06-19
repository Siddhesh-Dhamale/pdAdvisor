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

// continus marquee slider

const $list = $(".marquee-item-list");
const originalItems = $list.html(); // Grab original <li>s

// Append original items multiple times to extend list for scrolling
for (let i = 0; i < 5; i++) {
    $list.append(originalItems); // Adds more <li>s to same <ul>
}

// insights slider

const swiper = new Swiper(".insightsSwiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
    },
});

// counter section js

const counters = document.querySelectorAll(".stat-item");
let hasAnimated = false;

// Total animation duration (in milliseconds)
const animationDuration = 2000;

function animateCount(counter) {
    const target = +counter.getAttribute("data-target");
    let count = 0;

    // Number of updates over the total duration
    const frameRate = 60; // 60 updates per second
    const totalFrames = Math.round((animationDuration / 1000) * frameRate);
    const increment = target / totalFrames;

    const interval = setInterval(() => {
        count += increment;
        if (count >= target) {
            counter.innerText = `${target.toLocaleString()}+`;
            clearInterval(interval);
        } else {
            counter.innerText = `${Math.round(count).toLocaleString()}+`;
        }
    }, 1000 / frameRate);
}

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !hasAnimated) {
                hasAnimated = true;
                counters.forEach(animateCount);
            }
        });
    },
    { threshold: 0.4 }
);

observer.observe(document.querySelector("#stats-section"));

// counter section js end
