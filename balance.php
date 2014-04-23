<?php
/* This file is part of Doge4Housing.

    Doge4Housing is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Doge4Housing is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Doge4Housing.  If not, see <http://www.gnu.org/licenses/>.
*/

  $balance = file_get_contents('http://dogechain.info/chain/Dogecoin/q/addressbalance/D9u8Kxrxrqy6Rm5r12256tLTB3x2itt2px');
  $superformat = ' style="font-size: 175%; color: white"';
echo "<h1 $superformat>";
echo $balance;
echo "</h1>";
?>
