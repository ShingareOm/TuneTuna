<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TuneTuna - Feel the vibe, with TT</title>
        <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        
        <style>
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
            .search-label {
  display: flex;
  align-items: center;
  box-sizing: border-box;
  position: relative;
  border: 1px solid transparent;
  border-radius: 12px;
  overflow: hidden;
  background: #3D3D3D;
  padding: 9px;
  cursor: text;
}

.search-label:hover {
  border-color: gray;
}

.search-label:focus-within {
  background: #464646;
  border-color: gray;
}

.search-label input {
  outline: none;
  width: 100%;
  border: none;
  background: none;
  color: rgb(162, 162, 162);
}

.search-label input:focus+.slash-icon,
.search-label input:valid+.slash-icon {
  display: none;
}

.search-label input:valid~.search-icon {
  display: block;
}

.search-label input:valid {
  width: calc(100% - 22px);
  transform: translateX(20px);
}

.search-label svg,
.slash-icon {
  position: absolute;
  color: #7e7e7e;
}

.search-icon {
  display: none;
  width: 12px;
  height: auto;
}

.slash-icon {
  right: 7px;
  border: 1px solid #393838;
  background: linear-gradient(-225deg, #343434, #6d6d6d);
  border-radius: 3px;
  text-align: center;
  box-shadow: inset 0 -2px 0 0 #3f3f3f, inset 0 0 1px 1px rgb(94, 93, 93), 0 1px 2px 1px rgba(28, 28, 29, 0.4);
  cursor: pointer;
  font-size: 12px;
  width: 15px;
}

.slash-icon:active {
  box-shadow: inset 0 1px 0 0 #3f3f3f, inset 0 0 1px 1px rgb(94, 93, 93), 0 1px 2px 0 rgba(28, 28, 29, 0.4);
  text-shadow: 0 1px 0 #7e7e7e;
  color: transparent;
}

.navigation-card {
  width: fit-content;
  height: fit-content;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
  background-color: rgb(255, 255, 255);
  padding: 15px 20px;
  border-radius: 50px;
}
.tab {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px;
  height: 50px;
  overflow: hidden;
  background-color: rgb(252, 252, 252);
  padding: 15px;
  border-radius: 50%;
  cursor: pointer;
  text-decoration: none;
  transition: all 0.3s;
}
.tab:hover {
  background-color: rgb(227, 223, 223);
}

.search-label {
    display: flex;
    align-items: center;
    position: relative;
}

.input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    margin-right: 10px;
}

.slash-icon {
    position: absolute;
    right: 40px;
    top: 50%;
    transform: translateY(-50%);
}

.search-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

.results .song {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.results .song img {
    width: 50px;
    height: 50px;
    margin-right: 15px;
}

.results .song h3 {
    margin: 0;
    font-size: 16px;
    flex: 1;
}

.results .song p {
    margin: 0;
    font-size: 14px;
    color: #666;
}

.results .song .download-btn {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    text-decoration: none;
}

#results {
    margin-top: 20px;
}

.song-result {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.song-result img {
    margin-right: 10px;
    width: 50px;
    height: 50px;
}

.song-result h3 {
    margin: 0 10px 0 0;
}

.song-result a {
    margin-left: auto;
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
                        <a class="btn btn-primary" href="#dwnmusic">Get Started</a>
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
                <div class="col-lg-6">
                    <label class="search-label">
                        <input type="text" name="text" id="search-input" class="input" required="" placeholder="Type here...">
                        <kbd class="slash-icon">/</kbd>
                        <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 512 512" xml:space="preserve">
                            <g>
                                <path d="M55.146 51.887 41.588 37.786A22.926 22.926 0 0 0 46.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 0 0 .083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z" fill="currentColor" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </label>
                    <div id="results"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.getElementById('search-input').addEventListener('input', function() {
        let query = this.value.trim();
        if (query.length > 0) {
            fetch(`search.php?query=${encodeURIComponent(query)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        displayResults(data.data.results);
                    } else {
                        document.getElementById('results').innerHTML = `<p>No results found</p>`;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('results').innerHTML = `<p>Error fetching results</p>`;
                });
        } else {
            document.getElementById('results').innerHTML = '';
        }
    });

    function displayResults(results) {
        let resultsContainer = document.getElementById('results');
        resultsContainer.innerHTML = '';
        results.forEach(song => {
            let songDiv = document.createElement('div');
            songDiv.classList.add('song-result');
            songDiv.innerHTML = `
                <img src="${song.image[1].url}" alt="${song.name}">
                <b>${song.name}</b>
                <a href="${song.downloadUrl[4].url}" class="download-link">
                    <svg viewBox="0 0 256 256" height="32" width="38" xmlns="http://www.w3.org/2000/svg">
                        <path d="M74.34 85.66a8 8 0 0 1 11.32-11.32L120 108.69V24a8 8 0 0 1 16 0v84.69l34.34-34.35a8 8 0 0 1 11.32 11.32l-48 48a8 8 0 0 1-11.32 0ZM240 136v64a16 16 0 0 1-16 16H32a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h52.4a4 4 0 0 1 2.83 1.17L111 145a24 24 0 0 0 34 0l23.8-23.8a4 4 0 0 1 2.8-1.2H224a16 16 0 0 1 16 16m-40 32a12 12 0 1 0-12 12a12 12 0 0 0 12-12" fill="currentColor"></path>
                    </svg>
                </a>
            `;
            resultsContainer.appendChild(songDiv);
        });

        document.querySelectorAll('.download-link').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault();
                const url = this.href;
                fetch(url)
                    .then(response => response.blob())
                    .then(blob => {
                        const blobUrl = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = blobUrl;
                        a.download = 'downloaded_file'; // Set the default download name
                        document.body.appendChild(a);
                        a.click();
                        a.remove();
                    })
                    .catch(console.error);
            });
        });
    }
</script>




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
