<?php
$note=array("java"=>array(10,12,13),"html"=>array(15,10,9),"php"=>array(14,15,12));

echo "<table border=1>
		<tr>
			<th>Matiere/note</th>
			<th>Note1</th>
			<th>Note2</th>
			<th>Note3</th>
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
			}	
			$moyenne/=4;
			$mg+=$moyenne;
			echo "<td>".number_format($moyenne,2,',','')."</td></tr>";
    }
    $mg/=count($note);
    echo "<tr><td colspan='4'>Moyenne générale</td>";
    echo "<td>".number_format($mg,2,',','')."</td>";
    echo "</table>";
?>