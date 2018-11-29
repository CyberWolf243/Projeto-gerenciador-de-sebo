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
       $vetL = tras_Livro($con);
        
            
        
        ?>

 
        <div class="col-md-6 offset-3">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Valor</th>
      <th scope="col">Descricao</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      <th scope="col">Informações</th>
    </tr>
  </thead>
  <tbody>
      <?php if(isset($vetL)){foreach ($vetL as $tr){ ?>
    <tr>
      <th scope="row"> <?php echo $tr['Codigo']; ?></th>
      <td><?php echo $tr['Valor']; ?></td>
      <td><?php echo $tr['Descricao']; ?></td>
      <td><?php echo $tr['Nome']; ?></td>
      <td><?php echo $tr['Categoria']; ?></td>
      
      <td><a href="editarLivro.php?codigoAntigo=<?php echo $tr['Codigo']; ?>">Editar</a></td>
<td><a href="Controle.php?op=ExcluiLivro&excluir_Livro=<?php echo $tr['Codigo']; ?>"onclick="return confirm('Deseja mesmo excluir esse Livro');">Excluir</a></td>
      <td><a href="informacoesLivro.php?codigoAntigo=<?php echo $tr['Codigo']; ?>">Informações</a></td>
    </tr>
      <?php  }}else echo "<p>Não há livros cadastrados.</p>";?>
    
    
  </tbody>
</table>
        </div>
                 <a href="cadastroLivro.php"><input type="button"value="Cadastrar"></a>


<?php
    Rodape(" ");
?>
