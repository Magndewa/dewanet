<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


    <style>
      .container {
        align-items: center;
        justify-content: center;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: blanchedalmond;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(red, green, blue, 0.3);
        width: 450px;
        max-width:70% ;
      }
      .container h2{
        background-color: #f7f7f7;
        border-bottom: 1 solid #f0f0f0;
        padding: 20px 40px;
        margin: 0;
        border-radius: 4px;
        }
      .container .w3docs{
        padding: 30px 40px;
        }
      .buttons {
        display: flex;
        align-items: center;
        width: 50%;
      }
      .buttons input {
        margin-right: 10px;
        background-color: blue;
         border: 2px solid red;
        color: seashell;
        display: block;
        width: 50%;
        padding: 10px;
        font-size: 15px;
      }

      .container #error_message{
          margin-top: 20px;
          padding: 0px;
          background: #fe8b8e;
          width: 50%;
          margin-left: 25%;
          text-align: center;
          font-size: 14px;
          transition: all 0.5s ease;

      }

      form {
        padding: 30px 40px;
      }
      form input {
        border : 2px solid #f0f0f0;
        border-radius: 4px;
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 14px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
      form select {
        background-color: #ffffff;
        padding: 5px;
      }
      form label {
        display: block;
        width: 100%;
        margin-bottom: 5px;
      }
    </style>
  </head>
  <body>
  <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = ""; 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["Name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }
        
        if (empty($_POST["Email"])) {
          $emailErr = "Email is required";
        } else {
          $email = test_input($_POST["Email"]);
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
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
        }


      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    }
    ?>

    <div class= " container">
        <h2 style="text-align: center">Creat Free Account Now  </h2>
        <div id= "error_message" ></div>
        <form name="RegForm" action="dbinscrit.php"  method="post" class="w3docs">
        <div>
            <label for="Name">Name:</label>
            <input type="text" id="Name" size="60" name="Name" value="<?php echo $name;?>" >
            <span class="error">* <?php echo $nameErr;?></span>
        </div>
        <br>
        <div>
            <label for="E-mail">E-mail Address:</label>
            <input type="text" id="E-mail" size="60" name="Email" value="<?php echo $email;?>" placeholder="dewanet@gmail.com">
        </div>
        <br>
        <div>
            <label for="Telephone">your phone number :</label>
            <input id="phone" type="tel" size="60" name="phone" />
            <div class="alert alert-info" style="display: none"></div>
            <div class="alert alert-error" style="display: none"></div>
        </div>

        <br>
        <!--
        <div>
            <label for="Telephone">Telephone: </label>
            <input type="Tel" id="Telephone" size="60" name="Telephone">
        </div>
        <br>
        <div>
            <label for="Password">Password:</label>
            <input type="text" id="Password" size="60" name="Password">
        </div>
        <br>
        <div>
            <label for="Password">Confirm password:</label>
            <input type="text" id="Password2" size="60" name="Password2">
        </div>
        <br>
        -->
       
        <div>
            <label>Select Book</label>
            <select type="text" value="Subject" name="Subject">
            <option>HTML</option>
            <option>CSS</option>
            <option>PHP</option>
            <option>JavaScript</option>
            </select>
        </div>
        <br>
        <div>
            <label>Your level</label>
            <select type="text" value="Level" name="Level">
            <option>Begginer</option>
            <option>Junior/option>
            <option>Senior</option>
            <option>Pro</option>
            <option>Expert</option>
            </select>
        </div>
        <br>
        <div class="buttons">
            <input type="submit" value="Send" name="Submit">
            <input type="reset" value="Reset" name="Reset">
        </div>
        </form>
    </div>
      </body>
  
  <script>

       /* 
        function ValidationForm() {
          let username = document.forms["RegForm"]["Name"];
          let email = document.forms["RegForm"]["Email"];
          let phoneNumber = document.forms["RegForm"]["Telephone"];
          let select = document.forms["RegForm"]["Subject"];
          let pass = document.forms["RegForm"]["Password"];
          let pass2 = document.forms["RegForm"]["Password2"];
  
          //var name = document.getElementById("name").value;
         var error_message = document.getElementById("error_message");
          var text;
          
          error_message.style.padding = "10px";
  
          
          if(username.value == "") {
            text = "Please enter valid name";
            error_message.innerHTML = text;
            username.focus();
            return false;
          }
          if(username.value == " ") {
            text = "Please enter valid name";
            error_message.innerHTML = text;
            username.focus();
            return false;
          }
  
          if(email.value == "") {
            text = "Please enter a valid e-mail address";
            error_message.innerHTML = text;
            email.focus();
            return false; 
          }
          if(email.value.indexOf("@", 0) < 0) {
            text = "Please enter a valid e-mail address";
            error_message.innerHTML = text;
            email.focus();
            return false;
          }
          if(email.value.indexOf(".", 0) < 0) {
            text = "Please enter a valid e-mail address";
            error_message.innerHTML = text;
            email.focus();
            return false;
          }
          if(phoneNumber.value == "") {
            text = "Please enter your telephone number.";
            error_message.innerHTML = text;
            phoneNumber.focus();
            return false;
          }
          
          if(pass.value == "") {
            text = "Please enter your password.";
            error_message.innerHTML = text;
            pass.focus();
            return false;
          }
          if(pass2.value !=pass.value) {
           text = "Please your password not match.";
            error_message.innerHTML = text;
            pass.focus();
            return false;
          }
          if(select.selectedIndex < 1) {
            text = "Please Select your course.";
            error_message.innerHTML = text;
            select.focus();
            return false;
          }
          return true;
  
          } */
  </script>
  
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
      //  info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
      } else {
        error.style.display = "";
        error.innerHTML = `Invalid phone number.`;
      }
    }
  </script>
  
</html>