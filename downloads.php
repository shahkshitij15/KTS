<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
<style>
.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
</style>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
<?php $a=0;?>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['fname']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <?php $a=$a+$file['downloads'];?>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>
  <tr>
  <td colspan="3">Total Downloads</td>
  <td colspan="2"><?php echo $a;?></td>
  </tr>

</tbody>
</table>


  <div class="w3-panel w3-pale-green w3-round-xxlarge w3-margin-right w3-display-middle">
    <p>Enter any questions that you have</p>
  </div>
<div w3-panel w3-pale-green w3-round-xxlarg>
  <form action="quest.php" method="post">
        <h3>Ask a question : </h3>
        <input type="text" name="name"><br>
        <input type="submit">
        </form>
</form>
<br><br>

<table>
<thead>
    <th>ID</th>
    <th>Query</th>
    <th>Status</th>
    <th>Answer</th>
    <th>Action</th>

</thead>
<?php $conn1 = new mysqli("localhost","root", "","file-management");
      $sql = "SELECT * FROM question";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      }
?>
<tbody>

  <?php while($row = $result->fetch_assoc()) 
  echo 
    '<tr>
      <td>'. $row["id"].' </td>
      <td>'. $row['query'].' </td>
      <td>'. $row['status'] .'</td>
      <td>'. $row['answer'] .'</td>
      
      <td>
        <form method="post" action="statupdate.php">
        <div class="wrapper">
        <button type="submit" class="btn"  name="passed" id="passed" ">Solved</button>
        <button type="submit" class="btn" name="insufficient" id="insufficient"">Nope</button>
        </div>
        </form>
      </td>
    </tr>';?>

</tbody>

</table>
<div>
    <p>Status 0 : not answered</p>
  </div>
  <div>
    <p>Status 1 : answered but not understood</p>
  </div>
  <div>
    <p>Status 0 : answered</p>
  </div>

<!-- $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo "0 results";
} -->



<div class="wrapper">
    <button type="submit" class="btn" onclick="window.location.href = 'main.php';">Log Out</button>
</div>

</body>
</html>
