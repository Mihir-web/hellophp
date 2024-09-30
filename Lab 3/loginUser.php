<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    
    $file_Path = 'users_detail.json';
    if (file_exists($file_Path)) {
        $users_detail = json_decode(file_get_contents($file_Path), true);
        
        if($users_detail != null){
        foreach ($users_detail as $user_data) {
            if ($user_data['user_name'] == $user_name && password_verify($password, $user_data['password'])) {
                
                $_SESSION['user_name'] = $user_name;
                $_SESSION['email'] = $user_data['email'];

                
                if (isset($_POST['remember_me'])) {
                    setcookie('remembered_userName', $user_name, time() + (30 * 24 * 60 * 60)); // 1 Month
                }

                header('Location: JobApplicationForm.php/step_1');
                exit;
            }else{
                echo "Invalid username or password, please enter the valid email or password";
            }
        }
    }else{
        echo "No User Found!";
    }
    }else{
        echo "No User Found!";
    }
}
?>
