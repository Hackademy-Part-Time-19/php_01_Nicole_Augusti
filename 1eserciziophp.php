<?php

//Traccia1: Definisci 4 variabili: integer, float, string , boolean. A schermo, fai comparire il tipo di dato delle varie variabili.

$numero_intero = 5;
$numero_decimale = 4.5;
$stringa = "Ciao, sono Nicole";
$booleano = true;

var_dump($numero_decimale);
var_dump($numero_intero);
var_dump($stringa);
var_dump($booleano);



// Traccia 2: correggi eventuali errori nelle variabili e stampa correttamente a terminale la stringa: “Marco Hai sete? Perche' hai bevuto tutto.“

// $1text = "Marco"; => le variabili non possono iniziare con un numero
$text1 = "Marco";
$text2 = "hai";
// $text.3 = "sete"; => l'unico carattere speciale che puo essere utilizzato nelle variabili è _
$text_3 = "sete";
$text4 = "?";
// @text5 = "Perchè"; => per dichiarare una variabile utilizzo il segno $
$text5 = "Perchè";
// $te-xt6 = '$text2'; => l'unico carattere speciale che puo essere utilizzato nelle variabili è _
$text6 = '$text2';
// $text 7 = 'bevuto'; => non posso scrivere le variabili lasciando degli spazi bianchi
$text7 = 'bevuto';
// $text8 = "tutto" => in php è obbligatorio mettere il ; dopo ogni comando
$text8 = "tutto.";

echo "$text1 $text2 $text_3 $text4 $text5 $text2 $text7 $text8" . "\n";



/* Traccia 3: Crea una variabile di tipo Stringa chiamata $results che stampi a terminale il seguente testo, 
attraverso l’accesso ai seguenti array: “Nel mezzo di cammin di nostra vita mi ritrovai per 
una selva oscura, che' la diritta via era smarrita". */


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    'di', //6
    [ //7
        'oscura', //0
        'era',
        89,
        [ //3
            'mezzo', //0
            [ //1
                'cammin', //0
                'Nel',
                [ //2
                    'selva',
                    'la',
                    [ //2
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai', //4
        'per' //5
    ],
    'diritta' //8
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];


$result = "{$words1[7][3][1][1]}  {$words1[7][3][0]}  {$words1[6]} {$words1[7][3][1][0]} 
 {$words1[6]} {$words2['elemento2']} {$words1[2]} {$words1[4]} {$words1[7][4]} {$words1[7][5]} {$words1[0]}    
{$words1[7][3][1][2][0]} {$words1[7][0]} , {$words2['elemento3'][2]} {$words1[7][3][1][2][1]} {$words1[8]} 
{$words1[7][3][1][2][2][0]} {$words1[7][1]} {$words2['elemento3'][1]}. \n";
         
print_r($result);

/* Traccia 4:
 Create 4 variabili: $x = 10; $y = 20; $z = "20"; $w = 10; ed utilizzando var_dump() per visualizzare l'esito dei seguenti confronti: 
 $x < $y [esempio: var_dump($x < $y); ] 
 $x <= $w 
 $y == $z 
 $y === $z 
 $y !== $z
 $y != $z
cambiando anche a piacere le variabili per verificare il funzionamento dei diversi operatori di confronto */

$x=10;
$y=20;
$z="20";
$w=10;

var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z) ."\n";


/* 
Traccia 5: 
Create un array associativo $corsoHackademy con chiavi: “docenti”, “studenti”, “argomenti”
con valore associato rispettivamente array contenenti i docenti, alcuni nomi di vostri colleghi, argomenti trattati durante il corso.
Usate questo array per stampare in console una frase di presentazione a piacere. */

$corso_hackademy= [
    "docenti" => ["Mattia", "Marco", "Daniele", "Davide"],
    "studenti" => ["Nicole", "Luca", "Giulia", "Claudia"],
    "argomenti" => ["Html","Css","Javascript","php"]
];

echo "Ciao, io sono {$corso_hackademy["studenti"][0]} e assieme a {$corso_hackademy["studenti"][3]} 
ho studiato {$corso_hackademy['argomenti'][0]} e {$corso_hackademy['argomenti'][1]} con
i docenti {$corso_hackademy['docenti'][1]} e {$corso_hackademy['docenti'][3]}.";