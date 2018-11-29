<?php
require_once 'funcoesGerais.php';


    imprimirCabecalho("Pagina Estoque");    
    imprimirMenu(" ");
    TabelaRelatorio(" ");
?>
                <div class="register_account">
          	<div class="wrap">
                    
                                     <?php
                  
                                        
                                        $con = banco();
                                    ?>
                    
                    <?php
                       $linha = um_Fornecedor($con, $_GET['CnpjAntigo']);
                   
                    ?>
    	    
                    <form class="offset-5" action="Controle.php?op=EditarFornecedor&CnpjAntigo=<?php echo $linha['Cnpj'];?>" method="POST" >
    			 <div  class="col_1_of_2 span_1_of_2">
                             <div class="form-group"><input name='Cnpj' autocomplete="off" type="text" maxlength="19" value="<?php echo $linha['Cnpj']?>"></div>
			<div class="form-group"> <input name='Empresa' autocomplete="off" type="text" maxlength="50"  value="<?php echo $linha['Empresa']?>"></div>
		
                       
                        <button  class="btn btn-outline-success my-2 my-sm-0 offset-1" type="submit" class="grey">Editar</button>
                        
                        <a href="controleFornecedor.php"><input type="button"value="Cancelar Edição"></a>
                         </div>
		      
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>




<?php
    Rodape(" ");
?>
