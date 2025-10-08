<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f9fafb;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            position: relative;
        }

        .container {
            max-width: 1240px;
            width: 100%;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        #particle-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        html {
            scroll-behavior: smooth;
        }

        /* HERO SECTION - TAMBAHAN PADDING ATAS */
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 6rem auto 3rem; /* Ditambah margin top untuk navbar fixed */
            padding: 0 2rem;
            gap: 3rem;
            width: 100%;
            box-sizing: border-box;
            position: relative;
            z-index: 2;
        }

        .hero-text {
            flex: 1;
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #111827;
            min-height: 120px;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

       .hero-text h1 span {
    color: #2563eb !important;
}
        .hero-text p {
            margin-top: 1rem;
            font-size: 1rem;
            line-height: 1.6;
            color: #4b5563;
        }

        .hero-text small {
            display: block;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: #6b7280;
        }

        .hero-img {
            flex: 1;
            display: flex;
            justify-content: center;
            max-width: 420px;
        }

        .hero-img img {
            width: 100%;
            max-width: 420px;
            border-radius: 16px;
        }

        .animated-text span.dud {
            color: #2563eb;
        }
        
        .animated-text span.highlight {
        color: #2563eb !important;
        }
        /* highlight untuk nama */
        .highlight {
            color: #2563eb;
            font-weight: 800;
        }

        /* SKILL SECTION - TAMBAHAN PADDING ATAS */
        .skills {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 3rem auto;
            padding: 2rem 2rem; /* Ditambah padding atas */
            width: 100%;
            box-sizing: border-box;
            position: relative;
            z-index: 2;
        }

        .skills-container {
            border-radius: 16px;
            padding: 3rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            width: 100%;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: #111827;
            text-align: center;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #4b5563;
            text-align: center;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .skill-category {
            background: #f8fafc;
            border-radius: 12px;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .skill-category:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .category-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #2563eb;
            margin-bottom: 1.2rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e2e8f0;
        }

        .skill-items {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
        }

        .skill-item {
            background: #2563eb;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .skill-item:hover {
            background: #1e40af;
            transform: scale(1.05);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .skills {
                padding: 3rem 1rem;
                padding-bottom: 4px;
            }
            
            .skills-container {
                padding: 2rem 1.5rem;
                padding-top: 10px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                margin: 5rem auto 2rem;
                padding: 0 1rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero {
                flex-direction: column;
                text-align: center;
                gap: 2rem;
            }
            .hero-img img {
                max-width: 300px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column-reverse; 
                text-align: center;
                margin: 4rem auto 2rem;
                padding: 0 1rem;
            }
            
            .hero-text h1 {
                font-size: 2rem;
                min-height: 100px;
            }
            
            .hero-text p {
                font-size: 0.95rem;
                text-align: left;
            }
            
            .hero-img img {
                max-width: 250px;
            }
        }
        
        @media (max-width: 480px) {
            .hero-text h1 {
                font-size: 1.8rem;
                min-height: 90px;
            }
            
            .hero-text p {
                font-size: 0.9rem;
            }
            
            .hero-img img {
                max-width: 220px;
            }
        }
        
        @media (max-width: 320px) {
            .hero-text small h3 {
                font-size: 15px;
            }
            .skill-container{
                max-width: 100%;
            }
        }

        /* === GLOBAL CONTAINER STANDARDIZATION === */
section,
.container,
.skills,
.projects,
.bug-bounty {
    max-width: 1240px !important;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
    box-sizing: border-box;
}

/* Pastikan jarak antar section seragam */
section {
    margin-top: 3rem;
    margin-bottom: 3rem;
}

/* Hilangkan potensi scroll horizontal di layar kecil */
html, body {
    overflow-x: hidden;
}

/* Responsive: tablet */
@media (max-width: 992px) {
    section,
    .container,
    .skills
     {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
}

/* Responsive: mobile */
@media (max-width: 480px) {
    section,
    .container,
    .skills
     {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}

    </style>
</head>
<body>
    
 @include('components.navbar')

    <div class="container">
        <section class="hero" id="home">
            <div class="hero-text">
                <h1 class="animated-text">Alo, saya <span class="highlight">Raden Maulana Mahesa</span></h1>
                <p>
                    Bisa di panggil Alan, anak SMK jurusan Rekayasa Perangkat Lunak (RPL) di Surabaya, 
                    yang sangat suka dengan dunia teknologi terutama di dunia <i>Cyber Security</i>, 
                    akhir-akhir ini saya juga banyak belajar tentang dunia <i>Cyber Security</i> khusus nya <i>Bug Hunter</i> dan <i>Offensive Security</i>.
                </p>
                <p>
                    Saya juga seorang Bug Hunter di beberapa website lokal dan luar negeri. untuk mencari <i>Vulnerability</i> 
                    di berbagai platform seperti Intigriti, BugCrowd, dan beberapa platform lainnya.
                </p>
                <small><b><i>"Xia lao bao phunk khap lang thai"</i></b></small>
            </div>

            <div class="hero-img">
                <img src="{{ asset('images/IkZ1Y2sgWW91IE5pZ2dlciI=.jpg') }}" alt="AlanHunt">
            </div>
        </section>
    </div>
    
    <section class="skills" id="skills">
        <div class="skills-container">
            <h2 class="section-title">Keahlihan & Hobi</h2>
            <p class="section-subtitle">Berikut adalah beberapa keahlian saya di dunia IT serta beberapa Hobi saya</p>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <h3 class="category-title">Junior Programmer</h3>
                    <div class="skill-items">
                        <span class="skill-item">Python</span>
                        <span class="skill-item">PHP (Laravel)</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="category-title">Cyber Security</h3>
                    <div class="skill-items">
                        <span class="skill-item">Junior Offensive Security</span>
                        <span class="skill-item">Bug Hunting</span>
                        <span class="skill-item">Penestration Testing </span>
                        <span class="skill-item">Threat Hunter Inteligence</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3 class="category-title">Hobi</h3>
                    <div class="skill-items">
                        <span class="skill-item">Running</span>
                        <span class="skill-item">Boxing (Kutisari Boxing Camp)</span>
                        <span class="skill-item">Traveling</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Load navbar component
        fetch('navbar.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-container').innerHTML = data;
            })
            .catch(error => {
                console.error('Error loading navbar:', error);
            });

        // text scramble effect
        class TextScramble {
    constructor(el) {
        this.el = el;
        this.chars = '!<>-_\\/[]{}—=+*^?#________';
        this.update = this.update.bind(this);
        this.frame = 0;
        this.queue = [];
        this.resolve = null;
        this.frameRequest = null;
        this.originalHTML = el.innerHTML; // Simpan HTML asli
    }
    
    setText(newText) {
        const oldText = this.el.textContent;
        const length = Math.max(oldText.length, newText.length);
        const promise = new Promise(resolve => this.resolve = resolve);
        this.queue = [];

        for (let i = 0; i < length; i++) {
            const from = oldText[i] || '';
            const to = newText[i] || '';
            const start = Math.floor(Math.random() * 40);
            const end = start + Math.floor(Math.random() * 40);
            this.queue.push({ from, to, start, end });
        }

        cancelAnimationFrame(this.frameRequest);
        this.frame = 0;
        this.update();
        return promise;
    }

    update() {
        let output = '';
        let complete = 0;

        for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i];

            if (this.frame >= end) {
                complete++;
                output += to;
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                    char = this.randomChar();
                    this.queue[i].char = char;
                }
                output += `<span class="dud">${char}</span>`;
            } else {
                output += from;
            }
        }

        this.el.innerHTML = output;

        if (complete === this.queue.length) {
            this.el.innerHTML = this.originalHTML;
            this.resolve();
        } else {
            this.frameRequest = requestAnimationFrame(this.update);
            this.frame++;
        }
    }

    randomChar() {
        return this.chars[Math.floor(Math.random() * this.chars.length)];
    }
}

        // particle network effect
        class ParticleNetwork {
            constructor(container, options) {
                this.container = container;
                this.canvas = document.createElement('canvas');
                this.container.appendChild(this.canvas);
                this.ctx = this.canvas.getContext('2d');
                
                this.options = Object.assign({
                    particleColor: '#888',
                    background: '#1a252f',
                    interactive: true,
                    velocity: 0.5,
                    density: 10000
                }, options);
                
                this.particles = [];
                this.mouse = { x: 0, y: 0, radius: 100 };
                
                this.init();
                this.animate();
                
                if (this.options.interactive) {
                    this.bindEvents();
                }
            }
            
            init() {
                this.resize();
                this.createParticles();
            }
            
            resize() {
                this.width = this.container.offsetWidth;
                this.height = this.container.offsetHeight;
                this.canvas.width = this.width;
                this.canvas.height = this.height;
            }
            
            createParticles() {
                this.particles = [];
                const count = (this.width * this.height) / this.options.density;
                
                for (let i = 0; i < count; i++) {
                    this.particles.push({
                        x: Math.random() * this.width,
                        y: Math.random() * this.height,
                        velocityX: (Math.random() - 0.5) * this.options.velocity,
                        velocityY: (Math.random() - 0.5) * this.options.velocity,
                        radius: Math.random() * 1.5 + 0.5
                    });
                }
            }
            
            bindEvents() {
                window.addEventListener('resize', () => {
                    this.resize();
                    this.createParticles();
                });
                
                this.canvas.addEventListener('mousemove', (e) => {
                    const rect = this.canvas.getBoundingClientRect();
                    this.mouse.x = e.clientX - rect.left;
                    this.mouse.y = e.clientY - rect.top;
                });
            }
            
            animate() {
                this.ctx.clearRect(0, 0, this.width, this.height);
                
                // update and draw particles spider web
                for (let i = 0; i < this.particles.length; i++) {
                    const p = this.particles[i];
                    
                    // update position setiap partikel
                    p.x += p.velocityX;
                    p.y += p.velocityY;
                    
                    // bounce off walls
                    if (p.x < 0 || p.x > this.width) p.velocityX *= -1;
                    if (p.y < 0 || p.y > this.height) p.velocityY *= -1;
                    
                    // draw particle
                    this.ctx.beginPath();
                    this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                    this.ctx.fillStyle = this.options.particleColor;
                    this.ctx.fill();
                    
                    // draw connections
                    for (let j = i + 1; j < this.particles.length; j++) {
                        const p2 = this.particles[j];
                        const distance = Math.sqrt(
                            Math.pow(p.x - p2.x, 2) + Math.pow(p.y - p2.y, 2)
                        );
                        
                        if (distance < 100) {
                            this.ctx.beginPath();
                            this.ctx.strokeStyle = this.options.particleColor;
                            this.ctx.lineWidth = 0.2;
                            this.ctx.globalAlpha = 1 - distance / 100;
                            this.ctx.moveTo(p.x, p.y);
                            this.ctx.lineTo(p2.x, p2.y);
                            this.ctx.stroke();
                            this.ctx.globalAlpha = 1;
                        }
                    }
                    
                    // interactive effect ketika mouse di arahkan
                    if (this.options.interactive) {
                        const distance = Math.sqrt(
                            Math.pow(p.x - this.mouse.x, 2) + Math.pow(p.y - this.mouse.y, 2)
                        );
                        
                        if (distance < this.mouse.radius) {
                            const angle = Math.atan2(p.y - this.mouse.y, p.x - this.mouse.x);
                            const force = (this.mouse.radius - distance) / this.mouse.radius;
                            
                            p.velocityX += Math.cos(angle) * force * 0.1;
                            p.velocityY += Math.sin(angle) * force * 0.1;
                        }
                    }
                }
                
                requestAnimationFrame(() => this.animate());
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener("DOMContentLoaded", () => {
            // Initialize text scramble effect
            const el = document.querySelector('.animated-text');
            if (el) {
                const text = el.textContent.trim();
                const fx = new TextScramble(el);
                fx.setText(text).then(() => {
                    // Animation complete
                });
            }

            // Initialize particle network
            const canvasDiv = document.getElementById('particle-canvas');
            const options = {
                particleColor: '#2563eb',
                background: '#f9fafb',
                interactive: true,
                velocity: 0.5,
                density: 10000
            };
            
            new ParticleNetwork(canvasDiv, options);
        });
    </script>
</body>
</html> 