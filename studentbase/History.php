<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="cale=1.0">
    <title>Document</title>
</head>
<style>
    table {
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
<body>
    <h2>User History</h2>
    <?php
    include "koneksi.php";
    $hasil = mysqli_query($koneksi, "SELECT * FROM admin WHERE username");
    ?>
    <table width="800" border="1">
        <tr>
            <td >Name</td>
            <td >Last Activity</td>
        </tr>
    <?php
    while($buff= mysqli_fetch_assoc($hasil)){
        ?>
        <tr>
            <td ><?php echo $buff['Nama'];?></td>
            <td ><?php echo $buff["Action"];?></td>
        </tr>
    <?php
    };
    ?>
    </table>
    <br>
    
</body>
</html>