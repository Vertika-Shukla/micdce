<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Yourself </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <img src="images/micdce.jpg" class="img-thumbnail" alt="DCE"  />
    <form class="form-horizontal" action="insert.php" method="post">
  <fieldset>
    <div id="legend"><br><br>
      <center><legend class="">Register Here For All the Latest Updates</legend></center>
    </div>
    <div class="control-group">
      <!-- First Name -->
      <label class="control-label"  for="username">First Name</label>
      <div class="controls">
        <input type="text" id="firstname" name="firstname" placeholder="" class="input-xlarge">
        <p class="help-block">First name can contain any number of letters,without spaces.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Last Name-->
      <label class="control-label"  for="username">Last Name</label>
      <div class="controls">
        <input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge">
        <p class="help-block">Last name can contain any any number of letters, without spaces.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Enter a valid E-mail Address.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Contact NO-->
      <label class="control-label" for="contact">Contact No.</label>
      <div class="controls">
        <input type="text" id="contact" name="contact" placeholder="" class="input-xlarge">
        <p class="help-block">Please enter your 10 digit Mobile Number.</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- College-->
      <label class="control-label" for="contact">College</label>
      <div class="controls">
        <input type="text" id="college" name="college" placeholder="" class="input-xlarge">
        <p class="help-block">Enter a Valid College.</p>
      </div>
    </div>

    <div class="control-group">
      <!-- University-->
      <label class="control-label" for="contact">University</label>
      <div class="controls">
        <input type="text" id="university" name="university" placeholder="" class="input-xlarge">
        <p class="help-block">Enter a Valid University.</p>
      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</div>

</body>
</html>
