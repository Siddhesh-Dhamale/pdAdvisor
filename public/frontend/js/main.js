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


// SECTION SCROLL ANIMATION

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.scroll-snap-section');
    let isScrolling = false;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio >= 0.1) {
                const target = entry.target;

                if (!isScrolling) {
                    isScrolling = true;

                    // Optional: visual animation class
                    sections.forEach(sec => sec.classList.remove('active'));
                    target.classList.add('active');

                    // Smooth scroll to reveal full section
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Reset scroll lock after scroll finishes
                    setTimeout(() => {
                        isScrolling = false;
                    }, 1000); // Match your animation speed
                }
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});

