<?php

function validaDados($registro)
{
    $erros = [];

    if (!filter_var($registro->descricao_categoria, )) {
        $erros["descricao_categoria"] =  "Descrição: Campo vazio e ou informação inválida!";
    }

    if (count($erros) > 0) {
        $_SESSION["erros"] = $erros;
        throw new Exception("Erro nas informações!");
    }
}
