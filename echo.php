<?php
    if (!isset($_REQUEST["data"])) {
        die("{\"error\": \"Please provide the data field\"}");
    }
    echo htmlentities($_REQUEST['data']);
?>