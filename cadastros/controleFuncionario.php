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
       $vetF = tras_Funcionario($con);
        
            
        
        ?>

 
        <div class="col-md-5 offset-2">
        <table class="table">
  <thead>
    <tr>
       <th scope="col">CPF</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereco</th>
      <th scope="col">Telefone</th>
      <th scope="col">Nascimento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Tipo funcionario</th>
      <th scope="col">Senha</th>
    
      
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
      <th scope="col">Informações</th>
    </tr>
  </thead>
  <tbody>
      <?php if(isset($vetF)){foreach ($vetF as $tr){ ?>
    <tr>
      <th scope="row"> <?php echo $tr['cpf']; ?></th>
      <td><?php echo $tr['Nome']; echo $tr['Endereco']; ?></td>
      <td><?php echo $tr['Endereco']; ?></td>
      <td><?php echo $tr['Telefone']; ?></td>
      <td><?php echo $tr['Nascimento']; ?></td>
      <td><?php echo $tr['Sexo']; ?></td>
      <td><?php echo $tr['Tipo']; ?></td>
      <td><?php echo $tr['senha']; ?></td>

      <td><a href="editarFuncionario.php?$cpfantigo=<?php echo $tr['cpf']; ?>">Editar</a></td>
<td><a href="Controle.php?op=ExcluiFuncionario&excluir_Funcionario=<?php echo $tr['cpf']; ?>"onclick="return confirm('Deseja mesmo excluir esse Funcionario');">Excluir</a></td>
      <td><a href="informacoesFuncionario.php?$cpfantigo=<?php echo $tr['cpf']; ?>">Informações</a></td>
    </tr>
      <?php  }}else echo "<p>Não há Funcionarios Cadastrados.</p>";?>
  </tbody>
</table>
        </div>
            <a href="cadastroFuncionarios.php"><input type="button"value="Cadastrar"></a>


<?php
    Rodape(" ");
?>
