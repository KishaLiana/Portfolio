<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="About Kisha" />
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script
      src="https://kit.fontawesome.com/1de295ac45.js"
      crossorigin="anonymous"
    ></script>
    <link href="./style.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"
    />

    <title>Kisha Liana Ainembabazi</title>
  </head>
  <body>
    <div class="navbar">
      <ul>
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#interests">Interests</a></li>
        <li><a href="#hobbies">Hobbies</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="About" id="about">
        <h2>Kisha Liana Ainembabazi</h2>
        <img src="pic1.jpg" />
        <div class="icon">
          <ul>
            <li>
              <i class="fas fa-user-secret"></i>
            </li>
            <li>
              <h3 class="underline">ABOUT</h3>
            </li>
          </ul>
        </div>
        <p>
          I'm a second year computer science student who's aiming to be a data
          Scientist. <br />
          I'm familiar with a few programming languages, such as Java , C++,
          html and Python.
        </p>
        <div class="Interests" id="interests">
          <div class="icon">
            <ul>
              <li>
                <i class="fas fa-code-branch"></i>
              </li>
              <li>
                <h3 class="underline">INTERESTS</h3>
              </li>
            </ul>
          </div>
          <ul>
            <li>Data Science</li>
            <li>Web Programming</li>
            <li>Artificial Intellingence</li>
            <li>Game Development</li>
          </ul>
        </div>
      </div>
      <div class="Hobbies" id="hobbies">
        <div class="icon">
          <ul>
            <li>
              <i class="fab fa-xbox"></i>
            </li>
            <li>
              <h3 class="underline">HOBBIES</h3>
            </li>
          </ul>
        </div>
        <ul>
          <li>Gaming</li>
          <li>Soccer</li>
          <li>Reading any form of literature</li>
          <li>Quality time with family and friends.</li>
        </ul>
      </div>
      <div class="Contact" id="contact">
        <h3 class="underline">CONTACT</h3>
        <ul>
          <li>
            <a class="Tel no" href="Tel:+256 777404372">
              <i class="fas fa-mobile"></i
            ></a>
          </li>
          <li>
            <a class="list-link" href="mailto:kishaliana@gmail.com">
              <i class="fa fa-envelope fa-1x icon" aria-hidden="true"></i
            ></a>
          </li>
          <li>
            <a href="https://twitter.com/KishaLiana"
              ><i class="fa fa-twitter fa-1x icon" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/KishaLiana">
              <i class="fa fa-github fa-1x icon" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a
              href="https://www.linkedin.com/in/kisha-liana-ainembabazi-84ba93192/"
              ><i class="fa fa-linkedin fa-1x icon" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <h1>Feedback</h1>
    <form action = "./feedback.php" method = "POST">

      Name 
      <input type="text" name="name" />
      <br>
      Email
      <input type="text" name="email" />
    <br>
    Message
    <input type = "textarea" name= "message">
    <br>
    <input type="submit" name="save" value="INSERT"/> 
    <input type="submit" name="show" value="DISPLAY"/>
    </form>
  </body>
</html>
