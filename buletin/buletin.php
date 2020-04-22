
<?php
$note=array("java"=>array(10,12,13),"html"=>array(15,10,9),"php"=>array(14,15,12));

echo "<table border=1>
		<tr>
			<th>Matiere \ note</th>
			<th><center> Note1 <br> orale</center></th>
			<th><center>Note2 <br> test</center></th>
			<th><center>Note3 <br> examen</center></th>
			<th>Moyenne</th>
		</tr>";
		$mg=0;
foreach($note as $ind=>$val)
{
echo "<tr>
		<td>".$ind."</td>";
		$i=0;
		$moyenne=0;
		foreach($val as $nt)
		{
			if($i<2)
				$moyenne+=$nt;
			else
				$moyenne+=$nt*2;
				echo "<td>".$nt."</td>";
				$i++;
		}	
		$moyenne/=4;
		$mg+=$moyenne;
		echo "<td>".number_format($moyenne,2,',','')."</td></tr>";
}
		$mg/=count($note); // 3
		echo "<tr><td colspan='4'>Moyenne générale</td>";
		echo "<td>".number_format($mg,2,',','')."</td> <tr>";
		echo "</table>";
?>