<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/navBar.css">
    <link rel="stylesheet" href="./src/css/flexbox.css">
    <title>Cooorrs</title>
</head>

<body>
    <div class="page">
        <?php include('./src/include/navBar.php'); ?>

        <div id="flexboxContainer">
            <div class="flexboxPropertiesEdit">
                <span>container</span>
                <div class="container">

                    <div class="flexDirectionContainer">
                        <span class="flexItemText" data-tooltip="é usada para controlar a direção em que os elementos são exibidos em um contêiner
                            flexível. Ela define se os itens
                            dentro do contêiner devem ser posicionados em uma linha (horizontalmente) ou em uma coluna
                            (verticalmente).">flex-direction</span>
                        <select name="flexDirection" id="flexDirection">
                            <option value="column">column</option>
                            <option value="row">row</option>
                            <option selected value="unset">unset</option>
                            <option value="row-reverse">row-reverse</option>
                            <option value="column-reverse">column-reverse</option>
                        </select>
                    </div>
                    <div class="flexWrapContainer">
                        <span class="flexItemText" data-tooltip="é usada para controlar o comportamento de quebra de linha dos itens dentro de um contêiner
                            flexível.
                            Ela define se os itens devem permanecer em uma única linha ou se podem ser envolvidos em
                            várias linhas.">flex-wrap</span>
                        <select name="flexWrap" id="flexWrap">
                            <option value="nowrap">nowrap</option>
                            <option value="wrap">wrap</option>
                            <option value="wrap-reverse">wrap-reverse</option>
                            <option selected value="unset">unset</option>
                            <option value="inherit">inherit</option>
                            <option value="initial">inital</option>
                        </select>
                    </div>
                    <div class="flexFlowContainer">
                        <span class="flexItemText" data-tooltip="é uma propriedade abreviada que combina as propriedades flex-direction e flex-wrap em uma
                            única declaração.
                            Ela permite definir a direção de fluxo e o comportamento de quebra de linha dos itens em um
                            contêiner flexível de uma só vez.">flex-flow</span>
                        <select name="flexFlow" id="flexFlow">
                            <option value="row">row</option>
                            <option value="row-reverse">row-reverse</option>
                            <option value="column">column</option>
                            <option value="column-reverse">column-reverse</option>
                            <option value="nowrap">nowrap</option>
                            <option value="wrap-reverse">wrap-reverse</option>
                            <option value="column-reverse wrap-reverse">column-reverse wrap-reverse</option>
                            <option selected value="unset">unset</option>
                        </select>
                    </div>
                    <div class="justifyContentContainer">
                        <span class="flexItemText" data-tooltip="é usada em um contêiner flexível para alinhar os itens horizontalmente ao longo do eixo
                            principal.
                            Ela controla como o espaço disponível é distribuído entre os itens em relação ao eixo
                            principal do contêiner.">justify-content</span>
                        <select name="justifyContent" id="justifyContent">
                            <option value="center">center</option>
                            <option value="start">start</option>
                            <option value="end">end</option>
                            <option value="flex-start">flex-start</option>
                            <option value="flex-end">flex-end</option>
                            <option value="left">left</option>
                            <option value="right">right</option>
                            <option value="normal">normal</option>
                            <option value="space-between">space-between</option>
                            <option value="space-around">space-around</option>
                            <option value="space-evenly">space-evenly</option>
                            <option value="stretch">stretch</option>
                            <option value="safe center">safe center</option>
                            <option value="unsafe center">unsafe center</option>
                            <option value="revert">revert</option>
                            <option value="revert-layer">revert-layer</option>
                            <option selected value="unset">unset</option>
                            <option value="inherit">inherit</option>
                            <option value="initial">inital</option>
                        </select>
                    </div>
                    <div class="alignItemsContainer">
                        <span class="flexItemText" data-tooltip="é usada em um contêiner flexível para alinhar os itens verticalmente ao longo do eixo
                            transversal.
                            Ela controla como os itens são posicionados verticalmente em relação ao eixo transversal do
                            contêiner.">align-Items</span>
                        <select name="alignItems" id="alignItems">
                            <option value="normal">normal</option>
                            <option value="stretch">stretch</option>
                            <option value="center">center</option>
                            <option value="start">start</option>
                            <option value="end">end</option>
                            <option value="flex-start">flex-start</option>
                            <option value="flex-end">flex-end</option>
                            <option value="self-start">self-start</option>
                            <option value="self-end">self-end</option>
                            <option value="baseline">baseline</option>
                            <option value="first baseline">first baseline</option>
                            <option value="last baseline">last baseline</option>
                            <option value="safe center">safe center</option>
                            <option value="unsafe center">unsafe center</option>
                            <option selected value="unset">unset</option>
                            <option value="inherit">inherit</option>
                            <option value="initial">inital</option>
                        </select>
                    </div>
                    <div class="alignContentContainer">
                        <span class="flexItemText" data-tooltip="é usada em um contêiner flexível quando existem várias linhas de itens e controla o
                            alinhamento dessas linhas ao longo do eixo transversal.
                            Ela define como o espaço extra é distribuído verticalmente entre as linhas de itens em um
                            contêiner flexível.">align-content</span>
                        <select name="alignContent" id="alignContent">
                            <option value="center">center</option>
                            <option value="start">start</option>
                            <option value="end">end</option>
                            <option value="flex-start">flex-start</option>
                            <option value="flex-end">flex-end</option>
                            <option value="first baseline">first baseline</option>
                            <option value="last baseline">last baseline</option>
                            <option value="normal">normal</option>
                            <option value="space-between">space-between</option>
                            <option value="space-around">space-around</option>
                            <option value="space-evenly">space-evenly</option>
                            <option value="stretch">stretch</option>
                            <option value="safe center">safe center</option>
                            <option value="unsafe center">unsafe center</option>
                            <option value="revert">revert</option>
                            <option value="revert-layer">revert-layer</option>
                            <option selected value="unset">unset</option>
                            <option value="inherit">inherit</option>
                            <option value="initial">inital</option>
                        </select>
                    </div>
                    <div class="gapContainer">
                        <span class="flexItemText" data-tooltip="é usada em um contêiner flexível para definir o espaçamento entre os itens.
                            Ela controla a distância entre os itens ao longo do eixo principal e do eixo transversal do
                            contêiner.">gap</span>
                        <input id="gap" name="gap" placeholder="gap">
                    </div>
                </div>

                <div id="itensContainer">
                    <span>content</span>
                    <span>select the block you want to change</span>
                    <div class="items">

                        <div class="orderContainer">
                            <span class="flexItemText" data-tooltip="é usada para controlar a ordem em que os itens são exibidos em um contêiner flexível.
                                Ela permite reorganizar visualmente a posição dos itens, independentemente da ordem em
                                que eles aparecem no código HTML.">order</span>
                            <input id="order" name="order" placeholder="order">
                        </div>
                        <div class="flexGrowContainer">
                            <span class="flexItemText" data-tooltip="é usada em itens flexíveis para controlar a capacidade de crescimento dos itens em
                                relação aos outros itens dentro do mesmo contêiner flexível.
                                Ela determina como o espaço disponível é distribuído entre os itens quando há espaço
                                extra no contêiner.">flex-grow</span>
                            <input id="flexGrow" name="flexGrow" placeholder="flex grow">
                        </div>
                        <div class="flexShrinkContainer">
                            <span class="flexItemText" data-tooltip="é usada em itens flexíveis para controlar sua capacidade de encolhimento em relação
                                aos outros itens dentro do mesmo contêiner flexível.
                                Ela determina como os itens reduzem seu tamanho quando o espaço disponível é menor do
                                que o necessário para acomodar todos os itens.">flex-shrink</span>
                            <input id="flexShrink" name="flexShrink" placeholder="flex shrink">
                        </div>
                        <div class="flexBasisContainer">
                            <span class="flexItemText"
                                data-tooltip="é usada em itens flexíveis para definir o tamanho inicial de um item antes que ele
                                comece a crescer ou encolher em um contêiner flexível.

                                Ela define o tamanho base de um item flexível ao longo do eixo principal do contêiner. O
                                valor pode ser definido em pixels, porcentagem ou outras unidades de medida.">flex-basis</span>
                            <input id="flexBasis" name="flexBasis" placeholder="flex basis">
                        </div>
                        <div class="flexContainer">
                            <span class="flexItemText" data-tooltip=" é usada para definir as propriedades flex-grow, flex-shrink e flex-basis em uma única
                                declaração.
                                Ela é uma propriedade abreviada que combina essas três propriedades relacionadas a itens
                                flexíveis">flex</span>
                            <input id="flex" name="flex" placeholder="flex">
                        </div>
                        <div class="alignSelfContainer">
                            <span class="flexItemText" data-tooltip="é usada em itens flexíveis para controlar o alinhamento vertical individual de um item
                                dentro de um contêiner flexível.
                                Ela permite especificar como um item flexível deve se alinhar verticalmente em relação
                                aos outros itens no mesmo contêiner.

                                A propriedade align-self substitui o alinhamento vertical definido pelo align-items do
                                contêiner flexível para o item específico em que está aplicada.">align-self</span>
                            <select name="alignSelf" id="alignSelf">
                                <option value="auto">auto</option>
                                <option value="normal">normal</option>
                                <option value="center">center</option>
                                <option value="start">start</option>
                                <option value="end">end</option>
                                <option value="self-start">flex-start</option>
                                <option value="self-end">flex-end</option>
                                <option value="flex-start">flex-start</option>
                                <option value="flex-end">flex-end</option>
                                <option value="first baseline">first baseline</option>
                                <option value="last baseline">last baseline</option>
                                <option value="normal">normal</option>
                                <option value="space-between">space-between</option>
                                <option value="space-around">space-around</option>
                                <option value="space-evenly">space-evenly</option>
                                <option value="stretch">stretch</option>
                                <option value="safe center">safe center</option>
                                <option value="unsafe center">unsafe center</option>
                                <option value="revert">revert</option>
                                <option value="revert-layer">revert-layer</option>
                                <option selected value="unset">unset</option>
                                <option value="inherit">inherit</option>
                                <option value="initial">inital</option>
                            </select>
                        </div>
                    </div>
                    <button id="setContent">set</button>
                </div>
            </div>
            <div class="controllerBox">
                <span id="addDivBlockValue"></span>
                <input id="addDivBlock" type="range" min="1" max="5" value="1">
            </div>
            <div id="flexboxViewContainer">
                <div id="divBlockOne"></div>
                <div id="divBlockTwo"></div>
                <div id="divBlockThree"></div>
                <div id="divBlockFour"></div>
                <div id="divBlockFive"></div>
            </div>
            <button id="generateButton">generate</button>
        </div>

        <?php include('./src/include/footer.php'); ?>
    </div>
    <script src="./src/js/flexbox.js"></script>
</body>

</html>