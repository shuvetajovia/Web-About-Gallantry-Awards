<?php
// author.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Author - Gallantry Awards of India</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fefaf1;
      font-family: 'Segoe UI', sans-serif;
    }
    .author-section {
      max-width: 900px;
      margin: 50px auto;
      padding: 40px;
      background-color: #fff7e6;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .carousel-inner img {
      width: 100%;
      height: 400px;
      object-fit: cover;
      border-radius: 10px;
    }
    .skills, .projects, .interests {
      margin-top: 30px;
    }
    .skills ul, .projects ul, .interests ul {
      list-style-type: square;
      padding-left: 20px;
    }
    .quote {
      font-style: italic;
      margin-top: 25px;
      padding: 15px;
      background-color: #f9e9d2;
      border-left: 5px solid #a87c4f;
      border-radius: 8px;
    }
    footer {
      background-color: #deb887;
      color: #4b2e2e;
      padding: 15px;
      text-align: center;
      margin-top: 40px;
    }
    .contact-links a {
      text-decoration: none;
      color: #4b2e2e;
      margin-right: 15px;
    }
  </style>
</head>
<body>

<div class="author-section">
  <h2 class="text-center text-dark mb-4">🖋️ Web Author</h2>
  <p>
    Hello! I'm <strong>A Shuveta Jovi</strong>, the creator of this website dedicated to India's Gallantry Awards. As a tech enthusiast and student passionate about history and coding, I created this project to spread awareness about our nation’s decorated heroes.
  </p>
  <p>
    My aim through this platform is to help everyone recognize the true spirit of patriotism by learning about the lives of those who have shown immense bravery. I combined my interest in web development with my deep respect for our armed forces to build a platform that's both informative and inspiring.
  </p>
  <p>
    Every image, line, and layout here is a result of dedication toward presenting facts in a user-friendly way using HTML, CSS, PHP, and Bootstrap.
  </p>

  <div class="skills">
    <h4>🛠️ Technical Skills</h4>
    <ul>
      <li><strong>Programming Languages:</strong> Python, C, JavaScript</li>
      <li><strong>Web Development:</strong> HTML, CSS, Bootstrap, WordPress</li>
      <li><strong>Tools:</strong> Excel, VS Code, Git, Canva</li>
      <li><strong>Areas of Interest:</strong> Frontend UI Design, Data Structures, OS Concepts</li>
    </ul>
  </div>

  <div class="projects">
    <h4>📁 Ongoing Projects</h4>
    <ul>
      <li><strong>Gallantry Awards Web Project:</strong> Developed a responsive HTML-based tribute platform highlighting India’s brave awardees.</li>
      <li><strong>Temperature-Controlled Fan using DHT11:</strong> IoT project using sensors and microcontrollers for environmental automation.</li>
    </ul>
  </div>

  <div class="interests">
    <h4>🎯 Academic Focus & Professional Interests</h4>
    <p>Currently focusing on mastering Data Structures, Computer Architecture, and backend integration techniques. Keen interest in clean code, UI/UX design, and building accessible web tools.</p>
    <ul>
      <li>Cybersecurity basics</li>
      <li>Indian Defence Technology</li>
      <li>Government policy digitalization</li>
      <li>Tech and history-based storytelling</li>
    </ul>
  </div>

  <div class="quote">
    <p>“Code with clarity. Build with purpose. Learn relentlessly.”</p>
  </div>

  <div class="contact-links mt-4">
    <h5>🔗 Let's Connect</h5>
    <a href="https://github.com/" target="_blank">GitHub</a>
    <a href="https://linkedin.com/" target="_blank">LinkedIn</a>
    <a href="mailto:your.email@example.com">Email</a>
  </div>

  <div id="authorCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="placeholder2.jpeg" class="d-block w-100" alt="Author Image 1">
      </div>
      <div class="carousel-item">
        <img src="placeholder1.jpeg" class="d-block w-100" alt="Author Image 2">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#authorCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#authorCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>

<footer>
  <p>&copy; 2025 | Designed by A Shuveta Jovi | Gallantry Awards of India</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
