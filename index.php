<!--
    Тестовое задание, в котором реализован простейший CRUD,
    запросы к БД асинхронные (AJAX), сортировка реализована
    с помощью библиотеки tablesorter.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" type="text/css"/>
        <title>Test</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
        <!-- MAIN TABLE-->
        <div id="myTable">
            <?php require_once 'createTable.php'; ?>
        </div>
        <input type="button" value="Add new" id="addNew" />
        <br>
        <!-- POPUP FOR ADDING -->
        <div class="b-popup" id="popup2">
            <div class="b-popup-content">
                <h2>Append</h2>
                <form>
                    <input class="myInput" type="text" placeholder="product name" name="name" />
                    <input class="myInput" type="number" step="0.01" placeholder=" product price" name="price" />
                    <input class="myInput" type="number" step="0.01" placeholder="product rating" name="rating" />
                    <input id="send" class="myInput" type="button"  value="add new product" />
                    <input id="cancel2" class="myInput" type="button"  value="cancel" />
                </form>
            </div>
        </div>
        <!-- POPUP FOR UPDATING -->
        <div class="b-popup" id="popup1">
            <div class="b-popup-content">
                <h2>Update</h2>
                <form id="uform">
                    <input id="u1" class="myInput" type="text"  name="uid" readonly="true" />
                    <input id="u2" class="myInput" type="text"  name="uname" />
                    <input id="u3" class="myInput" type="number" step="0.01"  name="uprice" />
                    <input id="u4" class="myInput" type="number" step="0.01"  name="urating" />
                    <input id="update" class="myInput" type="button"  value="update product" />
                    <input id="cancel1" class="myInput" type="button"  value="cancel" />
                </form>
            </div>
        </div>
    </body>
    <!-- SCRIPTS -->
    <div id="scripts"><?php require_once 'ScriptsUpdate.php'; ?></div>
    <script type="text/javascript" src="js/AjaxDeleteFromDb.js"></script>
    <script type="text/javascript" src="js/UpdateDb.js"></script>
    <script type="text/javascript" src="js/AjaxAddtoDb.js"></script>
    <script src="js/jquery.tablesorter.js" type="text/javascript"></script>
</html>
