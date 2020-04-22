<div class="card">
            <div class="card-header">
              <h3 class="card-title">Liste des inscrits</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<?php
echo ' <table id="example1" class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>photo</th>
			<th>nom</th>
			<th>prenom</th> 
			<th>email</th>
			<th>tel</th>
			<th>pays</th>
			<th>action</th>
		</tr></thead>
		<tbody>
	';
foreach($inscrits as $inscrit){

	echo "<tr>";
		echo "
			<td><img src='photos/".$inscrit->photo."' height='70'></td>
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prenom."</td>
			<td>".$inscrit->email."</td>
			
			<td>".$inscrit->tel."</td>
			<td>".$inscrit->pays."</td>
			<td>
			<button onclick=\"if(!confirm('etes vous sure de supprimer?')) return false; 
							  else window.location.href='index.php?controller=inscrit&action=supp&id=".$inscrit->id."'\" type='button' 
			class='btn btn-block btn-danger'>
			Supprimer </button>
			
	<button onclick=\"window.location.href='index.php?controller=inscrit&action=edit1&id=".$inscrit->id."&photo_old=".$inscrit->photo."'\" 
	type='button' class='btn btn-block btn-success'>Modifier</button>
			
			
		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
	<th>action</th>
</tr></tfoot>
</table>";
?>
</div>
</div>