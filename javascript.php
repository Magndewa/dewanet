
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DEWA.NET : developpement web et cours de programation</title>
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
       <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" 
        integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
    
        <!-- jquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                        
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="dot.js">
    
    </head>

<body>
    <!-- navigation -->
    <nav>
        <a href="index.php"><img src="images/logo_dewanet.JPG" alt="DEWANET"></a> 
        <div class="navigation">
            <ul>
                <i id="menu-close" class="fa fa-times" aria-hidden="true"></i>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a class="on" href="courses.php">COURSES</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACTS</a></li>
            </ul>
            <img id="menu" src="images/menu.png" alt="menu">

        </div>
    </nav>

    <section id="blog-home">
        <h2>Enrool JavaScript Courses And Skill Up</h2>
    </section>
    
    <section id="course-inner">
        <div class="overview">
            <img class="course-img" src="images/c1.jpg" alt="">
            <div class="course-head">
                <div class="c-name">
                    <h2>JavaScript Beginner Course </h2>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p>Modern JavaScript from the beginning - 
                        all the way up to JS expert level! The must-have 
                        JavaScript resource in 2022</p>
                </div>
                 <span>$49.99</span>
             </div>
            <h3>Instructor</h3>
             <div class="tutor">
                 <img src="images/dewa.jpg" alt="">
                 <div class="tutor-det">
                     <h5>Dewa NONZOOU</h5>
                     <p>Web Developper</p>
                 </div>
             </div>
             <hr>
             <h3>Course overview</h3>
             <p> if you want to become any kind of web developer, you absolutely need to learn 
                 this language—and you should start with plain old vanilla JavaScript first. 
                 If you’re to work out how long to give to get up to speed on the language, 
                 senior developer Marven shows you how long it should take to pick up JavaScript.
                    <br>
                The best way to start learning JavaScript is to get hands-on. Once you’ve read up on 
                what the language is and how it works, give it a go in your browser. If you’re using Google Chrome, 
                just click “View” then select “Developer” from the drop-down menu. From there, select “JavaScript 
                Console” and you’re good to go!
                <br>
                As with most things, there are plenty of good resources on the web for teaching yourself JavaScript. 
                However, if you want a more structured approach, consider a mentored web development course. 
                Whichever route you take, make sure you spend enough time learning all the basics. 
                Once you know JavaScript inside out, you’re well-equipped to tackle the more complex languages of the web, 
                as well as to show the benefits to the next person who asks themselves why learn JavaScript when there are 
                other coding options out there.</p>
                <hr>
                <h3>What you'll learn</h3>
                <div class="learn">
                    <p> <i class="far fa-check-circle"></i> JavaScript from scratch-beginner to advanced</p>
                    <p> <i class="far fa-check-circle"></i> Everything you need to become a JavaScript expert and apply for JavaScript Jobs</p>
                    <p> <i class="far fa-check-circle"></i> All about variables, functions, objects and arrays</p>
                    <p> <i class="far fa-check-circle"></i> All core features and concepts you need to know in modern JavaScript development</p>
                    <p> <i class="far fa-check-circle"></i> Project-driven learning with plenty of exemples</p>
                    <p> <i class="far fa-check-circle"></i> Object-oriented programming</p>
                </div>
        </div>

        <div class="enroll">
            <h3>This course incluses:</h3>
            <p> <i class="fa fa-video"></i> 52 hours video</p>
            <p> <i class="far fa-newspaper"></i> 75 articles </p>
            <p> <i class="fa fa-cloud-download"></i> Downloadable ressources</p>
            <p> <i class="fa fa-infinity"></i> Full lifetime access</p>
            <p> <i class="fa fa-mobile-alt"></i> Access on Mobile and TV</p>
            <p> <i class="fa fa-paperclip"></i> Assignments</p>
            <p> <i class="fa fa-trophy"></i> Certificate</p>
            <div class="enroll-btn">
                <a href="test22.php" class="blue">Enroll course</a>
            </div>

        </div>

    </section>
    

  

    <script>
        $('#menu').click(function() {
            $('nav .navigation ul').addClass('active')
        });

        $('#menu-close').click(function() {
            $('nav .navigation ul').removeClass('active')
        });

    </script>

    <?php
       include 'footer.php';
    ?>
      
</body>

</html>