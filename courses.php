
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
                <li><a  href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACTS</a></li>
            </ul>
            <img id="menu" src="images/menu.png" alt="menu">

        </div>
    </nav>
    

    <section id="blog-home">
        <h2>COURSES//</h2>
    </section>

    <section id="courses">
        <h1 class="h1">Our popular courses</h1>
        <p class="p">
            For each student, each level. Real results..
        </p>
        <div  class="courses-box">
            <div class="course" onclick="window.location.href='course-inner.php';">
               <a href="javascript.php"><img src="images/c1.jpg" alt=""></a> 
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>Javascript for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            
            <div class="course">
                <img src="images/c2.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>Css for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c3.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>Python for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c5.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>Java for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c6.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>C/C++ for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c4.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>PHP Mysql for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>
            <div class="course">
                <img src="images/c3.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>Python for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c5.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>Java for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c6.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>C/C++ for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
            </div>

            <div class="course">
                <img src="images/c4.jpg" alt="">
                <div class="details">
                    <span>Update 10/03/2022</span>
                    <h6>PHP Mysql for beginners</h6>
                    <div class="stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <span>(75)</span>
                    </div>
                </div>
                <div class="cost">
                    $49.99
                </div>
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