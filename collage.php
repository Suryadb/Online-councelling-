<?php
 include'header.php';?>
<?php
$type = $_POST['collage'];
            $sql=new PDO('mysql:host=localhost;dbname=test','root','');
            $stm=$sql->prepare("select * from collage where collage.name='$type'");
            $stm->execute();
            $result1=$stm->fetchAll();

         foreach($result1 as $row)
         {?>
         <html>
         <body>
         <link rel="stylesheet" href="st9.css">
         <center>
         <table class="st9" border="1">
         <tr>
         <td><b><p>Collage Name</p></b></td>
         <td><b><p><?php echo $row['name']; ?></p></b></td></tr>
         <tr><tr><td><b><p>CS(NO of Seats)</p></b></td>
         <td><b><p><?php echo $row['cs']; ?></p></b></td></tr>
         <tr><td><b><p>IT(NO of Seats)</p></b></td>
         <td><b><p><?php echo $row['it']; ?></p></b></td></tr>
         <tr><td><b><p>EE(NO of Seats)</p></b></td>
         <td><b><p><?php echo $row['ee']; ?></p></b></td></tr>
        <tr> <td><b><p>ECE(NO of Seats)</p></b></td>
        <td><b><p><?php echo $row['ece']; ?></p></b></td></tr>
        <tr><td><b><p>ME(NO of Seats)</p></b></td>
         <td><b><p><?php echo $row['me']; ?></p></b></td>
         </tr>
          </table>
          </center>
          </body>
          </html>
          
 <?php
         }
         ?>
         <?php
         include'footer.php';?>
