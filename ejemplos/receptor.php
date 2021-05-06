<?php

if(!empty($_GET))
{
    $data = $_GET;
}
else if(!empty($_POST))
{
    $data = $_POST;
}
else
{
    $data = [];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Recepcion de datos</title>
        <meta name="theme-color" content="#4285f4">    
    </head>
    <body>
        <header>
        <h1>Recepcion de Formulario: </h1>
            <nav>
            <script>
        document.write('<a href="' + document.referrer + '">Volver</a>');
    </script>
            </nav>
            <hr>
        </header>
        <main>
            <div>
                <table border>
                    <tr>
                        <th>Key // llave</th>
                        <th>Value // valor</th>
                    </tr>
            <?php
            
            foreach($data as $key => $value)
            {
                echo '<tr>';
                echo '<td>';
                echo $key;
                echo '</td>';
                echo '<td>';
                echo $value;
                echo '</td>';
                echo '</tr>';
            }
            ?>
            </table>
            </div>
        </main>
        <footer></footer>

    </body>
</html>