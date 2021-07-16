<!doctype html>

<html lang="en">

	<head>
		<meta charset="utf-8">
        <title><?php echo $Title; ?></title>
        <link rel="stylesheet" href="css/styles.css">
        <?php echo $PageCSS; ?>
        <?php echo $PageCSS2; ?>
        <link rel="shortcut icon" href="images/cactus.png">
    </head>
    
    <body>
        <div class="banner"> 
            <nav id="menu">
                <ul id="items">
                    <li><a href="index.php">(Don't) Plan Your Visit</a></li>
                    <li><a href="weather.php">Weather</a></li>
                    <li><a href="water.php">Water</a></li>
                    <li><a href="cactus.php">Cactus</a></li>
                    <li class="subnav-title">The Never-Visit Movement
                        <ul class="subnav-list">
                            <li class="subnav-item"><a href="signature.php">Make the Pledge</a></li>
                            <li class="subnav-item"><a href="pledges.php">Join the Movement</a></li>
                        </ul>  
                    </li>  
                </ul>
            </nav>

            <header>
                <a href="index.php">
                    <h1>The City of Phoenix</h1>
                </a>
            </header>
