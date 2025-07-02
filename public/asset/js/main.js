// Smooth scrolling
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".navbar a").forEach(function (anchor) {
        anchor.addEventListener("click", function (e) {
            if (this.hash !== "") {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({ behavior: "smooth" });
                }
            }
        });
    });

    // Skill bar animation
    const bars = document.querySelectorAll('.bar-fill');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.width = entry.target.style.getPropertyValue('--bar-width');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    bars.forEach(bar => {
        bar.style.width = '0';
        observer.observe(bar);
    });
});
