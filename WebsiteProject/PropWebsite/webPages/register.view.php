<!DOCTYPE html>
<html>
<head>
     <?php
     //So we can use one common file for calling common functions
     include('../includes/common.inc.php');        
     displayHeadTag();
    ?>
    <script src="../js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="../js/additional-methods.min.js" type="text/javascript"></script>
    
</head>
<body>
    <h1>
    <img src="../templates/images/logo.png" alt="logo" style="width:400px;height:70px" />
    </h1>
    <div class="container">
         <?php
            displayHeader();
        ?>
        <div class="content">
           <div id="Regwrapper">
               <header class="regHeader">Register to join our Jazz event right now! <span></span></header>
                <?php 
                    Register();
                ?>
               <form action="../controller/register.php" method="post" id="registerForm">
                    <div>
                        <div class="form-group">
                            <label for="first_name" class="uname"> First name </label>
                            <input type="text" name="first_name" id="first_name" placeholder="First Name" />
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="uname"  > Last name </label>
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name"/>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="uname"  > Phone number </label>
                             <input type="text" name="phone" id="phone" placeholder="Phone number"/>
                        </div>
                        <div class="form-group">
                            <label for="email" class="uname"> Your email </label>
                            <input type="text" name="email" id="email" placeholder="Email"/>
                        </div>  
                         <div class="form-group">
                            <label for="Password" >Password</label>
                            <input type="password" name="password" id="Password" value="" maxLength="40"  placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="RepeatPassword" class="control-label required">Repeat password</label>
                            <input type="password" name="repeatpassword" id="RepeatPassword" value="" maxLength="40"  placeholder="Repeat password" />
                        </div>      
                        <div>
                             <input type="submit" value="CREATE YOUR ACCOUNT" name="">
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
    <?php
        displayFooter();
    ?>
</body>
</html>