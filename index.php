<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/dasdezine.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>


  <script>
    $(document).ready(function () {
    $(window).scroll(function () {
      // sticky navbar on scroll script
      if (this.scrollY > 50) {
        $(".navbar").addClass("sticky");
      } else {
        $(".navbar").removeClass("sticky");
      }
  
      // scroll-up button show/hide script
      if (this.scrollY > 1600) {
        $(".scroll-up-btn").addClass("show");
      } else {
        $(".scroll-up-btn").removeClass("show");
      }
    });
  
    // slide-up script
    $(".scroll-up-btn").click(function () {
      $("html").animate({ scrollTop: 0 });
      // removing smooth scroll on slide-up button click
      $("html").css("scrollBehavior", "auto");
    });
  
    $(".navbar .menu li a").click(function () {
      // applying again smooth scroll on menu items click
      $("html").css("scrollBehavior", "smooth");
    });
  
    // toggle menu/navbar script
    $(".menu-btn").click(function () {
      $(".navbar .menu").toggleClass("active");
      $(".menu-btn i").toggleClass("active");
    });
  
    // typing text animation script
    var typed = new Typed(".typing", {
      strings: [
        "BSIT Student",
        "Full Stack Developer",
        "Lifelong Learner",
        "Web Designer",
        "Freelancer"
      ],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true
    });
  
    var typed = new Typed(".typing-2", {
      strings: [
        "BSIT Student",
        "Full Stack Developer",
        "Lifelong Learner",
        "Web Designer",
        "Freelancer"
      ],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true
    });
  
    // owl carousel script
    $(".carousel").owlCarousel({
      margin: 20,
      loop: true,
      autoplayTimeOut: 2000,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        600: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    });
  });
  
  </script>
  <title>Document</title>
</head>
<body>
<div class="scroll-up-btn">
  <i class="fas fa-angle-up"></i>
</div>
<nav class="navbar">
  <div class="max-width">
    <div class="logo"><a href="#">ZenDev</a></div>
    <ul class="menu">
      <li><a href="#home" class="menu-btn">Home</a></li>
      <li><a href="#about" class="menu-btn">About</a></li>
      <li><a href="#services" class="menu-btn">Services</a></li>
      <li><a href="#skills" class="menu-btn">Skills</a></li>
      <li><a href="#contact" class="menu-btn">Contact</a></li>
    </ul>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
  </div>
</nav>

<!-- HOME SECTION -->
<section class="home" id="home">
  <div class="max-width">
    <div class="home-content">
      <div class="text-1">Hello, my name is</div>
      <div class="text-2"><span>K</span>yzen <span>C</span>ampos</div>
      <div class="text-3">And I'm a <span class="typing"></span></div>
      <a href="https://github.com/zennnnn15" target="_blank"><i class="fab fa-github"></i> Github</a>
    </div>
  </div>
</section>

<!-- ABOUT SECTION -->
<section class="about" id="about">
  <div class="max-width">
    <h2 class="title">About me</h2>
    <div class="about-content">
      <div class="column left">
        <img src="https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/335139857_759657652183733_4685370133813440478_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGLanVDS2f2OU9Qn0V88J55dQHtzk99z311Ae3OT33PfQC3WfrpQpXNW0wiE1iYilGMjII_kMoQ_LzdL_DnpxMT&_nc_ohc=VnK8HE3fKRwAX-kfbhS&_nc_ht=scontent.fmnl3-4.fna&oh=00_AfCUzUkdpgmsYAP5Z4kEzl3YpP2isZsR-LxSHRQjCQAdKQ&oe=641BFDFF" alt="" />
      </div>
      <div class="column right">
        <div class="text">
          I am Kyzen and I'm a <span class="typing-2"></span>
        </div>
        <p>
         Studiying Bachelor of Science and Information Technology at Pangasinan State Univerity.
        </p>
        <a href="#" target="_blank">Download Resume</a>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE SECTION -->
<section class="services" id="services">
  <div class="max-width">
    <h2 class="title">My services</h2>
    <div class="serv-content">
      <div class="card">
        <div class="box">
          <i class="fas fa-code"></i>
          <div class="text">Web Development</div>
          <img style="width: 200px;" src="weblogo.png" alt="">
          <p>
            Using Front-End libraries, I build fast, interactive websites. I
            use Node JS, Laravel and React at backend side.
          </p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <i class="fas fa-industry"></i>
          <div class="text">Design Prototyping</div>
          <img style="width: 250px;" src="des.png" alt="">
          <p>
            I have a knowledge in creating working prototypes via Figma and Adobe Photoshop.
          </p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <i class="fas fa-chart-bar"></i>
          <div class="text">Andriod Development</div>
          <img style="width: 250px;" src="flu.png" alt="">
          <p>
            I am currently studying Andriod Development via Google Flutter.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS SECTION -->
<section class="skills" id="skills">
  <div class="max-width">
    <h2 class="title">My skills</h2>
    <div class="skills-content">
      <div class="column left">
        <div class="text">My skills & experiences.</div>
        <p>
          I am currently studying Bachelor of Science in Information Technology at Pangasinan State University Urdaneta Campus.
        </p>
        <a href="https://www.linkedin.com/in/kyzen-campos-5b06b2260/" target="_blank">LinkedIn<i class="fab fa-free-code-camp"></i></a>
      </div>
      <div class="column right">
        <div class="bars">
          <div class="info">
            <span>JavaScript</span>
            <span>40%</span>
          </div>
          <div class="line html"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>Front-End Development</span>
            <span>60%</span>
          </div>
          <div class="line css"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>Back-End Development</span>
            <span>60%</span>
          </div>
          <div class="line js"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>Database</span>
            <span>50%</span>
          </div>
          <div class="line php"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>Prototyping</span>
            <span>65%</span>
          </div>
          <div class="line mysql"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAMS SECTION -->
<section class="teams" id="teams">
  <div class="max-width">
    <h2 class="title">My Projects</h2>
    <div class="carousel owl-carousel">
      <div class="card">
        <div class="box">
          <img src="1.png" alt="" />
          <div class="text">Gym Management System</div>
          <p>a simple system that can track Gym Members, Gym Equipments and Trainers</p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img src="2.png" alt="" />
          <div class="text">iTeachCode</div>
          <p>a system the features forum, messaging, tutoring programming language via subscription.  </p>
        </div>
      </div>
      <div class="card">
        <div class="box">
          <img style="height: 700px;" src="3.png" alt="" />
          <div class="text">uConvert</div>
          <p>a unit converter app running in Andriod.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact" id="contact">
  <div class="max-width">
    <h2 class="title">Contact me</h2>
    <div class="contact-content">
      <div class="column left">
        <div class="text">Don't be shy</div>
        <p>
          Feel free to get in touch with me. I am always open to discussing
          new projects, creative ideas or opportunities to be part of your
          visions.
        </p>
        <div class="icons">
          <div class="row">
            <i class="fas fa-user"></i>
            <div class="info">
              <div class="head">Name</div>
              <div class="sub-title">Kyzen Campos</div>
            </div>
          </div>
          <div class="row">
            <i class="fas fa-map-marker-alt"></i>
            <div class="info">
              <div class="head">Address</div>
              <div class="sub-title">Cato, Infanta, Pangasinan</div>
            </div>
          </div>
          <div class="row">
            <i class="fas fa-envelope"></i>
            <div class="info">
              <div class="head">Email</div>
              <div class="sub-title">kyzen15@icloud.com</div>
            </div>
          </div>
        </div>
      </div>
      <div class="column right">
        <div class="text">Message me</div>
        <form action="#">
          <div class="fields">
            <div class="field name">
              <input type="text" placeholder="Name" required />
            </div>
            <div class="field email">
              <input type="email" placeholder="Email" required />
            </div>
          </div>
          <div class="field">
            <input type="text" placeholder="Subject" required />
          </div>
          <div class="field textarea">
            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
          </div>
          <div class="button-area">
            <button type="submit">Send message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER SECTION -->
<footer>
  <span>Created By
    <a href="#" target="_blank"><span class="fab fa-github"></span> Kyzen Campos</a>
    | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
</footer>


  
</body>
</html>