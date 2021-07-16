<?php 
$Title="Make the Pledge!";
$PageCSS="
<link rel='stylesheet' href='css/article-page.css'>
";
$PageCSS2="
<link rel='stylesheet' href='css/form-page.css'>
";
include "inc/top.php"; 
?>
        
        </div>
        <h2 class="form-header">Make the Never-Visit Pledge</h2>

        <form class="container" method="post" action="scripts/insert.php">

            <p class="form-tag">Sign your name TODAY to pledge never to visit!</p>

            <fieldset>
                <legend>Complete your pledge below:</legend>
                <label for="firstName">First Name:</label><input type="text" name="firstName" id="firstName"><br><br>
                <label for="lastName">Last Name:</label><input type="text" name="lastName" id="lastName"><br><br>
                <label for="email">Email:</label><input type="email" name="email" id="email"><br><br>
            </fieldset>

            <input class="button" type="submit" value="Make My Pledge">
        </form>
<?php include "inc/bottom.php"; ?>
