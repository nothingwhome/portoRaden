<style>
/* Bug Bounty Section */
.bug-bounty {
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

.bug-bounty-container {
    /* background: #fff; */
    border-radius: 16px;
    padding: 3rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    width: 100%;
}

.bounty-intro {
    color: #4b5563;
    line-height: 1.7;
    font-size: 1rem;
    text-align: center;
    max-width: 800px;
    margin: 0 auto 3rem auto;
}

.bounty-intro strong {
    color: #111827;
}

.bounty-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
}

.bounty-categories {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.bounty-category {
    background: #f8fafc;
    border-radius: 12px;
    padding: 1.5rem;
    border: 1px solid #e2e8f0;
}

.category-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2563eb;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.category-title::before {
    content: '🏆';
    font-size: 1.2rem;
}

.achievement-list {
    display: flex;
    flex-direction: column;
    gap: 0.8rem;
}

.achievement-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.8rem;
    padding: 0.5rem 0;
    color: #4b5563;
}

.achievement-badge {
    background: #10b981;
    color: white;
    padding: 0.2rem 0.6rem;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 500;
    white-space: nowrap;
    flex-shrink: 0;
}

.achievement-badge.hof {
    background: #f59e0b;
}

/* Responsive Design untuk Bug Bounty Section */
@media (max-width: 992px) {
    .bug-bounty {
        flex-direction: column;
        text-align: center;
        gap: 2rem;
    }
    
    .bug-bounty-container {
        padding: 2.5rem;
    }
    
    .bounty-content {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
}

@media (max-width: 768px) {
    .bug-bounty {
        flex-direction: column;
        margin: 2rem auto;
        padding: 0 1rem;
    }
    
    .bug-bounty-container {
        padding: 2rem 1.5rem;
        padding-top: 10px;
    }
    
    .bounty-category {
        padding: 1.25rem;
    }
    
    .category-title {
        font-size: 1.2rem;
    }
    
    .bounty-intro {
        font-size: 0.95rem;
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .achievement-item {
        font-size: 0.9rem;
        flex-wrap: wrap;
    }
}

@media (max-width: 480px) {
    .bug-bounty {
        margin: 1.5rem auto;
    }
    
    .bug-bounty-container {
        padding: 1.5rem 1rem;
        border-radius: 12px;
        width: 300px;
    }
    
    .bounty-category {
        padding: 1rem;
    }
    
    .category-title {
        font-size: 1.1rem;
    }
    
    .achievement-list {
        gap: 0.6rem;
    }
    
    .achievement-item {
        font-size: 0.85rem;
        align-items: flex-start;
        flex-direction: column;
        gap: 0.3rem;
    }
    
    .achievement-badge {
        align-self: flex-start;
        font-size: 0.7rem;
        padding: 0.15rem 0.5rem;
    }
}

@media (max-width: 320px) {
    .bug-bounty-container {
        padding: 1rem 0.8rem;
    }
    
    .bounty-category {
        padding: 0.8rem;
    }
    
    .category-title {
        font-size: 1rem;
    }
    
    .achievement-item {
        font-size: 0.8rem;
    }
    
    .bounty-intro {
        font-size: 0.9rem;
    }
}
</style>

<!-- Bug Bounty Section -->
<section class="bug-bounty" id="achive">
    <div class="bug-bounty-container">
        <h2 class="section-title">Achievement Bug Hunter</h2>
        <p class="section-subtitle">Pencapaian saya dalam dunia Bug Hunter di platform lokal dan internasional</p>
        
        <div class="bounty-intro">
            <p>
                Pada bagian ini berisi tentang pencapaian saya dalam dunia <strong>Bug Hunter</strong> di lokal (Indonesia) dan luar negeri. Dari Bug Hunter saya belajar banyak hal mengenai metode serangan celah keamanan yang ada pada web aplikasi, seperti <strong>Broken Access Control, Cross Site Scripting, SQL Injection</strong> dll.
            </p>
            <p>
                Berikut hasil pencapaian saya dalam berburu celah keamanan di berbagai platform dan institusi.
            </p>
        </div>
        <div class="bounty-content">
            <div class="bounty-category">
                <h3 class="category-title">Local Hunting</h3>
                <div class="achievement-list">
                    <div class="achievement-item">
                        <span>SMK NEGERI 6 SURABAYA</span>
                        <span class="achievement-badge">Sertifikat</span>
                    </div>
                    <div class="achievement-item">
                        <span>SMK NEGERI 12 SURABAYA</span>
                        <span class="achievement-badge">Sertifikat</span>
                    </div>
                    <div class="achievement-item">
                        <span>SMK 17 AGUSTUS 1945 SURABAYA</span>
                        <span class="achievement-badge">Belom Report :b</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Airlangga</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Dinamika</span>
                        <span class="achievement-badge hof">Sertifikat + Bounty</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Perbanas</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Unitomo</span>
                        <span class="achievement-badge hof">Sertifikat Apresiasi + Bounty</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Lombok</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Media Kompas</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Diponegoro</span>
                        <span class="achievement-badge">Sertifikat</span>
                    </div>
                    <div class="achievement-item">
                        <span>DPR RI</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>BMKG RI</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>INews ID</span>
                        <span class="achievement-badge">Sertifikat</span>
                    </div>
                    <div class="achievement-item">
                        <span>Mahkamah Agung RI</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Bawaslu RI</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Komdigi RI</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Pemerintah Kota Semarang</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>Pemerintahan Provinsi Sumatera Utara</span>
                        <span class="achievement-badge">Sertifikat</span>
                    </div>
                    <div class="achievement-item">
                        <span>Pemerintah Kabupaten Sleman</span>
                        <span class="achievement-badge hof">2M</span>
                    </div>
                    <div class="achievement-item">
                        <span>Pemerintah Provinsi Jawa Timur</span>
                        <span class="achievement-badge">Sertifikat</span>
                    </div>
                    <div class="achievement-item">
                        <span>Pemerintah Kota Bandung</span>
                        <span class="achievement-badge">Sertifikat Apresiasi</span>
                    </div>
                    <div class="achievement-item">
                        <span>PT Transjakarta</span>
                        <span class="achievement-badge hof">Sertifikat + HoF</span>
                    </div>
                    <div class="achievement-item">
                        <span>Universitas Uyelindo NTT</span>
                        <span class="achievement-badge hof">Sertifikat + HoF</span>
                    </div>
                </div>
            </div>
            <div class="bounty-category">
                <h3 class="category-title">International Hunting</h3>
                <div class="achievement-list">
                    <div class="achievement-item">
                        <span>Google VRP Hunter</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>Apple Bug Bounty</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>Grab Bounty Program</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>Squarespace Bug Bounty</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>Slack Bug Bounty</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>TikTok Bug Bounty</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>BMW Group</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>Here Techlogies</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>DPG Media Belanda</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>NBA Bug Bounty</span>
                        <span class="achievement-badge">Bug Bounty Program</span>
                    </div>
                    <div class="achievement-item">
                        <span>Donorbox California</span>
                        <span class="achievement-badge">VDP Program</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>