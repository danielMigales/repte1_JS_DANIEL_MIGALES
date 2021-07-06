<?php
// Això és un comentari, per escriure codi no s'ha d'escriure els símbols //
// Guarda aquest mateix fitxer substituint _EL_TEU_NOM_COGNOM pel teu nom i el primer cognom, quedant finalment amb un nom com aquest: repte1_JS_ATAULF_REI_GOT.php

// PUNT 1. Crea una variable global (anomenada 'ciutat') que tingui com a valor el nom de la ciutat on vius i mostri a pantalla el text "Vius a " + el valor de la variable ciutat.
// (Punt d'exemple ja resolt)

$ciutat = "Barcelona";
echo "Vius a la ciutat $ciutat";

// PUNT 2. Crea una variable global (anomenada 'punts') amb un valor de tipus float.
// Escriu a continuació (sense el símbols //) el teu codi per resoldre el punt 2.

$punts = 2.1;



function migales() // PUNT 3. Crea una funció (anomenada com el teu nom). En punts posteriors tindràs que escriure codi dintre.
{
	$variableLocal; // PUNT 4. Crea una variable local (anomenada 'variable local') que únicament tingui valor dins de la funció creada al punt 3.
	$variableLocal = null; //En la línia posterior dóna-li un valor null.

	global $telefon; // PUNT 5. Crea una variable global (anomenada 'telèfon') amb un valor inicial buit, i dóna-li un valor dins la funció creada al punt 3.
	$telefon = "601447241";

	echo ("<br>El teu telèfon és $telefon<br>"); // PUNT 6. Crea les línies necessàries perquè amb un 'echo' es mostri el text:
	//El teu telèfon és [el valor indicat al punt anterior].
	//(Afegeix una línia buida al final per separar aquest text del següents textos dels punts posteriors)

	static $premi = 1000; // PUNT 7. Crea una variable local (anomenada 'premi') que:Únicament tingui valor dins de la funció del punt 3.
	echo $premi; //Que la primera vegada que s'accedeixi tingui un valor integer de 1000.
	$premi++; //Que cada vegada que es cridi a la funció li incrementi en un el seu valor.Que mantingui aquest valor dins de la funció sense ser una variable global.
	echo "<br>" . $premi . "<br>";
}

migales();

// PUNT 8. Crea una variable global, que com a nom de la variable sigui el teu nom i els teus dos cognoms (formatats de manera correcta), i com a valor tingui un valor booleà.	

$danielMigalesPuertas = true;

// PUNT 9. Crea un tipus de dada (anomenat més o menys com a '3 aficions'), que contingui diversos valors. El primer valor serà la teva edat, el segon el teu nom i els 3 següents les teves tres aficions principals.

$_3_aficions = [42, "Daniel", " jugar a videojocs", "escoltar podcasts de misteri", "menjar pizza de pinya"];

// PUNT 10. Crea una variable global (anomenada 'edat') i emmagatzema en ella el valor de l'edat de l'array del punt anterior.

$edat = $_3_aficions[0];
//var_dump($_3_aficions);

// PUNT 11. Mostra en pantalla el següent missatge (utilitzant 'echo', però sense usar les cometes dobles):
//El teu nom és [el "NOM" que hagis especificat a l'array del punt 9] i la teva edat és [l’"EDAT" especificada a la variable local del punt 10].
//Aquest missatge estarà escrit en 3 línies diferents i el nom i l'edat estaran tancats entre cometes dobles.

echo ('El teu nom és "' . $_3_aficions[1] . '" <br> i <br> la teva edat és "' . $edat . '"<br>');

//PUNT 12. Crea una variable (anomenada 'nombre d'orelles'), que un cop definida no es pugui modificar posteriorment el seu valor i dóna-li un valor correcte.
//En la següent línia mostra, utilitzant les cometes dobles, el següent text:
//Tinc [valor de 'nombre d'orelles'] orelles.

define('NOMBRE_ORELLES', 2);
echo ("Tinc " . NOMBRE_ORELLES . " orelles");

//PUNT 13. Crea una variable (anomenada 'tipus de dades') que contingui com a valor la següent frase:
//El valor de la variable '$EDAT' és de tipus [el tipus de dada que PHP detecti, segons el valor d’aquesta variable, seguit del seu valor].
//Les cometes simples d’'$EDAT' i el seu '$' han de mostrar-se. Al mateix temps, el valor que es troba entre els [...] no ha de ser escrit manualment, sinó que ha de ser detectat per PHP.
//Mostra la frase utilitzant els mitjans que siguin necessaris quedant un resultat similar a aquest:
//El valor de la variable '$EDAT' és int(18)

echo ("<br>");
$tipusDeDades = "El valor de la variable '\$EDAT' és de tipus " . var_dump($edat);  //ESTE APARTADO NO ME SALE EXACTAMENTE IGUAL YA QUE EL VAR_DUMP SE IMPRIME AL PRINCIPIO
echo ($tipusDeDades);

//PUNT 14. Crea les línies de codi necessàries perquè sota d'aquest text es mostri un altre text, separats per una línia en blanc:	
//Hola [el teu NOM especificat al punt 9], la teva primera afició és [la primera AFICIÓ especificada a l’array] i l'última és [l'última AFICIÓ especificada a l'array].

echo ("<br>");
echo ("Hola $_3_aficions[1], la teva primera afició és $_3_aficions[2] i l'última és $_3_aficions[4]");
