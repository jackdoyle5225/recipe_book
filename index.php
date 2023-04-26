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

        <div class="cards">
            <div class="row">
            <div class="column">
                <div class="card">
                <img src="images/pizza.jpg" width="60" height="60" alt="Pizza">
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

    <!-- footer -->
    <?php require 'footer.php'; ?>

</body>
</html>