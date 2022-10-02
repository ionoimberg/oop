<?php

echo __FILE__ . "<br>";

echo __LINE__ . "<br>";

echo __DIR__ . "<br>";

if(file_exists(__DIR__)) {

    echo "directory exists" . "<br>";
}

if(file_exists(__FILE__)) {

    echo "file exists" . "<br>";
}

if(is_file(__DIR__)) {

    echo "yes <br>";
} else {

    echo "is not a file <br>";
}

if(is_file(__FILE__)) {

    echo "yes" . "<br>";
} else {

    echo "is not a file" . "<br>";
}

if(is_dir(__FILE__)) {

    echo "dir" . "<br>";
} else {

    echo "is not a dir" . "<br>";
}

echo file_exists(__FILE__) ? "yes <br>" : "no <br>";