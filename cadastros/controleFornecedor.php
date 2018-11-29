<?php
require_once 'funcoesGerais.php';


    imprimirCabecalho("Pagina Estoque");    
    imprimirMenu(" ");
    TabelaRelatorio(" ");
?>
                                    <?php
                  
                                        
                                        $con = banco();
                                    ?>
        <?php 
       $vet = tras_Fornecedores($con);
        
            
        
        ?>

 
        <div class="col-md-6 offset-3">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">CNPJ</th>
      <th scope="col">Empresa</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      <th scope="col">Informações</th>
    </tr>
  </thead>
  <tbody>
      <?php if(isset($vet)){foreach ($vet as $tr){ ?>
    <tr>
      <th scope="row"> <?php echo $tr['Cnpj']; ?></th>
      <td><?php echo $tr['Empresa']; ?></td>
      <td><a href="editarFornecedor.php?CnpjAntigo=<?php echo $tr['Cnpj']; ?>">Editar</a></td>
<td><a href="Controle.php?op=ExcluiFornecedor&excluir_Fornecedor=<?php echo $tr['Cnpj']; ?>"onclick="return confirm('Deseja mesmo excluir esse Fornecedor');">Excluir</a></td>
      <td><a href="informacoesFornecedor.php?CnpjAntigo=<?php echo $tr['Cnpj']; ?>">Informações</a></td>
    </tr>
      <?php  }}else echo "<p>Não há Fornecedores Cadastrados.</p>";?>
    
    
  </tbody>
</table>
        </div>
                 <a href="cadastroFornecedor.php"><input type="button"value="Cadastrar"></a>


<?php
    Rodape(" ");
?>
