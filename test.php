
<link rel="stylesheet" href="styleform.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />


            <div class="container">
                <h2>Creat Free Account Now</h2>
                <form class="form" id = "form" action="/form/submit.php" onsubmit="return ValidationForm()" method="post" >
                    <div class = "form-control" >
                        <label>Username</label>
                        <input type="text" placeholder= "dewanet" id ="username" >
                        <div class = "indice" >
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </div>
                        <div class = "indice" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Email</label>
                        <input type="email" placeholder= "dewanet@info.com" id ="email" >
                        <div class = "indice" >
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </div>
                        <div class = "indice" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Plone number</label>
                        <input type="mobile" placeholder= "+228 93 79 41 82" id ="mobile" >
                        <div class = "indice" >
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </div>
                        <div class = "indice" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Password</label>
                        <input type="password" placeholder= "password" id ="password" >
                        <div class = "indice" >
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </div>
                        <div class = "indice" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <small>Error Message</small>
                    </div>

                    <div class = "form-control" >
                        <label>Password check</label>
                        <input type="password" placeholder= "Confirm password" id ="password2" >
                        <div class = "indice" >
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        </div>
                        <div class = "indice" >
                        <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <small>Error Message</small>
                    </div>

                    <button type="submit">Submit</button>
                    
                </form>
            </div>
            <script >
                function formvalidation() {

        const form = document.getElementById('form');
        const username = document.getElementById('username');
        const email = document.getElementById('email');
        const mobile = document.getElementById('mobile');
        const password= document.getElementById('password');
        const password2= document.getElementById('password2');

        form.addEventListener('submit', (e) =>{
        e.preventDefault();
        checkInputs();
        });

        function checkInputs() {
        // get the values from inputs
        const usernamevalue = username.value.trim();
        const emailvalue = email.value.trim();
        const mobilevalue = mobile.value.trim();
        const passwordvalue = password.value.trim();
        const password2value = password2.value.trim();

        if (usernamevalue === '') {
            // show error 
            // add error class
            setErrorFor(username, 'Username mixed');
        }else{
            //add success class
            setSuccessFor(username);
        }

        }
        function setErrorFor(input, message) {
        const formControl = input.parentElement; // .form-control
        const small = formControl.querySelector('small');

        // add error message inside small
        small.innerText = message;

        // add error class

        formControl.className = 'form-control error';

        }

}


            </script>
         