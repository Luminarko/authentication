<?php

function salt_delete($con, string $s){
    mysqli_query($con, "DELETE FROM request WHERE salt =('$s');");
}