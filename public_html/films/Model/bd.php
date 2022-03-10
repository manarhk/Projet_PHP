<?php
 class BD
 {
     public static function connectDB()
     {
         $host = 'iutdoua-web.univ-lyon1.fr';
         $user = 'p2006964';
         $db = 'p2006964';
         $pwd = '567453';

         try {
             $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $pwd);
             return $bdd;
         } catch (Exception $e) {
             exit('Erreur : ' . $e->getMessage());
         }
     }
 }

?>
