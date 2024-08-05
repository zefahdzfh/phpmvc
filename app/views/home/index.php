

<div class="main-container">
    <div class="sidebar">
        <h4>Navigation</h4>
        <a href="#about-me">About Me</a>
        <a href="#projects">Projects</a>
        <a href="#contact-me">Contact</a>
    </div>



    <div class="content">
        <div class="jumbotron">
            <h1 class="display-4">Welcome</h1>
            <p class="lead">Halo nama saya <?= $data ['nama']; ?></p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    
        <div id="about-me" class="section">
            <h1 class="section-title">About Me</h1>
            <p>Hi there! I’m Zefa, a passionate web developer with a knack for creating dynamic and engaging websites. With a background in computer science and years of experience in front-end and back-end development, I am dedicated to building user-friendly and high-performance web applications. I thrive on solving complex problems and constantly strive to enhance my skills to stay ahead in this ever-evolving tech landscape.</p>
            <p>When I’m not coding, I love exploring new technologies, participating in hackathons, and contributing to open-source projects. Feel free to reach out if you’d like to collaborate on a project or just want to chat about tech!</p>
        </div>

        <div id="projects" class="section">
            <h1 class="section-title">Projects</h1>
            <p>Here are a few of the projects I’ve worked on recently:</p>

            <div class="card-container">
                <div class="card-wrapper">
                    <div class="card">
                        <img src="assets/img/porto.png" alt="Project 1" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="card-text">
                        <h4>Portfolio Website</h4>
                        <p>A personal portfolio website showcasing my skills, projects, and contact information. Built with HTML, CSS, and JavaScript, this site highlights my development journey and achievements.</p>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="assets/img/ecom2.png" alt="Project 2" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="card-text">
                        <h4>E-commerce Platform</h4>
                        <p>Developed an e-commerce platform with features like user authentication, product management, and payment integration. This project utilized React and Node.js to create a seamless shopping experience.</p>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="assets/img/ecom.png" alt="Project 3" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="card-text">
                        <h4>E-commerce Mobile Application</h4>
                        <p>The further projects of an e-commerce platform with features like user authentication, product management, and payment integration. This project utilized React and Node.js to create a seamless shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact-me" class="section">
            <h1 class="section-title">Contact Me</h1>
            <p>If you’d like to get in touch with me, feel free to reach out through the following channels:</p>
            <p>Email: zefa@example.com</p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/zefa" target="_blank">linkedin.com/in/zefa</a></p>
            <p>GitHub: <a href="https://github.com/zefa" target="_blank">github.com/zefa</a></p>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 ZefaFolio. All rights reserved.</p>
</footer>
