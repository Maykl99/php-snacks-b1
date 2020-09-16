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

	if(!$email && $num_at != 1): // se la stringa è vuota sicuramente non è una mail
		return false;
    else: 
        trim($email); // elimino spazi, "a capo" e altro alle estremità della stringa
        strpos($email,'.') !== false;
        strpos($email,'@') !== false;
        $num_at = count(explode( '@', $email )) - 1; // controllo che ci sia una sola @ nella stringa

    endif;  

	if(strpos($email,';') || strpos($email,',') || strpos($email,' ') && !preg_match( '/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}$/', $email) ): // controllo la presenza di ulteriori caratteri "pericolosi":
		return false;
    
    endif;

	return true;
}

// funzione controllo valore tipo stringa
function controlloNome($nome){
    if(strlen($nome) > 3 && !preg_match("/^[a-zA-Z]$/",$_GET['name'])):
        return true;
    endif;

    return false;
}

// funzione controllo validità numero
function controlloEta($numero){
    if(is_numeric($numero) && !is_float($numero)):
        return true;
    endif;

    return false;
}
?>