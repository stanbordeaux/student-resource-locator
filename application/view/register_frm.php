
<div>
 <h1>Register here</h1>
 <?php 
    if (isset($result))
    {
        echo "<p><span style='color: red; font-weight: bold;'>" .$result. "</span></p>";
    }
 ?>
 <form action="<?php echo url::page('user_manager/register');?>" method="post" id="login_form">

    <p><label for="username">Enter Username:</label></p>
    <p><input type="text" name="username" id="username" /> </p>
    <p><label for="email">Enter email:</label></p>
    <p><input type="text" name="email" id="email" /> </p>
    <p><label for="password">Enter Password:</label></p>
    <p><input type="password" name="password" id="password" /> </p>
    <p><label for="cpword">Confirm Password:</label></p>
    <p><input type="password" name="cpword" id="cpword" /> </p>
    <p><input type="submit" name="submit" value="register" /></p>

</form>
</div>
 </body>
 </html>