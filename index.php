<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Student Management System</title>
    <link rel="stylesheet" href="Styles/main_page.css">
</head>

<body>
    <video autoplay loop muted playsinline class="background-video">
        <source src="Assets/classroom.mp4" type="video/mp4">
    </video>
    <div class="background-overlay"></div>
    <header class="header">
        <nav>
            <h1 class="logo">Class Nest</h1>

            <div class="links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Admission</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login.php" class="btn btn-success">Login</a></li>
                </ul>
            </div>

        </nav>
    </header>
    <!--########## Section 1 ##########-->
    <div class="section1">
        <div class="vision-container">
            <h1 class="vision_heading">
                A well-organized platform for managing student and teacher data
            </h1>
        </div>
    </div>

    <!--########## Section 2 ##########-->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="image1" src="Assets/Images/school.jpg" alt="">
            </div>

            <div class="col-md-8">
                <h1 class="description_heading">
                    Welcome to class nest
                </h1>
                <p class="school_description">
                    Class Nest enables to efficiently organize student records, teacher information, and available courses, ensuring easy access and management. Teachers can view student lists and assigned courses, while students can explore their enrolled subjects and instructors.
                    By simplifying data management, this platform enhances transparency, efficiency, and organization in educational institutions, making it easier to monitor academic activities and maintain structured records. 📊🎓
                </p>
            </div>
        </div>
    </div>

    <!--########## Section 3 ##########-->
    <div class="teacher_container">
        <center>
            <h1 class="teacher_heading">
                Our instructors
            </h1>
        </center>

        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="Assets/Images/teacher1.jpg" alt="">
                <p class="teacher_description">
                    Ms. Sarah Mitchell is a nurturing and enthusiastic kindergarten teacher with a passion for early childhood education. She creates a warm and welcoming classroom where young learners feel safe to explore, grow, and develop a love for learning.
                </p>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="Assets/Images/teacher2.jpg" alt="">
                <p class="teacher_description">
                    Mrs. Laura Thompson is a dynamic high school science teacher specializing in biology and environmental science. With over a decade of experience, she brings excitement to the classroom through hands-on experiments, field trips, and real-world applications of science.
                </p>
            </div>

            <div class="col-md-4">
                <img class="teacher" src="Assets/Images/teacher3.jpg" alt="">
                <p class="teacher_description">
                    Dr. Natalie Collins is a passionate history professor with expertise in modern world history and cultural studies. With a Ph.D. in History, she encourages students to think critically about historical events and their impact on today's society.
                </p>
            </div>
        </div>

    </div>
    <br>

    <!--########## Section 4 ##########-->

    <div class="admission_container">
        <center>
            <h1 class="admission_heading">Admission Form</h1>
        </center>

        <div class="admission_form">
            <form action="" class="form">
                <div>
                    <label class="label_text">Name</label>
                    <input type="text" name="name" placeholder="Enter your full name">
                </div>
                <div>
                    <label class="label_text">Email</label>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div>
                    <label class="label_text">Contact Number</label>
                    <input type="tel" name="contact" placeholder="Enter your contact number">
                </div>
                <div>
                    <label class="label_text">Message</label>
                    <textarea name="message" rows="4" placeholder="Enter your message"></textarea>
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <br><br><br><br><br>
    <!--########## Section 5 ##########-->

    <footer class="footer">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section about">
                <h3>Class Nest</h3>
                <p>An innovative platform for seamless student and teacher data management.</p>
            </div>

            <!-- Contact Info Section -->
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Education Lane, City, Country</p>
                <p><i class="fas fa-phone"></i> +123 456 7890</p>
                <p><i class="fas fa-envelope"></i> info@classnest.com</p>
            </div>

            <!-- Newsletter Signup -->
            <div class="footer-section newsletter">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="footer-bottom">
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
            <p>© 2025 Class Nest. All Rights Reserved.</p>
        </div>
    </footer>





</body>

</html>