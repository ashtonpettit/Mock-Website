
<?php
  include 'includes/db.php';
  include 'includes/includes.php'; 
  session_start();
  ?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="stylesheet.css">
    </head>

    <body>
    <div id="homewrap">
            <?php include 'includes/header.php'; ?>

              <div class="content">
                  <h2>Welcome <?php echo $_SESSION['username']; $user = $_SESSION['username'];?> Just a few more questions...</h2>
                  <br>
                  <form method="POST" action="homepage.php">
                    <label for="gender">You Are?</label>
                    <select id="gender" name="gender">                  
                    <option name="gender" value="male">Male</option>
                    <option name="gender" value="female">Female</option>
                    </select>
                    <label for="prefGender">Desired Partner?</label>
                    <select id="prefGender" name="genderPref">                  
                    <option name="genderPref" value="male">Male</option>
                    <option name="genderPref" value="female">Female</option>
                    </select>
                    <br>
                    <br>
                    <label for="zodiac">What is your Zodiac Sign?</label>
                    <select id="zodiac" name="zodiac">
                      <option name="zodiac" value="aries">Aries</option>
                      <option name="zodiac" value="taurus">Taurus</option>
                      <option name="zodiac" value="gemini">Gemini</option>
                      <option name="zodiac" value="cancer">Cancer</option>
                      <option name="zodiac" value="leo">Leo</option>
                      <option name="zodiac" value="virgo">Virgo</option>
                      <option name="zodiac" value="libra">Libra</option>
                      <option name="zodiac" value="scorpio">Scorpio</option>
                      <option name="zodiac" value="sagittarius">Sagittarius</option>
                      <option name="zodiac" value="capricorn">Capricorn</option>
                      <option name="zodiac" value="aquarias">Aquarias</option>
                      <option name="zodiac" value="pisces">Pisces</option>
                      </select>
                      <br>
                      <br>
                      <input type="hidden" name="id" value="<?php echo $user;?>">
                      <button type=submit class="myButton" name="update">Find Your Destiny</button>
                  </form>
              </div>
            
    </div>

    </body>
</html>