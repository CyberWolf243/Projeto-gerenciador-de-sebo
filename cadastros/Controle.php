<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'funcoesGerais.php';
require '../Login/conexao.php';
$con = banco();


if ($_GET['op'] == "Fornecedor_Cadastro") {
    cadastro_Fornecedor($con, $_POST['Cnpj'], $_POST['Empresa']);
} else if ($_GET['op'] == "Funcionario_Cadastro") {
    cadastro_Funcionarios($con, $_POST['cpf'], $_POST['nome'], $_POST['enderecadastro'], $_POST['telefone'], $_POST['dataNascimento'], $_POST['sexo'], $_POST['tipo'], $_POST['senha'], $_POST['situacao_id'], $_POST['idNivelAcesso']);
} else if ($_GET['op'] == "Livro_Cadastro") {
    cadastro_Livro($con, $_POST['codigo'], $_POST['valor'], $_POST['descricao'], $_POST['nome'], $_POST['categoria']);
} else if ($_GET['op'] == "Compra_Cadastro") {
   cadastro_Compra($con, $_POST['CodigCompra'], $_POST['Total'], $_POST['Data'], $_POST['Valor'], $_POST['Fornecedor_Cnpj']);

//FORNECEDOR--------------------------------------------------------------------------    
}else if ($_GET['op']== EditarFornecedor){
    editar_Fornecedor($con, $_POST['Cnpj'], $_GET['CnpjAntigo'], $_POST['Empresa']);
}else if ($_GET['op'] == ExcluiFornecedor) {
    
    excluir_Fornecedor($con, $_GET['excluir_Fornecedor']);
    
//FUNCIONARIO--------------------------------------------------------------------------      
}else if ($_GET['op']== EditarFuncionario){
    editar_Funcionario($con, $_POST['cpf'], $_GET['$cpfantigo'],$_POST['Nome'], $_POST['Endereco'],$_POST['Telefone'],$_POST['Nascimento'], $_POST['Sexo'],$_POST['Tipo'],$_POST['senha'] );
}

else if ($_GET['op'] == ExcluiFuncionario) {
    excluir_Funcionario($con, $_GET['excluir_Funcionario']);
    
}



//LIVRO--------------------------------------------------------------------------      
else if ($_GET['op']== EditarLivro){
    editar_Livro($con, $_POST['Codigo'], $_GET['codigoAntigo'], $_POST['Valor'], $_POST['Descricao'],$_POST['Nome'],$_POST['Categoria'] );
}

else if ($_GET['op'] == ExcluiLivro) {
    excluir_Livro($con, $_GET['excluir_Livro']);
    
}

