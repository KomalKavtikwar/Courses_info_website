<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Courses Information </h1>
            <p>Various types of courses related to programming, Web development, and other topics.</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Front-end and back-end technologies</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p> Programmer or a coder</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>It,s dynamic field</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            
        </div>
    </section>
    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/images.png"/>
                </div>
                <div class="f-text">
                    <h4>Data Analysis with Python</h4>
                    <p>Data at your command</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/img5.png"/>
                </div>
                <div class="f-text">
                    <h4>Artificial Intelligence</h4>
                    <p> Problem-solve like a human</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/img6.png"/>
                </div>
                <div class="f-text">
                    <h4>Data Science</h4>
                    <p>Structured and unstructured data</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking for your favourite course</h2>
           <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad cumque eum quia magni, voluptatibus nesciunt vero. Reprehenderit fugiat soluta ullam praesentium, omnis autem voluptatibus quae.</p> -->
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
           <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>-->
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>