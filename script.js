// 1. Welcome Popup
window.addEventListener("load", () => {
    setTimeout(() => {
        alert("👋 Welcome to the Farmers Logistics System!");
    }, 1000);
});

// 2. Typing Text Animation
function typeText(elementId, text, delay = 100) {
    let i = 0;
    const target = document.getElementById(elementId);

    function type() {
        if (i < text.length) {
            target.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, delay);
        }
    }
    type();
}
document.addEventListener("DOMContentLoaded", () => {
    if (document.getElementById("typing-text")) {
        typeText("typing-text", "Connecting Farmers to Markets...");
    }
});

// 3. Dark Mode Toggle
function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
    const mode = document.body.classList.contains("dark-mode") ? "Dark" : "Light";
    alert(`${mode} Mode Activated`);
}

// 4. Scroll Reveal Effect
const reveals = document.querySelectorAll(".reveal");

window.addEventListener("scroll", () => {
    for (let i = 0; i < reveals.length; i++) {
        const windowHeight = window.innerHeight;
        const revealTop = reveals[i].getBoundingClientRect().top;
        const revealPoint = 150;

        if (revealTop < windowHeight - revealPoint) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");

            function toggleDarkMode() {
                document.body.classList.toggle("dark-mode");
                const mode = document.body.classList.contains("dark-mode") ? "Dark" : "Light";
                alert(`${mode} Mode Activated`);
            }

        }
    }
});