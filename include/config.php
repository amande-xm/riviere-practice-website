<?php

session_start();

const PHONE = "01-02-03-04-05";
const ADDRESS = "21 Boulevard des Belges, Lyon";
const MAIL = "paysages@gmail.com" ;

if(isset($_COOKIE['user'])){
    if ($_COOKIE['user']== $_POST["login"]){
        $_SESSION['admin'] = true;
    }
}

function activite(string $url, string $text) :string {
    $link = '<a href ="' . $url . '" ';
    if($url == $_SERVER["SCRIPT_NAME"]){
        $link .=  'class="active"';
    } 
    $link .= '> ' . $text . '</a>';
    return $link;
}

function images(string $link) :string {
    if(str_contains($_SERVER["HTTP_ACCEPT"], "avif")){
        return $link . ".avif";
    }
    if(str_contains($_SERVER["HTTP_ACCEPT"], "webp")){
        return $link . ".webp";
    }
    return $link . ".jpg";
}

function blog($table) :string {
    $page = "<h2>" . $table[1] . "</h2>";
    $page = $page . "<br>" ; 
    $page = $page . "<h4>" . $table[2] . "</h4>";
    $page = $page . "<br>" ; 
    $page = $page . "<p>" . $table[3] . "</p>";
    $page = $page . "<br>" ; 
    $page = $page . '<img src="./../' . $table[4] . '" alt="' . $table[1] . '">';
    $page = $page . "<br>" ; 
    $page = $page . '<a href="' . '/blog.php?article=' . $table[1] . '">'. 'Lien de cet article' . "</a>";
    return $page;
}
            
