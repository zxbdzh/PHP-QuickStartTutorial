<?php
echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;
?>

<?php
$name="zxb";
$a= <<<ABC
    "abc"$name
    "123"
ABC;

echo $a;
?>

