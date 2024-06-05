<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .movie-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            text-align: center;
        }

        .movie-card img {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 15px;
        }

        .movie-card .movie-details {
            margin-top: 10px;
        }

        .movie-card .movie-title {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .movie-card .movie-price {
            color: #007bff;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Movie Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="shop.php">Shop <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Shop</h1>
        <p>Here you can pre-oder the upcoming movies.</p>
        <div class="row">
            <?php
            $movies = json_decode(file_get_contents('movies.json'), true);

            foreach ($movies as $movie) {
                echo '<div class="col-md-4">';
                echo '<div class="movie-card">';
                echo '<img src="' . $movie["poster"] . '" alt="Movie Poster">';
                echo '<div class="movie-details">';
                echo '<p class="movie-title">' . $movie["title"] . '</p>';
                echo '<p class="movie-price">$' . $movie["price"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

</body>

</html>