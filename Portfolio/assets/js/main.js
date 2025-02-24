 // Skills Data
 const skillsData = [
    { title: "Langages", items: [
        { icon: "ri-html5-fill", text: "HTML" },
        { icon: "ri-css3-fill", text: "CSS" },
        { icon: "ri-javascript-fill", text: "JavaScript" },
        { icon: "ri-php-fill", text: "PHP" }
    ]},
    { title: "Frameworks", items: [
        { icon: "ri-bootstrap-fill", text: "Bootstrap" },
        { icon: "ri-tailwind-css-fill", text: "Tailwind" },
        { icon: "riLaravel-fill", text: "Laravel" }
    ]},
    { title: "Compétences Personnelles", items: [
        { icon: "ri-time-line", text: "Gestion du temps" },
        { icon: "ri-calendar-todo-line", text: "Capacités d’organisation" },
        { icon: "ri-team-line", text: "Travail en équipe" }
    ]},
    { title: "Outils de versionnement", items: [
        { icon: "ri-git-branch-line", text: "Git" },
        { icon: "ri-github-fill", text: "GitHub" },
        { icon: "ri-docker-line", text: "Docker" }
    ]},
    { title: "Gestion de projets", items: [
        { icon: "ri-team-line", text: "Méthodes agiles" },
        { icon: "ri-tools-line", text: "Jira" },
        { icon: "ri-tools-line", text: "Notion" }
    ]},
    { title: "Design UX/UI", items: [
        { icon: "ri-paint-brush-line", text: "Figma" },
        { icon: "ri-layout-line", text: "Prototypage" },
        { icon: "ri-layout-line", text: "Adobe XD" }
    ]},
    { title: "Bases de données", items: [
        { icon: "ri-database-2-line", text: "MySQL" },
        { icon: "ri-postgresql-fill", text: "PostgreSQL" }
    ]},
    { title: "Conception", items: [
        { icon: "ri-mind-map", text: "Merise" },
        { icon: "ri-flow-chart", text: "UML" }
    ]}
];

// Projects Data
const projectsData = [
    { icon: "ri-home-8-fill", title: "Clone Airbnb", desc: "Plateforme de réservation immobilière avec UI moderne.", tech: ["HTML", "CSS", "JS", "PHP", "MySQL"], github: "https://github.com/Keltoummalouki/clone-airbnb", demo: "#" },
    { icon: "ri-video-line", title: "Youdemy", desc: "Plateforme e-learning avec gestion de cours.", tech: ["HTML", "Tailwind", "JS", "Laravel"], github: "https://github.com/Keltoummalouki/youdemy", demo: "#" },
    { icon: "ri-shopping-cart-line", title: "ShopZone", desc: "Plateforme e-commerce avec gestion de produits.", tech: ["HTML", "Tailwind", "JS", "Laravel", "MySQL"], github: "https://github.com/Keltoummalouki/shopzone", demo: "#" },
    { icon: "ri-team-line", title: "Elite Squad Manager", desc: "Plateforme interactive pour la gestion des joueurs et équipes en ligne.", tech: ["HTML", "CSS", "JavaScript"], github: "#", demo: "#" },
    { icon: "ri-tooth-line", title: "DentaCare", desc: "Solution de gestion des réservations pour cabinets dentaires avec validation des horaires.", tech: ["C"], github: "#", demo: "#" }
];

// Pagination Function
function paginate(items, containerId, itemsPerPage) {
    const container = document.getElementById(containerId);
    const prevBtn = document.getElementById(`${containerId.split('-')[0]}-prev`);
    const nextBtn = document.getElementById(`${containerId.split('-')[0]}-next`);
    let currentPage = 0;

    function renderPage() {
        container.innerHTML = '';
        const start = currentPage * itemsPerPage;
        const end = Math.min(start + itemsPerPage, items.length);
        const pageItems = items.slice(start, end);

        pageItems.forEach(item => {
            const div = document.createElement('div');
            div.className = 'animate-on-scroll group bg-glass-light backdrop-blur-lg p-6 rounded-2xl border border-white/20 hover:border-accent transition-all duration-300 animate-glow min-w-[300px]';
            div.innerHTML = `
                ${item.title ? `
                    <h4 class="text-xl font-semibold mb-4 text-primary group-hover:text-accent flex items-center gap-3">
                        <i class="${item.items ? item.items[0].icon : item.icon} text-2xl"></i>${item.title}
                    </h4>
                ` : ''}
                ${item.items ? `
                    <div class="space-y-3">
                        ${item.items.map(i => `
                            <div class="flex items-center gap-3 group/item hover:bg-white/10 p-2 rounded-lg transition-all">
                                <i class="${i.icon} text-xl text-primary group-hover/item:text-accent"></i>
                                <span class="text-gray-200 group-hover/item:text-white">${i.text}</span>
                            </div>
                        `).join('')}
                    </div>
                ` : ''}
                ${item.desc ? `
                    <p class="text-gray-300 mb-4 group-hover:text-white transition-colors text-sm">${item.desc}</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        ${item.tech.map(t => `<span class="text-xs bg-primary/30 text-primary px-2 py-1 rounded-full">${t}</span>`).join('')}
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="${item.github}" target="_blank" class="text-sm text-primary hover:text-accent transition-colors flex items-center gap-1"><i class="ri-github-fill"></i>GitHub</a>
                        <a href="${item.demo}" class="text-sm text-primary hover:text-accent transition-colors flex items-center gap-1"><i class="ri-eye-line"></i>Démo</a>
                    </div>
                ` : ''}`;
            container.appendChild(div);
        });

        prevBtn.disabled = currentPage === 0;
        nextBtn.disabled = end >= items.length;
    }

    prevBtn.addEventListener('click', () => {
        if (currentPage > 0) {
            currentPage--;
            renderPage();
        }
    });

    nextBtn.addEventListener('click', () => {
        if ((currentPage + 1) * itemsPerPage < items.length) {
            currentPage++;
            renderPage();
        }
    });

    renderPage();
}

// Lazy Load Images
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    });
    images.forEach(img => imageObserver.observe(img));

    // Initialize Pagination
    paginate(skillsData, 'skills-container', 3);
    paginate(projectsData, 'projects-container', 3);
});

// Optimized Intersection Observer for Animations
const observer = new IntersectionObserver(
    (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-up');
                entry.target.classList.remove('opacity-0');
                observer.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.2, rootMargin: '0px 0px -50px 0px' }
);

document.querySelectorAll('.animate-on-scroll').forEach(el => {
    el.classList.add('opacity-0');
    observer.observe(el);
});

// Smooth Scrolling
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(link.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
    });
});

// Hover Animation
const hoverGroups = document.querySelectorAll('.group');
hoverGroups.forEach(group => {
    group.addEventListener('mouseenter', () => {
        const icon = group.querySelector('i:not(.ri-github-fill):not(.ri-eye-line)');
        if (icon) {
            icon.classList.add('animate-bounce');
            setTimeout(() => icon.classList.remove('animate-bounce'), 500);
        }
    });
});

// Form Submission (Placeholder)
document.querySelector('form')?.addEventListener('submit', e => {
    e.preventDefault();
    alert('Formulaire envoyé ! (Simulation)');
    e.target.reset();
});