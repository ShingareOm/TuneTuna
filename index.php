<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            /* Additional CSS for Slider */
            .slider {
                overflow: hidden;
                white-space: nowrap;
                width: 100%;
                box-sizing: border-box;
                padding: 10px 0;
            }
            .slider h2 {
                display: inline-block;
                animation: slide 10s linear infinite;
                white-space: nowrap;
            }
            @keyframes slide {
                0% { transform: translateX(100%); }
                100% { transform: translateX(-100%); }
            }
        </style>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">TuneTuna</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#dwnmusic">Download Music</a></li>
                        <li class="nav-item"><a class="nav-link" href="#devs">developers</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Tunetuna</h1>
                        <div class="slider">
                            <h2 class="text-white-50 mx-auto mt-2 mb-5">Tuntuna se ab kya sharmana, Tunetuna pe bajao apna gana!</h2>
                        </div>
                        <a class="btn btn-primary" href="#about">Get Started</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Vibe with us,❤️ </h2>
                        <p class="text-white-50">
                        TuneTuna is a powerful music downloader that leverages the Savan API, providing a seamless and efficient experience for downloading music. Built with PHP, MySQL, HTML, and Bootstrap Material Theme, TuneTuna offers a modern and user-friendly interface.
                            <a href="https://github.com/ShingareOm/TuneTuna/" target="_top">click here</a>
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="./assets/img/tabla.png" alt="..." />
            </div>
        </section>

        <section class="projects-section bg-light" id="dwnmusic">
            <div class="container px-4 px-lg-5">
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <!-- <div class="col-lg-6"><img class="img-fluid" src="./assets/img/omshingare.gif" alt="..." /></div> -->
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Music Search</h4>
                                    <p class="mb-0 text-white-50">Code is being to add</p>
                                    <?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://saavn.dev/api/search?query=Imagine+Dragons",
  CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects-section bg-light" id="devs">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="./assets/img/omshingare.gif" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Om Shingare</h4>
                                    <p class="mb-0 text-white-50">I'm a learner who love's solving complex problems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="./assets/img/rushishingare.gif" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Rushikesh Shingare</h4>
                                    <p class="mb-0 text-white-50">I'm a learner who love's solving complex problems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Subscribe to receive updates!</h2>
                        <form class="form-signup" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="row input-group-newsletter">
                                <div class="col"><input class="form-control" id="emailAddress" type="email" placeholder="Enter email address..." aria-label="Enter email address..." data-sb-validations="required,email" /></div>
                                <div class="col-auto"><button class="btn btn-primary disabled" id="submitButton" type="submit">Notify Me!</button></div>
                            </div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:required">An email is required.</div>
                            <div class="invalid-feedback mt-2" data-sb-feedback="emailAddress:email">Email is not valid.</div>
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3 mt-2 text-white">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">MAHARASHTRA, INDIA ❤️</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!"><a href="mailto:contactus@tunetuna.me">contactus@tunetuna.me</a></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="tel:+918767561500">+918767561500</a></div>
                                <div class="small text-black-50"><a href="tel:+918080084167">+918080084167</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://omshingare.me"><img src="./assets/img/omportfolio.svg" width="25px"></a>
                    <a class="mx-2" href="https://in.linkedin.com/in/shingareom"><i class="fab fa-linkedin"></i></a>
                    <a class="mx-2" href="https://github.com/ShingareOm"><i class="fab fa-github"></i></a>
                    <a class="mx-2" href="https://github.com/ram2145"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; 2024 - <?php echo date("Y"); ?>
        </div></footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
