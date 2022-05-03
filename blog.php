
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
                <li><a href="courses.php">COURSES</a></li>
                <li><a class="on" href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACTS</a></li>
            </ul>
            <img id="menu" src="images/menu.png" alt="menu">

        </div>
    </nav>
    

    <section id="blog-home">
        <h2>BLOG</h2>
    </section>

    <section id= "blog-contenair">
        <div class="blogs">
            <div class="post">
                <img src="images/b1.jpg" alt="">
                <h3>Learn Web Development in the easiest way</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!</p>
                    <a href="post.php">Read More</a>
            </div>

            <div class="post">
                <img src="images/b2.jpg" alt="">
                <h3>Learn Web Development in the easiest way</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!</p>
                    <a href="#">Read More</a>
            </div>

            <div class="post">
                <img src="images/b3.jpg" alt="">
                <h3>Learn Web Development in the easiest way</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!</p>
            </div>
        
       </div>
       <div class="cate">
        <h2>Categories</h2>
        <hr>
        <a href="#">Web Development</a>
        <hr>
        <a href="#">Web Design</a>
        <hr>
        <a href="#">App Development</a>
        <hr>
        <a href="#">Frontend Web</a>
        <hr>
        <a href="#">Backend Web</a>
        <hr>
        <a href="#">JavaScript Hack</a>
        <hr>
    </div>
    </section>

   
    <!--Features-->
    <section id="about-features">
        <p class="p">Website Creation agency in Lome</p>
        <h1 class="h1">Integrate your business on the Internet
           <br> In 6 steps of web creation</h1>
        </p>
        <div class="fea-base">
            <div class="fea-box">
                <img src="images/etap1.jpg" alt="">
                <h3>STEP 1: Define your web project</h3>
                <p>To design your professional website, 
                    we carry out a study on your company. 
                    We reserve a domain name, hosting, then write the 
                    specifications for your site. Then begins the challenge 
                    of offering you an SEO optimized design and structure 
                    that suits you.</p>
            </div>
                <div class="fea-box">
                    <img src="images/etap2.png" alt="">
                    <h3>STEP 2: Choose a Template</h3>
                    <p>We offer you different website structures so that it can 
                        correspond to your image and your desires. The template 
                        will be different whether it is a showcase site or an e-commerce site. 
                        It will be responsive, so that it is visible on tablets and smartphones, 
                        as well as on desktop computers.</p>
                </div>

                <div class="fea-box">
                    <img src="images/etap3.jpg" alt="">
                    <h3>STEP 3: Structure your website</h3>
                    <p>Creation of the tree structure in silo and organization of your pages 
                        which allows to affiliate the pages according to a semantic unit. 
                        It is a strategic and logical elaboration that facilitates and accompanies the visitors' 
                        journey. This technique optimizes the referencing of your website.</p>
                </div>

                <div class="fea-box">
                     <img src="images/etap4.png" alt="">
                    <h3>STEP 4: Personalize your pages, integrate your content</h3>
                    <p>This step allows you to add the customizable elements, adapted to your specific needs. 
                        You just have to choose your texts and images, and entrust them to us. We will optimize 
                        and resize the images and then offer you text modifications.</p>
                </div>

                <div class="fea-box">
                    <img src="images/etap5.jpg" alt="">
                    <h3>STEP 5: A design to catch the visitor's attention</h3>
                    <p>We highlight your content in visual form through colors, images and texts to attract
                         the attention of your visitors. Your website must express your ideas and must be 
                         fast to the different clicks on your pages.</p>
                </div>

                <div class="fea-box">
                    <img src="images/site-internet.jpg" alt="">
                    <h3>STEP 6: Publish your website</h3>
                    <p>This is the crucial step in creating your site. It often allows you to notice details, 
                        which, strangely, were not obvious to us, just before. It now remains to make the final 
                        adjustments to your site. Your website is then delivered turnkey, with content management 
                        and 1 hour of on-site training.</p>
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