<link rel="stylesheet" href="form.css">
<?php session_start(); ?>
<div class="body content">
    <div class="welcome">
        <div class="alert alert-success"><?= $_SESSION['message'] ?></div>
		<br />
        Welcome <span class="user"><?= $_SESSION['username'] ?></span>!
        <br />
        <br />
        <br />
        Account Information:
        <br /><br />
        First Name: <span class="user"><?= $_SESSION['Firstname'] ?></span>
        <br />
        Last name: <span class="user"><?= $_SESSION['Lastname'] ?></span>
        <br />
        Username: <span class="user"><?= $_SESSION['username'] ?></span>
        <br />
        Email: <span class="user"><?= $_SESSION['email'] ?></span>
        <?php
        $mysqli = new mysqli("localhost", "root", "", "accounts");
        //Select queries return a resultset
        $sql = "SELECT username FROM users";
        $result = $mysqli->query($sql); //$result = mysqli_result object
        //var_dump($result);
        ?>
        <div id='registered'>
        <span>All registered users:</span>
        <?php
        while($row = $result->fetch_assoc()){ //returns associative array of fetched row
            echo "<div class='userlist'><span>$row[username]</span></div>";
        }
        ?>  
        </div>
    </div>
</div>