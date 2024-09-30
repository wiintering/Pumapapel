<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo1.png">
    <title> Our Works | Pumapapel Pop-Up Design Studio</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>

.section-title {
    text-align: center;
    font-size: 36px;
    margin-bottom: 80px;
}

.works-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
    justify-items: center; 
    align-items: center;   
    padding: 0 70px; 
    margin-bottom: 40px; 
}

.work-item {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center; 
}

.work-item img {
    max-width: 800px; 
    height: auto; 
    display: block; 
    margin: 0 auto; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
<body>

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

    <main class="content">
        <h1 class="section-title">Our Works</h1>
        <div class="works-container">
            <div class="work-item">
                <img src="images/work1.png" alt="Work 1">
            </div>
            <div class="work-item">
                <img src="images/work2.png" alt="Work 2">
            </div>
            <div class="work-item">
                <img src="images/work3.png" alt="Work 3">
            </div>
            <div class="work-item">
                <img src="images/work4.png" alt="Work 4">
            </div>
            <div class="work-item">
                <img src="images/work5.png" alt="Work 5">
            </div>
            <div class="work-item">
                <img src="images/work6.png" alt="Work 6">
            </div>
        </div>
    </main>

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