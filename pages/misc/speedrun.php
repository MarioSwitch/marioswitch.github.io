<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calculatrice de temps (speedrun.com) - MarioSwitch</title>
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/dmWhVeb.png">
		<link rel="stylesheet" href="../../resources/styles/general.css">
		<style>
			input{
				background-color: black;
				color: white;
				font-size: 15px;
				font-family: "Nunito";
				border: 1px solid darkgray;
				width: 50px;
			}
		</style>
		<?php include_once '../../resources/php/menu.php' ?>
	</head>
	<body>
		<?php insertMenu(); ?>
		<h1>Calculatrice de temps (speedrun.com)</h1>
		<form role="form" action="speedrun.php">
			<label for="fps">Frames par seconde (FPS)</label>
			<input type="number" name="fps" placeholder="60" <?= !empty($_REQUEST["fps"]) ? "value=\"" . $_REQUEST["fps"] . "\"" : "" ?> >
			<table class="table-hidden">
				<tr>
					<td></td>
					<td>Heures</td>
					<td>Minutes</td>
					<td>Secondes</td>
					<td>Frames</td>
				</tr>
				<tr>
					<td>Début</td>
					<td><input type="number" name="startHours" placeholder="0" <?= !empty($_REQUEST["startHours"]) ? "value=\"" . $_REQUEST["startHours"] . "\"" : "" ?>></td>
					<td><input type="number" name="startMinutes" placeholder="0" <?= !empty($_REQUEST["startMinutes"]) ? "value=\"" . $_REQUEST["startMinutes"] . "\"" : "" ?>></td>
					<td><input type="number" name="startSeconds" placeholder="0" <?= !empty($_REQUEST["startSeconds"]) ? "value=\"" . $_REQUEST["startSeconds"] . "\"" : "" ?>></td>
					<td><input type="number" name="startFrames" placeholder="0" <?= !empty($_REQUEST["startFrames"]) ? "value=\"" . $_REQUEST["startFrames"] . "\"" : "" ?>></td>
				</tr>
				<tr>
					<td>Fin</td>
					<td><input type="number" name="endHours" placeholder="0" <?= !empty($_REQUEST["endHours"]) ? "value=\"" . $_REQUEST["endHours"] . "\"" : "" ?>></td>
					<td><input type="number" name="endMinutes" placeholder="0" <?= !empty($_REQUEST["endMinutes"]) ? "value=\"" . $_REQUEST["endMinutes"] . "\"" : "" ?>></td>
					<td><input type="number" name="endSeconds" placeholder="0" <?= !empty($_REQUEST["endSeconds"]) ? "value=\"" . $_REQUEST["endSeconds"] . "\"" : "" ?>></td>
					<td><input type="number" name="endFrames" placeholder="0" <?= !empty($_REQUEST["endFrames"]) ? "value=\"" . $_REQUEST["endFrames"] . "\"" : "" ?>></td>
				</tr>
			</table>
			<input style="width:100px;" type="submit" value="Calculer">
			<input style="width:100px;" type="reset" value="Réinitialiser" onclick="window.location.href='speedrun.php'">
		</form>
		<?php
			$fps =    !empty($_REQUEST["fps"])          ? $_REQUEST["fps"]          : 60;
			$startH = !empty($_REQUEST["startHours"])   ? $_REQUEST["startHours"]   : 0;
			$startM = !empty($_REQUEST["startMinutes"]) ? $_REQUEST["startMinutes"] : 0;
			$startS = !empty($_REQUEST["startSeconds"]) ? $_REQUEST["startSeconds"] : 0;
			$startF = !empty($_REQUEST["startFrames"])  ? $_REQUEST["startFrames"]  : 0;
			$endH =   !empty($_REQUEST["endHours"])     ? $_REQUEST["endHours"]     : 0;
			$endM =   !empty($_REQUEST["endMinutes"])   ? $_REQUEST["endMinutes"]   : 0;
			$endS =   !empty($_REQUEST["endSeconds"])   ? $_REQUEST["endSeconds"]   : 0;
			$endF =   !empty($_REQUEST["endFrames"])    ? $_REQUEST["endFrames"]    : 0;

			$start = $startF + $fps*($startS + 60*$startM + 3600*$startH);
			$end = $endF + $fps*($endS + 60*$endM + 3600*$endH);
			$duration = $end - $start;
			$durationS = floor($duration/$fps);

			$hours = floor($durationS/3600);
			$minutes = floor(($durationS%3600)/60);
			$seconds = $durationS%60;
			$frames = $duration%$fps;

			function formatTimeF($hours, $minutes, $seconds, $frames, $fps): string{
				$time = "";
				if($hours){
					$time .= $hours . "h ";
				}
				if($hours || $minutes){
					$minutes = $hours ? str_pad($minutes, 2, "0", STR_PAD_LEFT) : $minutes;
					$time .= $minutes . "m ";
				}
				if($hours || $minutes || $seconds){
					$seconds = ($hours || $minutes) ? str_pad($seconds, 2, "0", STR_PAD_LEFT) : $seconds;
					$time .= $seconds . "s ";
				}

				$frames = ($hours || $minutes || $seconds) ? str_pad($frames, strlen($fps), "0", STR_PAD_LEFT) : $frames;
				$time .= $frames . "f";

				return $time;
			}

			function formatTimeMS($hours, $minutes, $seconds, $frames, $fps): string{
				$time = "";
				if($hours){
					$time .= $hours . "h ";
				}
				if($hours || $minutes){
					$minutes = $hours ? str_pad($minutes, 2, "0", STR_PAD_LEFT) : $minutes;
					$time .= $minutes . "m ";
				}

				$seconds = ($hours || $minutes) ? str_pad($seconds, 2, "0", STR_PAD_LEFT) : $seconds;
				$time .= $seconds;

				$milliseconds = round($frames*1000/$fps);
				$time .= "." . str_pad($milliseconds, 3, "0", STR_PAD_LEFT) . "s";
				return $time;
			}

			echo "<p><i>
				Starts at <b>" . formatTimeF($startH, $startM, $startS, $startF, $fps) . "</b>,
				ends at <b>" . formatTimeF($endH, $endM, $endS, $endF, $fps) . "</b>,
				total time: <b>" . formatTimeF($hours, $minutes, $seconds, $frames, $fps) . "</b> =
				<b>" . formatTimeMS($hours, $minutes, $seconds, $frames, $fps) . "</b> @ $fps fps
			</i></p>";
		?>
	</body>
</html>