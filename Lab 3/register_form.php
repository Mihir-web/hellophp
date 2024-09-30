<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <form method="POST" action="registerUser.php">
        <table>
            <tr>
                <td> 
                    <label for="user_name">Username:</label>
                </td>
                <td>
                    <input type="text" id="user_name" name="user_name" >
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input type="email" id="email" name="email" ><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password:</la>
                </td>
                <td>
                    <input type="password" id="password" name="password" ><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>