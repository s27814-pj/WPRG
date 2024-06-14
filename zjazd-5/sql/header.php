<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Panel</h3>
        </div>
        <div class="card-body">
            <form action = "index.php" method="get" class="d-inline">
                <button type="submit" class="btn btn-primary">Strona główna</button>
            </form>
            <form action = "allCars.php" method="get" class="d-inline">
                <button type="submit" class="btn btn-secondary">Wszystkie samochody</button>
            </form>
            <form action = "addCar.php" method="get" class="d-inline">
                <button type="submit" class="btn btn-success">Dodaj samochód</button>
            </form>
        </div>
    </div>
</div>