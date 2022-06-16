<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo2.css"/>
    <title>feriados nacionais</title>
</head>
<body>
    <div class="div">
        <?php    
        $fer = isset($_GET["calendario"]) ? $_GET["calendario"] : "Não encontrado";
    switch ($fer) {
        case 1:
            echo "<br/><img src='calendario-janeiro.jpg' alt='img' class='mes'>";

            break;
            case 2:
                echo "<img src='calendario-fevereiro.jpg' alt='img' class='mes'>";
                break;
                case 3:
                    echo "<img src='calendario-marco.jpg' alt='img' class='mes'>";
                    break;
                    case 4:
                        echo "<img src='calendario-abril.jpg' alt='img' class='mes'>";
                        break;
                        case 5:
                            echo"<img src='calendario-maio.jpg' alt='img' class='mes'>";
                            break;
                            case 6:
                                echo "<img src='calendario-junho.png' alt='img' class='mes'>";
                                break;
                                case 7:
                                    echo "<img src='calendario-julho.jpg' alt='img' class='mes'>";
                                    break;
                                    case 8:
                                        echo "<img src='calendario-agosto.jpg' alt='img' class='mes'>";
                                        break;
                                        case 9:
                                            echo "<img src='calendario-setembro.jpg' alt='img' class='mes'>";
                                            break;
                                            case 10:
                                                echo "<img src='calendario-outubro.jpg' alt='img' class='mes'>";
                                                break;
                                                case 11:
                                                    echo "<img src='calendario-novembro.jpg' alt='img' class='mes'>";
                                                    break;
                                                    case 12:
                                                        echo "<img src='calendario-dezembro.jpg' alt='img' class='mes'>";
                                                        break;
    }
?>
<form class="form">
    <textarea class="caixa-msg" placeholder="Digite aqui"></textarea><br/>
    <textarea class="caixa-msg" placeholder="Digite aqui"></textarea><br/>
    <textarea class="caixa-msg" placeholder="Digite aqui"></textarea><br/>
    <input type="reset">
    <input type="text" placeholder="observações">
    <input type="week">
    <input type='time'>
    <button type='button' onclick='print()'>imprimir</button>
</form>
</div>
</body>
</html>

