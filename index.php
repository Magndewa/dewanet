
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

</head>
<body>
    <!-- navigation -->
    <nav>
        <img src="images/logo_dewanet.JPG" alt="DEWANET">
        <div class="navigation">
            <ul>
                <i id="menu-close" class="fa fa-times" aria-hidden="true"></i>
                <li><a class="on" href="#">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="courses.php">COURSES</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACTS</a></li>
            </ul>
            <img id="menu" src="images/menu.png" alt="menu">

        </div>
    </nav>
    

    <!--HOME-->
    <section id="home">
        <h2>WEB DEVELOPMENT AND PROGRAMMING COURSES</h2>
        <p>We help companies find new customers through digital. 
            We also help web enthusiasts with better pedagogy and online.</p>
        <div class="btn">
            <a class="blue" href="#">Learn More</a>
            <a class="yellow" href="#">Visit COURSES</a>
            <a class="green" href="#">Visit web services</a>
        </div>

    </section>

    <!--Features-->
    <section id="features">
        <h1 class="h1">Networking and ultra-qualitative support</h1>
        <p class="p">
            Every day, we enrich our network of freelancers to meet all your requests. 
            Take advantage of our expertise and that of our network now.
        </p>
        <div class="fea-base">
                <div class="fea-box">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <h3>Tailor</h3>
                    <p>Regardless of the nature and complexity of your project, 
                        an Account Manager will always be at your disposal and available to understand your request precisely.</p>
                </div>

                <div class="fea-box">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <h3>Aftercare</h3>
                    <p>Our Talent Managers are committed to following all freelancers throughout 
                        the duration of the mission to ensure the successful completion of your project regardless of its duration and complexity.</p>
                </div>

                <div class="fea-box">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <h3>100% matching</h3>
                    <p>We check the level of technical skills, references, 
                        motivations and interest in your mission each freelancer we identify: 
                        you only receive qualified profiles that correspond to your needs.</p>
                </div>
        </div>

    </section>

    <!--cours-->
    <section id="courses">
        <h1 class="h1">Our popular courses</h1>
        <p class="p">
            For each student, each level. Real results..
        </p>
        <div class="courses-box">
           <a href="#"> 
            <div class="course">
                <img src="images/c1.jpg" alt="">
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
            </a>
            
            <a href="#">
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
            </a>

           <a href="#">
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
           </a>
           <a href="#">
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
            </a>
            <a href="#">
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
            </a>
            <a href="#">
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
            </a>
        </div>

    </section>

    <!--Registration-->
    <section id="registration">
        <div class="reminder">
            <p>Get 100 online courses for free</p>
            <h1>Register to get it</h1>

           <!-- compte a rebour --> 
            <?php
            $dates = "2022-05-30 23:59:59";
            ?>
            <div class="time">
                <div class="date">
                    <div id="data"> </div>
                </div>

                <div class="date">
                    <div id="data2"></div>
                </div>

                <div class="date">
                    <div id="data3"></div>
                </div>
                <div class="date">
                    <div id="data4"></div>
                </div>

            </div>
            <input type="hidden" id="dates" value="<?php echo $dates; ?>" >

            <script>
                function func() {
                    var dateValue = document.getElementById("dates").value;
                    var date = Math.abs((new Date().getTime()/1000).toFixed(0));
                    var date2 = Math.abs((new Date(dateValue).getTime()/1000).toFixed(0));
                    var diff = date2-date;

                    if (diff > 0) {
                        var days = Math.floor(diff/86400);
                        var hours = Math.floor(diff/3600) % 24;
                        var minutes = Math.floor(diff/60) % 60;
                        var seconds = diff % 60;
                    }else {
                        var days = Math.floor(0/86400);
                        var hours = Math.floor(0/3600) % 24;
                        var minutes = Math.floor(0/60) % 60;
                        var seconds = 0 % 60;
                    }
                    
                    if (days < 10) {
                        document.getElementById("data").innerHTML= "0" + days + "<?php echo " <br>Days" ;?>";
                        
                    }else{
                        document.getElementById("data").innerHTML= days + "<?php echo " <br>Days" ;?>";
                    }

                    if (hours < 10) {
                        document.getElementById("data2").innerHTML= "0" + hours + "<?php echo " <br>Hours" ; ?>";
                    }else{
                        document.getElementById("data2").innerHTML= hours + "<?php echo " <br>Hours" ; ?>";
                    }

                    if (minutes < 10) {
                        document.getElementById("data3").innerHTML= "0" + minutes + "<?php echo " <br>Minutes" ; ?>";
                    }else{
                        document.getElementById("data3").innerHTML= minutes + "<?php echo " <br>Minutes" ; ?>";
                    }
                    
                    if (seconds < 10) {
                        document.getElementById("data4").innerHTML= "0" + seconds + "<?php echo " <br>Seconds" ; ?>";
                    }else {
                        document.getElementById("data4").innerHTML= seconds + "<?php echo " <br>Seconds" ; ?>";
                    }  
                }
                func();
                setInterval(func, 1000);
            </script>

        </div>

        <?php
            include 'test22.php';
        ?>
      
    <!--
        <div class="form">
            <h2>Create Free account Now</h2>
            <input type="text" placeholder=" Your Name" name="" id="">
            <input type="email" placeholder=" Your Email" name="" id="">
            <input type="number" placeholder=" Your PhoneNumber" name="" id="">
            <div class="btn">
                <a class="yellow" href="#">Submit>>>>></a>
            </div>
        </div> 
      
            -->
            
    </section>

    <!-- Les hommes de membres -->

    <section id="experts">
        <h1>Our community </h1>
        <p>95% of our remote missions </p>
        <div class="expert-box">

            <div class="profile">
                <img src="images/dewa.jpg" alt="">
                <h6>Dewa NONZOOU</h6>
                <p>Senior Html/CSS JavaScript PHP MYSQL  & Figma</p>
                <div class="pro-links">
                    
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp-square"></i>
                </div>

            </div>

            <div class="profile">
                <img src="images/pro2.webp" alt="">
                <h6>Pierre Giraud</h6>
                <p>Expert HTML, CSS, JavaScript, PhP, MySQL, SEO, Phyton</p>
                <div class="pro-links">
                  <a href="https://www.facebook.com/pierregird/"><i class="fa-brands fa-facebook"></i></a> 
                   <a href="https://www.youtube.com/c/PierreGiraudcom/featured"><i class="fa-brands fa-youtube"></i></a> 
                    <a href="https://twitter.com/pierregird"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <a href="https://www.pierre-giraud.com/">Site Web</a>

            </div>

            <div class="profile">
                <img src="images/leon.JPG" alt="">
                <h6>Leon Noughat</h6>
                <p>Pro React, Nodejs, Java/javascript Php MySQL, Angular</p>
                <div class="pro-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp-square"></i>
                </div>

            </div>

            <div class="profile">
                <img src="images/pro4.webp" alt="">
                <h6>Elise WANDERLUCK</h6>
                <p>Senior Wordpress, Bootstrap & photoshop Python, c++/c#</p>
                <div class="pro-links">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp-square"></i>
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