<?php
    include('logconnection.php');
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="Images/home.png">
    <link rel="stylesheet" href="css/WorkWise.css">
    <script src="https://kit.fontawesome.com/530a970965.js" crossorigin="anonymous"></script>
</head>
<body>
        <nav>
            <div class="logo">
                <img src="Images/Ourlogo.png" width="100px">
            </div>
    
            <div class="navlinks">
                 <ul>
                    <li><a href="Development.php">Home</a></li>
                    <li><a href="application/Resource.html">Resources</a></li>
                    <li><a href="aboutus/newaboutUs.php">About us</a></li>
                    <li><a href="FAQ/faq.html">FAQ</a></li>
                    <li><a href="contactus/submit.php">Contact us</a></li>
                    <li><a href="useraccount.html">User account</a></li>
                    
                </ul>
            </div>
        </nav>
        
        <!--welcome-hero start -->
            <section id="home" class="welcome-hero">
                <div class="container">
                    <div class="welcome-hero-txt">
                        <h2>Get New Job. Right Now.</h2>
                        <h3>Search millions of jobs for free.</h3>
                        
                        <form action="searchCategories.php" class="search-bar" method="post">
                            <input type="text" placeholder="Search anything">
                            <button class="searchIcon" type="submit" href> <img src="Images/Search.png"></button>
                        </form>
                  
                        <div class="MainFont2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus distinctio magni inventore mollitia itaque reiciendis quod eos quas laudantium optio doloremque aut saepe iste fuga quae, eaque magnam neque adipisci tenetur ad, nobis aliquid! Et libero quia neque saepe mollitia repellat aut vero animi accusantium, error reiciendis, dolor in commodi.
                        </div>
    
                    </div>
                    
                </div>
    
            </section><!--/.welcome-hero-->
            <!--welcome-hero end -->
         <section class="cContainer">
            <div class="topbar">
                <h2>Most Demanding Categories</h2>
            </div>
            
            <div class="categories">
                
           
            <div class="box">
                <i class="fa-solid fa-pen-nib"></i>
                <h4>Design &<br> Development</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-user"></i>
                <h4>Custom Marketing <br>
                    & Sales</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-business-time"></i>
                <h4>Business<br> 
                    & Marketing</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-phone"></i>
                <h4>Business <br> Development</h4>
            </div>
        </div>
        <div class="categories">
                
           
            <div class="box">
                <i class="fa-solid fa-code"></i>
                <h4>Programming & <br> Code</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-pen-to-square"></i>
                <h4>Video Edition <br> & 3D Work</h4>
            </div>
            <div class="box">
                <i class="fa-solid fa-palette"></i>
                <h4>Art & <br> Animation</h4>
            </div>
            <div class="box">
                <div class="lastbox">
                <p>13k+</p>
                <h1>Job already posted</h1>
                <i class="fa-solid fa-door-open"></i>
            </div>
            </div>
        </div>
        
        </section>
        
            <div class="progressBar">
        
                <div class="MainFont">
                        <h2>How it Works</h2>
                        <br>
                       <P>Jobs & Job search.<br> Find jobs in global. Executive jobs & work.</P></h2>
                </div>
                <div class="stepProgressBar">
            
                    <div class="step">
                        <ul class="bullet">
                        <a  href="jobposting register/jobPosting.php">1</a>
                        </ul>
                        <p class="step-text">
                            <a href="jobposting register/jobPosting.php">Register</a></p>
                    </div>

        
                    <div class="step">
                        
                        <div class="bullet">2</div>
                        <p class="step-text"><a href="#">FindJob</a></p>
                        
                    </div>
        
                    <div class="step">
                        <div class="bullet">3</div>
                        <p class="step-text"><a href="#">ApplyJob</a></p>
                    </div>
                </div>
            </div>
           
            <div class="contactUs">
                <img src="Images/girl.png">
                     <div class="text">
                        <p>To contact us regarding any inquiries or assistance on our job portal, please feel free to reach out through the following channels:
<br><br>
                            Email: <a><u>workwise@gmail.com</u></a>
                            <br><br>
                            Phone: +94 76 1234 567
                            <br><br>
                            We're available during standard business hours to address any questions you may have regarding job listings, account issues, or any other concerns. Additionally, you can explore our FAQ section on the website, which might provide answers to common queries. We're here to help make your job search experience as smooth as possible!</p>
                        <br>
                        <button type="button" >Contact us ></button>
                    </div>
            </div>
            
            <section class="topcompany">
                <div class="topcompanybar">
                    <h2>Top Company</h2>
                </div>
                
                <div class="companycategories">
                    
               
                <div class="topcompanybox">
                    <i class="fa-brands fa-yarn" style="color: #368fb9;"></i>
                    <h4>yarn</h4>
                    <p>New york, New york; seattle, <br> Washington</p>
                    <button>3 open job</button>
                </div>
                <div class="topcompanybox">
                    <i class="fa-brands fa-xbox" style="color: green;"></i>
                    <h4>xbox</h4>
                    <p>New york, New york; seattle, <br> Washington</p>
                    <button>5 open job</button>
                </div>
                <div class="topcompanybox">
                    <i class="fa-brands fa-sass" style="color: #bd0b93;"></i>
                    <h4>sass</h4>
                    <p>New york, New york; seattle, <br> Washington</p>
                    <button>4 open job</button>
                </div>
                <div class="topcompanybox">
                    <i class="fa-brands fa-meta" style="color: #60c9fa;"></i>
                    <h4>meta</h4>
                    <p>New york, New york; seattle, <br> Washington</p>
                    <button>6 open job</button>
                </div>
            </div>
           
                    
    
            </section>
            <footer>
                <div class="row">
                    <div class="col">
                        <img src="Images/Ourlogo.png" class="logo">
                        <p>"Welcome to our job portal,<br> where opportunities meet talent!
                            Explore countless career paths, connect with leading companies,
                             and embark on your professional journey with confidence.
                        </p>
                    </div>
        
                    <div class="col">
                        <h3>Office</h3>
                        <p>ITPL Road</p>
                        <p>Whitefield, Bangalore</p>
                        <p>Karnataka, PIN 560066, India</p>
                        <p class="email-id">workwise@gmail.com</p>
                        <p class="email-id">ramspirahas@gmail.com</p>
                    </div>
        
                    <div class="col">
                        <h3>Links</h3>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Resources</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="#">Sign up</a></li>
                            <li><a href="jobPosting.php">Register</a></li>
                        </ul>
                    </div>
        
                    <div class="col">
                        <h3>Newsletter</h3>
                        <form action="footEmail.php" method="post">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="email" placeholder="Enter your email id" name="email">
                            <button type="submit"><i class=" fas fa-solid fa-arrow-right"></i></button> 
                        </form>
                        
                        <div class="socialMedia">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-whatsapp"></i>
                            <i class="fa-brands fa-pinterest"></i>
                        </div>
                    </div>
                </div>
            </footer>
    </body>
</html>