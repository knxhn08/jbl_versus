<?php
    include 'header.php';
?>

<div id="container-bg">
    <div class="content-wrapper">
        <h1>JBL Versus</h1>

        <form action="index.php" method="GET">

            <input type="text" name="search" placeholder="Search" required>

            <input type="text" name="search2" placeholder="Search" required>

            <button type="submit" name="submit-search">Search</button>

        </form>


        <div id="grid-layout-33">

            <?php
                if (isset($_GET['submit-search'])) {
                    $search = mysqli_real_escape_string($conn, $_GET['search']);

                    $sql = "SELECT * FROM products WHERE model LIKE '%$search%'";

                    $result = mysqli_query($conn, $sql);
                    $queryResult = mysqli_num_rows($result);

                    if ($queryResult > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            
                            echo "<div class= product-container>";
                            echo 
                            "
                            <table> 

                                <tr>
                                    <td>Model:</td>
                                    <td>".$row['model']."</td>
                                </tr>

                                <tr>
                                    <td>Manufacturing date:</td>
                                    <td>".$row['manufacturing_date']."</td>
                                </tr>

                                <tr>
                                    <td>Bass driver:</td>
                                    <td>".$row['bass_driver']."</td>
                                </tr>

                                <tr>
                                    <td>Built-in mic:</td>
                                    <td>".$row['built_in_mic']."</td>
                                </tr>
                                
                                <tr>
                                    <td>Product dimension:</td>
                                    <td>".$row['product_dimensions']."</td>
                                </tr>

                                <tr>
                                    <td>Item weight:</td>
                                    <td>".$row['item_weight']."</td>
                                </tr>

                                <tr>
                                    <td>Cable length:</td>
                                    <td>".$row['cable_length']."</td>
                                </tr>

                                <tr>
                                    <td>Connector type:</td>
                                    <td>".$row['connector_type']."</td>
                                </tr>

                                <tr>
                                    <td>What is in the box:</td>
                                    <td>".$row['whats_in_the_box']."</td>
                                </tr>

                            </table>
                            ";
                            echo "</div>";

                            
                        }
                    } else {
                        echo "<div class= product-container>";
                        echo "There are no results matching your search!";
                        echo "</div>";
                    }

                    $search2 = mysqli_real_escape_string($conn, $_GET['search2']);

                    $sql2 = "SELECT * FROM products WHERE model LIKE '%$search2%'";

                    $result2 = mysqli_query($conn, $sql2);
                    $queryResult2 = mysqli_num_rows($result2);

                    if ($queryResult2 > 0) {
                        while ($row2 = mysqli_fetch_assoc($result2)) {

                            echo "<div class= product-container>";
                            echo 
                            "
                            <table> 
                            
                                <tr>
                                    <td>Model:</td>
                                    <td>".$row2['model']."</td>
                                </tr>

                                <tr>
                                    <td>Manufacturing date:</td>
                                    <td>".$row2['manufacturing_date']."</td>
                                </tr>

                                <tr>
                                    <td>Bass driver:</td>
                                    <td>".$row2['bass_driver']."</td>
                                </tr>

                                <tr>
                                    <td>Built-in mic:</td>
                                    <td>".$row2['built_in_mic']."</td>
                                </tr>
                                
                                <tr>
                                    <td>Product dimension:</td>
                                    <td>".$row2['product_dimensions']."</td>
                                </tr>

                                <tr>
                                    <td>Item weight:</td>
                                    <td>".$row2['item_weight']."</td>
                                </tr>

                                <tr>
                                    <td>Cable length:</td>
                                    <td>".$row2['cable_length']."</td>
                                </tr>

                                <tr>
                                    <td>Connector type:</td>
                                    <td>".$row2['connector_type']."</td>
                                </tr>

                                <tr>
                                    <td>What is in the box:</td>
                                    <td>".$row2['whats_in_the_box']."</td>
                                </tr>

                            </table>
                            ";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class= product-container>";
                        echo "There are no results matching your search!";
                        echo "</div>";
                    }
                }
            ?>
        <div>
                   
    </div>
</div>

<!-- footer -->
    <div class="footer">
        &copy; JBL Versus | Created by Ken Alfajaro
    </div>
<!-- // footer -->

</body>
</html>