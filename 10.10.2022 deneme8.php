<?php
$satirsayisi=4;
$sutunsayisi=3;
echo "<table border=1 bordercolor=blue>";

for($i=1; $i<=$satirsayisi; $i++)
{echo "<tr>";
for ($k=1; $k<=$sutunsayisi; $k++)
{echo "<td><img src=top.jpg></td>";}
echo "</tr>";
}
echo "</table>"
?>