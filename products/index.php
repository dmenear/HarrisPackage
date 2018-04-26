 <!DOCTYPE html>
<html lang="en">
<?php
    $pageID = "products";
    include("../incl/head.php");
?>
<body>

<script>
    var filterCategory = "";
    var filterType = "";
    var filterSize = "";

    function quickFind(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("results").innerHTML = this.responseText;
            }
        };
        var resultsString = "getresults.php?q=" + str;
        if (filterCategory != "") {
            resultsString = resultsString + "&c=" + filterCategory;
        }
        xmlhttp.open("GET", resultsString, true);
        xmlhttp.send();
    }

    function updateCategory(category){
        if(category == "Show All"){
            filterCategory = "";
        } else{
            filterCategory = category;
        }
    }
    
    function updateType(catType){
        if(catType == "Show All"){
            filterType = "";
        } else{
            filterType = catType;
        }
    }

    function updateTypes(category){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("types").innerHTML = this.responseText;
            }
        };
        var resultsString = "gettypes.php?c="+category;
        xmlhttp.open("GET", resultsString, true);
        xmlhttp.send();
    }
</script>

<?php
    //Open or create database
    $db = new SQLite3("products.db");

    //Create and populate database from CSV file if not already done
    $sql_create_table_products = 'CREATE TABLE IF NOT EXISTS products (
        product_name TEXT,
        product_size TEXT,
        category TEXT,
        category_type TEXT,
        price FLOAT
        );';
    $db->exec($sql_create_table_products);
    $sql_check_rows = 'SELECT COUNT(ROWID) as rowcount FROM products;';
    $countResult = $db->query($sql_check_rows);
    $count = (int)($countResult->fetchArray()[0]);
    if($count == 0){
        if (($handle = fopen("products.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle)) !== FALSE) {
                $sql_insert_product = 'INSERT INTO products (product_name, product_size, category, category_type, price) VALUES (
                    "'.$data[0].'",
                    "'.$data[1].'",
                    "'.$data[2].'",
                    "'.$data[3].'",
                    "'.$data[4].'"
                );';
                $db->exec($sql_insert_product);
            }
            fclose($handle);
        }
    }
?>


<?php include("../incl/nav.php"); ?>

    <div id="pageHeader" class="jumbotron jumbotron-fluid container-fluid text-center" style="padding-right: 15px; padding-left: 15px;">
        <div class="row">
            <div class="col-12 h3">Product List</div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="form-group row">
                    <label for="quickfind" class="col-lg-2 col-4 col-form-label"><b>Quick Find: </b></label>
                    <div class="col-lg-10 col-8">
                        <input class="form-control" type="search" id="quickfind" onkeyup="quickFind(this.value);">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="text-right col-lg-1 col-3 col-form-label" for="categorySelect">Category:</label>
                    <div class="col-lg-3 col-9">
                        <select class="form-control" id="categorySelect" onchange="updateCategory(this.value); updateTypes(this.value); quickFind(document.getElementById('quickfind').value);">
                            <option>Show All</option>
                            <option>Liquor</option>
                            <option>Beer</option>
                            <option>Wine</option>
                        </select>
                        <br>
                    </div>
                    <label class="text-right col-lg-1 col-3 col-form-label" for="typeSelect">Type:</label>
                    <div id="types" class="col-lg-3 col-9">
                        <select class="form-control" id="typeSelect">
                            <option>Show All</option>
                        </select>
                        <br>
                    </div>
                    <label class="text-right col-lg-1 col-3 col-form-label" for="sizeSelect">Size:</label>
                    <div class="col-lg-3 col-9">
                        <select class="form-control" id="sizeSelect">
                            <option>Show All</option>
                        </select>
                        <br>
                    </div>
                </div>
                <br>
                <div id="results">
                    <table class="table">
                        <tr>
                            <th>Product Name</th>
                            <th>Size</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Price</th>
                        </tr>
                        <?php
                            $sql_get_products = 'SELECT * FROM PRODUCTS ORDER BY product_name;';
                            $rows = $db->query($sql_get_products);
                            while($row = $rows->fetchArray()){
                                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$".
                                    number_format((float)$row[4], 2)
                                    ."</td></tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
<?php include("../incl/footer.php"); ?>

</body>
</html>