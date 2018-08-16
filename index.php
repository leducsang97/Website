<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> Blog Momo</title>
    <?php include('header.php');?>
    <link href="css/momo.css" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/style.css"-->
</head>

<body>

    <!-- navbar -->
    <div class="nav">
        <?php include('nav.php');?>
    </div>


    <!-- modal -->
    <?php include('modal.php');?>


    <!--post-->
    <div class="container">
    </div>
    <main role="main">
        <div class="container">

            <!-- Example row of columns -->
            <div class="row">
                <?php 
    include('connection.php');
    $query="SELECT * FROM post";
    $result=$conn->query($query);
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $header = $row["header_name"];
            $descript = $row["descript"];
            $date = $row["date"];
            $user=$row["user"];
            $post =$row["post"];
            $path=$row["path"];
            echo "   <div class=\"col-md-4\">
                    <h3>
                        $header
                    </h3>
                    <p>
                        $descript</p>
                    <p><a class=\"btn btn-secondary\" href=\"Post/$path.php\" role=\"button\">View details &raquo;</a></p>
                </div>";
        }
    }
    else{
    }
    mysqli_close($conn);
    ?>

            </div>

            <hr>

        </div>
        <!-- /container -->

    </main>

    <section id="signup">
        <div class="container">
            <h2>Get my updated newsletter</h2>
            <p class="lead"> Hope you get motivated.</p>
            <div class="row">
                <div class="row-sm-8 col-sm-offset-2">
                    <form>
                        <div class="input-group">

                            <input type="text" class="form-control input-lg" placeholder="Put your real address in here....">
                            <span class="input-group-btn"><button class="btn btn-warning btn-lg" type="button">Rock it</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>


<?php include('footer.php');?>
<script src="app.js"></script>


</html>
