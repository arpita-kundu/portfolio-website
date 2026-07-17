<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIWxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <title>Review &amp; Rating System</title>
</head>
<body class="project-page">
    <nav class="navbar">
        <a href="{{ route('portfolio') }}#home" class="logo">Arpita Kundu</a>

        <button class="menu-toggle" aria-label="Open navigation menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <ul class="nav-links">
            <li><a href="{{ route('portfolio') }}#home">Home</a></li>
            <li><a href="{{ route('portfolio') }}#about">About</a></li>
            <li><a href="{{ route('portfolio') }}#skills">Skills</a></li>
            <li><a href="{{ route('portfolio') }}#contact">Contact</a></li>
        </ul>
    </nav>

    <main class="project-detail">
        <section class="project-hero">
            <a href="{{ route('portfolio') }}#projects" class="back-link">
                <i class="fa-solid fa-arrow-left"></i>
                Back to portfolio
            </a>
            <p class="eyebrow">Project 3</p>
            <h1>Review &amp; Rating System</h1>
            <p>
                A Laravel and MySQL project for collecting user reviews, saving star ratings,
                displaying submitted feedback, and preparing edit/delete actions.
            </p>

            <ul class="feature-list">
                <li>Add review with name, rating, and message</li>
                <li>Store reviews in MySQL</li>
                <li>Display all reviews dynamically</li>
                <li>Edit and delete flow ready for CRUD expansion</li>
            </ul>
        </section>

        <aside class="demo-panel">
            <h2>Review Preview</h2>
            <p>Use this UI with a reviews table and controller methods for full CRUD.</p>

            <form class="preview-form">
                <input type="text" placeholder="Your name">
                <select>
                    <option>5 stars</option>
                    <option>4 stars</option>
                    <option>3 stars</option>
                    <option>2 stars</option>
                    <option>1 star</option>
                </select>
                <textarea placeholder="Write your review"></textarea>
                <button class="cta-button" type="button">Submit Review</button>
            </form>
        </aside>
    </main>

    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
