<?php

@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome User to my Portfolio</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <a href="#" class="logo">Portfolio</a>

      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
      </nav>
    </header>
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, I am</h3>
        <h1>Mayank Soni</h1>
        <h3>And I am a <span>Software Developer</span></h3>
        <p>
          Currently I'm a college student in my final year. My major is Computer Science and
          my current cgpa is 8.57.
        </p>
        <div class="social-media">
          <a href="#"><i class="bx bxl-linkedin"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-github"></i></a>
        </div>
        <a href="#" class="btn">Download CV</a>
      </div>
      <div class="home-img">
        <img src="Images/home-animated1.png" alt="" style="width: 400px" />
      </div>
    </section>
    <section class="about-section" id="about">
      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Software Developer</h3>
        <p>
          I have an excellent academic record with sound knowledge of core concepts of
          Computer Science. I am a continuous learner with the ability to understand and build software.
          I have worked on projects using C++, Python, MySQL, Sqlite3 and the list goes on, currently I'm learning Web Development.<br>
          On an average I can type 85-90 wpm.
          I believe in learning and progressive success.
        </p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>
    <section class="skills-section" id="skills">
      <h2 class="heading1">Skills</h2>
      <div class="skills">
        <div class="skill-content">
          <i class='bx bxl-python'></i>
          <h2>Python</h2>
        </div>
        <div class="skill-content">
          <i class='bx bxl-c-plus-plus' ></i>
          <h2>C/C++</h2>
        </div>
        <div class="skill-content">
          <i class='bx bxl-html5' ></i>
          <h2>HTML5</h2>
        </div>
        <div class="skill-content">
          <i class='bx bxl-css3' ></i>
          <h2>CSS3</h2>
        </div>
        <div class="skill-content">
          <i class='bx bxl-javascript' ></i>
          <h2>JavaScript</h2>
        </div>
        <div class="skill-content">
          <i class='bx bxs-data' ></i>
          <h2>MySQL</h2>
        </div>
        <div class="skill-content">
          <i class='bx bx-desktop'></i>
          <h2>Core-CS</h2>
        </div>
      </div>
    </section>
    <section class="projects" id="projects">

      <h2 class="heading">Latest <span>Projects</span></h2>

      <div class="project-container">
        <div class="project-box">
          <img src="Images/img1.jpg" alt="">
          <div class="project-layer">
            <h4>Online Book Store</h4>
            <p>An interactive online book store design.</p>
            <a href="#"><i class='bx bx-link-alt' ></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="Images/img2.jpg" alt="">
          <div class="project-layer">
            <h4>Discord Bot</h4>
            <p>Discord bots are AI-driven toolsthat help you automate tasks on your discordserver. Theymake a lot easier to
              welcome new usersandcontrol your content within the server.</p>
            <a href="#"><i class='bx bx-link-alt' ></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="Images/img3.jpg" alt="">
          <div class="project-layer">
            <h4>Facial Recognition Attendance System</h4>
            <p>The Software is designed for deploying an easy and a secure of taking down attendance.</p>
            <a href="#"><i class='bx bx-link-alt' ></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="Images/img4.jpg" alt="">
          <div class="project-layer">
            <h4>Dictionary</h4>
            <p>An interactive Dictionary using Python, which can autocorrect words and give suggestions.</p>
            <a href="#"><i class='bx bx-link-alt' ></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="Images/img5.jpg" alt="">
          <div class="project-layer">
            <h4>Landing Page</h4>
            <p>An simple landing page i.e used airplane image.</p>
            <a href="#"><i class='bx bx-link-alt' ></i></a>
          </div>
        </div>
        <div class="project-box">
          <img src="Images/img6.jpg" alt="">
          <div class="project-layer">
            <h4>Calculator</h4>
            <p>An interactive Calculator using Python.</p>
            <a href="#"><i class='bx bx-link-alt' ></i></a>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="footer-text">
        <p>Designed by <span><i class='bx bxs-cool' ></i></span> Mayank Soni</p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
      </div>
    </footer>
  </body>
</html>
