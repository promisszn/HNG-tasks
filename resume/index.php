<?php
  require('config/Database.php');
  require('validator/validator.php');

  if(isset($_POST['submit'])){
    // validate entries
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();
    
  }

  // Insert data into DB
  if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    if ($_POST['first'] !== '' && $_POST['last'] !== '' && $_POST['email'] != '' && $_POST['message'] != '') {
      $sql = 'INSERT INTO user(firstname, lastname, email, phone, message) VALUES(:first, :last, :email, :phone, :message)';
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['first' => $first, 'last' => $last, 'email' => $email, 'phone' => $phone, 'message' => $message]);
      function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
      }
      phpAlert(   "Thank you for contacting us\\n\\nYou will receive a response shortly"   );
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>MY RESUME</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--========== BOX ICONS ==========-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!--========== CSS ==========-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
</head>

<body>
  <!--========== HEADER ==========-->
  <header class="l-header" id="header">
    <nav class="nav bd-container">
      <a href="#" class="nav__logo">Promise</a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">
              <i class="bx bx-home nav__icon"></i>Home
            </a>
          </li>
          <li class="nav__item">
            <a href="#profile" class="nav__link">
              <i class="bx bx-user nav__icon"></i>Profile
            </a>
          </li>
          <li class="nav__item">
            <a href="#education" class="nav__link">
              <i class="bx bx-book nav__icon"></i>Education
            </a>
          </li>
          <li class="nav__item">
            <a href="#skills" class="nav__link">
              <i class="bx bx-receipt nav__icon"></i>Skills
            </a>
          </li>
          <li class="nav__item">
            <a href="#experience" class="nav__link">
              <i class="bx bx-briefcase-alt nav__icon"></i>Experience
            </a>
          </li>
          <li class="nav__item">
            <a href="#certificates" class="nav__link">
              <i class="bx bx-award nav__icon"></i>Projects
            </a>
          </li>
          <li class="nav__item">
            <a href="#references" class="nav__link">
              <i class="bx bx-link-external nav__icon"></i>Contact
            </a>
          </li>
        </ul>
      </div>

      <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-grid-alt"></i>
      </div>
    </nav>
  </header>

  <main class="l-main bd-container">
    <div class="resume" id="area-cv">
      <div class="resume__left">
        <!--========== HOME ==========-->
        <section class="home" id="home">
          <div class="home__container section bd-grid">
            <div class="home__data bd-grid">
              <img src="assets/img/hng.png" alt="" class="home__img">

              <h1 class="home__title">PROMISE <b>OLAYINKA</b></h1>
              <h3 class="home__profession">Web developer</h3>
            </div>

            <div class="home__address bd-grid">
              <span class="home__information">
                <i class="bx bx-map home__icon"></i> Lagos, Nigeria
              </span>
              <span class="home__information">
                <i class="bx bx-envelope home__icon"></i> olayinkapromise80@gmail.com
              </span>
              <span class="home__information">
                <i class="bx bx-phone home__icon"></i> 08079529279
              </span>
            </div>
          </div>

          <!-- Theme change button -->
          <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>
        </section>

        <!--========== SOCIAL ==========-->
        <section class="social section">
          <h2 class="section-title">SOCIAL</h2>

          <div class="social__container bd-grid">
            <a href="#" target="_blank" class="social__link">
              <i class="bx bxl-linkedin-square social__icon"></i> @promiseola
            </a>
            <a href="#" target="_blank" class="social__link">
              <i class="bx bxl-facebook social__icon"></i> Olayinka
            </a>
            <a href="#" target="_blank" class="social__link">
              <i class="bx bxl-instagram social__icon"></i> @promisszn
            </a>
          </div>
        </section>

        <!--========== PROFILE ==========-->
        <section class="profile section" id="profile">
          <h2 class="section-title">Profile</h2>

          <p class="profile_description">I am a multi-talented logical thinker of solutions. I am very inspired to learn
            and I have a very good understanding of many technical subjects. I am an avid open source developer. I love to be creative and inventive.</p>
        </section>

        <!--========== EDUCATION ==========-->
        <section class="education section" id="education">
          <h2 class="section-title">Education</h2>

          <div class="education__container bd-grid">
            <div class="education__content">
              <div class="education__time">
                <span class="education__rounder"></span>
                <span class="education__line"></span>
              </div>

              <div class="education__data bd-grid">
                <h3 class="education__title">Bsc. Surveying and Geoinformatics</h3>
                <span class="education__studies">University of Lagos</span>
                <span class="eduation__year">09/2018 - Present</span>
              </div>
            </div>

            <div class="education__content">
              <div class="education__time">
                <span class="education__rounder"></span>
                <span class="education__line"></span>
              </div>

              <div class="education__data bd-grid">
                <h3 class="education__title">Web Development Masterclass-Complete Certification Course</h3>
                <span class="education__studies">YouAccel via Udemy Online Learning Platform</span>
                <span class="eduation__year">07/2021 - 08/2021</span>
              </div>
            </div>

            <div class="education__content">
              <div class="education__time">
                <span class="education__rounder"></span>
                <!-- <span class="education__line"></span> -->
              </div>

              <div class="education__data bd-grid">
                <h3 class="education__title">Git and Github</h3>
                <span class="education__studies">Udemy Online learning Platform</span>
                <span class="eduation__year">07/2021-08/2021</span>
              </div>
            </div>
          </div>
        </section>


        <!--========== SKILLS  ==========-->
        <section class="skills section" id="skills">
          <h2 class="section-title">Programming Skills</h2>

          <div class="skills__content bd-grid">
            <ul class="skills__data">
              <li class="skills__name">
                <span class="skills__circle"></span> Html
              </li>
              <li class="skills__name">
                <span class="skills__circle"></span> Css
              </li>
              <li class="skills__name">
                <span class="skills__circle"></span> Javascript
              </li>
              <li class="skills__name">
                <span class="skills__circle"></span> Version Control(Git & Github)
              </li>
            </ul>

            <ul class="skills__data">
              <li class="skills__name">
                <span class="skills__circle"></span> Php
              </li>
              <li class="skills__name">
                <span class="skills__circle"></span> Laravel
              </li>
              <li class="skills__name">
                <span class="skills__circle"></span> SQL
              </li>
            </ul>
          </div>
        </section>

      </div>

      <div class="resume__right">
        <!--========== EXPERIENCE ==========-->
        <section class="experience section" id="experience">
          <h2 class="section-title">Experience</h2>

          <div class="experience__container bd-grid">
            <div class="experience__content">
              <div class="experience__time">
                <span class="experience__rounder"></span>
                <span class="experience__line"></span>
              </div>

              <div class="experience__data bd-grid">
                <h3 class="experience__title">INTERN</h3>
                <span class="experience__company">08/2021 - Present | HNG INTERNSHIP</span>
                <p class="experience__description"></p>
              </div>
            </div>

            <div class="experience__content">
              <div class="experience__time">
                <span class="experience__rounder"></span>
                <!-- <span class="experience__line"></span> -->
              </div>

              <div class="experience__data bd-grid">
                <h3 class="experience__title">INTERN</h3>
                <span class="experience__company">05/2021 -  08/2021 | Side Hustle</span>
                <p class="experience__description">Completed all tasks given successfully and also built basic functional applications and troubleshooted and solved complex problems and also designed and implemented database storage solutions to store user data. Finishing the backend track with perfect scores also recieving a certificate of completion of the internship</p>
              </div>
            </div>
          </div>
        </section>

        <!--========== CERTIFICATES ==========-->
        <section class="certificate section" id="certificates">
          <h2 class="section-title">Projects</h2>

          <div class="certificate__container bd-grid">
            <div class="certificate__content">
              <h3 class="certificate__title">Todo List</h3>
              <p class="certificate__description">Created a todo list program that user's data using SQL and allows user to create, update and delete entries</p>
              <a href="http://to-d-app.herokuapp.com/" target="_blank" class="social__link">
                <i class='bx bx-link bx-md' ></i> to-d-app.herokuapp.com
              </a>
            </div>

            <div class="certificate__content">
              <h3 class="certificate__title">Online store</h3>
              <p class="certificate__description">Built a market place program that uses mySQL to store user’s data and allows user to login add products and delete products and also view other users products</p>
              <a href="https://mag-shop.herokuapp.com/" target="_blank" class="social__link">
                <i class='bx bx-link bx-md' ></i> mag-shop.herokuapp.com
              </a>
            </div>
          </div>
        </section>

        <!--========== References ==========-->
        <section class="references section" id="references">
          <h2 class="section-title cen">Contact Me</h2>

          <div class="references__container bd-grid">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" class="bd-grid">
              <div class="reference__content bd-grid">
                <i class='bx bxs-contact bx-md'></i><?php echo $errors['first']?? '' ?>
                <input class="" name="first" type="text" placeholder="First Name">
              </div>
              <div class="reference__content bd-grid">
                <i class='bx bxs-contact bx-md'></i><?php echo $errors['last']?? '' ?>
                <input class="" name="last" type="text" placeholder="Last Name">
              </div>
              <div class="reference__content bd-grid">
                <i class='bx bx-mail-send bx-md'></i><?php echo $errors['email']?? '' ?>
                <input class="" name="email" type="text" placeholder="Email">
              </div>
              <div class="reference__content bd-grid">
                <i class="bx bx-phone bx-md"></i><?php echo $errors['phone']?? '' ?>
                <input class="" name="phone" type="text" placeholder="Phone">
              </div>
              <div class="reference__content bd-grid">
                <i class='bx bxs-message bx-md'></i><?php echo $errors['message']?? '' ?>
                <textarea class="" cols="30" rows="10" name="message" type="text" placeholder="Please enter your message here"></textarea>
              </div>
              <button class="home__button-mobile" name="submit">Send</button>
            </form>
          </div>
        </section>

        <!--========== LANGUAGES ==========-->
        <section class="languages section">

        </section>

        <!--========== INTERESTS ==========-->
        <section class="interests section">

        </section>
      </div>
    </div>
  </main>

  <!--========== SCROLL TOP ==========-->
  <a href="#" class="scrolltop" id="scroll-top">
    <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
  </a>

  <!--========== HTML2PDF ==========-->
  <script src="assets/js/html2pdf.bundle.min.js"></script>

  <!--========== MAIN JS ==========-->
  <script src="assets/js/main.js"></script>
</body>

</html>