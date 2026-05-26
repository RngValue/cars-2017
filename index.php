<?php
declare(strict_types=1);
$currentBrand = "BMW";
if (isset($_GET['make']) and $_GET['make']) $currentBrand = $_GET['make'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link
		rel="stylesheet"
		href="/public/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Latest cars in 2017</title>
</head>

<body class="mt-4 bg-dark text-light">
    <h1>Latest cars in 2017!</h1>
    <form action="/" method="get">
        <div class="mb-3">
            <label for="make" class="form-label">Select Brand</label>
            <select 
                class="form-select" 
                id="make" 
                name="make"
                required
                aria-describedby="makeHelp"
            >
            <?php
                require_once('views/car-view.php');
                $carView = new CarView();
                $carView->show_brand_options($currentBrand);
            ?>
            </select>
            <div id="makeHelp" class="form-text">Car brand name</div>
            <div class="invalid-feedback">Please select a valid option.</div>
        </div>
        <button class="btn btn bg-dark bg-gradient text-light border-secondary">Query</button>
    </form>
    <hr>
    <ul class="list-group">
    <?php
        require_once('views/car-view.php');
        $carView = new CarView();
        $carView->show_cars_by_brand($currentBrand);
    ?>
    </ul>
</body>
</html>