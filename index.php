<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Activity</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Enforce a uniform size for all card images */
        .card-img-top {
            width: 100%;
            height: 400px; /* Adjust the height as needed */
            object-fit: cover; /* Ensures the image maintains aspect ratio and fills the area */
        }

        body {
            background-image: url(monstdat.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        
}

.wrapper {
    background: rgba(255, 255, 255, 0.31);
    border-radius: 16px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(114, 167, 255, 0.3);
}


    </style>
</head>
<body>

<div class="container my-5">
    <div class="wrapper row row-cols-1 row-cols-md-4 g-4">
        
        <?php
        // Associative array with exactly 4 image paths, descriptions, prices, and links
        $cards = [
            [
                "image" => "genshin.jpg",
                "title" => "Genshin Impact",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price" => "Free",
                "link" => "card1.php"
            ],
            [
                "image" => "lol.webp",
                "title" => "League Of Legends",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price" => "Free",
                "link" => "card2.php"
            ],
            [
                "image" => "nmc.jpg",
                "title" => "Minecraft",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price" => "Free",
                "link" => "card3.php"
            ],
            [
                "image" => "wuwa.jpg",
                "title" => "Wuthering Waves",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "price" => "Free",
                "link" => "card4.php"
            ]
        ];

        // Loop through the array and display each card
        foreach ($cards as $card) {
            echo '
            <div class="col">
                <div class="card h-100">
                    <img src="' . $card["image"] . '" class="card-img-top" alt="' . $card["title"] . '">
                    <div class="card-body">
                        <h4 class="card-title">' . $card["title"] . '</h4>
                        <p class="card-text">' . $card["description"] . '</p>
                        <b class="card-text">' . $card["price"] . '</b>
                        <br>
                        <a href="' . $card["link"] . '" class="btn btn-primary mt-3" target="_blank">Buy Now</a>
                    </div>
                </div>
            </div>';
        }
        ?>
        
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

