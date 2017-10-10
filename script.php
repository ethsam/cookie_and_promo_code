<?php

// DEB Samuel Etheve - code promo pour le PDF 09/10/2017

      $coderecu = $_COOKIE['search']; //Ont va chercher le cookie et ont le place dans un array
      $coderecu = stripslashes($coderecu); //Ont retire les slashs de la chaine de caractère en array
      $coderecu = json_decode($coderecu, true); //ont json_decode
      $coderecu = strtoupper($coderecu['codePromo']); //ont recupére le code promo

      $code1 = "PETITFUTE2018"; //code promo 1
      $code2 = "PROMO2018"; //code promo 2
      $code3 = "TESTPROMO"; //code promo 3

      $prixorigin = $this->booking->getPriceCardMode(); //ont récupére le prix
      $prixcalcul = ($prixorigin - (($prixorigin * 10)/100)); //calcul -10%
      $prixcalcul = number_format($prixcalcul, 2, ',', ' '); //ont ajoute la décimal

     	if ( ($coderecu == $code1) || ($coderecu == $code2) || ($coderecu == $code3) ) { //si le code promo est valide
           $this->_option( [ 'label' => 'Code PROMO : '.$coderecu.' ', 'theme' => 'basis', 'value' => $coderecu ]); //ont affiche le code promo utilisé
      	   $this->_option( [ 'label' => 'Total (T.T.C.) -10% : ', 'theme' => 'total', 'value' => $prixcalcul.'€' ]); //ont affiche le prix remisé
       }

     // FIN Samuel Etheve - code promo pour le PDF 09/10/2017

     ?>
