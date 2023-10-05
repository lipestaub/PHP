<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
    <script type="text/javascript" src="javascript/bibliotecaAjax.js"></script>
    <script type="text/javascript" src="javascript/loja.js"></script>
    <title>Web Interativa com Ajax e PHP</title>
</head>

<body>
    <h2 align="center">
        <img src="imagens/loja.gif" width="278" height="80">
    </h2>
    <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr valign="top">
            <td colspan="3">
                <div align="right">
                    <p>
                        <span id="avisos"></span>
                        &nbsp;&nbsp;
                        <img src="imagens/home.gif" width="16" height="16" align="absmiddle">
                        <a href="javascript:Loja('inicio', 0);">Home</a>
                        &nbsp;&nbsp;
                        <img src="imagens/carrinho.gif" width="30" height="21" align="absmiddle">
                        <a href="javascript:Loja('carrinho', 0);">Meu carrinho</a>
                    </p>
                </div>
            </td>
        </tr>
        <tr valign="top">
            <td width="150" class="fundoCinza">
                <p class="titulo">Categorias</p>
                <p><?php include "php/mostrarMenu.php"; ?></p>
            </td>
            <td width="20">&nbsp;</td>
            <td width="630" class="fundoLaranja">
                <div id="conteudo"></div>
            </td>
        </tr>
    </table>
    <p align="center" class="rodape">Copyright &copy; Loja Virtual Tabajara - Todos os direitos reservados.</p>
    <p align="center">&nbsp;</p>
</body>
</html>