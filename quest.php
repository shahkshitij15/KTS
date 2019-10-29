<html>
<body>
<?php
$conn=new mysqli("localhost","root","","file-management");
// $sql="INSERT INTO nametable (fname, lname)VALUES('$_POST[fname]','$_POST[lname]')";
 $hello = mysqli_query($conn," INSERT INTO `question` (`id`, `query`, `status`, `answer`) VALUES ('1', 'this is my question', '0', '') ");
?>
Entered your question : " <?php echo $_POST['name']; ?>"<br>

</body>
</html>