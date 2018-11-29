<?php
require_once 'funcoesGerais.php';


    imprimirCabecalho("Pagina Estoque");    
    imprimirMenu(" ");
    TabelaRelatorio(" ");
?>
                                    <?php
                  
                                        
                                        $con = banco();
                                    ?>


 
            <B class="offset-5">Editar Livro</B><BR><BR>

<FONT SIZE=2>

          <div class="register_account">
          	<div class="wrap">
                    <?php
                       $linhaLiv = um_Livro($con, $_GET['$codigoAntigo']);
                   
                    ?>
    	    
                    <form class="offset-5" action="Controle.php?op=EditarLivro&$codigoAntigo=<?php echo $linhaLiv['codigo'];?>" method="POST" >
    			 <div  class="col_1_of_2 span_1_of_2">
                        <div class="form-group">Codigo: <?php echo $linhaLiv['codigo']?></div>
			<div class="form-group">Valor: <?php echo $linhaLiv['valor']?></div>
                        <div class="form-group">Descricao: <?php echo $linhaLiv['descricao']?></div>
                        <div class="form-group">Nome: <?php echo $linhaLiv['nome']?></div>
                        <div class="form-group">Categoria: <?php echo $linhaLiv['categoria']?></div>
		
                       
                <a href="controleLivro.php"><input type="button"value="Retornar"></a>
		    	 </div>
		      
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>


<?php
    Rodape(" ");
?>
