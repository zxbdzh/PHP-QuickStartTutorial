<?php
const Gretting = "欢迎访问 blog.zxbdwy.online";
//echo greeting; // 报错
echo Gretting;
?>

<?php
const GRETTING = "欢迎访问 blog.zxbdwy.online";

function myTest()
{
    echo GRETTING;
    echo PHP_EOL;
    echo PHP_OS;
}

myTest();
?>