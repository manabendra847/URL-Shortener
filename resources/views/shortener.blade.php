<!DOCTYPE html>
<html>

<head>
    <title>URL Shortener</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            background-color: antiquewhite;
        }
        section{
            align-items: center;
            position: relative;
            top: 5rem;
            text-align: center;
        }
        input{
            width: 20vw;
            margin: 1rem;
            border-radius: 3px;
        }
        button{
            background-color: rgb(143, 123, 154);
            color: aliceblue;
            font-weight: bold;
            border-radius: 3px;
        }
        .navbar{
            background-color: rgb(143, 123, 154);
            color: aliceblue;
            font-weight: bolder;
        }
        .nav-item .nav-link{
            color: aliceblue;
            font-weight: bold;
        }
        .dropdown-menu{
            background-color: rgb(143, 123, 154);
            color: aliceblue;
            font-weight: bolder;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <h5 class="navbar-brand col-lg-3 me-0">URL Shortener</h5>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Manage</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sign in</a></li>
                            <li><a class="dropdown-item" href="#">Sign up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <h4>Do your action here</h4>
        <form action="/shorten" method="POST">
            @csrf
            <input type="text" name="url" placeholder="Enter your long URL" required>
            <button type="submit">Shorten</button>
        </form>

        @isset($shortUrl)
        <p>Shortened URL: <a href="{{ $shortUrl }}" target="_blank">{{ $shortUrl }}</a></p>
        @endisset
    </section>
</body>

</html>