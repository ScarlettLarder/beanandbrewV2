<?php 
    include("connection.php");
?>
<?php 
    include("header.php");
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="main.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Aleo&display=swap');
  </style>
</head>

<body>
    <br>
    <br>
  <h1 class="main_textMid">
    Order page - Please select your items
  </h1>
<div>
</div>
<div class="prod_grid">
        <?php 
            $sql = "SELECT * FROM product";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='prod_section'>";
                    echo "<div class='test'>";
                    echo "<div class='prod_text'>".$row["name"]." - £".$row["price"]  ." | ". "<a href='orderscart.php?id={$row['product_id']}'>Add to Cart</a><br>"."</div>";
                    echo '<img class="prod_img" src = "data:image/png;base64,' . base64_encode($row['img_url']) . '" width = "500px" height = "500px"/>';
                    echo "</div>";
                    echo "</div>";
            }
        }
        ?>
    </div>

</body>

</html>
<?php 
    include("B_nav.php");
?>