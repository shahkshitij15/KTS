<html>
<body>
<?php
$conn=new mysqli("localhost","root","","file-management");
// $sql="INSERT INTO nametable (fname, lname)VALUES('$_POST[fname]','$_POST[lname]')";
 $hello = mysqli_query($conn," UPDATE question SET answer = '$_POST[name]' WHERE status = '0' OR status='1' ");
?>
Entered your answer : " <?php echo $_POST['name']; ?>"<br>

</body>
</html>