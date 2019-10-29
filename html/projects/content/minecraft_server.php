<?php

require '../media/common/Server.php';
require '../media/common/StatsException.php';
require '../media/common/Stats.php';

use Minecraft\Server;
use Minecraft\Stats;

	$server = Stats::retrieve(new Server("mc.stefannelson.com", 25565));

	if ($server->is_online)
		$status = "online";
	else $status="offline";

	echo "<div class=\"content\">
		  <div align=\"justify\">
		  	<p>
			<b>Minecraft</b>
			<br>Domain: mc.stefannelson.com</a>
			<br>Status: $status
			<br>Check it out, build something, and leave a message! I love to hear from those who log on.
			</p>
		  </div>
	      </div>"
?>
