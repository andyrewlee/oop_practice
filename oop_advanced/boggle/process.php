<?php

session_start();

include("binary_search1.php");

if(isset($_POST['action']) && $_POST['action'] == 'submit')
{
    if ($new_tree->find_branch($_POST['word'], $new_tree->root))
    {
        if(isset($_SESSION['score']))
        {
            $_SESSION['score'] += strlen($_POST['word']);
        }  
        else
        {
            $_SESSION['score'] = strlen($_POST['word']);
        }
    }
    else
    {
        $_SESSION['error'] = $_POST['word'] . " does not exist";
    }
}
elseif(isset($_POST['action']) && $_POST['action'] == 'reset')
{
    $_SESSION = array();
}

header("Location: index.php");


unset($file);//prevent memory leaks for large json.



?>