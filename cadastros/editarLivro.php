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
                       $linhaLiv = um_Livro($con, $_GET['codigoAntigo']);
                   
                    ?>
    	    
                    <form class="offset-5" action="Controle.php?op=EditarLivro&codigoAntigo=<?php echo $linhaLiv['Codigo'];?>" method="POST" >
    			 <div  class="col_1_of_2 span_1_of_2">
                        <div class="form-group"><input name='Codigo' autocomplete="off" type="number" maxlength="19" value="<?php echo $linhaLiv['Codigo']?>"></div>
			<div class="form-group"> <input name='Valor' autocomplete="off" type="number" maxlength="50"  value="<?php echo $linhaLiv['Valor']?>"></div>
                        <div class="form-group"><input name='Descricao' autocomplete="off" type="text" maxlength="19" value="<?php echo $linhaLiv['Descricao']?>"></div>
			<div class="form-group"> <input name='Nome' autocomplete="off" type="text" maxlength="50"  value="<?php echo $linhaLiv['Nome']?>"></div>
                        <div class="form-group"> <input name='Categoria' autocomplete="off" type="text" maxlength="50"  value="<?php echo $linhaLiv['Categoria']?>"></div>
                       
                        <button  class="btn btn-outline-success my-2 my-sm-0 offset-1" type="submit" class="grey">Editar</button>
                        
                        <a href="controleLivro.php"><input type="button"value="Cancelar Edição"></a>
                         </div>
		      
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>




<?php
    Rodape(" ");
?>
