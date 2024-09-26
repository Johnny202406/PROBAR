<?php
function generarCodigo($codigo="E-",$longitud = 20) {
    $caracteres = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
        '!', '@', '#', '$', '%', '&', '*', '(', ')', '__', '=', '+', 
        '~', ':', ';', '<', '>', '?', '/', '|', '{', '}', '[', ']', 
        "\u{1F600}", "\u{1F603}", "\u{1F609}", "\u{1F60D}", "\u{1F60E}", "\u{1F61C}", "\u{1F525}", "\u{1F31F}", "\u{1F389}", 
        "\u{1F308}", "\u{1F680}", "\u{1F984}", "\u{1F47E}", "\u{1F4BB}", "\u{1F4F1}", "\u{1F513}", "\u{1F514}",
        "\u{1F575}", "\u{1F923}", "\u{1F929}", "\u{1F60F}", "\u{1F973}", "\u{1F4C8}", "\u{1F4C9}", "\u{1F4CA}",
        "\u{1F5B1}", "\u{1F5C3}", "\u{1F5C4}", "\u{1F5D1}", "\u{1F5E1}", "\u{1F5F1}", "\u{1F973}",
        "\u{1F600}", "\u{1F601}", "\u{1F602}", "\u{1F604}", "\u{1F605}", "\u{1F606}", "\u{1F607}", "\u{1F608}",
        "\u{1F62A}", "\u{1F62D}", "\u{1F60A}", "\u{1F60B}", "\u{1F612}", "\u{1F613}", "\u{1F614}", "\u{1F616}",
        "\u{1F618}", "\u{1F61A}", "\u{1F619}", "\u{1F61B}", "\u{1F61D}", "\u{1F924}", "\u{1F92A}", "\u{1F928}"
    ];
    
    shuffle($caracteres);
    $n=count($caracteres);
    for ($i = 0; $i < $longitud; $i++) {
        $codigo .= $caracteres[random_int(0, $n - 1)];
    }
    return $codigo;
}
$codigoUnico = generarCodigo("S-");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<style>
    *{
        font-weight: bold;
        font-size: 18px;
        font-family: "Red Hat Display";
    }
    body>span{
        padding: 5px;
        border: 1px solid gray;
        background: #f4f4f4;
        border-radius: 10px;
        display: inline-block;        

        &::first-letter{
            color: red;
        }
    }
    .pintar{
        color: red ;
        font-size:x-large;
    } 
</style>
</head>
<body>
<?php
echo "Código generado: <span>{$codigoUnico}\n</span>";
?>
</body>
</html>
