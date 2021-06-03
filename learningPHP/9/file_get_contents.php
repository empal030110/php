<?php
    session_start();
    $_SESSION['username'] = 'dotetimer';

    $page = file_get_contents('page_template.html');

    $page = str_replace('{pagetitle}', '환영합니다', $page);

    if(date('H') >= 12){
        $page = str_replace('{color}', 'blue', $page);
    } else{
        $page = str_replace('{color}', 'green', $page);
    }

    $page = str_replace('{name}', $_SESSION['username'], $page);

    print $page;
?>