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
    justify-content: center;
    align-items: center
}

.page-link {
    position: relative;
    display: block;
    color: #673AB7 !important;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #673AB7 !important
}

.page-link:hover {
    z-index: 2;
    color: #fff !important;
    background-color: #673ab7;
    border-color: #024dbc
}

.page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: none
}
.pagination a.active {
background-color: dodgerblue;
color: white;
}
</style>
</head>
<body>
<div class="wrapper">
        <div class="pagination">
            <a class="page-link" href="#">Previous</a>
            <a class="page-link" href="#">1</a>
            <a class="page-link" href="#">2</a>
            <a class="page-link" href="#">3</a>
            <a class="page-link" href="#">4</a>
            <a class="page-link" href="#">5</a>
            <a class="page-link" href="#">6</a>
            <a class="page-link" href="#">Next</a>
    </div>
</div>
</body>
</html>