<?php
function redirect($location){
    return header( header: "Location:" . $location);
}
?>