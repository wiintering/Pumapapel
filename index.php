<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>
    <link rel="icon" href="images/logo2.png">
    <title>Pumapapel Pop-Up Design Studio</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>

/* Header styling */
.header {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 20px;
    background-color: #fff;
    transition: all 0.3s ease;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000; 

}

.header.scrolled {
    background-color: #f0c040;
    padding: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    justify-content: center; 
}

/* Logo styling */
.logo-image {
    width: 180px;
    height: auto;
    margin-right: 20px; 
    transition: transform 0.3s, width 0.3s;
}

.header.scrolled .logo-image {
    display: none; 
}

.logo h1 {
    margin: 0;
    font-size: 24px;
    font-weight: bold;
}

.logo p {
    margin: 0;
    font-size: 12px;
    color: #666;
}

.logo-image {
    width: 250px; 
    height: auto; 
    transition: transform 0.3s; 
}

.logo-image:hover {
    transform: scale(1.05); 
}

.navbar {
    font-family: 'Jost';
    display: flex;
    gap: 85px;
    margin: 0;
    padding: 10px 20px; 
    list-style: none;
    background-color: #f0c040; 
    border-radius: 10px; 
}

.nav-item a {
    text-decoration: none;
    font-weight: bold; 
    color: #000;
    font-size: 15px;
    padding: 10px 15px;
    position: relative; 
}

.nav-item a {
    text-decoration: none;
    font-weight: bold; 
    color: #000; 
    font-size: 16px;
    padding: 10px 15px;
    position: relative; 
}

.nav-item a:hover {
    color: #fff; 
}

.nav-item a.active {
    color: #fff; 
}

/* Hero Section Styles */
.hero {
    display: flex;
    padding: 100px;
    background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.1)), url('images/pic0.png') no-repeat center;
    background-size: cover;
    color: #fff;
    height: 100vh; /* Set a height to your hero section, if needed, to fill the viewport */

}

.hero-image {
    
    width: 100%; /* Ensure the image takes full width */
    height: auto; /* Adjust the height as needed */
}

.hero-text {
    width: 80%;
    padding: 20px;
    margin-top: 100px; 
    color: white;
}

.hero-text h2 {
    font-family: 'Jost';
    font-size: 48px;
    font-weight: 800px;
    margin-bottom: 20px;
}

.hero-text p {
    font-family: 'Jost';
    font-size: 20px;
    margin-bottom: 30px;
}

.hero-buttons {
    font-family: 'Jost';
    display: flex;
    gap: 20px;
}

.btn {
    position: relative; 
    text-decoration: none;
    background-color: #f0c040;
    color: #000;
    padding: 10px 20px; 
    border-radius: 100px; 
    font-weight: 200;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: background-color 0.3s ease; 
}

.btn:hover {
    background-color: #d4a838;
    transform: translateY(5px); 
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); 
}

.arrow-right {
    position: relative; 
    font-size: 20px; 
    font-weight: 900; 
    color: #000; 
}

.circle-indicators {
    display: flex;
    justify-content: center;
    position: absolute; /* Position absolutely within the hero section */
    bottom: -180px; /* Adjust distance from the bottom */
    left: 50%; /* Center horizontally */
    transform: translateX(-50%); /* Center horizontally */
}

.circle {
    width: 10px;
    height: 10px;
    background-color: #000; /* Default color for the circle */
    border-radius: 50%;
    margin: 0 5px; /* Space between the circles */
    opacity: 0.5; /* Lower opacity for inactive circles */
    transition: opacity 0.3s;
}

.circle.active {
    opacity: 10; /* Full opacity for the active circle */
}






/* Latest Story */
.wave-background-container {
    position: relative;
    text-align: center;
    margin-top: -40px; 
    padding-bottom: 50px; 
    overflow: hidden; 
    width: 100vw; 
    left: 50%; 
    transform: translateX(-50%); 
}

.wave-background-container svg {
    display: block;
    width: 100vw; 
    height: auto; 
    max-height: 250px; 
}

.latest-stories {
    text-align: center;
    padding: 40px 20px;
}

.latest-stories h2 {
    position: absolute;
    top: 15%; 
    left: 50%; 
    transform: translate(-50%, -50%); 
    font-size: 43px; 
    color: #000; 
    font-weight: 600;
    font-family: 'Jost';
}

.stories-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.story-card {
    background: #FFFFFF;
    border: 2px solid #FFC107;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: left;
}

.story-image {
    width: 100%;
    height: auto;
}

.story-content {
    padding: 20px;
}

.story-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
    font-weight: bold;
}

.story-content p {
    margin-bottom: 20px;
    color: #333;
}

.read-more-btn {
    display: inline-block;
    padding: 10px 15px;
    background-color: #FFC107;
    color: #000;
    text-decoration: none;
    border-radius: 10px;
    font-weight: bold;
}

.read-more-btn:hover {
    background-color: #FFB300;
}



/* Footer section styling */
.footer {
    background-color: #E0A722;
    padding: 7px;
    display: flex;
    justify-content: space-between; 
    align-items: center; 
    height: auto; 
}

.footer-logo {
    margin-left: 40px; 
}

.footer-logo img {
    width: 130px; 
}

.footer-social-icons {
    margin-right: 40px; 
}

.footer-social-icons a {
    margin: 0 10px;
    display: inline-block;
}

.footer-social-icons img {
    width: 20px;
    height: 20px;
}

.t-line-left {
    left: 53%; 
}

.t-line-right {
    right: 53%; 
}

.brand-story h2 {
    font-family: 'Jost';
    font-size: 48px; 
    font-weight: 600; 
    color: #1A1A1A; 
    margin-bottom: 10px; 
}



/* Add responsive behavior for smaller screens */
@media (max-width: 768px) {
    .footer {
        flex-direction: column; /* Stack logo and icons vertically on smaller screens */
        text-align: center;
    }

    .footer-logo,
    .footer-social-icons {
        margin-bottom: 20px; /* Add space between logo and icons */
    }
}


</style>
<body>

    <header class="header">
        <div class="logo">
            <img src="images/logo1.PNG" alt="Pumapapel Logo" class="logo-image">
        </div>
        <ul class="navbar">
            <li class="nav-item"><a href="index.php" id="home-link">Home</a></li>
            <li class="nav-item"><a href="brand.php" id="brand-link">Brand Story</a></li>
            <li class="nav-item"><a href="works.php" id="works-link">Our Works</a></li>
            <li class="nav-item"><a href="blog.php" id="blog-link">Blog</a></li>
            <li class="nav-item"><a href="services.php" id="services-link">Services</a></li>
            <li class="nav-item"><a href="workshop.php" id="workshop-link">Workshops</a></li>
            <li class="nav-item"><a href="contact.php" id="contact-link">Contact Us</a></li>
        </ul>
    </header>

        <script>
            const currentPage = window.location.pathname;

            function setActiveLink() {
                
                if (currentPage.includes("index.php")) {
                    document.getElementById("home-link").classList.add("active");
                } else if (currentPage.includes("brand.php")) {
                    document.getElementById("brand-link").classList.add("active");
                } else if (currentPage.includes("works.php")) {
                    document.getElementById("works-link").classList.add("active");
                } else if (currentPage.includes("blog.php")) {
                    document.getElementById("blog-link").classList.add("active");
                } else if (currentPage.includes("workshop.php")) {
                    document.getElementById("workshop-link").classList.add("active");
                } else if (currentPage.includes("contact.php")) {
                    document.getElementById("contact-link").classList.add("active");
                }
            }

            setActiveLink();
        </script>

    <script>
        window.addEventListener("scroll", function() {
            const header = document.querySelector(".header");
            const scrollPos = window.scrollY;

            if (scrollPos > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    </script>
            
    <section class="hero">
        <img src="" alt="" class="hero-image">
        <div class="hero-text">
            <h2>STAND-OUT DESIGNS FOR OUTSTANDING IDEAS</h2>
            <p>We transform outstanding ideas into stand-out paper experiences that catch the eye and capture the heart. Our designs are made with excellence and a sense of wonder.</p>
            <div class="hero-buttons">
                <a href="works.php" class="btn">View our works <span class="arrow-right">→</span></a>
                <a href="contact.php" class="btn">Connect with us <span class="arrow-right">→</span></a>
            </div>
        </div>

        <div class="circle-indicators">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
        </div>
    </section>


    <section class="video-showcase">
        <h2>Watch Our Story</h2>
        <div class="video-container">
            <iframe 
                src="https://www.youtube.com/embed/32PRDBco1zA" 
                title="YouTube video player" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                allowfullscreen>
            </iframe>
        </div>
    </section>

    <section class="featured-works-container">
        <div class="svg-container">
            <svg viewBox="0 0 1438 209" width="1750px" height="auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M904.5 206.353C1154.5 226.402 1027.5 101.221 1438 183.825V0L-2 0V183.825C60.3334 201.265 232.1 225.682 420.5 183.825C656 131.503 660.593 186.793 904.5 206.353Z" fill="#DFDFDF"/>
            </svg>

            <div class="featured-works-text">
                <div class="title-line-left"></div>
                <div class="title-line-right"></div>
                <h1>OUR FEATURED WORKS</h1>
                <p>We’ve worked with clients around the world. See how we’ve transformed their ideas into unique and memorable paper experiences for many different purposes.</p>
            </div>
        </div>

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/pic1.png" alt="Featured Work 1">
                    <p>Featured Work #1</p>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic2.png" alt="Featured Work 2">
                    <p>Featured Work #2</p>
                </div>
                <div class="swiper-slide">
                    <img src="images/pic3.png" alt="Featured Work 3">
                    <p>Featured Work #3</p>
                </div>
            </div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- Include Swiper's JavaScript -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 2,           /* Show one image at a time */
                spaceBetween: 20,           /* Space between slides */
                loop: true,                 /* Enable infinite loop */
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,       
                },
                navigation: {
                    nextEl: '.swiper-button-next',   
                    prevEl: '.swiper-button-prev',   
                },
            });
        </script>

        <a href="works.php" class="view-all-button">View all works</a>
    </section>

    <div class="background-images">
        <img src="images/lefthand.png" alt="Hand crafting and precision work" class="hand-image-left">
        <img src="images/righthand.png" alt="Hand crafting and precision work" class="hand-image-right">
        <div class="paper-engineer-content">
            <h2><span class="black-text">WHAT IS A<br></span> <span class="yellow-text">PAPER ENGINEER</span><span class="black-text">?</span></h2>
            <p>Paper Engineers create dimensional paper artworks that can fold flat. Years of practice, technical knowledge, and experience go into each book.</p>
        </div>
        <div class="handmade-precision-content">
            <h2><span class="yellow-text">HANDMADE<br></span> <span class="black-text">WITH PRECISION</span></h2>
            <p>Each piece is meticulously folded and glued in the correct place by a skilled worker. Each worker focuses on only one piece or part of the book, and they become an expert in putting it together. The pieces and book get passed from worker to worker until all the pieces have been put together.</p>
        </div>
    </div>

    <section class="brand-story">
        <div class="brand-story-container">
            <div class="t-lines">
                <div class="t-line-left"></div>
                <h2>OUR BRAND STORY</h2>
                <div class="t-line-right"></div>
            </div>
            <div class="brand-content">
                <div class="brand-text">
                    <p>Each piece is meticulously folded and glued in the correct place by a skilled worker. Each worker focuses on only one piece or part of the book, and they become an expert in putting it together. The pieces and book get passed from worker to worker until all the pieces have been put together.</p>
                    <a href="brand.php" class="read-more-btn">Read More</a> 
                </div>
                <div class="brand-image">
                    <img src="images/amy1.png" alt="Brand Image">
                </div>
            </div>
        </div>
    </section>

    <section class="latest-stories">
        <div class="wave-background-container">
            <svg viewBox="0 0 1438 209" width="1750px" height="auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M904.5 206.353C1154.5 226.402 1027.5 101.221 1438 183.825V0L-2 0V183.825C60.3334 201.265 232.1 225.682 420.5 183.825C656 131.503 660.593 186.793 904.5 206.353Z" fill="#DFDFDF"/>
            </svg>


    
</div>
    </section>

    <footer class="footer">
            <div class="footer-logo">
                <img src="images/logo1.png" alt="Pumapapel Pop-Up Design Studio">
            </div>
            <div class="footer-social-icons">
                <a href="https://www.facebook.com/pumapapelcrafts"><img src="images/fb.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/pumapapelcrafts/"><img src="images/ig.png" alt="Instagram"></a>
                <a href="https://www.youtube.com/@pumapapelcrafts"><img src="images/yt.png" alt="YouTube"></a>
            </div>
        </footer>



</body>
</html>
