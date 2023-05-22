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
                <div class="container">
                    <div class="flexDirectionContainer">
                        <span class="flexItemText">flex-direction</span>
                        <span class="material-symbols-outlined">
question_mark
</span>
                        <select name="flexDirection" id="flexDirection">
                            <option value="column">column</option>
                            <option value="row">row</option>
                            <option value="inherit">inherit</option>
                            <option selected value="unset">unset</option>
                            <option value="row-reverse">row-reverse</option>
                            <option value="column-reverse">column-reverse</option>
                            <option value="initial">inital</option>
                        </select>
                    </div>
                    <div class="flexWrapContainer">
                        <span class="flexItemText">flex-wrap</span>
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
                        <span class="flexItemText">flex-item</span>
                        <select name="flexFlow" id="flexFlow">
                            <option value="row">row</option>
                            <option value="row-reverse">row-reverse</option>
                            <option value="column">column</option>
                            <option value="column-reverse">column-reverse</option>
                            <option value="nowrap">nowrap</option>
                            <option value="wrap-reverse">wrap-reverse</option>
                            <option value="column-reverse wrap-reverse">column-reverse wrap-reverse</option>
                            <option selected value="unset">unset</option>
                            <option value="inherit">inherit</option>
                            <option value="initial">inital</option>
                        </select>
                    </div>
                    <div class="justifyContentContainer">
                        <span class="flexItemText">justify-content</span>
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
                        <span class="flexItemText">align-Items</span>
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
                        <span class="flexItemText">align-content</span>
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
                        <span class="flexItemText">gap</span>
                        <input id="gap" name="gap" placeholder="gap">
                    </div>
                </div>
                <div class="items">
                    <div class="orderContainer">
                        <span class="flexItemText">order</span>
                        <input id="order" name="order" placeholder="order">
                    </div>
                    <div class="flexGrowContainer">
                        <span class="flexItemText">flex-grow</span>
                        <input id="flexGrow" name="flexGrow" placeholder="flex grow">
                    </div>
                    <div class="flexShrinkContainer">
                        <span class="flexItemText">flex-shrink</span>
                        <input id="flexShrink" name="flexShrink" placeholder="flex shrink">
                    </div>
                    <div class="flexBasisContainer">
                        <span class="flexItemText">flex-basis</span>
                        <input id="flexBasis" name="flexBasis" placeholder="flex basis">
                    </div>
                    <div class="flexContainer">
                        <span class="flexItemText">flex</span>
                        <input id="flex" name="flex" placeholder="flex">
                    </div>
                    <div class="alignSelfContainer">
                        <span class="flexItemText">align-self</span>
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
            </div>
            <div id="flexboxViewContainer">
                <div id="divBlockOne"></div>
                <div id="divBlockTwo"></div>
                <div id="divBlockThree"></div>
                <div id="divBlockFour"></div>
                <div id="divBlockFive"></div>
            </div>
            <div class="controllerBox">
                <span id="addDivBlockValue"></span>
                <input id="addDivBlock" type="range" min="1" max="5" value="1">
            </div>
            <button class="generateButton">generate</button>
        </div>

        <?php include('./src/include/footer.php'); ?>
    </div>
    <script src="./src/js/flexbox.js"></script>
</body>

</html>