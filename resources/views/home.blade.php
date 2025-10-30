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

<body>
    <!-- loading screen -->
    <div id="loading-screen">
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
    </div>
    <header class="header-list">
        <div class="div-list">
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
                    <i class="fa-solid fa-sun"></i>
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
        <p id="about">ABOUT ME</p>
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
                        <br>My journey began with a love for design and evolved into a deep curiosity for how the web works — combining <br> logic with creativity to bring ideas to life.

                    </p>
                    <p>
                        When I'm not coding, I enjoy learning new technologies, improving my projects, <br> and exploring better ways to make the web faster and more engaging.
                        <br>I believe in continuous learning, attention to detail, and meaningful design
                    </p>
                </div>
                <h2>What Drives Me</h2>
                <div class="card">
                    <div class="c1">
                        <h3><i class="fa-solid fa-code"></i> Languoges</h3>
                        <p>HTML,CSS,JavaScript,Flutter</p>
                    </div>
                    <div class="c1">
                        <h3><i class="fa-solid fa-graduation-cap"></i> Education</h3>
                        <p>Yudharta University in Informatics Engineering</p>
                    </div>
                    <div class="c1">
                        <h3><i class="fa-solid fa-folder-open"></i> Projects</h3>
                        <p>Built more than 5 projects</p>
                    </div>
                </div>
            </div>
            <img src="images/img.jpg" alt="">
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
    <section class="services" id="services">
        <p>SERVICES</p>
        <h1>Our Features & Services</h1>
        <hr>
        <div class="services-container">

            <div class="service-card">
                <img src="images/web.svg" alt="Web Development">
                <h3>Web Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi nemo.</p>
            </div>

            <div class="service-card">
                <img src="images/app.svg" alt="App Development">
                <h3>App Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi nemo.</p>
            </div>

            <div class="service-card">
                <img src="images/dm.svg" alt="Digital Marketing">
                <h3>Digital Marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi nemo.</p>
            </div>

            <div class="service-card">
                <img src="images/seo.svg" alt="Email Marketing">
                <h3>Email Marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi nemo.</p>
            </div>

        </div>
    </section>
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