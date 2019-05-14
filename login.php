<?php include "./header-public.php"; ?>
<?php

session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username/email.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, email, password FROM users WHERE username = ? or email = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            
            $stmt->bind_param("ss", $param_username,$param_username);
            
             $param_username = $username;
            
            if($stmt->execute()){
               
                $stmt->store_result();
                
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $email, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            header("location: index.php");
                        } else{
                            
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
    }
    
    // Close connection
    $mysqli->close();
}
?>
    <div class="middle-content">
        <div>
            <img style="width:720px;" src="img/laptop-2.png">
        </div>

    </div>  
    <div class="wrapper">
        <div class="wrapper-title">
        <h2>Login</h2>
        <span>Please fill in your credentials to login.</span>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" id="validationServer01"  name="username" class="<?php echo (!empty($username_err)) ? 'form-control is-invalid' : 'form-control'; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" id="validationServer02" name="password" class="<?php echo (!empty($password_err)) ? 'form-control is-invalid' : 'form-control'; ?>" >
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
			<p>Forgot your Password? <a href="reset-password.php">Reset Now</a>.</p>
        </form>
    </div>    

<?php include "./footer.php"; ?>