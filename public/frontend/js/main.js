// counter section js

document.addEventListener("DOMContentLoaded", () => {
    const statsSection = document.querySelector("#stats-section");
    const counters = document.querySelectorAll(".stat-item");

    // Only proceed if #stats-section exists
    if (!statsSection || counters.length === 0) {
        console.warn("Missing #stats-section or .stat-item elements.");
        return;
    }

    let hasAnimated = false;
    const animationDuration = 2000;

    function animateCount(counter) {
        const target = parseInt(counter.getAttribute("data-target"));
        if (isNaN(target)) return;

        let count = 0;
        const frameRate = 60;
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

    // ✅ Only observe if section exists
    observer.observe(statsSection);
});

// counter section js end

// cursor
document.addEventListener("DOMContentLoaded", () => {
    const mouse = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2,
    }; // Start centered
    const dotPos = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2,
    };
    const ballPos = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2,
    };
    const dotRatio = 0.2;
    const ballRatio = 0.1;

    const dot = document.getElementById("dot");
    const ball = document.getElementById("ball");

    if (!dot || !ball) {
        console.warn("Custom cursor elements not found in DOM.");
        return;
    }

    document.addEventListener("mousemove", (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    function animateCursor() {
        dotPos.x += (mouse.x - dotPos.x) * dotRatio;
        dotPos.y += (mouse.y - dotPos.y) * dotRatio;
        ballPos.x += (mouse.x - ballPos.x) * ballRatio;
        ballPos.y += (mouse.y - ballPos.y) * ballRatio;

        dot.style.transform = `translate(${dotPos.x}px, ${dotPos.y}px)`;
        ball.style.transform = `translate(${ballPos.x}px, ${ballPos.y}px)`;

        requestAnimationFrame(animateCursor);
    }

    animateCursor();
});
// END

// scroll down rotating button

const magneticBtn = document.querySelector(".magnetic-btn");
const strength = 30; // max movement in px

document.addEventListener("mousemove", (e) => {
    const rect = magneticBtn.getBoundingClientRect();
    const btnX = rect.left + rect.width / 2;
    const btnY = rect.top + rect.height / 2;
    const distX = e.clientX - btnX;
    const distY = e.clientY - btnY;

    const distance = Math.sqrt(distX * distX + distY * distY);

    const maxDistance = 100; // sensitivity
    if (distance < maxDistance) {
        const moveX = (distX / maxDistance) * strength;
        const moveY = (distY / maxDistance) * strength;
        magneticBtn.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.1)`;
    } else {
        magneticBtn.style.transform = "translate(0, 0) scale(1)";
    }
});

// scroll down rotating button end

// <!-- rotating circle script  -->

const text = document.querySelector(".text p");
const str = text.textContent;
text.innerHTML = str
    .split("")
    .map(
        (char, i) =>
            `<span style="transform: rotate(${i * 10.3}deg)" >${char}</span>`
    )
    .join("");

// <!-- rotating circle script  End -->

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

// SECTION SCROLL ANIMATION

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".scroll-snap-section");
    let isScrolling = false;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting && entry.intersectionRatio >= 0.1) {
                    const target = entry.target;

                    if (!isScrolling) {
                        isScrolling = true;

                        // Optional: visual animation class
                        sections.forEach((sec) =>
                            sec.classList.remove("active")
                        );
                        target.classList.add("active");

                        // Smooth scroll to reveal full section
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start",
                        });

                        // Reset scroll lock after scroll finishes
                        setTimeout(() => {
                            isScrolling = false;
                        }, 1000); // Match your animation speed
                    }
                }
            });
        },
        {
            threshold: 0.1,
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
});
