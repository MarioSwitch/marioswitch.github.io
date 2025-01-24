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

	$index = 0; //Index of the element
	$display = 0; //Displayed rank, which differs from index when some elements have the same rank (using rankEq())
	/**
	 * Show rank automatically (must be reset to 1 the first time you use it)
	 * Increases $index and set $display to $index
	 * @param $reset int Resets rank to this value, if greater than 0 (0 by default)
	 * @return int Rank
	 */
	function rank($reset = 0)
	{
		global $index;
		global $display;

		$index++;
		if ($reset > 0) {
			$index = $reset;
		}
		$display = $index;
		return $display;
	}

	/**
	 * Show the same rank as above, but increases index anyway
	 * Increases $index only, returns $display
	 * @return int Rank (same as previous one)
	 */
	function rankEq(){
		global $index;
		global $display;

		$index++;
		return $display;
	}

	/**
	 * Echoes a link to a Twitch channel
	 * @param string $username Twitch username
	 * @return void
	 */
	function echoTwitchChannel(string $username){
		echo("<a href=\"https://www.twitch.tv/$username\">$username</a>");
	}
?>