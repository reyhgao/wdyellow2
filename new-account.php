<?php
// include header
include('header.php');
?>

<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <h1 class="center-text">Create A New Account</h1>
        <hr>
        <form method="post" action="send-email.php">
            <div class="form-row">
                <input type="hidden" name="emailType" value="newAccount">
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="submit" name="submit" value="Submit" class="submit-button">
            </div>
        </form>
    </div>
</div>
<?php
// include footer
include('footer.php');
?>