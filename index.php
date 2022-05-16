<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>lab4</title>
</head>
<body>
    <h1>Laboratory work 4</h1>
    <h2>IA-301k Shvydenko Dmytro</h2>
    <?php
    $str = 'aa aba abba abbba abca abea'; 
    echo '<b>','Given a string: ','</b>', $str, '<br/>';
    echo "<br>\n", '<b>','It is necessary to find strings aa, aba with a regular expression', "<br>\n", 'Use the pattern character "a", "b" once, or dont use the character "a"', "</b>";
    echo "<br>\n","<br>\n", '<b>','Found strings: ','</b>',preg_replace('#ab?a#', '<b>[FOUND]</b>, ',$str);
      
    ?>
</body>
</html>