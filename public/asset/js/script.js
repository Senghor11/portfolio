document.addEventListener('DOMContentLoaded', function() {
    const portfolioGallery = document.querySelector('.portfolio-gallery');
    if (!portfolioGallery) return;

    // Get projects from localStorage or use an empty array
    let projects = [];
    try {
        projects = JSON.parse(localStorage.getItem('projects')) || [];
    } catch (e) {
        projects = [];
    }

    // If there are projects, render them
    if (projects.length > 0) {
        portfolioGallery.innerHTML = projects.map(p => `
            <div class="portfolio-item">
                <img src="${p.image ? p.image : 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80'}" alt="Project">
                <div class="portfolio-info">
                    <h3>${p.title || ''}</h3>
                    <p>${p.desc || ''}</p>
                </div>
            </div>
        `).join('');
    } else {
        portfolioGallery.innerHTML = '<p style="color:#fff;">No projects to display.</p>';
    }
});
