<?php
// unlink('arq1.txt');
// unlink('arq2.txt');
// unlink('arq3.txt');


function delete_files(){
    $files = ['arq1.txt','arq2.txt','arq3.txt'];
    for ($i=0; $i < 3; $i++) {
        if (file_exists($files[$i])) {
            unlink ($files[$i]);
        } 
    }
}

delete_files();
?>