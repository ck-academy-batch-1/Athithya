<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body{
        background-image:url(black.jpg);
        background-attachment:fixed;
      }
    .er {
      color: #FF0000;
    }
    h2{
      font-size:35px;
      font-weight:bolder;
      text-align:center;
      color:white;
      font-variant: small-caps;
      
    }
    
    form{
      margin-left:auto;
      margin-right:auto;
      background-color:#BADFE7;
      box-shadow:0 5px 50px rgba(0,0,0,0.25);
      font-variant: small-caps;
      padding-top:20px;
      padding-bottom:20px;
      padding-left:30px;
      background: linear-gradient(25deg,#C6FAD2,white);
      font-style: italic;
       font-weight:bold;
       font-size:18px;
       border:1px solid white;
       max-width:700px;
       justify-content:space-between;
      
    }
    input:hover{
      color:white;
    }
    input{
      border-radius:35px;
      font-size:19px;
      transition:transparent;
      cursor:pointer;
      background:transparent;
      color:white;
      background: linear-gradient(25deg,#c8dff388,whitesmoke);
      height:25px;
      width:50%
      
      font-style: italic;
    }
    select{
      border-radius:35px;
      background:transparent;
      font-style: italic;
      background: linear-gradient(25deg,#c8dff388,white);
      height:28px;
      cursor:pointer;
      width:50%;
    }
    .athi{
      text-align:center;
      color:white;
      font-style: italic;
      font-size:20px;
    }
    .submit{
      color:black;
      background-color:green;
      font-size:20px;
      font-family:italic;
      font-weight:bold;
      font-variant: small-caps;
    }
    .reset{
      color:black;
      background-color:green;
      font-size:20px;
      font-family:italic;
      font-weight:bold;
      width:70px;
      font-variant: small-caps;
    }
    p{
      text-align:center;
      font-variant: small-caps;
      font-size:30px;
      color:violet;
      font-style:italic;
    }
       
</style>
</head>
<body>
    <?php
    $nameerr = $fnerr = $adderr = $sexerr = $sterr = $diserr = $cterr = $pinerr = $cserr = $emailerr = $moberr = "";
    $name = $fathername = $address = $sex = $state = $district = $city = $pincode = $course = $email = $mobileno = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameerr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameerr = "Only letters and white space allowed";
          }
        }
        if (empty($_POST["fn"])) {
          $fnerr = "Father Name is required";
        } else {
          $fathername = test_input($_POST["fn"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$fathername)) {
            $fnerr = "Only letters and white space allowed";
          }
        }  
        if (empty($_POST["add"])) {
          $adderr = "Address is required";
        } else {
          $address = test_input($_POST["add"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) {
            $adderr = "Only letters and white space allowed";
          }
        }
        if (empty($_POST["gender"])) {
          $sexerr = "Sex is required";
        } else {
          $sex = test_input($_POST["gender"]);
        } 
        if (empty($_POST["states"])) {
          $sterr = "State is required";
        } else {
          $state = test_input($_POST["states"]);
        }
        if (empty($_POST["districts"])) {
          $diserr = "District is required";
        } else {
          $district = test_input($_POST["districts"]);
          }
        if (empty($_POST["City"])) {
          $cterr = "City is required";
        } else {
          $city = test_input($_POST["City"]);
        }
        if (empty($_POST["pin"])) {
          $pinerr = "Pincode is required";
        } else {
          $pincode = test_input($_POST["pin"]);
        if (preg_match('/^[0-9]{10}$/', $pincode)) {
          $pinerr = "Only letters and white space allowed";
          }
        } 
        if (empty($_POST["courses"])) {
          $cserr = "Course is required";
        } else {
          $course = test_input($_POST["courses"]);
        } 
        if (empty($_POST["email"])) {
          $emailerr = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
        if (!preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/",$email
        )) {
          $emailerr = "Invalid email format";
          }
        }
        if (empty($_POST["Mobno"])) {
          $moberr = "Mobile number is required";
        } else {
          $mobileno = test_input($_POST["Mobno"]);
        if (!preg_match('/^[0-9]{10}$/', $mobileno)) {
          $moberr = "Only letters and white space allowed";
            }
          } 

    }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;    
        }
    
    ?>
    <h2>Iti Student Registration Form</h2>
    <p><span class="er">* Required Field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table>
    <tr>
       <td> Name:</td>
       <td> <input type="text" name="name" value="">
        <span class="er">* <?php echo $nameerr;?></span><br><br></td>
    </tr>
    <tr>
       <td> Father Name:</td>
       <td> <input type="text" name="fn" value="">
        <span class="er">* <?php echo $fnerr;?></span><br><br></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td> <input type="text" name="add" value="">
        <span class="er">* <?php echo $adderr;?></span><br><br></td>
    </tr>
    <tr>
    <td>Sex:</td>
  <td><input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="er">*<?php echo $sexerr;?></span><br><br></td>
    </tr>
    <tr>
        <td>State:</td>
        <td>
            <select name="states" id="sta">
                <option value="Tamil Nadu">Select Here</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Goa">Goa</option>
            </select>
            <span class="er"> *<?php echo $sterr;?><br><br></span>

        </td>
    </tr>
    <tr>
        <td>District:</td>
        <td>
            <select name="districts" id="dis">
                <option value="Chennai">Select Here</option>
                <option value="coimbatore">coimbatore</option>
                <option value="Cuddalore">Cuddalore</option>
                <option value="Dindugal">Dindugal</option>
                <option value="Erode">Erode</option>
            </select>
            <span class="er">* <?php echo $diserr;?><br><br></span>

        </td>
    </tr>
    <tr>
        <td>City:</td>
        <td>
        <select name="City" id="cts">
            <option value="Nellikuppam">Select Here</option>
            <option value="Chidambaram">Chidambaram</option>
            <option value="Neyveli">Neyveli</option>
            <option value="Panruti">Panruti</option>
            <option value="Vadalur">Vadalur</option>
        </select>
        <span class="er"> *<?php echo $cterr;?><br><br></span>

        </td>
    </tr>
    <tr>
        <td>Pincode:</td>
        <td>
          <input type="text" name="pin" value="">
        <span class="er">* <?php echo $pinerr;?><br><br></span>
        </td>
    </tr>
    <tr>
        <td>Course:</td>
        <td>
        <select name="courses" id="cs">
            <option value="Computer Operator & Programming Assistant">Select Here</option>
            <option value="Database Management">Database Management</option>
            <option value="Designing of static Webpages">Designing of static WebpagesNeyveli</option>
            <option value="Cyber Security">Cyber Security</option>
            <option value="E-Commerce">E-Commerce</option>
        </select>
        <span class="er">* <?php echo $cserr;?><br><br></span>
        </td>
    </tr>
    <tr>
    <td> E-mail: </td>
        <td><input type="text" name="email">
        <span class="er">* <?php echo $emailerr;?></span><br><br></td>
    </tr>
    <tr>
    <td>Mobile Number:</td>
        <td><input type="text" name="Mobno">
        <span class="er">* <?php echo $moberr;?></span><br><br></td>
    </tr><br><br>
    <tr>
    <td><input type="submit" name="submit" value="Submit"class="submit" ></td>
    <td><input type="reset" name="reset" value="Reset" class="reset"></td>
    </tr>
      </table>
    </form>
    <div class="athi">
    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $fathername;
echo"<br>";
echo $address;
echo "<br>";
echo $sex;
echo "<br>";
echo $state;
echo"<br>";
echo $district;
echo "<br>";
echo $city;
echo "<br>";
echo $pincode;
echo "<br>";
echo $course;
echo "<br>";
echo $email;
echo "<br>";
echo $mobileno;
echo "<br>";
?>
</div>
</body>
</html>