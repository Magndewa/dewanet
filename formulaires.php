
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!--
            <link rel="stylesheet" href="styleform.css">

            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styleform.css">
        

    </head>
    <body>
        
            
            <div class="container">
                <h2>Creat Free Account Now</h2>
                <form class="form" id = "form" >
                    <div class = "form-control" >
                        <label>Username</label>
                        <input type="text" placeholder= "dewanet" id ="username" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Email</label>
                        <input type="email" placeholder= "dewanet@info.com" id ="email" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Plone number</label>
                        <input type="mobile" placeholder= "+228 93 79 41 82" id ="mobile" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Password</label>
                        <input type="password" placeholder= "password" id ="password" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Password check</label>
                        <input type="password" placeholder= "Confirm password" id ="password2" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <small>Error Message</small>
                    </div>

                    <button type="submit">Submit</button>
                    
                </form>
            </div>
</body>

</html>