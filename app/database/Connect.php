<?php
function Connect(){
    return new PDO(
        "mysql:host=localhost;dbname=amazon",
        "root",
        "",
        [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]
    );
}