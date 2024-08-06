<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="draft_prod.css" rel="stylesheet">
    <title>Drafts Produits</title>
</head>
<body>
<?php include 'header.inc.php'; ?>
<main>
    <h1>Design</h1>
    <div class="product-listing">
        <aside class="sidebar">
            <h2>Shop By</h2>
            <p>______________________</p>
            <div class="filter">
                <h3>Categories</h3>
                <p>______________________</p>
                <ul>
                    <li><a href="#">Sac de sport (50)</a></li>
                    <li><a href="#">Basket (10)</a></li>
                    <li><a href="#">Short (50)</a></li>
                    <li><a href="#">Chaussettes (50)</a></li>
                    <li><a href="#">Maillot (50)</a></li>
                    <li><a href="#">Slip (50)</a></li>
                </ul>
            </div>
            <div class="filter">
                <h3>Price</h3>
                <input type="range" min="0" max="10000" step="100" value="5000">
            </div>
            <div class="filter">
                <h3>Color</h3>
                <div class="colors">
                    <span style="background-color: red;"></span>
                    <span style="background-color: blue;"></span>
                    <span style="background-color: green;"></span>
                    <span style="background-color: yellow;"></span>
                    <span style="background-color: purple;"></span>
                    <span style="background-color: black;"></span>
                </div>
            </div>
            <div class="filter">
                <h3>Brand</h3>
                <label><input type="checkbox"> Karma (50)</label>
                <label><input type="checkbox"> Ideas (50)</label>
            </div>
        </aside>
        <div class="products">
            <div class="banner">
                <img src="pack/ressources/img-03.png" alt="Banner">
            </div>
            <div class="container">
                <!-- First row with three products -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-3 border bg-light text-center">
                            <img src="pack/ressources/prodA.png" class="img-fluid" alt="sac Adidas">
                            <h5>Sac de sport</h5>
                            <p>€ 20.00</p>
                            <a href="chariot.php?id=sac" id="sac" alt="sacAdidas">
                                <img src="pack/ressources/img-11.png" alt="addToCart">
                                <img src="pack/ressources/img-12.png" alt="12">
                                <img src="pack/ressources/img-13.png" alt="13">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border bg-light text-center">
                            <img src="pack/ressources/prod2.png" class="img-fluid" alt="basket Adidas">
                            <h5>Basket</h5>
                            <p><span class="prix-original">€ 220.00</span> € 180</p>
                            <a href="chariot.php?id=basket" id="basket" alt="basket">
                                <img src="pack/ressources/img-11.png" alt="addToCart">
                                <img src="pack/ressources/img-12.png" alt="12">
                                <img src="pack/ressources/img-13.png" alt="13">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border bg-light text-center">
                            <img src="pack/ressources/prod3.png" class="img-fluid" alt="short Adidas">
                            <h5>Short</h5>
                            <p><span class="prix-original">€ 89.00</span></p>
                            <a href="chariot.php?id=short" id="short" alt="short">
                                <img src="pack/ressources/img-11.png" alt="addToCart">
                                <img src="pack/ressources/img-12.png" alt="12">
                                <img src="pack/ressources/img-13.png" alt="13">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Second row with three products -->
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="p-3 border bg-light text-center">
                            <img src="pack/ressources/prod4.png" class="img-fluid" alt="slip">
                            <h5>Slip - Femme</h5>
                            <p>€ 20.00</p>
                            <a href="chariot.php?id=slip" id="slip" alt="slip">
                                <img src="pack/ressources/img-11.png" alt="addToCart">
                                <img src="pack/ressources/img-12.png" alt="12">
                                <img src="pack/ressources/img-13.png" alt="13">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border bg-light text-center">
                            <img src="pack/ressources/prod5.png" class="img-fluid" alt="chaussettes">
                            <h5>Basket</h5>
                            <p><span class="prix-original">€ 220.00</span> € 180</p>
                            <a href="chariot.php?id=socket" id="socket" alt="chaussettes">
                                <img src="pack/ressources/img-11.png" alt="addToCart">
                                <img src="pack/ressources/img-12.png" alt="12">
                                <img src="pack/ressources/img-13.png" alt="13">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 border bg-light text-center">
                            <img src="pack/ressources/prod6.png" class="img-fluid" alt="maillot">
                            <h5>Short</h5>
                            <p><span class="prix-original">€ 89.00</span></p>
                            <a href="chariot.php?id=maillot" id="maillot" alt="maillot">
                                <img src="pack/ressources/img-11.png" alt="addToCart">
                                <img src="pack/ressources/img-12.png" alt="12">
                                <img src="pack/ressources/img-13.png" alt="13">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <a href="page2.prod.php">next &raquo;</a>
            </div>
        <!--    <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">next</a>
                    <a href="#">&raquo;</a>
                </div>
        -->
        </div>
    </div>
</main>
<?php include 'footer.inc.php';?>
</body>
</html>