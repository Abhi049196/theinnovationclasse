
<!DOCTYPE html>
<html>
<head>
    <title>Admission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #cb7135;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: middle;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-heading {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        img{
            width: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="img/favicon.ico" alt="">
        <h2>ADMISSION FORM FOR REGULAR COURSE</h2>
        <p>Respected Sir,</p>
        <p>I want to take admission in the innovation classes/ institute/ IIT-JEE. I have read the 'Term & condition's of the institute mentioned in the prospectus and given overleaf. <br>I agree to abide by the same. My particulars are given below.</p>
        <form method="post" action="register.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2" class="form-heading">Personal Information</td>
                    
                </tr>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="first_name" onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                    <td>Last Name:</td>
                    <td><input type="text" name="last_name" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                </tr>
                <tr>
                    <td>Father's/Guardian's Name:</td>
                    <td><input type="text" name="guardian_name" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                    <td>Mother's Name:</td>
                    <td><input type="text" name="mother_name" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                </tr>
                <tr>
                    <td>Occupation of Father/Guardian:</td>
                    <td><input type="text" name="occupation_father" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                    <td>Occupation of Mother:</td>
                    <td><input type="text" name="occupation_mother" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" required></td>
                    <td>Gender:</td>
                    <td>
                        <select name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Category:</td>
                    <td colspan="3">
                        <select name="category" required>
                            <option value="gen">GEN</option>
                            <option value="obc">OBC</option>
                            <option value="sc">SC</option>
                            <option value="st">ST</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nationality:</td>
                    <td><input type="text" name="nationality" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                    <td>Blood Group:</td>
                    <td><input type="text" name="blood_group" required></td>
                </tr>
                <tr>
                    <td colspan="4" class="form-heading">Permanent Address</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td colspan="3"><input type="text" name="currentaddress" required></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                    <td>Pin Code:</td>
                    <td><input type="text" name="pincode" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="phone" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="10" ></td>
                    <td>Email:</td>
                    <td><input type="text" name="email" required ></td>
                </tr>
                <tr>
                    <td>Aadhar Number:</td>
                    <td><input type="text" name="aadhar" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="12"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4" class="form-heading">Education Details</td>
                </tr>
                <tr>
                    <td>School/College Name:</td>
                    <td><input type="text" name="school_name" required onkeypress="return (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"></td>
                    <td>Address:</td>
                    <td><input type="text" name="school_address" required></td>
                </tr>
                <tr>
                    <td>Marks Obtained %:</td>
                    <td><input type="text" name="marks_obtained" required placeholder="VII/IX/X science & Mathematics-aggregate"></td>
                    <td>Grade Obtained (VIII/IX/X):</td>
                    <td>
                        <input type="text" name="grade_in_science" required placeholder="In Science">
                        <input type="text" name="grade_in_math" required placeholder="In Math">
                    </td>
                </tr>
                <tr>
                    <td>Exam Board:</td>
                    <td><input type="text" name="exam_board" required placeholder="CBSE/ICSE/ISC/HS/Other"></td>
                    <td>Scholarship %:</td>
                    <td><input type="text" name="scholarship" required></td>
                </tr>
                <tr>
                    <td colspan="4" class="form-heading">How did you come to know about Innovation Classes?</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <input type="radio" name="know_about" value="promotions"> Promotions Team
                        <input type="radio" name="know_about" value="newspaper"> Newspaper                       
                        <input type="radio" name="know_about" value="teachers"> Teachers
                        <input type="radio" name="know_about" value="friends"> Friends/Relative
                        <input type="radio" name="know_about" value="hording"> Hording
                        <input type="radio" name="know_about" value="poster"> Poster
                        <input type="radio" name="know_about" value="website"> Website
                        <input type="radio" name="know_about" value="voice"> Voice Add
                    </td>
                </tr>
                
                
            </table>
            <input type="submit" value="Register" name="submit">
        </form>
    </div>
</body>
</html> 