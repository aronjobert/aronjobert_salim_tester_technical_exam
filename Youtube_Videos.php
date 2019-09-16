<!DOCTYPE HTML>

<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<h1 class= "container-fluid" >Youtube Videos</h1>
    <div class="container-fluid">
        <table class="table table-bordered" style = "overflow: auto; white-space: nowrap;">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumbnail</th>
                    <th>Publish at</th>
                    <th>Created at</th>
                    <th>Modified at</th>

                <tr>
            </thead>
            <tbody>
                <tr>
            <?php
            $conn = new mysqli("localhost", "root","","youtube_app");
            $sql = "SELECT * FROM youtube_videos";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

            ?>
                    <td> <?php echo $row["title"] ?></td>
                    <td><?php echo $row["description"]?></td>
                    <td><?php echo $row["thumbnail"]?></td>
                    <td><?php echo $row["published_at"]?></td>
                    <td><?php echo $row["created"]?></td>
                    <td><?php echo $row["modified"]?></td>
                </tr>
            </tbody>
            <?php 
                }
            }
            ?>
        </table>
    </div>


</body>
</html>