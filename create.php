<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>register words</title>
</head>
<style>
a{
    text-decoration: none;
    color: black;
    font-size: 15px;
    }
</style>

<body bgcolor="#F5F5DC">
    <center>
    <table width="10%" cellspacing="20" border="0">
<tr>
    <td><a href="index.php">Home</a></td><td></td>
      
  </tr>
  </table>
        <h1>inserting  new words in Database</h1>
        <?php
include "connect.php"; // Using database connection file here

if(isset($_POST['submit']))
{       
    $variable = $_POST['variable'];
    $kinyarwanda= $_POST['kinyarwanda'];
        $french = $_POST['french'];
        $english= $_POST['english'];
        $swahili = $_POST['swahili'];
        

    $insert = mysqli_query($db,"INSERT INTO `indimi`(`variable`, `kinyarwanda`, `french`, `english`, `swahili`) 
    VALUES ('$variable','$kinyarwanda','$french','$english','$swahili')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>
  
        <form  method="post">
              
              
<table bgcolor="pink" width="50%" cellspacing="20" border="0">
               <tr> <td><label for="variable">Variable</label></td>
                <td><input type="text" name="variable" id="var"></td>
            </tr>
  
             <tr>
               <td> <label for="kinyarwanda">Kinyarwanda</label></td>
                <td><input type="text" name="kinyarwanda" id="kinya"></td>
            </tr>
  
  <tr>
               <td> <label for="french">English</label></td>
               <td> <input type="text" name="english" id="eng"></td>
            </tr>
  
  <tr>              
                 <td><label for="english">french</label></td>
               <td> <input type="text" name="french" id="fre"></td>
                  </tr>
               <tr>
                 <td><label for="swahili">Swahili</label></td>
             <td>   <input type="text" name="swahili" id="swah"></td>
            </tr>
   
           <tr>              
        <td></td><td><input type="submit" name="submit" value="Submit"> </td></tr>
            </table>
        </form>
    </center>
</body>
  
</html>