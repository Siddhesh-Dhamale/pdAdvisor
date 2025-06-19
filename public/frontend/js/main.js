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
