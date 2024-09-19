<?php
$person = new Person;
$choise ='';
$message ='';


class Person {
    private function walk(){ 
        echo "******Tralalala 
        **************\n";
    }
}


function generate($from, $to){
    if($from>$to ){
        return;
    }
    for ($i=$from; $i <= $to; $i++) { 
        echo $i . "\n";
    }
}


do {
    echo "Choose your action:\n";
    echo "Let person walk: 100\n";
    echo "Say message: 2\n";
    echo "Generate numbers between n to m: 3\n";
    echo "Type 'Exit' to quit.\n";

    $choise = readline();

    switch ($choise) {
        case '1':
            echo $person->walk();
            break;
        case '2':
            $message = readlink("Enter: "); 
            break;
        case '3':
            destroy(readline("Enter number which start: "),readline("Enter number which end: "));
            break;
        case 'Exit':
            $choise = null;
            break;
        default:
            echo "Invalid choice. Please try again.\n";
    }
} while ($choise==null);


echo "$message";
