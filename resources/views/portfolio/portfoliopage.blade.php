<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIWxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/portfolio.css">

    <title>Arpita Kundu Portfolio</title>
</head>

<body>

<nav class="navbar">

    <a href="#home" class="logo">
        Arpita Kundu
    </a>

    <button class="menu-toggle" aria-label="Open navigation menu">
        <i class="fa-solid fa-bars"></i>
    </button>

    <ul class="nav-links">

        <li><a href="#home">Home</a></li>

        <li><a href="#about">About</a></li>

        <li><a href="#skills">Skills</a></li>

        <li class="dropdown">

            <button class="dropdown-toggle">

                Projects

                <i class="fa-solid fa-chevron-down"></i>

            </button>

            <ul class="dropdown-menu">

                <li>
                    <a href="{{ route('library_management') }}">
                        Library Management System
                    </a>
                </li>

                <li>
                    <a href="{{ route('project2.calculator') }}">
                        Calculator
                    </a>
                </li>

                

            </ul>

        </li>

        <li><a href="#contact">Contact</a></li>

    </ul>

</nav>


<main>

    <!-- HERO -->

    <section id="home" class="hero">

        <div class="hero-content">

            <p class="eyebrow">
                Portfolio
            </p>

            <h1>
                Aspiring PHP & Laravel Developer
            </h1>

            <p>
                Building responsive and user-friendly web applications using Laravel, PHP,
                MySQL, HTML5, CSS3, Bootstrap, and JavaScript.
            </p>

            <p class="highlight">
                Passionate about creating practical web solutions while continuously
                improving my development skills.
            </p>

            <a href="#contact" class="cta-button">
                Let's Connect
            </a>

        </div>

        <div class="hero-image">

            <img
                src="/images/Profilepic.png"
                alt="Arpita Kundu"
                class="profile-img">

        </div>

    </section>


    <!-- ABOUT -->

    <section id="about" class="about">

        <div class="section-heading">

            <p class="eyebrow">
                About
            </p>

            <h2>
                Building responsive and database-driven web applications.
            </h2>

        </div>

        <p>

            I build responsive web applications using Laravel, PHP, MySQL,
            HTML5, CSS3, Bootstrap, and JavaScript. My work focuses on
            clean interfaces, CRUD operations, database management, and
            practical solutions. I also have basic knowledge of Figma,
            Adobe Photoshop, and Adobe Lightroom, helping me understand
            UI design principles while continuously expanding my skills
            as a web developer.

        </p>

    </section>


    <!-- SKILLS -->

    <section id="skills" class="skills">

        <h2>
            Technical Skills
        </h2>

        <div class="skills-grid">

            <div class="skill-card">

                <i class="fas fa-code"></i>

                <h3>
                    Frontend Development
                </h3>

                <p>
                    HTML5, CSS3, Bootstrap,
                    JavaScript, Responsive
                    Web Design
                </p>

            </div>

            <div class="skill-card">

                <i class="fas fa-server"></i>

                <h3>
                    Backend Development
                </h3>

                <p>
                    PHP, Laravel,
                    Routing, Blade Templates,
                    Form Handling,
                    Basic MVC Architecture
                </p>

            </div>

            <div class="skill-card">

                <i class="fas fa-database"></i>

                <h3>
                    Database Management
                </h3>

                <p>
                    MySQL,
                    PhpMyAdmin,
                    CRUD Operations,
                    Database Design
                </p>

            </div>

            <div class="skill-card">

                <i class="fas fa-palette"></i>

                <h3>
                    Design Tools
                </h3>

                <p>
                    Basic knowledge of
                    Figma,
                    Adobe Photoshop,
                    Adobe Lightroom
                </p>

            </div>

        </div>

    </section>


    <!-- PROJECTS -->

    <section id="projects" class="projects">

        <div class="section-heading">

            <p class="eyebrow">
                Featured Work
            </p>

            <h2>
                Main Projects
            </h2>

        </div>

        <div class="projects-grid">

            <a href="{{ route('library_management') }}" class="project-card">

                <div class="project-icon">
                    <i class="fa-solid fa-book"> 📚</i>
                </div>

                <h3>
                    Library Management System
                </h3>

                <p>
                    A full-featured Library Management System built with Laravel, featuring PHP, MySQL, CRUD operations, user authentication, and MVC architecture. The application enables efficient management of books, members, categories, and book issue/return records through a clean and responsive interface.
                </p>

                <p class="project-meta">
                    Laravel • PHP • MySQL • CRUD
                </p>

            </a>


            <a href="{{ route('project2.calculator') }}" class="project-card">

                <div class="project-icon">
                    <i class="fa-solid fa-calculator"> 🧮 </i>
                </div>

                <h3>
                    Calculator
                </h3>

                <p>

                    A responsive web application featuring a standard
                    calculator and an age calculator with real-time
                    calculations.

                </p>

                <p class="project-meta">
                    HTML • CSS • JavaScript
                </p>

            </a>




        </div>

    </section>


    <!-- CONTACT -->

    <section id="contact" class="contact">

        <div>

            <p class="eyebrow">
                Contact
            </p>

            <h2>
                Let's build something useful.
            </h2>

        </div>

        <div class="contact-actions">

            <a href="mailto:kunduarpita003@gmail.com" class="cta-button">
                Email Me
            </a>

            <a href="https://github.com/" class="social-button">

                <i class="fab fa-github"></i>

            </a>

            <a href="https://linkedin.com/" class="social-button">

                <i class="fab fa-linkedin-in"></i>

            </a>

        </div>

    </section>

</main>


<footer>

    <p>
        &copy; 2026 Arpita Kundu. All rights reserved.
    </p>

</footer>

<script src="/js/portfolio.js"></script>

</body>
</html>