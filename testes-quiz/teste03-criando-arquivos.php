<?php 
// $fh = fopen('arq1.txt', 'w+');

// if($fh){
//     fclose($fh);
// } 

// $fh = fopen('arq2.txt', 'r');

// if($fh){
//     fclose($fh);
// } 

// $fh = fopen('arq3.txt', 'x+');

// if($fh){
//     fclose($fh);
// }



function criando_arquivos(){
    $files = ['arq1.txt','arq2.txt','arq3.txt'];
    $fopen = ['r','w+','x+'];
    for ($i=0; $i < 3; $i++) { 
        $fh = fopen($files[$i],$fopen[$i]);
        if ($fh) {
            fclose($fh);
        }
    }
}

criando_arquivos();
?>