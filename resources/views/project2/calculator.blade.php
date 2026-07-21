<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Calculator Suite</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/calculator.css">
</head>
<body>

<div class="container py-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">

        <h1 class="display-5 fw-bold text-white">
            <i class="bi bi-calculator"></i>
            Smart Calculator Suite
        </h1>

        <p class="text-light opacity-75">
            HTML • CSS • Bootstrap • JavaScript • PHP
        </p>

    </div>

    <!-- Calculator Section -->
    <div class="row g-4">

        <!-- Normal Calculator -->
        <div class="col-lg-6">
            @include('project2.partials.normal-calculator')
        </div>

        <!-- Age Calculator -->
        <div class="col-lg-6">
            @include('project2.partials.age-calculator')
        </div>

    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="/js/calculator.js"></script>

</body>
</html>

