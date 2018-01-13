<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="ajaxForm" action="register.php" method="post">
            <div class="form-group">
              <input class="form-control" type="text" name="firstName" placeholder="First Name">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="lastName" placeholder="Last Name">
            </div>
            <!-- <div class="form-group">
              <input class="form-control" type="text" name="username" placeholder="Username">
            </div> -->
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password">
            </div>
            <input type="submit" name="signUp" value="Sign Up">
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="ajaxForm" action="login.php" method="post">
            <div class="form-group">
              <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" name="signIn" value="Sign In">
          </form>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
  </body>
</html>
