<?php
    function scan_dir($path,$type){
        $ite=new RecursiveDirectoryIterator($path,RecursiveDirectoryIterator::SKIP_DOTS);
        $bytestotal=0;
        $nbfiles=0;
        foreach (new RecursiveIteratorIterator($ite) as $filename=>$cur) {
            $filesize=$cur->getSize();
            $bytestotal+=$filesize;
            $nbfiles++;
        }
        if($type=="files"){
            return $nbfiles;
        }
        if($type=="size"){
            return $bytestotal;
        }
    }

    function totalPages(){
        echo(scan_dir('./pages/',"files")+1); // +1 pour la page d'accueil
    }

    function codeSize(){
        echo(
            floor(
                (
                    scan_dir('./pages/',"size")
                    +scan_dir('./resources/php/',"size")
                    +scan_dir('./resources/scripts/',"size")
                    +scan_dir('./resources/styles/', "size")
                    +filesize('./index.php')
                )
                /1024
            ) . " Ko"
        );
    }

    function totalSize(){
        echo(floor(scan_dir('./',"size")/1024) . " Ko");
    }
?>