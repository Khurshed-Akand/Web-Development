<br><h1>Email Validation</h1>
<form action=" " method="post">
<input type="text" name="email" placeholder="Please enter your email" required="true"><br><br>
<input type="submit" value="Submit" name="submitBtn"><br>
</form>

<?php
if(isset($_POST["submitBtn"])){
    $email = $_POST["email"];
    if(preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/", $email)){
echo "<h2 style='color:green'>$email=Valid</h2>";
} else {
    echo "<h2 style='color:red'>$email=Invalid</h2>";
}
}