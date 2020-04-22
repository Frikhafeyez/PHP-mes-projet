<style>
.tot{
background:#000;
color:#fff;
font-weight:bold;
padding:5px;
width: 220px;
text-align:center;
}
@media print
	{
		.btn {display : none ; }
		
	}
</style>
<h1>TICKET N° <?php echo $ticket->num;?></h1>
<br>le <?php echo $ticket->date;?>
<br><br>********************
<br><br><b>Produit :</b> <?php echo $ticket->produit;?>

<br><br><b>PU HT :</b> <?php echo $ticket->prixu;?> DT

<br><br><b>TVA :</b> <?php echo $ticket->tva;?>%

<br><br><b>QTE :</b> <?php echo $ticket->qte;?>
<br>
<br>
<div class="tot">NET A PAYER : <?php echo $ticket->ttc;?> DT</div>
<br>********************
<br>Merci pour votre visite
<br><br><input type="button" class="btn" value="imprimer" onclick="window.print()">
<input type="button" class="btn" value="Nouvelle vente?" onclick="window.location.href='ticket.controller.php'">