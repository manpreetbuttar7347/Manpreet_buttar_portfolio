<!DOCTYPE html>
<html>
    <head>
        <title>portfolio of  Manpreet buttar-Web Developer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Web developer,javascript developer,Website creator,Android developer">
        <meta name="description" content="i am manpreet buttar-Web developer ">
      <link rel="shortlink" href="https://manpreetbuttar.herokuapp.com/">
       <link rel="canonical" href="https://manpreetbuttar.herokuapp.com/"> 
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/main.css">
        
        
    </head>
    
    <body>
        <div id="wrapper">
            <header>
                
                <div class="org-name">
                    <h1>Portfolio</h1>
                </div>
                
                <div class="clear"></div>
            </header>
            
            <nav>
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="Skills.php">Skills</a></li>
                    <li><a href="about-me.php">About me</a></li>
                    <li><a href="contact.php">Contact </a></li>
                </ul>
            </nav>
            
            <main>
                <div class="image-banner">
                  
                </div>
                
                <div class="info-wrapper">
                    <div class="info-heading">
                        <h2>Wordpress sites</h2>
                     
                    </div>
                    
                    <div class="info-block">
                        <div class="block-sm img-1">
                    
                        </div>
                        
                        <div class="block-la block-center">
                            <h2>Wordpress site 1</h2>
                            <p>Wordpress is only one of the site builders and content management systems users can download and install for free. WordPress offers a variety of responsive theme designs, and users can also make a static site responsive with plugins and adjustments to theme files.Recently I have created painting site in wordpress. </p>
                            
                        </div>
                        
                        <div class="block-sm block-center">
                            <h2>Wordpress site 2</h2>
                            <p>it allow users to add features such as shopping carts, galleries, contact forms, and more to any compatible WordPress site.it is easy to use because the WordPress plugin directory includes hundreds of plugins—small pieces of code designed to perform specific tasks</p>
                            
                        </div>
                        
                        <div class="block-la img-2">
                        </div>
                    </div>
                </div>  <!-- info wrapper ends here-->
                
                <div id="image-gallery">
                    <h2>PHOTO GALLERY</h2>
                    <div class="img-gal1"></div>
                    <div class="img-gal2"></div>
                    <div class="img-gal3"></div>
                    <div class="img-gal4"></div>
                </div>
                
               
                
            </main>
            
            <footer>
                <h4>&copy; manpreet@buttar. All rights reserved.</h4>
            </footer>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script>
            $("#image-gallery > div:gt(0)").hide();

            setInterval(function() { 
              $('#image-gallery > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#image-gallery');
            },  2000);
        </script>
    </body>
</html>
