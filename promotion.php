<!DOCTYPE html>
<html>
    <head>
    <?php include('header.php') ?>
    <title>Promotion</title>
    </head>
    <body>
    <?php include('sidebar.php') ;
    include("helper.php");
    
    $sql = "SELECT * FROM promotion";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

// Fetch the results
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($result) > 0) {
    echo "<div class='plant-container'>";
    $count = 0;
    foreach ($result as $row) {
        if ($count % 4 == 0) {
            echo "<div class='plant-row'>";
        }

        $imageFolder = $row["vouchert_img"];
        echo "<div class='plant_list'>";
        echo "<div id='plant_box' onclick=\"openModal('" . $row["voucher_name"] . "', '" .  $row["exp_date"] . "', '" . $row["voucher_img"] . "', '" . $row["plant_desp"] . "')\">";
        echo '<img src="' .$imageFolder . '" alt="' . $row["plant_name"] . '"> <br><br>';
        echo  '<span class="plant_details">' . $row["plant_name"] . "<br><b>" . "RM" . $row["plant_price"] . "</b></span><br><br>";
        echo "</div>";
        echo "<button type='button' class='btn btn-outline-success'>Add to cart</button>"; //addtocart
        echo "</div>";
        
        $count++;
        if ($count % 4 == 0) {
            echo "</div>";
        }
    }
    if ($count % 4 != 0) {
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No record found";
}
?>
    
    
    ?>

    </body>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</html>