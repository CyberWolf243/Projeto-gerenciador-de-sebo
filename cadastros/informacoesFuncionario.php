<?php
require_once 'funcoesGerais.php';


    imprimirCabecalho("Pagina relatorio Funcionario");    
    imprimirMenu(" ");
    TabelaRelatorio(" ");
?>
                                    <?php
                  
                                        
                                        $con = banco();
                                    ?>


 
            <B class="offset-5">Editar Funcionario</B><BR><BR>

<FONT SIZE=2>

          <div class="register_account">
          	<div class="wrap">
                    <?php
                       $linhaF = um_Funcionario($con, $_GET['$cpfantigo']);
                   
                    ?>
    	    
                    <form class="offset-5" action="Controle.php?op=1&cpfantigo=<?php echo $linhaF['cpf'];?>" method="POST" >
    			 <div  class="col_1_of_2 span_1_of_2">
                             <div class="form-group">cpf: <?php echo $linhaF['cpf']?></div>
			<div class="form-group">Nome: <?php echo $linhaF['Nome']?></div>
                        
                        <div class="form-group">Endereco: <?php echo $linhaF['Endereco']?></div>
			<div class="form-group">Telefone: <?php echo $linhaF['Telefone']?></div>
                        <div class="form-group">Nascimento: <?php echo $linhaF['Nascimento']?></div>
			<div class="form-group">Sexo: <?php echo $linhaF['Sexo']?></div>
                        <div class="form-group">Tipo: <?php echo $linhaF['Tipo']?></div>
			<div class="form-group">senha: <?php echo $linhaF['Nome']?></div>
		
                       
                        <a href="controleFuncionario.php"><input type="button"value="Retornar"></a>
		    	 </div>
		      
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>


<?php
    Rodape(" ");
?>
