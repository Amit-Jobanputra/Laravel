<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action='/display' method='post'>
    @csrf
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="fname" placeholder="Enter your Name"></td>
        </tr>
        <tr>    
            <td>Middle Name</td>
            <td><input type="text" name="mname" placeholder="Enter your middle Name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" placeholder="Enter your Last Name"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname" placeholder="Enter your Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" placeholder="Enter your Password"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="cpass" placeholder="Enter your Confirm Password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
   </form>
</body>
</html>
