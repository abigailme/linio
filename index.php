<html>
    <head>
        <meta charset="UTF-8">
        <title>Numeros Linio</title>
        <link rel="stylesheet" type="text/css" href="linio.css">
    </head>
    <body class="intro">
        <table>
            <tr >
                <td>
                    <div class="typed-cursor" id="login">
                    <p class="p" >Realizado por: Abigail Melo</p> 
                        <?php
                            for($i=1; $i<101; $i++){      
                                if($i%3 == 0 && $i%5 == 0){
                                    print " Linianos";
                                }
                                else if($i%3 == 0){
                                    print " Linio";
                                }
                                else if($i%5 == 0){
                                    print " IT";
                                }
                                else{
                                    print " ".$i;
                                }
                            } ?>
                            </span>
                      </div>
                    </td>
            </tr>
        </table>
   </body>
</html>
