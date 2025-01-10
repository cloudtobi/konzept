<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.php?page=home" class="logo">
                        <br>
                        <img src="assets/images/hustlers.png" alt="" style="max-width: 112px;">
                    </a>
                    <ul class="nav">
                        <li><a href="index.php?page=home" class="<?php echo ($_GET['page'] ?? 'home') == 'home' ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="index.php?page=story" class="<?php echo ($_GET['page'] ?? '') == 'story' ? 'active' : ''; ?>">Geschichte</a></li>
                        <li><a href="index.php?page=base" class="<?php echo ($_GET['page'] ?? '') == 'base' ? 'active' : ''; ?>">Base</a></li>
                        <li><a href="index.php?page=member" class="<?php echo ($_GET['page'] ?? '') == 'member' ? 'active' : ''; ?>">Ränge</a></li>
                        <li><a href="index.php?page=ranks" class="<?php echo ($_GET['page'] ?? '') == 'ranks' ? 'active' : ''; ?>">Rangordnung</a></li>
                        <li><a href="index.php?page=equipment" class="<?php echo ($_GET['page'] ?? '') == 'equipment' ? 'active' : ''; ?>">Equipment</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
