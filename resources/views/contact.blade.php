<style>
/* Footer Section */
.footer {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    color: white;
    padding: 3rem 0 1rem 0;
    margin-top: 4rem;
    width: 100%;
    position: relative;
    z-index: 1;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.footer-content {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 3rem;
    margin-bottom: 2rem;
}

.footer-brand {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.footer-logo {
    font-size: 1.8rem;
    font-weight: 800;
    color: #2563eb;
}

.footer-logo span {
    color: white;
}

.footer-description {
    color: #cbd5e1;
    line-height: 1.6;
    font-size: 0.95rem;
    max-width: 300px;
}

.footer-social {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.social-link:hover {
    background: #2563eb;
    transform: translateY(-2px);
}

.footer-links h3,
.footer-contact h3 {
    color: white;
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    position: relative;
}

.footer-links h3::after,
.footer-contact h3::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 30px;
    height: 2px;
    background: #2563eb;
}

.footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 0.8rem;
}

.footer-links a {
    color: #cbd5e1;
    text-decoration: none;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.footer-links a:hover {
    color: #2563eb;
    transform: translateX(5px);
}

.footer-links a::before {
    content: '▸';
    font-size: 0.8rem;
    color: #2563eb;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.footer-links a:hover::before {
    opacity: 1;
}

.contact-info {
    display: flex;
    flex-direction: column;
    padding-left:18px;
    gap: 1rem;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #cbd5e1;
    font-size: 0.95rem;
}

.contact-item i {
    width: 20px;
    text-align: center;
    color: #2563eb;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.copyright {
    color: #94a3b8;
    font-size: 0.9rem;
}

.footer-legal {
    display: flex;
    gap: 2rem;
}

.footer-legal a {
    color: #94a3b8;
    text-decoration: none;
    font-size: 0.9rem;
    transition: color 0.3s ease;
}

.footer-legal a:hover {
    color: #2563eb;
}

/* Responsive Design untuk Footer */
@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
    }
    
    .footer-brand {
        grid-column: 1 / -1;
        text-align: center;
        align-items: center;
    }
    
    .footer-description {
        max-width: 500px;
    }
}

@media (max-width: 768px) {
    .footer {
        padding: 2rem 0 1rem 0;
        margin-top: 3rem;
    }
    
    .footer-container {
        padding: 0 1.5rem;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        gap: 2rem;
        text-align: center;
    }
    
    .footer-links h3::after,
    .footer-contact h3::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .footer-links a:hover::before {
        opacity: 0;
    }
    
    .footer-bottom {
        flex-direction: column;
        text-align: center;
        gap: 1.5rem;
    }
    
    .footer-legal {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .footer {
        padding: 1.5rem 0 1rem 0;
    }
    
    .footer-container {
        padding: 0 1rem;
    }
    
    .footer-logo {
        font-size: 1.5rem;
    }
    
    .footer-description {
        font-size: 0.9rem;
    }
    
    .footer-links h3,
    .footer-contact h3 {
        font-size: 1.1rem;
    }
    
    .contact-item {
        font-size: 0.9rem;
    }
    
    .copyright,
    .footer-legal a {
        font-size: 0.85rem;
    }
}
</style>
<footer class="footer" id="contact">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-brand">
                <div class="footer-logo">Raden<span>Hunt</span></div>
                <p class="footer-description">
                    Cyber Security Enthusiast & Bug Hunter yang passionate dalam menemukan vulnerability 
                    dan meningkatkan keamanan sistem digital.
                </p>
                <div class="footer-social">
                    <a href="https://github.com/yourusername" class="social-link" target="_blank" title="GitHub">
                        <i>🐱</i>
                    </a>
                    <a href="https://linkedin.com/in/yourusername" class="social-link" target="_blank" title="LinkedIn">
                        <i>💼</i>
                    </a>
                    <a href="https://twitter.com/yourusername" class="social-link" target="_blank" title="Twitter">
                        <i>🐦</i>
                    </a>
                    <a href="https://medium.com/@yourusername" class="social-link" target="_blank" title="Medium">
                        <i>📝</i>
                    </a>
                </div>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#skills">Keahlian</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#bounty">Bug Bounty</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Services</h3>
                <ul>
                    <li><a href="#">Penetration Testing</a></li>
                    <li><a href="#">Bug Bounty Hunting</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <i>📧</i>
                        <span>alan@onion</span>
                    </div>
                    <div class="contact-item">
                        <i>📱</i>
                        <span>+666</span>
                    </div>
                    <div class="contact-item">
                        <i>📍</i>
                        <span>Surabaya, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="copyright">
                &copy; 2025 Raden Hunt. All rights reserved.
            </div>
            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Security</a>
            </div>
        </div>  
    </div>
</footer>