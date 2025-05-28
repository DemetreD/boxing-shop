<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boxing Shop</title>
    <link rel="stylesheet" href="/boxing-shop/css/style.css">
</head>
<body>
<header>
    <h1>🥊 Boxing Accessories Shop</h1>

    <nav>
    <a href="/boxing-shop">Home</a>
    <?php if (isset($_SESSION['user_name'])): ?>
        <span>Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?></span>
        <a href="/boxing-shop/php/auth/logout.php">Logout</a>
    <?php else: ?>
        <a href="/boxing-shop/php/auth/login.php">Login</a>
        <a href="/boxing-shop/php/auth/register.php">Register</a>
    <?php endif; ?>
</nav>

</header>
<main>