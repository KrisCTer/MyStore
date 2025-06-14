<?php include 'app/views/shares/header.php'; ?> 
<form method="post" action="/MYSTORE/forgotpassword/submit">
    <label><strong>Enter Your Email Address:</strong></label><br><br>
    <input type="email" name="email" required placeholder="your@email.com" />
    <br><br>
    <input type="submit" value="Reset Password" />
</form>

<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<?php include 'app/views/shares/footer.php'; ?> 