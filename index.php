<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custome CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="bg-tan py-2">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto mx-5">
                        <img src="img/web-logo.svg" alt="Bootstrap" height="24">
                    </a>
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li><a href="" class="nav-link text-blackbrown">About</a></li>
                        <li><a href="" class="nav-link text-blackbrown">Projects</a></li>
                        <li><a href="" class="nav-link text-blackbrown">Services</a></li>
                        <li><a href="" class="nav-link text-blackbrown">Contact</a></li>
                        <li><a href="" class="nav-link text-blackbrown">Blog</a></li>
                        <li class=""><a href="#" class="nav-link text-blackbrown">About</a></li>
                        <li class="py-2 px-2">
                            <button class="btn btn-outline-dark rounded-0 btn-sm" type="button">
                                Sign in
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded-0 bg-beige">
            <div class="row justify-content-evenly border-blackbrown">
                <div class="col-lg-4 mx-lg-5">
                    <img src="img/me-toon_you_beta3.png" class="img-fluid rounded-5" alt="...">
                </div>
                <div class="col-lg-7 py-5">
                    <h1 class="ff-monoton d-inline px-lg-4 py-lg-1 rounded-5 bg-blackbrown text-tan">@FIKRIFAUZI</h1>
                    <h1 class=" my-3 pb-lg-5 ff-monoton">I’m an aspiring developer<br> from Shah Alam, Malaysia </h1>
                    <div class="d-inline px-lg-4 pt-lg-4 pb-lg-3 rounded-5 bg-blackbrown text-tan social-bar">
                        <a href=""><i class="fa-brands fa-github header-logo"></i></a>
                        <a href=""><i class="fa-brands fa-linkedin header-logo"></i></a>
                        <a href=""><i class="fa-brands fa-discord header-logo"></i></a>
                        <a href=""><i class="fa-brands fa-instagram header-logo"></i></a>
                        <a href=""><i class="fa-brands fa-twitter header-logo"></i></a>
                        <a href=""><i class="fa-brands fa-facebook header-logo"></i></a>
                        <a href=""><i class="fa-brands fa-whatsapp header-logo"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-around">
                <div class="col-lg-3 bg-tan py-1">
                    <h5 class="fw-bold my-3">Language/Framework</h5>
                    <p>Dart, Python, C#, MySQL, SQLite, Bootstrap 5, HTML, CSS, Javascript</p>
                    <h5 class="fw-bold my-3">Tools/Software</h5>
                    <p>Photoshop, Illustrator, XD, Figma, Premier Pro</p>
                    <button class="btn btn-outline-dark rounded-0 btn-sm" type="button">
                        Download CV <i class="fa-regular fa-circle-down"></i>
                    </button>
                </div>
                <div class="col-lg-3 bg-tan py-1">
                    <h5 class="fw-bold my-3">Recent projects</h5>
                    <div class="d-block">
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/blogger.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Blog Web App</h6>
                                <h7 class="d-block m-1">Procedural PHP</h7>
                                <a href="" class="d-inline px-1"><i class="fa-brands fa-github logo-mini"></i></a>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/inventory.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Inventory Web App</h6>
                                <h7 class="d-block m-1">Procedural PHP</h7>
                                <a href="" class="d-inline px-1"><i class="fa-brands fa-github logo-mini"></i></a>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/monster.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Monster Avoid Rocks</h6>
                                <h7 class="d-block m-1">Unity 2D Android Game</h7>
                                <a href="" class="d-inline px-1"><i class="fa-brands fa-github logo-mini"></i></a>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>

                        </div>
                        <div class="row read-more">
                            <button class="btn btn-outline-dark rounded-0 btn-mini" type="button">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 bg-tan py-1">
                    <h5 class="fw-bold my-3">Upcoming/Ongoing projects</h5>
                    <div class="d-block">
                        <div class="row mb-2">
                            <div class="col-4 align-items-center">
                                <a href="" class="d-inline">
                                    <img src="img/girlburnhouse.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Meme Hub App</h6>
                                <h7 class="d-block m-1">Procedural PHP</h7>
                                <a href="" class="d-inline px-1"><i class="fa-brands fa-github logo-mini"></i></a>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4 align-items-center">
                                <a href="" class="d-inline">
                                    <img src="img/me-toon_you_beta3.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Personal Portfolio</h6>
                                <h7 class="d-block m-1">Procedural PHP</h7>
                                <a href="" class="d-inline px-1"><i class="fa-brands fa-github logo-mini"></i></a>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row read-more">
                            <button class="btn btn-outline-dark rounded-0 btn-mini" type="button">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-around">
                <div class="col-lg-3 bg-tan py-1">
                    <h5 class="fw-bold my-3">Personal Blog</h5>
                    <div class="d-block">
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/blogger.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/inventory.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/monster.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>

                        </div>
                        <div class="row read-more">
                            <button class="btn btn-outline-dark rounded-0 btn-mini" type="button">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 bg-tan py-1">
                    <h5 class="fw-bold my-3">Dev/Tech Blog</h5>
                    <div class="d-block">
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/blogger.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/inventory.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/monster.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>

                        </div>
                        <div class="row read-more">
                            <button class="btn btn-outline-dark rounded-0 btn-mini" type="button">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 bg-tan py-1">
                    <h5 class="fw-bold my-3">Event/Announcement</h5>
                    <div class="d-block">
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/blogger.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/inventory.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <a href="" class="d-inline">
                                    <img src="img/monster.png" class="img-thumnail rounded-4 w-100" alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <h6 class="d-block m-1">Title</h6>
                                <h7 class="d-block m-1">More Desciption</h7>
                                <a href="" class="d-inline px-1"><i class="fa-solid fa-blog logo-mini"></i></i></a>
                            </div>

                        </div>
                        <div class="row read-more">
                            <button class="btn btn-outline-dark rounded-0 btn-mini" type="button">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-2 text-center text-body-secondary bg-tan">
        <p class="pt-2"> Copyright &copy; 2023 - All right reserved
        </p>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>