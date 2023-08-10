<?php

$DOCUMENT = parse_ini_file(".env");

if (isset($_GET["url"])) {
    $GET = explode("/", $_GET["url"]);

    switch ($GET[0]) {
        case "auth":
            require_once "pages/auth.php";
            break;
        case "register":
            require_once "pages/register.php";
            break;
        case "dashboard":
            if (isset($_COOKIE["@AuthToken"]) && $_COOKIE["@AuthToken"] === $DOCUMENT["API_KEY"]) {
                require_once "pages/dashboard.php";
            } else {
                header("Location: ./auth");
            }
            break;
        case "inventories":
            if (isset($_COOKIE["@AuthToken"]) && $_COOKIE["@AuthToken"] === $DOCUMENT["API_KEY"]) {
                require_once "pages/inventories.php";
            } else {
                header("Location: ./auth");
            }
            break;
        case "report":
            if (isset($_COOKIE["@AuthToken"]) && $_COOKIE["@AuthToken"] === $DOCUMENT["API_KEY"]) {
                require_once "pages/report.php";
            } else {
                header("Location: ./auth");
            }
            break;
        default:
            require_once "pages/404.php";
            break;
    }
} else {
    require_once "pages/auth.php";
}
?>
