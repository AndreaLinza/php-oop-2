<?php
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Category.php';
require_once __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">


    <title>Animal House</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: lavender;">

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-warning py-3">
        <div class="container">
            <a class="navbar-brand title fw-bold text-dark d-flex align-items-center" href="#">
                <img class="logo" src="./db/assets/bearIcon.jpg" alt="">
                <h1>Animal House</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categorie</a>
                    </li>
                    <div class="input-group input-group-sm pt-3 mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <button class="input-group-text btn btn-outline-dark" id="inputGroup-sizing-sm"><i class=" fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="my-auto mx-2">
                        <button type="button" class="btn btn-outline-dark border-0"><i class="fa-solid fa-cart-arrow-down"></i></button>
                    </div>

                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5 py-5">

        <div class="row row-cols-3 mt-5 py-5">
            <?php
            foreach ($productsList as $product) {
            ?>

                <div class="col g-4">
                    <div class="card">
                        <img src="<?php echo $product->getImg()
                                    ?>" class="card-img-top" alt="locandina">
                        <div class="card-body">
                            <h5 class="card-title pb-3"><?php echo $product->getName()
                                                        ?></h5>
                            <p class="card-text pb-3 fw-bold"><span>€</span><?php echo $product->getPrice()
                                                        ?></p>
                            <p class="card-text pb-3"><?php echo $product->getCategory()
                                                        ?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>