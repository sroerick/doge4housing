<?php
  $balance = file_get_contents('http://dogechain.info/chain/Dogecoin/q/addressbalance/D9u8Kxrxrqy6Rm5r12256tLTB3x2itt2px');
  $superformat = ' style="font-size: 175%; color: white"';
echo "<h1 $superformat>";
echo $balance;
echo "</h1>";
?>
