
<?php
class auth{
    public function signup($conf, $ObjFncs){
        // signup logic here
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {

            // initialize an array to hold errors
            $errors = [];

            // process signup
            $fullname = $_SESSION['fullname'] = ucwords(strtolower($_POST['fullname']));
            $email = $_SESSION['email'] = strtolower($_POST['email']);
            $password = $_SESSION['password'] = $_POST['password']; // In real applications, hash the password before storing

            // Some validation before storing to database (not implemented here)

            if(empty($fullname) || empty($email) || empty($password)) {
                $errors['empty_fields'] = "All fields are required.";
            }

            // Only allow letters, spaces, and hyphens in fullname
            if(!preg_match("/^[a-zA-Z-' ]*$/", $fullname)) {
                $errors['nameFormat_error'] = "Only letters and white space allowed in fullname.";
            }

            // Validate email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['emailFormat_error'] = "Invalid email format.";
            }

            // Validate password (minimum 6 characters)
            if(strlen($password) < $conf['min_password_length']) {
                $errors['passwordLength_error'] = "Password must be at least " . $conf['min_password_length'] . " characters long.";
            }

            if(!count($errors)) {
                die($fullname . " " . $email . " " . $password);

                // Clear session data after successful signup
                unset($_SESSION['fullname']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);
            } else {
                $ObjFncs->setMsg('errors', $errors, 'danger');
                $ObjFncs->setMsg('msg', 'Please correct the errors and try again.', 'warning');
            }
        }
    }
    public function signin() {
        echo "This is the signin page.";
    }
}