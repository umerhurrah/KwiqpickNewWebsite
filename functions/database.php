<?php

$con = pg_connect("host=localhost port=5432 dbname=kwiqpick_db user=postgres password=unlockdb");

function row_count($result){
    return pg_num_rows($result);
}

function escape($string){
    global $con;
    return pg_escape_string($con, $string);
}

function query($query){
    global $con;
    return pg_query($con, $query);
}

function fetch_row($result){
    global $con;
    return pg_fetch_row($result);
}

function close_connection()
{
    global $con;
    pg_close($con);
}

function fetch_array($result){
    global $con;
    return pg_fetch_assoc($result);
}
?>
