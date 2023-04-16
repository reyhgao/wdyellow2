<?php
// include header
include('header.php');
?>

<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <?php
        if ($_POST['emailType'] == 'newAccount') {
        echo '<h1 class="center-text">New account created.</h1>';
        } elseif ($_POST['emailType'] == 'lostPassword') {
        echo '<h1 class="center-text">pls check your mail box.</h1>';
        }
        ?>
    </div>
</div>


<?php
// include footer
include('footer.php');
?>