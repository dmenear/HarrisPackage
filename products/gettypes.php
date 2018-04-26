<select class="form-control" id="typeSelect" onchange="updateType(this.value); quickFind(document.getElementById('quickfind').value);">
    <option>Show All</option>
<?php
    if(isset($_GET['c'])){
        $cat = $_GET['c'];
        $db = new SQLite3("products.db");
        $sql_get_types = "SELECT DISTINCT category_type FROM PRODUCTS WHERE category='$cat';";
        $types = $db->query($sql_get_types);
        while($type = $types->fetchArray()){
            echo "<option>".$type[0]."</option>";
        }
    }
?>
</select>
<br>
