<?php
  include('conectar.php');

  $select_crud_produto = "
    SELECT 
      P.ID_Prod AS ID,
      P.Nome AS Produto,
      P.PrecoUnitario AS Preço,
      U.TipoUso AS Uso,
      P.PrecisaPrescricao AS Prescrição,
      F.Nome AS Fornecedor,
      A.Quantidade AS Quantidade
    FROM 
      Produto P
    JOIN 
      Uso U ON P.fk_Uso_ID_Uso = U.ID_Uso
    JOIN 
      Fornecimento FO ON P.ID_Prod = FO.fk_Produto_ID_Prod
    JOIN 
      Fornecedor F ON FO.fk_Fornecedor_ID_Fornecedor = F.ID_Fornecedor
    JOIN 
      Armazenamento A ON P.ID_Prod = A.fk_Produto_ID_Prod
    ORDER BY 
      P.ID_Prod;
  ";

  $resultado_crud_produto = mysqli_query($conectar, $select_crud_produto);

  if (!$resultado_crud_produto) {
    die('Deu ruim!');
  }

  $select_atualizar = "
    SELECT P.ID_Prod AS ID, P.Nome, P.PrecoUnitario AS 'Preço', P.PrecisaPrescricao AS 'Prescrição'
    FROM Produto P
  ";

  $resultado_atualizar = mysqli_query($conectar, $select_atualizar);

  if (!$resultado_atualizar) {
    die('Deu ruim');
  }

  $select_crud_fornecedor = "SELECT * FROM Fornecedor";

  $resultado_crud_fornecedor = mysqli_query($conectar, $select_crud_fornecedor);

  if (!$resultado_crud_fornecedor) {
    die('Deu ruim');
  }
?>