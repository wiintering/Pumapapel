<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo1.png">
    <title> Brand Story | Pumapapel Pop-Up Design Studio</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>

/* Brand Story */
.story-section {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

h2 {
    text-align: center;
    font-family: 'Inter';
    font-size: 40px;
    color: black;
    margin-top: 30px;
    margin-bottom: 30px;
}

.story-content {
    background-color: #DFDFDF;
    display: flex;
    max-width: 1200px;
    width: 100%;
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.story-text {
    background-color: #DFDFDF;
    font-family: 'Inter';
    border-radius: 10px;
    flex: 1;
    padding: 20px;
    font-size: 24px;
    color: #333;
}

.story-text h1 {
    color: #2c3e50;
    margin-bottom: 20px;
}

.story-text p {
    font-family: 'Inter';
    margin-bottom: 15px;
}

.story-text ul {
    list-style: none;
    padding-left: 0;
}

.story-text ul {
    list-style: disc; 
    padding-left: 20px; 
}

.story-text ul li strong {
    color: black; 
    font-weight: bold; 
}

.story-image {
    flex: 1;
}

.story-image img {
    border-radius: 10px;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.team-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.team-member {
    display: flex;
    align-items: center;
    margin: 20px 0;
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
}

.team-member img {
    width: 500px;
    height: auto;
    border-radius: 100px;
    margin-right: 10px;
    margin-left: -250px;
    left: -450px;
}

.team-info {
    max-width: 600px;
}

.team-info h3 {
    margin: 0;
    font-size: 48px;
    color: #1F392C;
    font-weight: 600;
}

.team-info p {
    font-size: 16px;
    line-height: 1.6;
    margin-top: 10px;
}

.team-member.alternate {
}

.team-member.alternate img {
    width: 500px;
    height: auto;
    border-radius: 100px;
    margin-right: 10px;
    margin-left: 200px;
    left: -450px;
}

.title-container {
    position: relative;
    text-align: center;
    margin: 40px 0;
}

.title-text {
    font-family: 'Inter';
    font-size: 48px;
    font-weight: 600;
    display: inline-block;
    position: relative;
    padding: 0 20px;
    background-color: white; 
    z-index: 1; 
}

.line-left,
.line-right {
    border-top: 5px solid #E0A722;
    width: 30%;
    position: absolute;
    top: 50%;
}

.line-left {
    left: 0;
}

.line-right {
    right: 0;
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
    font-family: 'Inter';
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


    <h2>KNOW OUR STORY</h2>
    <section class="story-section">
        <div class="story-content">
            <div class="story-text">
                <p>
                    Pumapapel Pop-Up Design Studio was founded in 2018 by internationally-recognized paper engineer Amy Lopez Nayve. 
                    We transform outstanding ideas into stand-out paper experiences that catch the eye and capture the heart. 
                    Our designs are made with excellence and a sense of wonder.
                </p>
                <p>
                    Amy founded Pumapapel Pop-Up Design Studio in 2018, where she works with global clients in transforming ideas into stand-out paper experiences. 
                    She is the first Filipino Paper Engineer to gain recognition abroad for her work “Popfolio”. 
                    She also conducts workshops to spread the art of paper engineering. 
                    She has recently had her work published in the UK.
                </p>
                <ul>
                    <li><strong>Recipient – Emerging Paper Engineer Prize – Honorable Mention</strong>, Kansas City, Missouri, USA, 2018</li>
                    <li><strong>Active Member – The Movable Book Society</strong> (International Organization of Pop-Up Book Artists and Collectors) 2018-Present</li>
                </ul>
            </div>
            <div class="story-image">
                <img src="images/amy.png" alt="Amy Lopez Nayve">
            </div>
        </div>
    </section>
    
    <div class="title-container">
        <div class="line-left"></div>
        <h2 class="title-text">OUR TEAM</h2>
        <div class="line-right"></div>
    </div>

        <section class="team-section">
            <div class="team-member">
                <img src="images/team1.png" alt="Team Member">
                <div class="team-info">
                    <h3>Partners:</h3>
                    <p>Our creative agency forms strong partnerships with diverse businesses, from startups to global brands, based on trust, respect, and a shared vision for success.</p>
                </div>
            </div>

            <div class="team-member alternate">
                <div class="team-info">
                    <h3>Partners:</h3>
                    <p>Our creative agency forms strong partnerships with diverse businesses, from startups to global brands, based on trust, respect, and a shared vision for success.</p>
                </div>
                <img src="images/team1.png" alt="Team Member">
            </div>

            <div class="team-member">
                <img src="images/team1.png" alt="Team Member">
                <div class="team-info">
                    <h3>Partners:</h3>
                    <p>Our creative agency forms strong partnerships with diverse businesses, from startups to global brands, based on trust, respect, and a shared vision for success.</p>
                </div>
            </div>

            <div class="team-member alternate">
                <div class="team-info">
                    <h3>Partners:</h3>
                    <p>Our creative agency forms strong partnerships with diverse businesses, from startups to global brands, based on trust, respect, and a shared vision for success.</p>
                </div>
                <img src="images/team1.png" alt="Team Member">
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
