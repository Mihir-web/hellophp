<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $error_message = '';
    $are_all_inputs_valid = true;

    if (!isset($user_name) || empty($user_name)) {
        $are_all_inputs_valid = false;
        $error_message .= '<p>Please fill the user name field.</p>';
    }

    if (!isset($email) || empty($email)) {
        $are_all_inputs_valid = false;
        $error_message .= '<p>Please fill the email field.</p>';
    }

    if (isset($email) && !empty($email) && !preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $are_all_inputs_valid = false;
        $error_message .= '<p>Invalid email format!</p>';
    }

    if (!isset($password) || empty($password)) {
        $are_all_inputs_valid = false;
        $error_message .= '<p>Please fill the password field.</p>';
    }

    if ($are_all_inputs_valid == true) {

        $password = password_hash($password, PASSWORD_DEFAULT);

        $user_data = ['user_name' => $user_name, 'email' => $email, 'password' => $password];
        $file_path = 'users_detail.json';

        if (file_exists($file_path)) {
            $existing_users_detail = json_decode(file_get_contents($file_path), true);
        } else {
            $existing_users_detail = [];
        }

        $existing_users_detail[] = $user_data;
        file_put_contents($file_path, json_encode($existing_users_detail));

        echo "<p>User Registered successfully!</p><br><a href='./login_form.php'>Login</a>";
    } else {
        echo $error_message;
        exit;
    }

}
?>