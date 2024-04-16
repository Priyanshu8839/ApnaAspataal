<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Apna Aspataal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <style>.radio{
        font-size: 19px;
        font-weight: 500;
        text-transform: capitalize;
        display: inline-block;
        vertical-align: middle;
        color: black;
        position: relative;
        padding-left: 54px;
        cursor: pointer;
      }
      .radio + .radio{
        margin-left: 20px;
      }
      .radio input[type="radio"]{
        display: none;
      }
      .radio span{
        height: 22px;
        width: 20px;
        border-radius: 38%;
        border: 3px solid #c20642;
        display: block;
        position: absolute;
        left: 23px;
        top: -1px;
      }
      .radio span:after{
        content: "";
        height: 8px;
        width: 8px;
        background: #c20642;
        display: block;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%) scale(0);
        border-radius: 50%;
        transition: 300ms ease-in-out 0s;
      }
      .radio input[type="radio"]:checked ~ span:after{
        transform: translate(-50%,-50%) scale(1);
      }
      .add{
text-decoration: none;
display: inline-block;
width: 30px;
height: 30px;
background: #8bc34a;
font-size: 2rem;
font-weight: bold;
color: #fff;
display: flex;
justify-content: center;
align-items: center;
      }
      </style>

    <!-- Favicon -->
    <link href="img/Icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body  background="img/doctor-3.jpg">
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-solid fa-hospital me-2"></i>Apna Aspataal</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="Appoinment/index.php" class="nav-item nav-link">Appointment</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="DoctorSignup.php" class="dropdown-item active">Doctor Sign-Up</a>
                                <a href="DoctorLogin.php" class="dropdown-item">Doctor Log-In</a>
                                <a href="PatientSignup.php" class="dropdown-item">Patient Sign-Up</a>
                                <a href="PatientLogin.php" class="dropdown-item">Patient Log-In</a>
                                <a href="User_Education.php" class="dropdown-item">UserEducation</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="Chatbot/bot.php" class="nav-item nav-link">Chatbot</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <div class="container-fluid py-5">
        <div class="container">
            
                
                <div class="div">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Medicine Details</h1> <a id="add-btn" class="add" onclick="addInputField()">&plus;</a>
                        <form action="Medicine.php" method="post" enctype="multipart/form-data">
                        <div class="col-12">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Patient Email" style="height: 35px;" name="PatientEmail">
                                </div>
                        <div id="input-container">
                                 
                              </div>
                              <div class="col-12">
                                <br>
                              <button class="btn btn-primary w-100 py-3" name="Sumbit" type="submit">Sumbit</button>
                              </div>
                              </form>
                          </div>
                      
                      
                          <script>
                              function addInputField() {
                                  const container = document.getElementById('input-container');
                      
                                  // Create a new input field
                                  const inputField = document.createElement('div');
                                  inputField.classList.add('input-container');
                                  inputField.innerHTML = `
                                                    <div class="row g-3">
                                                      <div class="col-12">
                                                          <input type="text" class="form-control bg-white border-0" placeholder="Medicine Name" style="height: 35px;" name="MedicineName">
                                                      </div>
                      
                                                      <div class="col-12">
                                                          <label>
                                                            <input type="checkbox" value="1" name="Medicine_Time">
                                                            Morning &nbsp; &nbsp; &nbsp; 
                                                          </label>
                                                          <label>
                                                            <input type="checkbox" value="2" name="Medicine_Time">
                                                            Afternoon &nbsp; &nbsp; &nbsp; 
                                                          </label>
                                                          <label>
                                                            <input type="checkbox" value="3" name="Medicine_Time">
                                                            Night
                                                          </label>
                                                        </div>
                      
                                                      <div class="col-12">
                                                          <label for="Medicine Image">Medicine Image</label>
                                                          <input type="file" class="form-control bg-white border-0" placeholder="Medicine Image" style="height: 35px;" name="MedicineImage">
                                                      </div>
                                                    </div>
                                                      
                          <button class="btn btn-primary w-100 py-3" onclick="removeInputField(this)">Remove</button>
                          
                                    
                                  `;
                                  // Append the new input field to the container
                                  container.appendChild(inputField);
                              }
                      
                              function removeInputField(button) {
                                  const container = document.getElementById('input-container');
                                  const inputContainer = button.parentElement;
                                  container.removeChild(inputContainer);
                              }
                          </script>
                        </form>
                    </div>
                </div>

               

            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">Our virtual hospital connects users with top-tier doctors remotely.
</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>SAGE University,Sahara Bypass Road, Katara Hills, Extension, Bhopal, Madhya Pradesh 462022, India</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>Apnaaspataal@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+91 88392 46860</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://youtube.com/freewebsitecode/"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>