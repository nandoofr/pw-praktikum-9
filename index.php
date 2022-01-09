<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karyawan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['delete'])) {
    $sql = "DELETE FROM karyawan WHERE id=".$_GET['delete'];

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: '.$_SERVER['PHP_SELF']);
} else {
  echo "Error deleting record: " . $conn->error;
}
}

if (count($_POST)) {
    $sql = "INSERT INTO karyawan (name, email, address, gender, position, status)
    VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['address']."', '".$_POST['gender']."', '".$_POST['position']."', '".$_POST['status']."')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header('Location: '.$_SERVER['PHP_SELF']);
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql = "SELECT id, name, email, address, gender, position, status FROM karyawan";
$result = $conn->query($sql);
$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Praktikum 9 Tambah Data</title>
  </head>
  <body>
    <div class="container row">
        <div class="col-10">
            <h1 class="text-center">Praktikum 9 Tambah Data</h1>
        <table class="table table-warning table-striped">
        <tr>
            <th>
                #
            </th>
            <th>
                name
            </th>
            <th>
                email
            </th>
            <th>
                address
            </th>
            <th>
                gender
            </th>
            <th>
                position
            </th>
            <th>
                status
            </th>
            <th>action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['position']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "<td><a href='?delete=".$row['id']."' class='btn btn-danger me-md-2'>Delete</a></td>";
            echo "</tr>";
        }
        }
        ?>

        </table>
        <form action="?" method="post">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="exampleInputName">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputAddress" class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" id="exampleInputAddress">
        </div>
        <div class="mb-3">
            <label for="exampleInputGender" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="gender" aria-label="Default select example">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
        </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputPosition" class="form-label">Posisi</label>
            <input type="text" name="position" class="form-control" id="exampleInputPosition">
        </div>
        <div class="mb-3">
            <label for="exampleInputStatus" class="form-label">Status</label>
            <select class="form-select" name="status" aria-label="Default select example">
            <option value="Fulltime">Fulltime</option>
            <option value="Parttime">Parttime</option>
            <option value="Intern">Intern</option>
        </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  </body>
</html>