<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="" class="navbar-logo">Online School</a>
            <button class="navbar-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="navbar-menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Banner section  -->
    <section class="container section">
        <div class="banner-container">
            <div class="banner-content">
                <p class="heading">School Management <br><span>System</span></p>
                <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat quasi quam
                    perspiciatis officiis!</p>
                <button class="button">Go To Class</button>
            </div>

            <div class="banner-form">
                <form action="" class="form">
                    <h2 class="text-center">Admission Form</h2>
                    <input type="text" name="" id="" placeholder="Name" class="input">
                    <input type="email" name="" id="" placeholder="Email" class="input">
                    <input type="phone" name="" id="" placeholder="Phone" class="input">
                    <input type="text" name="" id="" placeholder="Class" class="input">
                    <button type="submit" class="button">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Our Course section -->
    <section class="container section">
        <h1 class="section-heading text-center">Our Courses</h1>
        <div class="card-container">
            <?php
            for ($i = 0; $i < 4; $i++) { ?>
                <div class="card">
                    <img src=" /school_management/assets/images/c-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">
                            <samp>Duration: </samp><br>
                            <span>Price:</span>
                        </p>
                        <a href="#" class="card-button">Details</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Teacher Section -->
    <section class="container section">
        <div class="text-center">
            <h1 class="section-heading">Our Teacher</h1>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecat
                facilis nulla</p>
        </div>

        <!-- <div class="container">
            <div class="row">
                <div class="col-1g-3">
                    <div class="card">
                        <div class="col-7 position-absolute" style="top: -50px">
                            <img src="./assets/images/placeholder.jpg" alt="" class="mw-100 border rounded-circle">
                        </div>
                        <div class="card-body pt-5 mt-4">
                            <h5 class="card-title">Teacher's Name</h5>
                            <p>
                                <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i
                                    class="fa-regular fa-star"></i>
                            </p>
                            <p class="card-text">
                                <span>Courses: </span> 5
                                <br>
                                <span>Rating:</span> 5
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <div class="card-container">
            <?php
            for ($i = 0; $i < 6; $i++) { ?>
                <div class="card">
                    <img src="/school_management/assets/images/t-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's
                            content.</p>
                        <a href="#" class="card-button">Details</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/b4ce6053fa.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>