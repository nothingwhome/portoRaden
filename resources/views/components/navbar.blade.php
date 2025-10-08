<!-- NAVBAR FIXED -->
<header class="navbar">
    <div class="logo">Raden<span>Hunt</span></div>
    
    <div class="burger" id="burger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav id="navMenu">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#skills">Skill</a></li>
            <li><a href="#achive">Achievement</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="https://maulanarskidp.medium.com/" target="_blank" class="btn-blog">My Blog</a>
    </nav>
</header>

<style>
/* PERBAIKAN NAVBAR - FIXED POSITION */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    width: 100%;
    border-radius: 16px;
    background: #fff;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    position: fixed; /* Diubah dari sticky ke fixed */
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    box-sizing: border-box;
    z-index: 1000;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    max-width: 1240px;
    margin: 0 auto;
}

.navbar.scrolled {
    top: 0;
    padding: 12px 20px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.15);
}

.navbar .logo {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2563eb;
}

.navbar .logo span {
    color: #111827;
}

.navbar nav {
    display: flex;
    align-items: center;
    gap: 25px;
}

.navbar ul {
    display: flex;
    gap: 1.5rem;
    list-style: none;
    margin: 0;
    padding: 0;
}

/* Hover effect untuk nav links */
.navbar ul li a {
    text-decoration: none;
    color: #374151;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
}

.navbar ul li a:hover {
    color: #2563eb;
}

.navbar ul li a::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: #2563eb;
    transition: width 0.3s ease;
}

.navbar ul li a:hover::after {
    width: 100%;
}

.btn-blog {
    padding: 0.5rem 1rem;
    background: #2563eb;
    color: #fff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    box-shadow: 0 4px 6px rgba(37,99,235,0.3);
    transition: 0.3s;
}

.btn-blog:hover {
    background: #1e40af;
}

.burger {
    display: none;
    flex-direction: column;
    cursor: pointer;
    gap: 4px;
}

.burger span {
    display: block;
    width: 25px;
    height: 3px;
    background: #111827;
    border-radius: 4px;
    transition: all 0.3s ease;
    transform-origin: center;
}

@media (max-width: 768px) {
    .navbar {
        border-radius: 0;
        margin: 0;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 12px 20px;
        width: 100%;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        max-width: 100%;
        transform: none;
    }

    .navbar.scrolled {
        padding: 15px 20px;
        border-radius: 6px;
    }

    .navbar nav {
        display: none;
        position: fixed;
        top: 60px;
        left: 0;
        background: #fff;
        width: 100%;
        flex-direction: column;
        padding: 1rem 0;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        z-index: 1000;
        border-radius: 0;
        transition: all 0.3s ease;
    }

    .navbar nav.active {
        display: flex;
        animation: slideDown 0.3s ease;
    }
    
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .navbar ul {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
        width: 100%;
    }

    .navbar ul li {
        width: 100%;
    }

    .navbar ul li a {
        display: block;
        padding: 0.75rem 0;
        width: 100%;
    }

    .btn-blog {
        margin-top: 1rem;
        width: 80%;
        text-align: center;
    }

    .burger {
        display: flex;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const burger = document.getElementById('burger');
    const navMenu = document.getElementById('navMenu');
    const burgerSpans = burger.querySelectorAll('span');
    const navbar = document.querySelector('.navbar');
    
    burger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        burger.classList.toggle('open');
    
        if (burger.classList.contains('open')) {
            burgerSpans[0].style.transform = 'rotate(45deg) translate(6px, 6px)';
            burgerSpans[1].style.opacity = '0';
            burgerSpans[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
        } else {
            burgerSpans[0].style.transform = 'none';
            burgerSpans[1].style.opacity = '1';
            burgerSpans[2].style.transform = 'none';
        }
    });

    // Close mobile menu ketika klik di luar
    document.addEventListener('click', (e) => {
        if (!burger.contains(e.target) && !navMenu.contains(e.target) && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
            burger.classList.remove('open');
            burgerSpans[0].style.transform = 'none';
            burgerSpans[1].style.opacity = '1';
            burgerSpans[2].style.transform = 'none';
        }
    });

    // Smooth scroll untuk semua link navbar
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const offsetTop = targetElement.getBoundingClientRect().top + window.pageYOffset - 100;
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                // Tutup mobile menu jika terbuka
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    burger.classList.remove('open');
                    burgerSpans[0].style.transform = 'none';
                    burgerSpans[1].style.opacity = '1';
                    burgerSpans[2].style.transform = 'none';
                }
            }
        });
    });

    // PERBAIKAN NAVBAR SCROLL EFFECT
    window.addEventListener('scroll', () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
</script>