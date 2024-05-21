<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>My Portfolio</title>
  </head>
  <body>
    <nav>
      <div class="nav__content">
        <div class="logo"><a href="#">Portfolio</a></div>
        <label for="check" class="checkbox">
          <i class="ri-menu-line"></i>
        </label>
        <input type="checkbox" name="check" id="check" />
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="resume.php">Resume</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
    <section class="section">
      <div class="section__container">
        <div class="content">
          <p class="subtitle">HELLO</p>
          <h1 class="title">
            I'm <span>James Ezra<br />a</span> <span class="course">IT Student</span>
          </h1>
          <p class="description">
            Welcome to my project portfolio! I'm James Ezra Ogocierda, a third year
            IT student from Southern Mindanao Colleges, Pagadian City,
            this is my responsive project and user-friendly portfolio website. This is only for educational 
            purposes, I hope you enjoy.
          </p>
          <div class="action__btns">
            <a href="contact.php" class="hire__me">Contact Me</a>
            <a href="#project" class="projects">Projects</a>
          </div>
        </div>
        <div class="image">
          <img src="img/2.jpg" alt="profile">
        </div>
      </div>
    </section>

    <section class="section__project__container project__container" id="project">
      <h2 class="section__header">My Previous Projects</h2>
      <p class="section__description">
        Explore a showcase of my diverse projects, demonstrating my skills in
        web development, design, and beyond. Each project reflects my passion
        for creating impactful and innovative digital experiences.
      </p>
      <div class="project__grid">
        <div class="project__card">
          <img src="img/project-1.jpg" alt="project">
        </div>
        <div class="project__card">
          <img src="img/project-1.jpg" alt="project">
        </div>
        <div class="project__card">
          <img src="img/project-1.jpg" alt="project">
        </div>
        <div class="project__card">
          <img src="img/project-1.jpg" alt="project">
        </div>
        <div class="project__card">
          <img src="img/project-1.jpg" alt="project">
        </div>
        <div class="project__card">
          <img src="img/project-1.jpg" alt="project">
        </div>
      </div>
    </section>

    <section class="section__footer__container contact__container" id="contact">
      <div class="footer__logo">  </div>
      <h2 class="section__header">Get In Touch With Me!</h2>
      <p class="section__description">
        An open invitation to connect, and exploring collaborative opportunities
        on my personal portfolio website.
      </p>
      <div class="contact__socials">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-mail-fill"></i></a>
        <a href="#"><i class="ri-tiktok-fill"></i></a>
        <a href="#"><i class="ri-youtube-line"></i></a>
        <a href="#"><i class="ri-codepen-line"></i></a>
      </div>
    </section>
  </body>
</html>