<?php
  include('conectar.php');

  $select_crud = "
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

  $resultado_crud = mysqli_query($conectar, $select_crud);

  if (!$resultado_crud) {
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
?>