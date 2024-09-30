<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/logo1.png">
    <title> Contact Us | Pumapapel Pop-Up Design Studio</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *
        .container {
            display: flex;
            max-width: 1000px;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .contact-info {
            background-color: #EAB740;
            color: #000;
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin-top: -400px;
        }
        .contact-info h2 {
            font-family: 'Jost';
            font-size: 28px;
            margin-bottom: 10px;
        }
        .contact-info p {
            font-family: 'Jost';
            color: #fff;
            font-size: 18px;
            font-weight: bold;
        }
        .form-container {
            flex: 1.5;
            padding: 40px;
        }
        .form-group {
            margin-bottom: 20px;
            margin-top: -5px;
        }
        .form-group label {
            font-family: 'Jost';
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }
        
.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box; /* Ensures padding is included in width calculation */
}

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #aaa;
        }
        .form-group select {
            background-color: white;
        }
        .submit-btn {
            display: flex;
            justify-content: flex-end;
        }
        .submit-btn button {
            background-color: #EAB740;
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .submit-btn button:hover {
            background-color: #EAB740;
        }
        .submit-btn button svg {
            margin-left: 10px;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            margin-bottom: -40px;
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
            gap: 50px;
            margin: 0;
            padding: 10px 20px; 
            list-style: none;
            background-color: #EAB740; 
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

        .nav-item a:hover {
            color: #fff; 
        }

        .nav-item a.active {
            color: #fff; 
        }

        footer {
            background-color: #EAB740;
            color: black;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-logo {
            display: flex;
            align-items: center;
        }
        .footer-logo img {
            height: 50px;
        }
        .social-icons a {
            text-decoration: none;
            margin-left: 15px;
        }
        .social-icons img {
            height: 30px;
            width: 30px;
        }

        .input-with-icon {
    position: relative;
    width: 100%; 
}

.input-with-icon input {
    padding-left: 40px; 
}

        .input-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            height: 20px;
            width: 20px;
        }

        body {
    font-family: 'Jost';
    margin: 0;
    padding: 0;
    color: #333;
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
    height: auto; 
    transition: transform 0.3s; 
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
    justify-content: space-between; /
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
</head>
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
<div class="container">
    <div class="contact-info">
        <h2>Would you like us to contact you?</h2>
        <p>We’re always in touch</p>
    </div>
    <div class="form-container">
        <form action="/submit-contact" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <div class="input-with-icon">
                    <img src="images/user.png" alt="Name Icon" class="input-icon">
                    <input type="text" id="name" name="name" placeholder="Enter full name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-with-icon">
                    <img src="images/user.png" alt="Email Icon" class="input-icon">
                <input type="email" id="email" name="email" placeholder="Enter email address" required>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <div class="input-with-icon">
                    <img src="images/phone.png" alt="Phone Icon" class="input-icon">
                    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
                </div>
            </div>
            <div class="form-group">
                <label for="concern">Type of Concern</label>
                <select id="concern" name="concern" required>
                    <option value="" disabled selected>Select Concern</option>
                    <option value="general">General Inquiry</option>
                    <option value="support">Customer Support</option>
                    <option value="feedback">Feedback</option>
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Other Notes</label>
                <textarea id="notes" name="notes" rows="4" placeholder="Enter other notes or comments"></textarea>
            </div>
            <div class="submit-btn">
                <button type="submit">
                    Send
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#FFFFFF">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M2.01 21L23 12 2.01 3v7l15 2-15 2z"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
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