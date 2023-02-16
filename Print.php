<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="decription" content="Patient registration form"/>
    <meta name="keywords" content="html, HTML"/>
    <meta name="author" content="Md Aziz Hosen Foysal, Sazzad Hossain Zihad, Jannatul Kursi"/> 
    <title>Patient Registration Form</title>
    <link rel="stylesheet" type="text/css" href="StyleP.css">
</head>
<body>
    <!--body for the background-->
    <div class="body">
        <!--container for form starts-->
        <div class="form_body">
            <!--header starts-->
            <header>
                <div  class="heading">
                    <h1>A&Z Hospital</h1>
                    <h2>Savar, Dhaka, Bangladesh.</h2>
                </div>
            </header>
            <hr>
            <!--header ends-->
            <!--main starts-->
            <main>
                <table align="center" border="1px" style="width:600px; line-height:40px;"> 
                    <thead>
                    <tr> 
                        <th colspan="9"><h2>Patient Records</h2></th> 
                    </tr> 
                    <tr>
                          <th> Name </th> 
                          <th> Age </th> 
                          <th> Gender </th> 
                          <th> Email </th> 
                          <th> Mobile </th> 
                          <th> Doc_name </th> 
                          <th> Appointment_date </th> 
                          <th> Description </th> 
                          <th> Terms </th> 
                              
                    </tr> 
                    </thead> 
                    <tbody>
                    <?php
                    $Name=$_POST['Name'];
                    $Age=$_POST['Age'];
                    $Gender=$_POST['Gender'];
                    $Email=$_POST['Email'];
                    $Mobile=$_POST['Mobile'];
                    $Doc_name=$_POST['Doc_name'];
                    $Appointment_date=$_POST['Appointment_date'];
                    $Description=$_POST['Description'];
                    $Terms=$_POST['Terms'];

                    $servername = "localhost";
			        $username = "root";
			        $password = "";
			        $database = "db_project";

			        // Create connection
			        $connection = new mysqli($servername, $username, $password, $database);

                    // Check connection
			        if ($connection->connect_error) {
			        	die("Connection failed: " . $connection->connect_error);
			        }
                    else{
                        $stmt = $connection->prepare("insert into patient( Name, Age, Gender, Email, Mobile, Doc_name, Appointment_date, Description, Terms) 
                        values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        $stmt->bind_param("sississss" , $Name, $Age, $Gender, $Email, $Mobile, $Doc_name, $Appointment_date, $Description, $Terms);
                        $execval = $stmt->execute();
                        //echo $execval;
                        //echo "Registration sucessfully Done...";
                         $stmt->close();
                         //$connection->close();
                    }

                    // read all row from database table
			        $sql = "SELECT * FROM patient";
			        $result = $connection->query($sql);

                    if (!$result) {
			        	die("Invalid query: " . $connection->error);
			        }
                    
                    
                    while($row = $result->fetch_assoc())
                    {
                        echo"
                            <tr>
                            <td>".$row["Name"]."</td>
                            <td>".$row["Age"]."</td>
                            <td>".$row["Gender"]."</td>
                            <td>".$row["Email"]."</td>
                            <td>".$row["Mobile"]."</td>
                            <td>".$row["Doc_name"]."</td>
                            <td>".$row["Appointment_date"]."</td>
                            <td>".$row["Description"]."</td>
                            <td>".$row["Terms"]."</td>
                            </tr>";
                    }
                    ?>
                    </tbody>
                    </table>  
            </main>
            <!--main ends-->
            <!--footer starts-->
        </div>
        <!--container for form ends-->
    </div>  
</body>
</html>