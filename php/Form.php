<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration form</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <form action="connection_.php" method="POST">
    <fieldset class="field">
    <h1>REGISTRATION FORM</h1>
    <hr>
    <table>
    <tr>
    <td><label for="name">Name</label></td>    
    <td><input type="text" name="name"></td>
    </tr>
    <tr>
    <td><label for="email">Email</label></td>
    <td><input type="text" name="email"></td>
    </tr>
    <tr>
    <td><label for="reg_no">Register Number</label></td>
    <td><input type="text" name="reg_no"></td>   
    </tr>
    <tr>
    <td><label for="mobile_no">Mobile Number</label></td>
    <td><input type="text" name="mobile_no"></td>
    </tr>
    <tr>
    <td><label for="d_o_b">DOB</label></td>    
    <td><input type="date" name="d_o_b"></td>
    </tr>
    <tr>
    <td><label for="gender">Gender</label></td>    
    <td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    </td>
    </tr>
    <tr>
    <td><label for="course">Course</label></td>    
    <td><select name="course">
        <option value=""></option>
        <option value="B.E/B.Tech">B.E/B.Tech</option>
        <option value="BCA">BCA</option>
        <option value="B.Sc">B.Sc</option>
        <option value="B.Arch">B.Arch</option>
        </select>
    </td>
    </tr>
    <tr>
    <td><label for="department">Department</label></td>    
    <td><select name="department">
        <option value=""></option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        <option value="MIS">MIS</option>
        <option value="CG">CG</option>
        <option value="NURSING">NURSING</option>
        <option value="BIO-TECH">BIO-TECH</option>
        </select>
    </td>
    </tr>
    <tr>
    <td><label for="city">City</label></td>    
    <td><input type="text" name="city"></td>
    </tr>
    <tr>
    <td><label for="state">State</label></td>    
    <td><input type="text" name="state"></td>
    </tr>
    <tr>
    <td><label for="password">Password</label></td>    
    <td><input type="password" name="password"></td>
    </tr>
    <tr>
    <td><label for="confirm_password">Confirm Password</label></td>    
    <td><input type="password" name="confirm_password"></td>
    </tr>
    </table>
</br>
    <button type="submit">Submit</button>
    </fieldset>
    </form>
</body>
</html>