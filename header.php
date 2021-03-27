<?php include 'main.php';

if (!$_SESSION['loggedin']) {
    echo "<script>window.location.href='login.php'</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Chatty App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Chatty App</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item px-3">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="timeline.php">Time Line</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="post.php">Post</a>
                </li>
                <li class="px-3">
                    <span class="btn btn-dark"><?php foreach ($object->livvveee() as $op) {
                                                    echo $op['name'];
                                                } ?></span>
                </li>
                <li>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </li>
            </ul>

        </div>
    </nav>