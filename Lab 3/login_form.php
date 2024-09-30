<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="POST" action="loginUser.php">
        <table>
            <tr>
                <td>
                    <label for="user_name">Username:</label>
                </td>
                <td>
                <input type="text" id="user_name" name="user_name" value="<?php echo isset($_COOKIE['remembered_userName']) ? $_COOKIE['remembered_userName'] : ''; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>
                <td>
                    <input type="password" id="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="remember_me">Remember Me</label>
                </td>
                <td>
                    <input type="checkbox" name="remember_me" id="remember_me">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Login">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>