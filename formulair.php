<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <style> /* commentaire en css */
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $mobileErr ="";
$name = $email = $gender = $comment = $website = $mobile ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Statut is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Contact Us</h2>
<p><span class="error">* required field</span></p>
<form method="post" onsubmit="process(event)" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >  
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $name;?>">
  </div>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  <div>
  <label for="email">Email</label>
  <input type="mail" placeholder ="general@gmail.com"  name="email" value="<?php echo $email;?>">
  </div>
  <span class="error">* <?php echo $emailErr;?></span>

  <br><br>
  <div class="container">
      <label>your phone number</label>
      <input id="phone" type="tel" name="phone" />
      <div class="alert alert-info" style="display: none"></div>
      <div class="alert alert-error" style="display: none"></div>
  </div>
  <br> <br>
  
  <div>
    <label>Select Book</label>
    <select type="text" value="" name="Subject">
      <option></option>
      <option>HTML</option>
      <option>CSS</option>
      <option>PHP</option>
      <option>Python</option>
      <option>Java</option>
      <option>SQL</option>
    </select>
  </div>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <div>
  <label for="gender" >Statut</label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Student") echo "checked";?> value="Student">Student
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Developper") echo "checked";?> value="Developpeur">Developpeur
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Teacher") echo "checked";?> value="Teacher">Teacher
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Entrepreneur") echo "checked";?> value="Entrepreneur">Entrepreneur
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Hobbist") echo "checked";?> value="Hobbist">Hobbist
  <span class="error">* <?php echo $genderErr;?></span>
  </div>

  <br><br>
  <div class="buttons">
    <input type="submit" value="Send" name="Submit">
    <input type="reset" value="Reset" name="Reset">
  </div>
</form>

</body>
<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript:
        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    const info = document.querySelector(".alert-info");
    const error = document.querySelector(".alert-error");

    function process(event) {
      event.preventDefault();

      const phoneNumber = phoneInput.getNumber();

      info.style.display = "none";
      error.style.display = "none";

      if (phoneInput.isValidNumber()) {
        info.style.display = "";
        info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
      } else {
        error.style.display = "";
        error.innerHTML = `Invalid phone number.`;
      }
    }
  </script>
</html>