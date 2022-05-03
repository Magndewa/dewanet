
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
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
                <li><a href="contacts.php">CONTACTS</a></li>
            </ul>
            <img id="menu" src="images/menu.png" alt="menu">

        </div>
    </nav>
    
    <section id= "blog-contenair">
        <div class="blogs blogpost">
            <div class="post">
                <img src="images/b1.jpg" alt="">
                <h3>Learn Web Development in the easiest way</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!

                    <br> <br> <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!

                    <br> <br> <br>
                    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!

                    <br> <br> <br>
                    
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Maiores earum, minus repellat quidem voluptate autem? Adipisci, 
                    harum facilis nisi cumque optio expedita id rem, magnam animi 
                    tempora obcaecati voluptates. Quae!

                    <br> <br> <br>
                    
                    

                </p>
                
                <a href="#">Read the Next</a>
            </div>


  

    <script>
        $('#menu').click(function() {
            $('nav .navigation ul').addClass('active')
        });

        $('#menu-close').click(function() {
            $('nav .navigation ul').removeClass('active')
        });

    </script>   
</body>

</html>