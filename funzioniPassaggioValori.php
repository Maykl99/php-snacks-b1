<?php

    // iniziallizzazione variabili con parametri get
    $mail=$_GET['mail'];
    $name=$_GET['name'];
    $age=$_GET['age'];

    // stampa valori get
    echo "Dati prelevati <br> email: $mail <br> nome: $name <br> età: $age";
    echo '<br>';

    //condizione controllo campi get vuoti
    if(emptyVal($mail,$name,$age)){
    
        // controllo valori get passanti
        if( controlloNome($name) && controlloEmail($mail) && controlloEta($age)):
            echo '<br> accesso riuscito';
        else: echo '<br> accesso negato';
        endif; 

    }else{
        echo 'Valori non settati o non validi';
    };   


/* AREA FUNZIONI ----------------------------*/

// funzione controllo valori vuoti
function emptyVal($mail,$name,$age){
    if(!empty($mail) && !empty($name) && !empty($age)):
        return true;
    endif;
    
    return false;
}

// funzione controllo valore email
function controlloEmail($email){	
    $num_at = count(explode( '@', $email )) - 1;
    if(($num_at == 1)&& strpos($email,'@') !== false && strpos($email,'.') !== false && !strpos($email,';')  && !strpos($email,',') && !strpos($email,' ')): #&& preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email)
        trim($email);
        return true;
    endif;

    return false;
}

// funzione controllo valore tipo stringa
function controlloNome($nome){
    if(strlen($nome) > 3 && controlloEta($nome) == false): #&& !preg_match("/^[a-zA-Z]$/",$_GET['name']) ! inserire il controllo se una elemento della parola è un numero
        return true;
    endif;

    return false;
}

// funzione controllo validità numero
function controlloEta($numero){
    if(is_numeric($numero) && ctype_digit($numero)):
        return true;
    endif;

    return false;
}
?>