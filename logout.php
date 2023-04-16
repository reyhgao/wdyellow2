<?php
// include header
include('header.php');

// unset all session variables
$_SESSION = array();

 // Check logout button
    if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
        // Destroy session
        session_destroy();
    } 
?>

<div class="wrapper">
    <div class="form-wrapper">
        <h1>Log Out?</h1><br>
        <div class="form-row">
            <?php
            echo "<a href='index.php'><button class='select-button'>Yes</button></a><br>";
            echo "<a href='javascript:history.go(-2)'><button class='select-button'>No</button></a>";
            ?>
        </div>
    </div>
</div>

<?php
// include footer
include('footer.php');
?>