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
        echo(scan_dir('./pages/',"files")+2); // +2 pour la page d'accueil et clock.marioswitch.fr
    }

    function codeSize(){
        echo(
            floor(
                (
                    scan_dir('./',"size")
                    -scan_dir('./resources/fonts',"size")
                    -scan_dir('./resources/svg',"size")
                    -18 //CNAME
                )
                /1024
            ) . " Ko"
        );
    }

    function totalSize(){
        echo(floor(scan_dir('./',"size")/1024) . " Ko");
    }
?>