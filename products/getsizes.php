<select class="form-control" id="sizeSelect" onchange="updateSize(this.value); quickFind(document.getElementById('quickfind').value);">
    <option>Show All</option>
    <?php
    if(isset($_GET['c'])){
        $cat = $_GET['c'];
        $db = new SQLite3("products.db");
        $sql_get_types = "SELECT DISTINCT product_size FROM PRODUCTS WHERE category='$cat';";
        $sizes = $db->query($sql_get_types);
        while($size = $sizes->fetchArray()){
            echo "<option>".$size[0]."</option>";
        }
    }
    ?>
</select>
<br>
