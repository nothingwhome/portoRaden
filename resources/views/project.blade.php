<style>
/* Projects Section */
.projects {
    display: flex;
    align-items: center;
    justify-content: center;
    max-width: 1200px;
    margin: 3rem auto;
    padding: 0 2rem;
    width: 100%;
    box-sizing: border-box;
    position: relative;
    z-index: 1;
}

.projects-container {
    /* background: #fff; */
    border-radius: 16px;
    padding: 3rem;
    /* box-shadow: 0 4px 20px rgba(0,0,0,0.08); */
    width: 100%;
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.project-card {
    background: #f8fafc;
    border-radius: 12px;
    padding: 2rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 1px solid #e2e8f0;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.project-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 1rem;
}

.project-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #111827;
    margin: 0;
}

.project-badge {
    background: #2563eb;
    color: white;
    padding: 0.3rem 0.8rem;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

.project-description {
    color: #4b5563;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
}

.project-features {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
    margin-bottom: 2rem;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    padding: 0.5rem 0;
}

.feature-icon {
    font-size: 1.1rem;
    width: 24px;
    text-align: center;
}

.project-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: #2563eb;
    color: white;
    padding: 0.8rem 1.5rem;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    width: fit-content;
}

.project-link:hover {
    background: #1e40af;
    transform: translateX(5px);
}

/* Responsive Design untuk Projects Section */
@media (max-width: 992px) {
    .projects {
        flex-direction: column;
        text-align: center;
        gap: 2rem;
    }
    
    .projects-container {
        padding: 2.5rem;
    }
    
    .projects-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
}

@media (max-width: 768px) {
    .projects {
        flex-direction: column;
        margin: 2rem auto;
        padding: 0 1rem;
    }
    
    .projects-container {
        padding: 2rem 1.5rem;
    }
    
    .project-card {
        padding: 1.5rem;
    }
    
    .project-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
    }
    
    .project-title {
        font-size: 1.3rem;
    }
    
    .project-description {
        font-size: 0.9rem;
        text-align: left;
    }
    
    .project-link {
        width: 100%;
        width: 120px;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .projects {
        margin: 1.5rem auto;
         padding: 0 1rem;
    }
    
    .projects-container {
        padding: 1.5rem 1rem;
        max-width:100%;
    }
    
    .project-card {
        padding: 1.25rem;
    }
    
    .project-title {
        font-size: 1.2rem;
    }
    
    .project-features {
        gap: 0.6rem;
    }
    
    .feature-item {
        font-size: 0.9rem;
    }
}

@media (max-width: 320px) {
    .projects-container {
        padding: 1rem 0.8rem;
    }
    
    .project-card {
        padding: 1rem;
    }
    
    .projects-grid {
        grid-template-columns: 1fr;
    }
    
    .project-title {
        font-size: 1.1rem;
    }
    
    .project-description {
        font-size: 0.85rem;
    }
}
</style>

<!-- Projects Section -->
<section class="projects" id="projects">
    <div class="projects-container">
        <h2 class="section-title">Project Saya</h2>
        <p class="section-subtitle">Berikut adalah beberapa project yang pernah saya buat</p>
        
        <div class="projects-grid">
            <!-- JPS-Re Project -->
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">JPS-Re</h3>
                    <span class="project-badge">Web Development</span>
                </div>
                <p class="project-description">
                   PT. Jaya Proteksindo Sakti adalah perusahaan pialang dan konsultan asuransi yang berkomitmen untuk membantu klien kami melalui penyediaan layanan asuransi yang komprehensif dalam hal perantara, klaim, dan manajemen risiko. Didirikan pada tahun 2001 sebagai perusahaan pialang asuransi independen, dengan tujuan mengembangkan perusahaan kami, kami telah melayani lebih dari 5000 klien hingga tahun 2016.
                </p>
                <div class="project-features">
                    <div class="feature-item">
                        <span class="feature-icon">🌐</span>
                        <span>Company Profile</span>
                    </div>
                </div>
                <a href="https://jpsre.k8s.redtech.co.id/" class="project-link">
                    <span>JPS-Re</span>
                </a>
            </div>
            
            <!-- Welgrow Project -->
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Welgrow</h3>
                    <span class="project-badge">Web Development</span>
                </div>
                <p class="project-description">
                   Welgrow berdiri sejak tahun 1998 dan bangga menjadi perusahaan jasa pengiriman barang 100% asli Indonesia. Komitmen Welgrow terhadap "Melayani dengan BAIK, TUMBUH dalam keunggulan" adalah kunci industri jasa logistik yang berkelanjutan dan terus menandai pertumbuhannya dengan memperluas layanan internalnya.
                </p>
                <div class="project-features">
                    <div class="feature-item">
                        <span class="feature-icon">🌐</span>
                        <span>Company Profile</span>
                    </div>
                </div>
                <a href="https://welgrow-dev.k8s.redtech.co.id/" class="project-link">
                    <span>Welgrow</span>
                </a>
            </div>
            
            <!-- Lazyhunter Project -->
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Lazyhunter</h3>
                    <span class="project-badge">Pentest Tools</span>
                </div>
                <p class="project-description">
                    Tools ini adalah tools khusus pentest dan hunting yang digunakan untuk mencari vulnerability pada sistem. yang dari gabungan beberapa tools seperti <em>Nuclei, httpx, SubdoFinder, Arjun HTTP Parameter Discovery Suite</em>
                </p>
                <div class="project-features">
                    <div class="feature-item">
                        <span class="feature-icon">📡</span>
                        <span>Code Status Website</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🤖</span>
                        <span>AI Reporting Email/Telegram</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">🔢</span>
                        <span>Automated Scanning</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">⚡</span>
                        <span>Easy to Use</span>
                    </div>
                </div>
                <a href="#" class="project-link">
                    <span>Private Tools</span>
                </a>
            </div>
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Magang PT. Redbuzz Mediatama</h3>
                    <span class="project-badge">Intership</span>
                </div>
                <p class="project-description">
                    PT. Redbuzz Mediatama adalah perusahaan teknologi informasi yang berfokus pada pengembangan solusi teknologi untuk bisnis, perusahaan ini telah berkembang menjadi salah satu perusahaan teknologi di Indonesia. 
                </p>
                <p class="project-description">
                    Pada magang ini saya melaksanakan dalam rentan waktu 6 bulan, saya bertugas sebagai junior programmer dan pentester. Di sini saya belajar banyak tentang pengembangan web, keamanan siber, dan pengujian penetrasi. Selain itu, saya juga memiliki pengalaman dalam mengelola proyek tim dan memberikan saran metode serangan keamanan siber.
                </p>
                <div class="project-features">
                    <div class="feature-item">
                        <span class="feature-icon">💻</span>
                        <span>Junior Progammer & Pentester</span>
                    </div>
                </div>
                <a href="https://welgrow-dev.k8s.redtech.co.id/" class="project-link">
                    <span>#</span>
                </a>
            </div>
        </div>
    </div>
</section>