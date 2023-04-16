<?php
// include header
include('header.php');
// params
if(isset($_POST['title']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['role'])) {
	$_SESSION['user'] = array(
		'title' => $_POST['title'],
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'role' => $_POST['role']
	);
  }
?>

<br>
<a href="logout.php"><button class="logout-button">Logout</button></a>
<div class="wrapper">
    <div class="form-wrapper">
        <h1 class="center-text">Hello <?php echo $_POST['role']?></h1>
        <hr>
        <h3>Here are your options:</h3>
        <div class="form-row">
            <?php
        $role = $_POST['role'];
        if ($role == "admin") {
            echo "<a href='isnt-working.php'><button class='select-button'>My computer isnt working</button></a><br>";
            echo "<a href='new-account.php'><button class='select-button'>Creat New Account</button></a><br>";
        } else if ($role == "manager") {
            echo "<a href='isnt-working.php'><button class='select-button'>My computer isnt working</button></a><br>";
            echo "<a href='lost-password.php'><button class='select-button'>I Lost Password</button></a><br>";
        } else if ($role == "ceo") {
            echo "<a href='isnt-working.php'><button class='select-button'>My computer isnt working</button></a><br>";
            echo "<a href='need-help.php'><button class='select-button'>I Need Help</button></a><br>";
        } else {
            echo "please select a role";
        } ?></div>
    </div>
</div>

<?php
// include footer
include('footer.php');
?>