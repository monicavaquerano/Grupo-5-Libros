<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Países</title>
        <!-- Style sheet -->
        <link rel="icon" href="imagenes/logo.ico">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

                <?php
                    foreach($data["portada"] as $data){
                        echo "<tr>"; 
                            echo "<td>".$data["portada_id"]."</td>";
                            echo "<td>".$data["tipo"]."</td>";
                            echo "</tr>";
                    }
                ?>
            </tbody>
            
        </table>
    </div>
    </body>
</html>