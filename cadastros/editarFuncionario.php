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
                       $linhaF = um_Funcionario($con, $_GET['$cpfantigo']);
                   
                    ?>
    	    
                    <form class="offset-5" action="Controle.php?op=EditarFuncionario&$cpfantigo=<?php echo $linhaF['cpf'];?>" method="POST" >
    			 <div  class="col_1_of_2 span_1_of_2">
                        <div class="form-group"><input name='cpf' autocomplete="off" type="text" maxlength="14" value="<?php echo $linhaF['cpf']?>"></div>
			<div class="form-group"> <input name='Nome' autocomplete="off" type="text" maxlength="85"  value="<?php echo $linhaF['Nome']?>"></div>
                        <div class="form-group"><input name='Endereco' autocomplete="off" type="text" maxlength="60" value="<?php echo $linhaF['Endereco']?>"></div>
			<div class="form-group"> <input name='Telefone' autocomplete="off" type="text" maxlength="11"  value="<?php echo $linhaF['Telefone']?>"></div>
                        <div class="form-group"><input name='Nascimento' autocomplete="off" type="date" value="<?php echo $linhaF['Nascimento']?>"></div>
			<div class="form-group"> <input name='Sexo' autocomplete="off" type="text" maxlength="9"  value="<?php echo $linhaF['Sexo']?>"></div>
                        <div class="form-group"><input name='Tipo' autocomplete="off" type="text" maxlength="45" value="<?php echo $linhaF['Tipo']?>"></div>
			<div class="form-group"> <input name='senha' autocomplete="off" type="text" maxlength="45"  value="<?php echo $linhaF['senha']?>"></div>
		
                       
                        <button  class="btn btn-outline-success my-2 my-sm-0 offset-1" type="submit" class="grey">Editar</button>
                        
                        <a href="controleFuncionario.php"><input type="button"value="Cancelar Edição"></a>
                         </div>
		      
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>




<?php
    Rodape(" ");
?>
