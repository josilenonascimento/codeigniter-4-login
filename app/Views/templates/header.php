<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="/">CI4 Login</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlogin" aria-controls="navbarlogin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarlogin">

                <?php 
                    $uri = service('uri');
                ?>

                <?php if (session()->get('isLoggedIn')): ?>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard')? 'active': null ?>">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item <?= ($uri->getSegment(1) == 'profile')? 'active': null ?>">
                            <a class="nav-link" href="/profile">Profile</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    </ul>

                <?php else: ?>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= ($uri->getSegment(1) == '')? 'active': null ?>">
                            <a class="nav-link" href="/">Login</a>
                        </li>
                        <li class="nav-item <?= ($uri->getSegment(1) == 'register')? 'active': null ?>">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>
                    
                <?php endif; ?>
            </div>
            
        </div>
    </nav>
