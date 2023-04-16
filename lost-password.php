<?php
// include header
include('header.php');
?>
<!-- lost password page content -->
<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <h1 class="center-text">Lost Password</h1>
        <hr>
        <form method="post" action="send-email.php">
            <p>Please input your email address and we will send you a reset link.
            </p>
            <div class="form-row">
                <input type="hidden" name="emailType" value="lostPassword">
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