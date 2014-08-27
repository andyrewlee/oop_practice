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
                <table id="board">
                    <h1>Boggle</h1>
                    <tr>
                        <td>A</td>
                        <td>Q</td>
                        <td>W</td>
                        <td>E</td>
                    </tr>
                    <tr>
                        <td>Z</td>
                        <td>X</td>
                        <td>Z</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>F</td>
                        <td>A</td>
                        <td>T</td>
                        <td>H</td>
                    </tr>
                    <tr>
                        <td>I</td>
                        <td>U</td>
                        <td>Y</td>
                        <td>T</td>
                    </tr>
                </table>
                <form action="process.php" method="post">
                    <input id="enter" type="text" name="word" value="">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>
