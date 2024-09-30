<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo1.png">
    <title> Workshops | Pumapapel Pop-Up Design Studio</title>
    <style>
        body {
            font-family: 'Jost';
            background-color: #fff;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-top: 50px;
            margin-bottom: 20px;
        }
        .content {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        .section {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        .section-text {
            flex: 1;
            text-align: left;
            padding: 20px;
        }
        .section-box {
            flex: 2;
            padding: 20px;
            background-color: #e0e0e0;
            border-radius: 50px;
            font-size: 24px;
            font-weight: bold;
        }
        .section-box.yellow {
            background-color: #f0b626;
        }
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #f0b626;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            text-decoration: none;
            margin-top: 20px;
        }
        .cta-button:hover {
            background-color: #e0a61d;
        }
        .bottom-text {
            font-size: 14px;
            color: #555;
            margin-top: 20px;
        }

        /* Header Styles */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #fff;
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
    height: auto; /* Maintain aspect ratio */
    transition: transform 0.3s; /* Optional: Adds hover effect */
}

.logo-image:hover {
    transform: scale(1.05); 
}

.navbar {
    font-family: 'Jost';
    display: flex;
    gap: 100px;
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
    font-size: 16px;
    padding: 10px 15px;
    position: relative; 
    transition: color 0.3s; 
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

/* Footer section styling */
.footer {
    background-color: #E0A722;
    padding: 7px;
    display: flex;
    justify-content: space-between; /* Align logo to left and icons to right */
    align-items: center; /* Vertically center logo and icons */
    height: auto; /* Allows height to adjust based on content */
}

.footer-logo {
    margin-left: 40px; /* Push the logo to the right */
}

.footer-logo img {
    width: 130px; /* Adjust width as needed */
}

.footer-social-icons {
    margin-right: 40px; /* Push the icons to the left */
}

.footer-social-icons a {
    margin: 0 10px;
    display: inline-block;
}

.footer-social-icons img {
    width: 20px;
    height: 20px;
}

.navbar {
    font-family: 'Jost';
    display: flex;
    gap: 150px;
    margin: 0;
    padding: 10px 20px; 
    list-style: none;
    background-color: #f0c040; 
    border-radius: 10px; 
}
    </style>
</head>
<header class="header">
        <div class="logo">
            <img src="images/logo1.PNG" alt="Pumapapel Logo" class="logo-image">
        </div>
        <ul class="navbar">
            <li class="nav-item"><a href="index.php" id="home-link">Home</a></li>
            <li class="nav-item"><a href="brand.php" id="brand-link">Brand Story</a></li>
            <li class="nav-item"><a href="works.php" id="works-link">Our Works</a></li>
            <li class="nav-item"><a href="workshop.php" id="workshop-link">Workshops</a></li>
            <li class="nav-item"><a href="contact.php" id="contact-link">Contact Us</a></li>
        </ul>

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
            
    </header>
<body>


    <h1>WORKSHOPS</h1>

    <div class="content">
        <div class="section">
            <div class="section-box">Private Workshops and Events</div>
            <div class="section-text">
                <p>We offer private workshops tailored to your group’s needs. Whether it’s a corporate event, a birthday party, or a casual get-together, our private sessions provide a memorable and creative experience. Contact us to learn more and book your private session.</p>
            </div>
        </div>

        <div class="section">
            <div class="section-box yellow">Train with Pop-up Experts</div>
        </div>

        <div class="section">
            <div class="section-box">Sign Up Today</div>
        </div>

        <p class="bottom-text">Spaces are limited, so be sure to secure your spot in our upcoming workshops. Click the button below to register and start your creative journey with Pumapapel.</p>

        <a href="#" class="cta-button">Connect with us</a>
    </div>

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