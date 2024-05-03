<?php

$path=$_GET['loc'];
$dir=$_GET['dir'];


if ($path[strlen($path)-1]!='/') $path=$path . "/";
//if ($dir[strlen($dir)-1]!='/') $dir=$dir . "/";

if (isset($_GET['action']) && ($_GET['action']!="")){
    $action=$_GET['action'];
    act($path, $dir, $action);
}
else act ($path, $dir);


function act($path, $dir, $action ="read"){
    //echo $action;
    if (!file_exists($path)) echo "dana lokalizacja nie istnieje, żegnam";
    else {
        $fd=opendir($path);
        switch($action){
            case "read":
                $i=0;
                while(($file=readdir($fd)) !== false) {
                    $i++;
                    if ($i >2)echo "$file <br>";
                }
                break;
            case "delete":
                if (is_dir($path . $dir)){
                    $inside = scandir($path . $dir);
                    array_splice($inside,0,2);
                    if (empty($inside)) {
                        if (rmdir($path . $dir)){
                            echo "$dir usuniete";
                        }
                        else echo "$dir nieusuniete";
                        }
                    else echo "podany folder nie jest pusty, nie usuwam";
                }
                else echo "nie ma takiego folderu";


                break;
            case "create":
                if (is_dir($path . $dir)){
                    echo "taki folder juz istnieje";
                } else{
                    if (mkdir($path . $dir)){
                        echo "$dir utworzone";
                    }
                    else echo "$dir nieutworzone";
                }

                break;

        }
        closedir($fd);

    }


}

?>