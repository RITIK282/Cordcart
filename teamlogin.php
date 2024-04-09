<?php include 'header.php' ?>

<title>Team Login</title>

    <section class="signupform">
    <div class="bglogin">

    </div>
    <div class="signup">
   

<h1>Team Member Login Here</h1>    
<form action="backend/cms/cms-includes/login.cinc.php" method="POST">
    
    <input type="email" class="input-box" placeholder="Your Email" name="emailTeam" required>
    <input type="Password" class="input-box" placeholder="Password" name="pwdEntTeam" required>
 
    <button type="submit" style="margin-top: 10px;" class="sign-btn" name="intLoginBtn">Team Login </button>
</form>
</div>
</section>


<?php include 'footer.php' ?>