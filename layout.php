<?php
// layout.php - shared layout for LochsGroup pages
if (!isset($title)) {
    $title = "Loch's Group";
}
if (!isset($activePage)) {
    $activePage = '';
}
if (!isset($content)) {
    $content = '';
}

function uuidv4() {
    return bin2hex(random_bytes(4));
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="icon" href="logo-icon.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo uuidv4(); ?>">
</head>
<body>
<!-- Navbar -->
<nav class="navbar is-fixed-top modern-navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            <img src="logo-icon.png" alt="Loch's Group Logo" style="max-height: 38px;">
        </a>
        <button class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="mainNav">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>
    </div>
    <div id="mainNav" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item has-text-weight-medium <?php echo ($activePage === 'home') ? 'is-active' : ''; ?>" href="index.php">Home</a>
            <a class="navbar-item has-text-weight-medium" href="index.php#about">About Us</a>
            <a class="navbar-item has-text-weight-medium" href="index.php#what-we-do">What We Do</a>
            <a class="navbar-item has-text-weight-medium" href="index.php#subsidiaries">Our Companies</a>
            <a class="navbar-item has-text-weight-medium" href="index.php#contact">Contact</a>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a target="_blank" href="https://www.facebook.com/lochstudios/" class="button is-light is-rounded" title="Facebook">
                        <span class="icon"><i class="fab fa-facebook-f"></i></span>
                    </a>
                    <a target="_blank" href="https://twitter.com/LochStudios" class="button is-light is-rounded" title="X / Twitter">
                        <span class="icon"><i class="fab fa-x-twitter"></i></span>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/lochstudiosau/" class="button is-light is-rounded" title="Instagram">
                        <span class="icon"><i class="fab fa-instagram"></i></span>
                    </a>
                    <a target="_blank" href="https://github.com/LochStudios" class="button is-light is-rounded" title="GitHub">
                        <span class="icon"><i class="fab fa-github"></i></span>
                    </a>
                    <a href="mailto:customercare@lochstudios.com" class="button modern-button is-rounded">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<main>
<?php echo $content; ?>
</main>

<footer class="footer has-background-dark">
    <div class="content has-text-centered has-text-white">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column">
                    <img src="logo-icon.png" alt="Loch's Group" style="max-height: 60px; margin: 0 auto 1rem;">
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <h4 class="title is-5 has-text-white">Quick Links</h4>
                    <div class="content">
                        <a href="index.php#about" class="has-text-light">About Us</a><br>
                        <a href="index.php#what-we-do" class="has-text-light">What We Do</a><br>
                        <a href="index.php#subsidiaries" class="has-text-light">Our Companies</a><br>
                        <a href="index.php#contact" class="has-text-light">Contact</a>
                    </div>
                </div>
                <div class="column">
                    <h4 class="title is-5 has-text-white">Our Network</h4>
                    <div class="content">
                        <a href="https://lochstudios.info" target="_blank" class="has-text-light">LochStudios Info</a><br>
                        <a href="https://packages.lochstudios.com" target="_blank" class="has-text-light">Hosting Packages</a><br>
                        <a href="https://lscomputerrepair.com" target="_blank" class="has-text-light">Computer Repair</a><br>
                        <a href="https://botofthespecter.com" target="_blank" class="has-text-light">BotOfTheSpecter</a>
                    </div>
                </div>
                <div class="column">
                    <h4 class="title is-5 has-text-white">Connect With Us</h4>
                    <div class="buttons is-centered">
                        <a target="_blank" href="https://www.facebook.com/lochstudios/" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a target="_blank" href="https://twitter.com/LochStudios" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-x-twitter"></i></span>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/lochstudiosau/" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-instagram"></i></span>
                        </a>
                        <a target="_blank" href="https://github.com/LochStudios" class="button is-light is-rounded">
                            <span class="icon"><i class="fab fa-github"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="has-text-grey-light">
                Copyright &copy; <?php echo date("Y"); ?> All rights reserved.<br>
                <strong class="has-text-white">Loch's Group</strong> and all subsidiaries operate under
                <strong class="has-text-white">LochStudios</strong>, registered under ABN:
                <strong class="has-text-warning">20 447 022 747</strong>.
            </p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const burgers = document.querySelectorAll('.navbar-burger');
        burgers.forEach(burger => {
            burger.addEventListener('click', () => {
                const target = document.getElementById(burger.dataset.target);
                burger.classList.toggle('is-active');
                if (target) target.classList.toggle('is-active');
            });
        });
    });
</script>
</body>
</html>
