<?php
/*  Snack2
    Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e 
    che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

    // iniziallizzazione variabili con parametri get
    $mail=$_GET['mail'];
    $name=$_GET['name'];
    $age=$_GET['age'];

    // stampa valori get
    echo "Dati prelevati <br> email: $mail <br> nome: $name <br> età: $age";
    echo '<br>';

    //condizione controllo campi get vuoti
    if(!empty($mail) && !empty($name) && !empty($age)){
    
        // controllo valori get passanti
        if((strlen($name) > 3) && (strpos($mail,'@') !== false) && (strpos($mail,'.') !== false) && (is_numeric($age))):
        echo '<br> accesso riuscito';
        else: echo '<br> accesso negato';
        endif; 

    }else{
        echo 'Valori non settati o non validi';
    }   
?>