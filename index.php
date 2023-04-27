<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recipe Book</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
                            <img src="images/pizza.jpg" width="200" height="200" alt="Pizza">
                            <p><b><a href="recipes/pizza.php">Neopolitan Pizza</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Mcmuffin">
                            <p><b><a href="">Breakfast McMuffins</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/carbonara2.jpg" width="200" height="200" alt="Carbonara">
                            <p><b><a href="">Carbonara</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Smash Burger">
                            <p><b><a href="">Smash Burgers</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/steak_halloumi.jpg" width="200" height="200" alt="Garlic Butter Steak">
                            <p><b><a href="">Garlic Butter Steak</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/chicken_parm_pasta.jpg" width="200" height="200" alt="Chicken Parmesan Pasta">
                            <p><b><a href="">Chicken Parmesan Pasta</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Breaded Chicken Burger">
                            <p><b><a href="">Breaded Chicken Burger</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/quesadilla_guac.jpg" width="200" height="200" alt="Quesadillas">
                            <p><b><a href="">Quesadillas</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/katsu.jpg" width="200" height="200" alt="Chicken Katsu Curry">
                            <p><b><a href="">Chicken Katsu Curry</a></b></p>
                        </div>
                    </div>
                </div> 
            </div>
            
            <div class = "desserts">
                <h3>Desserts</h3>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="images/baileys_cheesecake.png" width="200" height="200" alt="Baileys cheesecake">
                            <p><b><a href="recipes/baileys_cheesecake.php">Baileys Cheesecake</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Lemon Drizzle Cake">
                            <p><b><a href="">Lemon Drizzle Cake</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/tony_smiling.png" width="200" height="200" alt="Lemon Cheesecake">
                            <p><b><a href="recipes/lemon_cheesecake.php">Lemon Cheesecake</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Cheesecake Cookie Sandwich">
                            <p><b><a href="">Cheesecake Cookie Sandwiches</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/tony_smiling.png" width="200" height="200" alt="Ciaras Brownies">
                            <p><b><a href="recipes/brownies.php">Ciaras Brownies</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Cinnamon Rolls">
                            <p><b><a href="">Cinnamon Rolls</a></b></p>
                        </div>
                    </div>
                </div> 
            </div>

            <div class = "sides">
                <h3>Sides</h3>

                <div class="row">
                    <div class="column">
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Air Fryer Chips">
                            <p><b><a href="">Air Fryer Chips</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Cheese Sauce">
                            <p><b><a href="">Cheese Sauce</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/steak_halloumi.jpg" width="200" height="200" alt="Halloumi Fries">
                            <p><b><a href="">Halloumi Fries</a></b></p>
                        </div>
                        <div class="card">
                            <img src="images/garlic_bread.jpg" width="200" height="200" alt="Garlic Bread">
                            <p><b><a href="">Crusty Garlic Bread</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/the_guys.jpg" width="200" height="200" alt="Guacemole">
                            <p><b><a href="">Guacemole</a></b></p>
                        </div>
                    </div>

                    <div class="column">
                        <div class="card">
                            <img src="images/burger_sauce.png" width="200" height="200" alt="Burger Sauce">
                            <p><b><a href="recipes/burger_sauce.php">Burger Sauce</a></b></p>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require 'footer.php'; ?>

</body>
</html>