<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--New.html-->
        <title>New.php</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="javaScript.js"></script>   
    </head>
    <body background="car2.jpg">
        
        <div class="background2">
        <div class="main2">
            <h1 class="H1">Application Form</h1>
            <form name="myForm" action="dbconnect.php" onsubmit="return validationform()" method="post">
                
                <table id="table1">
                <tr>
                    <td>Seller name  </td><td><input type="text" name="firstname" required></td>
                </tr>
                <tr>
                    <td>Address  </td><td><textarea rows="3" cols="28" name="address" required></textarea></td>
                </tr>
                <tr>
                    <td>City  </td><td><input type="text" name="city" required></td>
                </tr>
                <tr>
                    <td> Phone number  </td><td><input type="text" name="number" required></td>
                </tr>
                <tr> 
                    <td>E-mail id  </td><td><input type="text" name="email" required></td>
                </tr> 
                <tr>
                    <td>Vehicle make  </td><td><input type ="text" name="Vehiclemake" required></td>
                </tr>
                <tr>
                    <td>Model  </td><td><input type ="text" name="Model" required></td>
                </tr>
                <tr>
                    <td>Year  </td><td><input type ="text" name="Year" required></td>
                </tr>
                
                    
                </table>
                <input type="submit" value="Submit">
            </form>
            <p id="message"></p>
        </div>
            </div>
            
    </body>
</html>