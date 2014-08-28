<?php

session_start();

if(!isset($_SESSION['numbers']))
{
    $output = array();
    $letters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",);

    for($i=0; $i < 16; $i++)
    {
        $rand_index = rand(0,count($letters) - 1);
        $_SESSION['numbers'][] = $letters[$rand_index];
    }


}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boggle</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                // alert('hello');

                $('td').on('click', function(){

                    $current = $('#enter').attr('value');
                    $this_html = $(this).html();
                    $new_attr = $current + $this_html;
                    $('#enter').attr('value', $new_attr);
                });


            });

        </script>
    </head>
    <body>
        <div id="container">
            <div id="board">
<?php
                if(isset($_SESSION['score']))
                {  ?>
                <div class="score flash"><?= $_SESSION['score'] ?></div>
<?php
                }  ?>
<?php
                if(isset($_SESSION['error']))
                {  ?>
                <div class="error flash"><?= $_SESSION['error'] ?></div>
<?php
                unset($_SESSION['error']);
                }  ?>
                <table id="board">
                    <h1>Boggle</h1>
<?php               
                    if(isset($_SESSION['numbers']))
                    {  ?>

                    <tr>
                        <td><?= $_SESSION['numbers'][0] ?></td>
                        <td><?= $_SESSION['numbers'][1] ?></td>
                        <td><?= $_SESSION['numbers'][2] ?></td>
                        <td><?= $_SESSION['numbers'][3] ?></td>
                    </tr>
                    <tr>
                        <td><?= $_SESSION['numbers'][4] ?></td>
                        <td><?= $_SESSION['numbers'][5] ?></td>
                        <td><?= $_SESSION['numbers'][6] ?></td>
                        <td><?= $_SESSION['numbers'][7] ?></td>
                    </tr>
                    <tr>
                        <td><?= $_SESSION['numbers'][8] ?></td>
                        <td><?= $_SESSION['numbers'][9] ?></td>
                        <td><?= $_SESSION['numbers'][10] ?></td>
                        <td><?= $_SESSION['numbers'][11] ?></td>
                    </tr>
                    <tr>
                        <td><?= $_SESSION['numbers'][12] ?></td>
                        <td><?= $_SESSION['numbers'][13] ?></td>
                        <td><?= $_SESSION['numbers'][14] ?></td>
                        <td><?= $_SESSION['numbers'][15] ?></td>
                    </tr>
<?php
                    }  ?>
                </table>
                <form action="process.php" method="post">
                    <input id="enter" type="text" name="word" value="">
                    <input type="hidden" name="action" value="submit">
                    <input type="submit" value="Submit">
                </form>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="reset">
                    <input id="reset" type="submit" value="Play Again">
                </form>
            </div>
        </div>
    </body>
</html>
