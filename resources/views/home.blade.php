<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biliyuuu</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:wght@300..800&family=Playfair+Display:wght@400..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="dark-mode">
    <!-- loading screen -->
    <!-- <div id="loading-screen">
        <div class="loading-content">
            <i class="fa-solid fa-laptop-code fa-5x main-icon hidden"></i>

            <h1 id="loading-text" class="hidden">Hello Word</h1>

            <div class="sub-icons">
                <i class="fa-brands fa-github fa-2x hidden"></i>
                <i class="fa-solid fa-code fa-2x hidden"></i>
                <i class="fa-solid fa-user fa-2x hidden"></i>
            </div>

            <h2 id="designer-text" class="hidden">Welcom To My Profile</h2>
        </div>
    </div> -->
    <header class="header-list">
    <div class="div-list">

        <div class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="ul-list">
            <li class="logo">
                &lt;<span class="hello">Hello</span><span class="word">Word</span>&gt;
            </li>

            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#project">Projects</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>

            <li class="theme-toggle" id="themeToggle">
                <i class="fa-solid fa-moon"></i>
            </li>
        </ul>

    </div>
</header>



    <!-- home -->
    <section class="home" id="home">
        <div class="home-container">
            <div class="home-section">
                <div class="info-home">
                    <h1>Hi, I'm Billy</h1>
                    <h3>Frontend Developer</h3>

                    <div class="info-p">
                        <p>Hi! I’m Billy — a Frontend Developer who loves building beautiful and functional applications.</p>
                        <p>I enjoy learning new technologies, solving problems creatively, and transforming simple ideas into something people can actually use.</p>
                        <p>Code, coffee, and curiosity keep me going every day.</p>
                    </div>

                    <div class="follow">
                        <ul>
                            <li>
                                <a href="https://github.com/Billyuu" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://discord.com/users/1239146773042171987" target="_blank">
                                    <i class="fa-brands fa-discord"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/in/davi-sabilissalim-undefined-790a752b6" target="_blank">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/dv.sblslm_?igsh=MWMyM3cybjN6aXhjaw==" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="btnn">
                        <a
                            href="https://drive.google.com/uc?export=download&id=1CdRavltzL7Gp2T9mbvFli5aNEtkImV3H"
                            class="btn-home1">
                            <i class="fa-solid fa-download"></i> Download CV
                        </a>
                    </div>
                </div>
            </div>
            <img src="images/k.png" alt="Profile Image">
        </div>
    </section>

    <!-- ABOUT  -->
    <section class="about" id="about">
        <p class="about-title">ABOUT ME</p>
        <div class="title">
            <h1>Building Meaningful</h1>
            <h1>Digital Experiences</h1>
        </div>
        <div class="hrrr">
            <hr>
        </div>

        <div class="about-container">
            <div class="info-about">
                <div class="about-info">
                    <p>
                        I'm a creative front-end developer passionate about building modern and responsive web experiences.
                        <br>My journey began with a love for design and evolved into a deep curiosity for how the web works — combining logic with creativity to bring ideas to life.
                    </p>
                    <p>
                        When I'm not coding, I enjoy learning new technologies, improving my projects,
                        <br>and exploring better ways to make the web faster and more engaging.
                        <br>I believe in continuous learning, attention to detail, and meaningful design.
                    </p>
                </div>

                <h2>What Drives Me</h2>
                <div class="card">
                    <div class="c1">
                        <h3><i class="fa-solid fa-code"></i> Languages</h3>
                        <p>HTML, CSS, JavaScript, Flutter</p>
                    </div>
                    <div class="c1">
                        <h3><i class="fa-solid fa-graduation-cap"></i> Education</h3>
                        <p>Yudharta University in Informatics Engineering</p>
                    </div>
                    <a href="#project" style="text-decoration: none; color: inherit;">
                        <div class="c1">
                            <h3><i class="fa-solid fa-folder-open"></i> Projects</h3>
                            <p>Built more than 5 projects</p>
                        </div>
                    </a>

                </div>
            </div>

            <div class="about-img">
                <img src="/images/billy.png" alt="Profile Image">
            </div>
        </div>

        <!-- ===== TOOLS SECTION ===== -->
<div class="tools-section" id="tools">
    <h2>Tools & Technologies I Use</h2>

    <div class="tools-container">

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/vscode.png') }}"
                     alt="Visual Studio Code Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">Visual Studio Code</p>
                <p class="tool-desc">Code Editor</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/flutter.png') }}"
                     alt="Flutter Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">Flutter</p>
                <p class="tool-desc">UI Framework</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/dart.png') }}"
                     alt="Dart Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">Dart</p>
                <p class="tool-desc">Programming Language</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/html.png') }}"
                     alt="HTML Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">HTML5</p>
                <p class="tool-desc">Web Structure</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/css.png') }}"
                     alt="CSS Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">CSS3</p>
                <p class="tool-desc">Web Styling</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/javascript.png') }}"
                     alt="JavaScript Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">JavaScript</p>
                <p class="tool-desc">Web Programming</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/php.png') }}"
                     alt="PHP Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">PHP</p>
                <p class="tool-desc">Backend Language</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/laravel.png') }}"
                     alt="Laravel Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">Laravel</p>
                <p class="tool-desc">PHP Framework</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/firebase.png') }}"
                     alt="Firebase Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">Firebase</p>
                <p class="tool-desc">Database & Backend</p>
            </div>
        </div>

        <div class="tool-card">
            <div class="tool-icon-box">
                <img src="{{ asset('images/github.png') }}"
                     alt="GitHub Logo"
                     class="tool-image">
            </div>
            <div class="tool-text">
                <p class="tool-name">GitHub</p>
                <p class="tool-desc">Version Control</p>
            </div>
        </div>

    </div>
</div>



    </section>


    <!-- PROJECT  -->
    <section class="project" id="project">
        <p>PROJECTS</p>
        <h1>Featured Work</h1>
        <hr>
        <div class="info-pro">
            <p>A showcase of my recent projects demonstrating expertise in full-stack </p>
            <p>development, modern frameworks, and creative problem-solving.</p>
        </div>
        <div class="projects-container">

            <div class="project-card">
                <img src="images/Cleveroad.jpg" alt="E-Commerce Website">
                <h3>E-Commerce Website</h3>
                <p>Modern online store with product filtering, cart, and payment system.</p>
                <div class="skills">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">JavaScript</a>
                </div>
                <div class="btns">
                    <a href="#" class="btn"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="btn"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                </div>
            </div>

            <div class="project-card">
                <img src="images/Capture d'écran 2025-10-22 182207.png" alt="Portfolio Website">
                <h3>Portfolio Website</h3>
                <p>Personal portfolio to showcase my design and coding projects.</p>
                <div class="skills">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">Bootstrap</a>
                </div>
                <div class="btns">
                    <a href="#" class="btn"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="btn"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                </div>
            </div>

            <div class="project-card">
                <img src="images/Weather Forecast Dashboard.jpg" alt="Weather App">
                <h3>Weather App</h3>
                <p>Responsive app showing real-time weather data using API integration.</p>
                <div class="skills">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">API</a>
                </div>
                <div class="btns">
                    <a href="#" class="btn"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="btn"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                </div>
            </div>

            <div class="project-card">
                <img src="images/WordPress dashboard design concept.jpg" alt="Blog Website">
                <h3>Blog Website</h3>
                <p>Clean and simple blogging platform with markdown support.</p>
                <div class="skills">
                    <a href="#">HTML</a>
                    <a href="#">Tailwind</a>
                    <a href="#">JavaScript</a>
                </div>
                <div class="btns">
                    <a href="#" class="btn"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="btn"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                </div>
            </div>

            <div class="project-card">
                <img src="images/Game Dashboard Design.jpg" alt="Game Landing Page">
                <h3>Game Landing Page</h3>
                <p>Landing page for a game with animations and parallax effects.</p>
                <div class="skills">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">GSAP</a>
                </div>
                <div class="btns">
                    <a href="#" class="btn"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="btn"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                </div>
            </div>

            <div class="project-card">
                <img src="images/Task manager app.jpg" alt="Task Manager">
                <h3>Task Manager</h3>
                <p>Task tracking web app with CRUD features and clean UI.</p>
                <div class="skills">
                    <a href="#">HTML</a>
                    <a href="#">CSS</a>
                    <a href="#">JS</a>
                </div>
                <div class="btns">
                    <a href="#" class="btn"><i class="fab fa-github"></i> GitHub</a>
                    <a href="#" class="btn"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                </div>
            </div>
        </div>
    </section>

  <!-- ===== SERVICES SECTION ===== -->
<section class="services" id="services">

    <p>SERVICES</p>
    <h1>Services I Offer</h1>
    <hr>

    <div class="services-container">

        <!-- Web Development -->
        <div class="service-card">
            <img
                src="{{ asset('images/web.svg') }}"
                alt="Web Development"
                loading="lazy"
            >

            <h3>Web Development</h3>

            <p>
                I build modern, responsive, and user-friendly websites
                using current web technologies.
            </p>
        </div>

        <!-- App Development -->
        <div class="service-card">
            <img
                src="{{ asset('images/app.svg') }}"
                alt="App Development"
                loading="lazy"
            >

            <h3>App Development</h3>

            <p>
                I develop functional mobile applications using Flutter
                and Firebase based on user needs.
            </p>
        </div>

        <!-- Digital Marketing -->
        <div class="service-card">
            <img
                src="{{ asset('images/dm.svg') }}"
                alt="Digital Marketing"
                loading="lazy"
            >

            <h3>Digital Marketing</h3>

            <p>
                I help improve digital presence through effective content
                strategies and audience-focused campaigns.
            </p>
        </div>

        <!-- Email Marketing -->
        <div class="service-card">
            <img
                src="{{ asset('images/seo.svg') }}"
                alt="Email Marketing"
                loading="lazy"
            >

            <h3>Email Marketing</h3>

            <p>
                I create clear and engaging email campaigns designed to
                connect businesses with their audiences.
            </p>
        </div>

    </div>
</section>

    <!-- contact -->
    <section class="contact" id="contact">
        <p>CONTACT</p>
        <h1>Get in Touch with Us</h1>
        <div class="contact-content">
            <div class="contact-info slide-in-left">
                <p>I'm always open to discuss exciting projects and new opportunities. Let's collaborate!</p>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span>davisabilisssalimuyp@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <span>+62813-3315-4747</span>
                    </div>
                    <div class="contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Pasuruan, East Java</span>
                    </div>
                </div>

                <div class="social-links">
                    <a href="https://github.com/Billyuu" class="social-link" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/davi-sabilissalim-undefined-790a752b6" class="social-link" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://wa.me/+6281333154747" class="social-link" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="contact-form slide-in-right">
                <form id="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required name="user_name">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" required name="user_email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-send">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="footer">
        <div class="footer-container">
            <h2 class="footer-logo">Biliyuuu</h2>
            <ul class="footer-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#project">Projects</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="footer-social">
                <a href="https://github.com/Billyuu" target="_blank" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/davi-sabilissalim-undefined-790a752b6" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://wa.me/+6281333154747" target="_blank" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p class="footer-copy">&copy; 2025 Biliyuuu. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>