<?php
require_once 'funcoesGerais.php';


    imprimirCabecalho("Pagina Estoque");    
    imprimirMenu(" ");
    TabelaRelatorio(" ");
?>
                                    <?php
                  
                                        
                                        $con = banco();
                                    ?>


 
            <B class="offset-5">Editar Fornecedor</B><BR><BR>

<FONT SIZE=2>

          <div class="register_account">
          	<div class="wrap">
                    <?php
                       $linha = um_Fornecedor($con,  $_GET['CnpjAntigo']);
                   
                    ?>
    	    
                    <form class="offset-5" action="Controle.php?op=EditarFornecedor&CnpjAntigo=<?php echo $linha['Cnpj'];?>" method="POST" >
    			 <div  class="col_1_of_2 span_1_of_2">
                             <div class="form-group">CNPJ: <?php echo $linha['Cnpj']?></div>
			<div class="form-group">Empresa: <?php echo $linha['Empresa']?></div>
		
                       
                <a href="controleFornecedor.php"><input type="button"value="Retornar"></a>
		    	 </div>
		      
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>


<?php
    Rodape(" ");
?>
