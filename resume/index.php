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
<html>
<title>MY RESUME</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="./assets/hng.png" style="width:100%" alt="HNG">
          <div class="w3-display-bottomleft w3-container w3-text-white">
            <h2>OLAYINKA PROMISE</h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Software Developer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Lagos, Nigeria</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>olayinkapromise80@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>08079529279</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Programming Skills</b></p>
          <p>PHP</p>
          <p>Laravel</p>
          <p>HTML, CSS, JavaScript</p>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Projects</b></p>
          <p>A simple todo list app</p>
          <div class="w3-light-grey w3-square-xlarge">
            <a href="http://to-d-app.herokuapp.com/" target="_blank">Link here</a>
          </div>
          <p>A simple webstore where users login and add products</p>
          <div class="w3-light-grey w3-square-xlarge">
          <a href="https://mag-shop.herokuapp.com/" target="_blank">Link here</a>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Intern(Backend Track)/HNG INTERNSHIPS</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2021 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Intern(Backend Track)/ SIDE HUSTLE NG</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>May 2021 - Aug 2021</h6>
          <p><ul>
            <li>Completed all tasks given successfully</li>
            <li>Built a simple todo list app</li>
            <li>Created a web store where user can login and add products</li>
          </ul></p>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>University of Lagos</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2018 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Bsc. Surveying and Geoinformatics</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>YouAccel via Udemy Online Learning Platform</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2021 - Aug 2021</h6>
          <p>Web Development Masterclass-Complete Certification Course</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
 
  <div class="w3-row">
  <div class="w3-col">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="w3-container w3-card-4 w3-light-grey w3-text-teal w3-margin w3-padding-16 w3-center" method="POST">
      <h2 class="w3-center">Contact Me</h2>

      <div class="w3-col" style="width:20%;">.</div>
      <div class="w3-col" style="width:80%;">
      <div class="w3-row w3-sectiom w3-padding">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <span class="error"><?php echo $errors['first']?? '' ?></span>
          <div class="w3-twothird">
            <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
          </div>
      </div>

      <div class="w3-row w3-section w3-padding">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <span class="error"><?php echo $errors['last']?? '' ?></span>
        <div class="w3-twothird">
            <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
          </div>
      </div>

      <div class="w3-row w3-section w3-padding">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
        <span class="error"><?php echo $errors['email']?? '' ?></span>
        <div class="w3-twothird">
            <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
          </div>
      </div>

      <div class="w3-row w3-section w3-padding">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
        <span class="error"><?php echo $errors['phone']?? '' ?></span>
        <div class="w3-twothird">
            <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
          </div>
      </div>

      <div class="w3-row w3-section w3-padding">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
        <span class="error"><?php echo $errors['message']?? '' ?></span>
        <div class="w3-twothird">
            <textarea class="w3-input w3-border" cols="30" rows="10" name="message" type="text" placeholder="Please enter your message here"></textarea>
          </div>
      </div>
      </div>
      
      <button class="w3-button w3-center w3-xlarge w3-section w3-teal w3-ripple w3-padding" name="submit">Send</button>
    </form>
   
  </div>
  </div>
  
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
