<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recipe Book</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- recipe list -->
    <?php require 'sidebar.php'; ?>
    
    <!-- main page content-->
    <div class="main">
        <h1>Recipe Book</h1>
        <p>This website is a collection of recipes I use to keep myself fed :)</p>

        <!-- card display for recipes -->
        <div class="cards">

            <div class = "mains">
                <h3>Mains</h3>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="images/pizza.jpg" width="100" height="100" alt="Pizza">
                            <p><b><a href="recipes/pizza.php">Neopolitan Pizza</a></b></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">Card 2</div>
                    </div>
                    <div class="column">
                        <div class="card">Card 3</div>
                    </div>
                    <div class="column">
                        <div class="card">Card 4</div>
                    </div>
                </div> 
            </div>
            
            <div class = "desserts">
                <h3>Desserts</h3>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="images/baileys_cheesecake.png" width="100" height="100" alt="Baileys cheesecake">
                            <p><b><a href="recipes/baileys_cheesecake.php">Baileys Cheesecake</a></b></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">Card 2</div>
                    </div>
                    <div class="column">
                        <div class="card">Card 3</div>
                    </div>
                    <div class="column">
                        <div class="card">Card 4</div>
                    </div>
                </div> 
            </div>

            <div class = "sides">
                <h3>Sides</h3>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="images/burger_sauce.png" width="100" height="100" alt="Burger Sauce">
                            <p><b><a href="recipes/burger_sauce.php">Burger Sauce</a></b></p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">Card 2</div>
                    </div>
                    <div class="column">
                        <div class="card">Card 3</div>
                    </div>
                    <div class="column">
                        <div class="card">Card 4</div>
                    </div>
                </div> 

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require 'footer.php'; ?>

</body>
</html>