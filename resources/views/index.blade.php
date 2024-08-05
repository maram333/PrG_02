<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Maram Alawad CV</title>
</head>

<body>
<input type="checkbox" id="theme-toggle" />
    <label for="theme-toggle" class="theme-toggle-label">
        <i class="bi bi-sun"></i>
        <i class="bi bi-moon"></i>
    </label>
    <section class="main-section container-fluid">
        <div class="row">
            <!-- Left Part -->
            <div class="left-part col-lg-4 col-md-12">
                <div class="photo-container">
                    <img src="profile.jpg" alt="Profile Picture">
                </div>
				
                <div class="banner">
                    <p class="fullname">Maram Mohammad Alawad</p>
                    <p class="position">IT student</p>
                </div>
                <div class="contact-container">
                    <h2 class="title">Contact Information</h2>
                    <div class="contact-list d-flex align-items-center mb-3">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <p>Buraydah, Alqassim</p>
                    </div>
                    <div class="contact-list d-flex align-items-center mb-3">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <p>maramalawad3@gmail.com</p>
                    </div>
                    <div class="contact-list d-flex align-items-center mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <p>0507552672</p>
                    </div>
                </div>
                <div class="languages-container languages">
                 <h2 class="title">Languages</h2>
                 <ul>
                    <li>
                       <h3>Arabic</h3>
                       <p>Excellent</p>
                    </li>
                    <li>
                       <h3>English</h3>
                       <p>Very good</p>
                    </li>
                 </ul>
                </div>
                <div class="skills-container">
                    <h2 class="title">Skills</h2>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Communication skills</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Technical skills</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 70%;"></div>
                        </div>
                    </div>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Leadership skills</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Teamwork</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Research skills</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Programming languages: Python, Java, C++</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="skill d-flex justify-content-between mb-3">
                        <p>Web development: HTML, CSS, JavaScript</p>
                        <div class="outer-layer">
                            <div class="inner-layer" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Right Part -->
                <div class="right-part col-lg-8 col-md-12">
                <div class="about-container">
                    <h2 class="title">ABOUT ME</h2>
                    <div class="about">
                        <p>I am a motivated IT student with a deep-seated passion for technology.
						My enthusiasm for the field of Information Technology drives me to constantly seek out new knowledge and skills, and I am committed to staying abreast of the latest advancements and trends in the industry.
						From a young age, I have been fascinated by the potential of technology to transform lives and solve complex problems, and this fascination has only grown stronger over the years.
						My dedication to my studies and my eagerness to engage in hands-on projects have equipped me with a solid foundation in various IT disciplines.
						Whether it’s exploring the intricacies of programming languages, delving into database management, or designing innovative web solutions, my passion for technology fuels my drive to excel and make a meaningful impact in the world of IT.</p>
                    </div>

                    <div class="education-container">
                        <h2 class="title">Education</h2>
                        <div class="education">
						<ul>
                            <li class="education-title">Qassim University</li>
                            <li class="college-name"> Computer Department, Specialization in Information Technology</li>
                            <li class="education-gpa">GPA:4.36</li>
							</ul>
                        </div>
                    </div>
                    <div class="course-container">
                        <h2 class="title">Courses</h2>
                        <ul>
                            <li>
                                <p>Oracle Database 12c: Basic SQL</p>
                            </li>
                            <li>
                                <p>Oracle Database 12c: Advanced SQL</p>
                            </li>
                            <li>
                                <p>Learning Oracle Database 12c</p>
                            </li>
                            <li>
                                <p>Database Foundations: Administration</p>
                            </li>
                            <li>
                                <p>Learning NoSQL Database</p>
                            </li>
                            <li>
                                <p>Oracle Database 12c: Security</p>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-form mt-4">
                        <h2 class="title">: للتواصل</h2>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">الاسم</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">البريد الالكتروني</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">الرسالة</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </form>
                    </div>

                    <div class="animated-text mt-4">
                   <p>CV</p>
                   </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
 
   
  
  
