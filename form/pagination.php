<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #eee
        }

        .wrapper {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto;
            text-align: center;
            flex-wrap: wrap
        }

        .page-link {
            position: relative;
            display: block;
            color: #673AB7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #673AB7
        }

        .page-link:hover {
            z-index: 2;
            color: #fff;
            background-color: #673ab7;
            border-color: #024dbc
        }

        .page-link:focus {
            z-index: 3;
            outline: 0;
            box-shadow: none
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="pagination.php">Previous</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=1">1</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=3">3</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=4">4</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=5">5</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=6">6</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=7">7</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=8">8</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=9">9</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php?page=10">10</a></li>
                <li class="page-item"><a class="page-link" href="pagination.php">Next</a></li>
            </ul>
        </nav>
        <?php $page = (isset($_GET["page"]) == true) ? $_GET["page"] : "0" ?>
        <p class="result">Bạn đang ở trang thứ <?php echo $page; ?></p>
    </div>
</body>

</html>