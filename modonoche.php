<?php
        if( !isset($_COOKIE['PrintCupsLayout'])){
            setcookie("PrintCupsLayout", 'light');
        }else {
            if($_COOKIE['PrintCupsLayout'] === "light"){
                setcookie("PrintCupsLayout", 'dark');
            }else {
                setcookie("PrintCupsLayout", 'light');
            }
        }
        header("Location: " . $_SERVER["HTTP_REFERER"]);
?>