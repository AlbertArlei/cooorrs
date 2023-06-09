<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/navBar.css">
    <link rel="stylesheet" href="./src/css/border.css">
    <title>Cooorrs</title>
</head>

<body>
    <div class="page">
        <?php include('./src/include/navBar.php'); ?>
        <div class="borderGeneratorContainer">
            <div class="propertiesContainer">
                <div class="borderTopContainer">
                    <span>Border top</span>
                    <input id="colorSelectTop" type="color" value="#009dff">
                    <div class="borderRange">
                        <span id="borderTopValue"></span>
                        <input id="borderTop" type="range" min="0" max="30" value="2">
                    </div>
                    <div class="borderRange">
                        <span id="borderRadiusTopValue"></span>
                        <input id="borderRadiusTop" type="range" min="0" max="50" value="0">
                        <span class="material-symbols-outlined rotatetop">
                            border_style
                        </span>
                    </div>
                </div>
                <div class="borderLeftContainer">
                    <span>Border left</span>
                    <input id="colorSelectLeft" type="color" value="#009dff">
                    <div class="borderRange">
                        <span id="borderLeftValue"></span>
                        <input id="borderLeft" type="range" min="0" max="30" value="2">
                    </div>
                    <div class="borderRange">
                        <span id="borderRadiusLeftValue"></span>
                        <input id="borderRadiusLeft" type="range" min="0" max="50" value="0">
                        <span class="material-symbols-outlined rotateLeft">
                            border_style
                        </span>
                    </div>
                </div>
                <div class="borderBottomContainer">
                    <span>Border bottom</span>
                    <input id="colorSelectBottom" type="color" value="#009dff">
                    <div class="borderRange">
                        <span id="borderBottomValue"></span>
                        <input id="borderBottom" type="range" min="0" max="30" value="2">
                    </div>
                    <div class="borderRange">
                        <span id="borderRadiusBottomValue"></span>
                        <input id="borderRadiusBottom" type="range" min="0" max="50" value="0">
                        <span class="material-symbols-outlined rotateBottom">
                            border_style
                        </span>
                    </div>
                </div>
                <div class="borderRightContainer">
                    <span>Border right</span>
                    <input id="colorSelectRight" type="color" value="#009dff">
                    <div class="borderRange">
                        <span id="borderRightValue"></span>
                        <input id="borderRight" type="range" min="0" max="30" value="2"">
                    </div>
                    <div class=" borderRange">
                        <span id="borderRadiusRightValue"></span>
                        <input id="borderRadiusRight" type="range" min="0" max="50" value="0">
                        <span class="material-symbols-outlined rotateRight">
                            border_style
                        </span>
                    </div>
                </div>

                <div class="borderStyleContainer">
                    <span>select border style</span>
                    <select id="borderStyle" name="" id="">
                        <option value="none">none</option>
                        <option selected value="solid">solid</option>
                        <option value="dashed">dashed</option>
                        <option value="double">double</option>
                        <option value="groove">groove</option>
                        <option value="ridge">ridge</option>
                        <option value="inset">inset</option>
                        <option value="outset">outset</option>
                        <option value="hidden">hidden</option>
                    </select>
                </div>
            </div>
            <div class="viewPropertiesContainer">
                <div class="viewProperties">
                    <div class="blockContainer">
                        <p>Block</p>
                    </div>
                    <div class="circleContainer">
                        <p>circle</p>
                    </div>
                </div>
                <span class="textArea"></span>
                <button class="buttonCopyCss">generate</button>
            </div>


        </div>
        <?php include('./src/include/footer.php'); ?>
    </div>
    <script src="./src/js/border.js" defer></script>
</body>

</html>