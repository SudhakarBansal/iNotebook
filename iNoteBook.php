<?php

//connecting to the db
$insert = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "iNoteBook";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Sorry ! Connection cannot be established due to : " . mysqli_connect_error());
}

//Inserting records in table
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `Notes`(`Title`, `Description`) VALUES ('$title', '$desc')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $insert = true;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iNoteBook : Make Your Notes Easily</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container justify-content-center">
            <a href="/project-CRUD(inotes)/iNoteBook.php"><img src="logo.png" alt="iNoteBook" width="225"></a>
        </div>
    </nav>
    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been inserted.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>

    <div class="container my-4">
        <h2>Add a Note</h2>
        <form action="/project-CRUD(inotes)/iNoteBook.php" method="post">
            <div class="mb-3 mt-4">
                <label for="title" class="form-label">Title : </label>
                <input type="text" class="form-control text-bg-dark border-secondary shadow-none" id="title"
                    name="title">
            </div>
            <div class="mb-4">
                <label for="desc" class="form-label">Description : </label>
                <textarea class="form-control text-bg-dark border-secondary shadow-none" id="desc" name="desc"
                    rows="2"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-light mb-4">Add Note</button>
        </form>
    </div>
    <div class="container">

        <hr>
    </div>
    <div class="container my-4 mt-5">
        <table class="table table-dark" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sno = 1;
                $sql = "SELECT * FROM `Notes`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <th scope='row'>" . $sno . "</th>
                    <td>" . $row['Title'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td>Actions</td>
                </tr>";
                    $sno++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>