// Simple in-memory data for demo
let projects = [
    {title: "Project One", desc: "Landing page for a modern business."},
    {title: "Project Two", desc: "Responsive portfolio website."},
    {title: "Project Three", desc: "E-commerce product page."}
];
let messages = [
    {name: "Alice", email: "alice@mail.com", msg: "Nice portfolio!"},
    {name: "Bob", email: "bob@mail.com", msg: "Can we collaborate?"}
];
let profile = {
    name: "HEANG SENGHOR",
    email: "your.email@example.com",
    location: "Your City, Country",
    cv: "cv.pdf"
};
let stats = {
    views: 1234,
    messages: 2,
    projects: 3
};

// Modal logic
function openModal(html) {
    const modal = document.getElementById('modal');
    const modalBody = document.getElementById('modalBody');
    if (modal && modalBody) {
        modalBody.innerHTML = html;
        modal.style.display = 'flex';
    }
}
function closeModal() {
    const modal = document.getElementById('modal');
    if (modal) modal.style.display = 'none';
}

// Project management functions
function renderProjectsModal() {
    let html = `<h2 style="color:#0ef;">Manage Projects</h2>
    <ul id="projectList" style="list-style:none; padding:0;">${
        projects.map((p,i)=>`
            <li style="margin-bottom:18px; border-bottom:1px solid #333; padding-bottom:12px;">
                <label style="font-weight:600;">Title:</label><br>
                <input type="text" id="title${i}" value="${p.title.replace(/"/g, '&quot;')}" style="width:90%;margin-bottom:6px;" required />
                <br>
                <label style="font-weight:600;">Description:</label><br>
                <textarea id="desc${i}" style="width:90%;height:50px;" required>${p.desc}</textarea>
                <br>
                <button type="button" onclick="saveProject(${i})" style="margin:8px 8px 0 0;background:#0ef;color:#181818;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;">Save</button>
                <button type="button" onclick="removeProject(${i})" style="margin:8px 0 0 0;background:#ff4d4d;color:#fff;border:none;padding:6px 16px;border-radius:6px;cursor:pointer;">Remove</button>
            </li>
        `).join('')
    }</ul>
    <h3 style="margin-top:24px;">Add New Project</h3>
    <input id="newTitle" placeholder="Title" style="margin-bottom:8px; width:90%;" required><br>
    <textarea id="newDesc" placeholder="Description" style="width:90%;height:50px;" required></textarea><br>
    <button type="button" onclick="addProject()" style="margin-top:8px;background:#0ef;color:#181818;border:none;padding:8px 20px;border-radius:6px;cursor:pointer;">Add Project</button>
    `;
    openModal(html);
}

window.saveProject = function(i) {
    const titleInput = document.getElementById(`title${i}`);
    const descInput = document.getElementById(`desc${i}`);
    if (titleInput.value.trim() && descInput.value.trim()) {
        projects[i].title = titleInput.value.trim();
        projects[i].desc = descInput.value.trim();
        localStorage.setItem('projects', JSON.stringify(projects));
        alert('Project saved!');
        renderProjectsModal();
    } else {
        alert('Please enter title and description.');
    }
}

window.removeProject = function(i){
    if(confirm('Remove this project?')) {
        projects.splice(i,1);
        localStorage.setItem('projects', JSON.stringify(projects));
        renderProjectsModal();
    }
}
window.addProject = function(){
    let t = document.getElementById('newTitle').value.trim();
    let d = document.getElementById('newDesc').value.trim();
    if(t && d) {
        projects.push({title:t, desc:d});
        localStorage.setItem('projects', JSON.stringify(projects));
        renderProjectsModal();
    } else {
        alert('Please enter title and description.');
    }
}

// Main dashboard logic
document.addEventListener('DOMContentLoaded', function() {
    // Modal close logic
    const modal = document.getElementById('modal');
    if (modal) {
        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeModal();
        });
    }
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") closeModal();
    });

    // Manage Projects Modal
    let cards = document.querySelectorAll('.dashboard-card');
    if(cards[0]) cards[0].onclick = function(e) {
        e.preventDefault();
        renderProjectsModal();
    };

    // View Messages Modal
    if(cards[1]) cards[1].onclick = function(e) {
        e.preventDefault();
        let html = `<h2 style="color:#0ef;">Messages</h2>
        <ul style="list-style:none; padding:0;">${
            messages.length ? messages.map(m=>`
                <li style="margin-bottom:18px;">
                    <strong>${m.name}</strong> &lt;${m.email}&gt;<br>
                    <span>${m.msg}</span>
                </li>
            `).join('') : '<li>No messages yet.</li>'
        }</ul>`;
        openModal(html);
    };

    // Edit Profile Modal
    if(cards[2]) cards[2].onclick = function(e) {
        e.preventDefault();
        let html = `<h2 style="color:#0ef;">Edit Profile</h2>
        <form id="profileForm">
            <label>Name:</label><br>
            <input name="name" value="${profile.name}" style="width:90%;"><br>
            <label>Email:</label><br>
            <input name="email" value="${profile.email}" style="width:90%;"><br>
            <label>Location:</label><br>
            <input name="location" value="${profile.location}" style="width:90%;"><br>
            <label>CV File Name:</label><br>
            <input name="cv" value="${profile.cv}" style="width:90%;"><br>
            <button type="submit" style="margin-top:12px;">Save</button>
        </form>`;
        openModal(html);
        document.getElementById('profileForm').onsubmit = function(e){
            e.preventDefault();
            profile.name = this.name.value;
            profile.email = this.email.value;
            profile.location = this.location.value;
            profile.cv = this.cv.value;
            alert('Profile updated!');
            closeModal();
        }
    };

    // Analytics Modal
    if(cards[3]) cards[3].onclick = function(e) {
        e.preventDefault();
        let html = `<h2 style="color:#0ef;">Portfolio Analytics</h2>
        <ul style="list-style:none; padding:0;">
            <li><strong>Portfolio Views:</strong> ${stats.views}</li>
            <li><strong>Messages:</strong> ${stats.messages}</li>
            <li><strong>Projects:</strong> ${projects.length}</li>
        </ul>
        <div style="margin-top:24px;">
            <span style="color:#0ef;">(Demo data only)</span>
        </div>`;
        openModal(html);
    };

    // Load projects from localStorage if available
    let storedProjects = JSON.parse(localStorage.getItem('projects'));
    if(storedProjects && storedProjects.length) {
        projects = storedProjects;
        stats.projects = projects.length;
    }
    localStorage.setItem('projects', JSON.stringify(projects));
    // Load projects from localStorage and display them in the portfolio section
 
});