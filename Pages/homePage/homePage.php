
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Recyclemart/Pages/homePage/homePage.css">

     <!--lato font-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Recyclemart</title>
</head>
<body>
    <!--navigation-->
    <div class="nav">
        <a href=""><h1>Recyclemart</h1></a>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        
        <div class="buttons">
            <button id = "open-sign-up" class="btn">Sign-up</button>
            <button id = "open-sign-in" class="btn">Sign-in</button>
        </div>
        
    </div>
    
    <!--main content-->
    <div class="main">
        <img src="/Recyclemart/Pages/homePage/imgs/bg2.png" alt="">
        <div class="main-content">
            <h1>Recyclemart</h1>
            <p><i>Where sustainability meets convinience.</i></p>
            <button onclick="">Buy now!</button>
        </div>
    </div>

    <!--services-->
    <div class="services-container" id="services">

        <div class="services-title">
            <h2>Services</h2>

        </div>
        

        <div class="cards-control">
        <div class="cards" id ="card-1">
            <h2>Quality Products</h2>
            <p>Experience excellence with our curated selection of quality products. Each item undergoes rigorous quality control checks to meet our high standards of craftsmanship and durability. From premium materials to meticulous attention to detail, we ensure that every product exceeds your expectations.</p>
        </div>

        <div class="cards">
            <h2>Sustainability Focus</h2>
            <p>Discover our dedication to sustainability. We offer a diverse selection of recycled products, each designed to minimize waste and promote environmental conservation. With every purchase, you're supporting our mission to create a greener, more sustainable future.</p>
        </div>

        <div class="cards">
            <h2>Transparency</h2>
            <p>Transparency is key at Recyclemart. From sourcing to manufacturing, we're open about our practices. With clear insights into our supply chain and ethical standards, you can trust that every purchase supports integrity and accountability</p>
        </div>

        <div class="cards">
            <h2>Social Impact</h2>
            <p>Beyond sustainability, each purchase at Recyclemart creates social impact. Through local partnerships, we foster employment, empowerment, and economic development, building a brighter future for people and the planet.</p>
        </div>

        <div class="cards">
            <h2>User-Friendly</h2>
            <p>We believe in simplicity without compromising functionality. Our user-friendly interface is designed with you in mind, ensuring a seamless and intuitive experience for every visitor. Whether you're a seasoned shopper or new to our platform, navigating our website is a breeze</p>
        </div>

        <div class="cards">
            <h2>Security</h2>
            <p>We prioritize your security above all else. Our robust security measures ensure that your data and transactions are protected at every step. With advanced encryption and regular security audits, you can trust that your information is in safe hands</p>
        </div>
    </div>

    <!--Sign up-->
    <div id="sign-up" class="modal">
    <div class="sign-up-content">
        <span class="close-sign-up">&times;</span>
    
        <form action="" id ="login-form">
            <div class="form-control">
                <h3>Sign-up</h3>
                <div class="sign-up-username" id ="sign-up-username">
                    <label for="username">Username </label>
                    <input type="text" name="sign-up-username">
                    <span class = "invalid-account"></span>
                </div>
                <div class="sign-up-password" id="sign-up-password">
                    <label for="username">Password </label>
                    <input type="password" name="sign-up-password">
                    <span class = "invalid-account"></span>
                </div>
                <button onclick="login()">Sign-up</button>
            </div>
        </form>
    </div>
    </div>

    <!--Sign in-->
    <div id="sign-in" class="modal">
    <div class="sign-in-content" id = "sign-in-content">
        <span class="close-sign-in">&times;</span>
    
        <form action="" id = "registration-form" >
            <div class="form-control">


                <h3>Sign-in</h3>

                <div id="response"></div>

                <div class="input-control">
                <div class="pikachu">
                    <label for="full-name">Full Name </label>
                    <input type="text" name="full-name">
                    <span id = "full-name-err" class="errors"></span>
                </div>


                <div class="pikachu">
                    <label for="sign-in-username"  >Username </label>
                    <input type="text" name="sign-in-username">
                    <span id = "username-err" class="errors"></span>
                </div>


                <div class="pikachu">
                    <label for="username">Password </label>
                    <input type="password" name="sign-in-password">
                    <span id = "password-err" class="errors"></span>
                </div>
                <div class="pikachu">
                    <label for="address">Address </label>
                    <input type="text" name="address">
                    <span id = "address-err" class="errors"></span>
                </div>
                <div class="pikachu">
                    <label for="contact-number">Contact Number </label>
                    <input type="text" name="contact-number">
                    <span id = "contact-number-err" class="errors"></span>
                </div>
                <div class="pikachu">
                    <label for="confirm-password">Confirm Password </label>
                    <input type="password" name = "confirm-password">
                    <span id = "confirm-password-err" class="errors"></span>
                </div>
                </div>
                

                <button onclick="register()">Sign-in</button>
            </div>
        
        </form>
    </div>
    </div>

    <!--footer
     <div class="footer">
        <div class="footer-container">
            <h3>Recyclemart</h3>
        </div>
    </div>


    -->
</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/Recyclemart/Pages/homePage/homePage.js"></script>
<script src="/Recyclemart/Backend/registration/registration.js"></script>
<script src="/Recyclemart/Backend/login/login.js"></script>



</html>