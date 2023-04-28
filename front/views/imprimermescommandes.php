<?php
include "../Controller/commandeC.php";
require ('db.php');


ob_start();
?>

<page backtop="5mm">
	
			 
       
        <div >
           
              
                    
                        <a class="navbar-brand"> <img src="img/khstore0.png" alt="logo" > </a>
                 
              
            
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    

	 <h1 style="color:rgb(56, 62, 66)"> Toutes les commandes </h1>
	 <br><br><br>
		<table style="width:400%;border: 2px dashed " >

		<tr>

														  
													     <th style="color:rgb(124, 160, 196)" scope="col"> Date       </th> 
													      <th style="color:rgb(124, 160, 196)" scope="col"> MontantCommande       </th> 
													   <p>   <th style="color:rgb(124, 160, 196)" scope="col"> Etat commande    </th></p>
													     <p> <th style="color:rgb(124, 160, 196)" scope="col"> Lieu </th></p>
													      <th style="color:rgb(124, 160, 196)" scope="col"> Prix </th>
													  
													      
													    <p>
													      <th style="color:rgb(124, 160, 196)" scope="col">action</th>
													  </p>
													</tr>
													<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
													
		<?php
	$commandess=new commandeC();
$listcommandes=$commandess->recuperercommandes();
		foreach($listcommandes as $row) {
			?>
		  <tr>
												     
												      <td> <?php echo $row["dateCommande"] ; ?></td> 
												       <td> <?php echo $row["montantCommande"] ; ?></td> 
												      <td> <?php echo $row["etatCommande"] ; ?></td> 
                                                     <td> <?php echo $row["lieuLivraison"] ; ?></td> 
													  <td> <?php echo $row["prixLivraison"] ; ?></td> 


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>