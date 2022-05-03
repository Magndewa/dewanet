
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
    <link rel="stylesheet" href="contact.css">
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
                <li><a  href="courses.php">COURSES</a></li>
                <li><a  href="blog.php">BLOG</a></li>
                <li><a class="on" href="contact.php">CONTACTS</a></li>
            </ul>
            <img id="menu" src="images/menu.png" alt="menu">

        </div>
    </nav>
    

    <section id="blog-home">
        <h2>Concact Us//</h2>
    </section>

    <section id="contact">
        <div class="getin" >
            <h2>Get in touch</h2>
            <p>Looking for help? Fill the form and start a new adventure.</p>
            
            <div class="getin-details" >
                <h3>Headquarters</h3>
                <div>
                    <i class="fa fa-home get" aria-hidden="true"></i>
                    <p> 27 N1 Agoe-Zongo, Lome Togo</p>
                </div>
            </div>

            <div class="getin-details" >
                <h3>Phone</h3>
                <div>
                    <i class="fa fa-phone get" aria-hidden="true"></i>
                    <p> +228 93 79 41 82 <br> +212 680 46 00 61 </p>
                </div>
            </div>

            <div class="getin-details" >
                <h3>Support</h3>
                <div>
                    <i class="fa fa-envelope-open get" aria-hidden="true"></i>
                    <p> dew7dewa.net@support.com <br> help@dewa.com</p>
                </div>
            </div>
            <h3>Follows Us</h3>
            <div class="pro-links">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-whatsapp-square"></i>
            </div>

        </div>
        

        <div class="form" >
            
            <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $massageErr = "";
            $name = $email = $gender = $message = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Required";
            } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Invalid";
                }
            }
            
            if (empty($_POST["email"])) {
                $emailErr = "Required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid";
                }
            }

            if (empty($_POST["message"])) {
                $massageErr = "Your message is empty";
            } else {
                $message = test_input($_POST["message"]);
            }

            }

            function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }
            ?>

            <h4>Let's connect</h4>
            <p><span class="error">* required field</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="#"> 
            <div class="forme-row">
                <div>
                    <label for="name">Your name</label> 
                    <span class="error">* <?php echo $nameErr;?></span>
                    <br>
                    <input type="text" name="name" value="<?php echo $name;?>" placeholder="Dewa MAGNOU">
                </div>
                <div>
                    <label for="email">Your E-mail</label>
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br>
                    <input type="text" name="email" value="<?php echo $email;?>" placeholder="dewanet@dewa.com">

                </div>
               
                
            </div>
            <div class="subject">
                <label for="subject">Subject</label>
                <br>
                <select name="subject" id="subject">
                    <option value="services">Infos about our service</option>
                    <option value="Website">Infos about website</option>
                    <option value="Webapp">Infos about Webapp</option>
                    <option value="Courses">Infos about courses</option>
                    <option value="devis">Infos and quotation</option>
                </select>
            </div>
            <div class="message">
                <label for="Message">Tell your need</label>
                <span class="error">* <?php echo $massageErr;?></span>
                <br>
                <textarea name="message" rows="8" cols="40" placeholder="How can we help you ?"><?php echo $message;?></textarea>

            </div>
            <div>
            <button type="submit">Send Message</button>
            </div>
            </form>
        </div>
    </section>
    <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126931.62387405676!2d1.1766498246891626!3d6.
        182487786884708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e1c113185419%3A0x3224b5422caf411d!
        2zTG9tw6k!5e0!3m2!1sfr!2stg!4v1650713518523!5m2!1sfr!2stg" 
         style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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