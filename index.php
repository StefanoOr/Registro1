
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
   <?php
        
        $connessione=mysql_connect("localhost","root");
        mysql_select_db("Registro");    
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro</title>
        <style>
            p.padding{
                  padding-left:4cm;
            }
            
            p.padding2{
                 padding-top: 1cm;
            }
        </style>
    </head>
    <body>
        <?php
        
        $Random= rand(1,16);
        $query=mysql_query("Select * from Studenti where id=$Random",$connessione);
        $risultato=mysql_fetch_assoc($query);
       
        echo "<p class=\"padding2\"> <p class=\"padding\"> Numero: $risultato[ID]<br>Nome: $risultato[Nome]<br>Cognome: $risultato[Cognome]</p></p>";
        ?>
        <form action="index.php" method="get">
           <!--<input type="hidden" name="ciao" value="ciao">-->
           <p class="padding"> <button type="submit">Ricarica</button></p>
        </form>
    </body>
</html>
