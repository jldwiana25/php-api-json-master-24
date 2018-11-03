<?php
	include "koneksi.php";
	$qry = mysqli_query($conn,"SELECT * FROM tabe_kelas");
	$data = mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <form method="post">
        <table>
            <tr><td>Id</td><td><input type="number" name="id"></td></tr>
            <tr><td>Username</td><td><input type="text" name="username"></td></tr>
            <tr><td>Password</td><td><input type="password" name="password"></td></tr>
            <tr><td>Level</td><td>
            <select name="level">
				<option value="User">User</option>
				<option value="Admin">Admin</option>
            </select>
            <tr><td>Fullname</td><td><input type="text" name="fullname"></td></tr>
            <tr><td colspan="2"><input type="submit" name="edit" value="Edit"></td></tr>
        </table>
    </form>
    <?php
		include 'koneksi.php';
		 $id = $_POST['id'];
		 $username = $_POST['username'];
		 $password = $_POST['password'];
		 $level = $_POST['level'];
		 $fullname = $_POST['fullname'];
		 $sql_update=("UPDATE tabe_kelas SET username='$username', password='$password', level='$level', fullname='$fullname' WHERE id='$id'");
		 mysqli_query($conn,$sql_update)or die(mysqli_error($conn));
		 echo '<script>
		 alert("Data Berhasil Diedit");
		 location="index.php?"
		 </script>';
 	 ?>
</body>
</html>