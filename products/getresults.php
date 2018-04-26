<table class="table">
    <tr>
        <th>Product Name</th>
        <th>Size</th>
        <th>Category</th>
        <th>Type</th>
        <th>Price</th>
    </tr>
<?php
    $db = new SQLite3("products.db");
    $sql_get_products = 'SELECT * FROM PRODUCTS';
    if(isset($_GET['c'])){
        $cat = $_GET['c'];
        $sql_get_products .= " WHERE Category='$cat'";
    }
    $sql_get_products .= ' ORDER BY product_name;';
    $rows = $db->query($sql_get_products);
    $count = 0;
    while($row = $rows->fetchArray()){
        if($_GET['q'] == "" || strpos(strtolower($row[0]), strtolower($_GET['q'])) !== false)
        {
            $count++;
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$" .
                number_format((float)$row[4], 2)
                . "</td></tr>";
        }
    }
    if($count == 0){
        echo "<td colspan='5'>No results found</td>";
    }
?>
</table>
