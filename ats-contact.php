<?php 

    if(isset($_POST['btn-send']))
    {
        
       $FirstName = $_POST['name'];
	   $LastName = $_POST['last_name'];
       $Email = $_POST['email'];
       $Contact = $_POST['phone'];
       $Msg = $_POST['message'];
       
       

       if(empty($FirstName) || empty($LastName) || empty($Email) || empty($Contact) || empty($Msg))
       {
           header('location:https://alltaxessolution.com/beta/contact.php?error');
       }
       else
       {
           $to = "sandyy1216@gmail.com";
           $subject="New Email From Website";
           $message="
           <html>
            <head>
            <title>ATS Email</title>
            </head>
            <body>
            <table>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email Id</th>
            <th>Contact</th>
            <th>Message</th>
            </tr>
            <tr>
            <td>$FirstName</td>
            <td>$LastName</td>
            <td>$Email</td>
            <td>$Contact</td>
            <td>$Msg</td>
            </tr>
            </table>
            </body>
            </html>
           ";
           
           // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

           if(mail($to,$subject,$message,$headers))
           {
             
               header("location:https://alltaxessolution.com/beta/contact.php?success");
           }
       }
    }
    else
    {
        header("location:https://alltaxessolution.com/beta/contact.php");
    }
?>