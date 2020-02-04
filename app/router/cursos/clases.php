<?php
 $seccion= !isset($seccion) ? 0 : $seccion;
       $seccion=$_GET[seccion];
                        switch ($seccion) {
                           case pag1:
                               include("pag1.php");
                               break;
                           case pag2:
                               include("pag2.php");
                               break;
                           case pag3:
                               include("pag3.php");
                              break;
           default:
                               include("blank.php");
                        } 
?>