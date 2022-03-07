<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Memanggil bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <!-- awal navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">WORKSHOP WEB</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Programming</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">PHP</a></li>
                            <li><a class="dropdown-item" href="#">ASP</a></li>
                            <li><a class="dropdown-item" href="#">AJAX</a></li>
                            <li><a class="dropdown-item" href="#">jQuery</a></li>
                            <li><a class="dropdown-item" href="#">MySQL</a></li>
                            <li><a class="dropdown-item" href="#">CSS</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Software</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Visual Studio Code</a></li>
                            <li><a class="dropdown-item" href="#">Sublime Text</a></li>
                            <li><a class="dropdown-item" href="#">Notepad++</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <a class="btn btn-outline-light text-white" href="/login">Sign In</a>
                    <a class="btn btn-light text-primary mx-2" href="#">Sign Up</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- akhir navigasi -->

    <div class="container">
        <div class="p-4 p-md-5 mt-5 mb-4 text-white rounded bg-primary">
            <div class="px-0">
                <h1 class="fst-bold">Workshop Sistem Informasi Berbasis Web Framework</h1>
                <p class="lead my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat doloribus deserunt inventore sit obcaecati dignissimos sint perferendis pariatur odio tenetur delectus, laudantium ipsa, reprehenderit debitis vero earum explicabo assumenda?</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
        </div>
    </div>
</body>

</html>