<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iNoteBook : Make Your Notes Easily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container justify-content-center">
            <img src="logo.png" alt="iNoteBook" width="225">
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Add a Note</h2>
        <form action="iNoteBook.php" method="post">
            <div class="mb-3 mt-4">
                <label for="title" class="form-label">Title : </label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-5">
                <label for="desc" class="form-label">Description : </label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>
    <div class="container">
        <?php ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>