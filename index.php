<?php
session_start();
require 'bd.php';
startbd();

?>

<!DOCTYPE html>
<html lang="ru">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link href="./css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <title>php2 - home work</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Главная</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">php2-1</h1>
            </div>
            <div class="col-lg-12" id="alertmsg">
                
            <?php if (isset($_SESSION['msg']))
            {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            }
            ?>

            </div>
            <div class="col-lg-12">
        <?php
        $result = mysqli_query($link,'SELECT * FROM lesson1 ORDER BY time DESC');
        while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='title'> <strong>Название:</strong> ".$row['title']."<br></div>";
        echo "<div class='content'> <strong>Содержимое:</strong> ".$row ['content']."<br><br></div>";
        echo "<p><em class='time'>Дата добавления: ".$row ['time']."</em>";
        echo '<a class="acont" href ="'."article.php?id=" . $row['id'] . '"' .'>Читать далее</a>';
        echo '<a class="acontdel" href ="'."delete.php?id=" . $row['id'] . '"' .'>Удалить статью</a>';
        echo '<a class="aedit" href ="'."edit.php?id=" . $row['id'] . '"' .'>Изменить статью</a></p>';
        echo "<hr>";
        }
?> 
<p><a href="add.php">Добавить новость</a></p>

            
        </div>
    </div>
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Сергей Ковика 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>

</body>

</html>
