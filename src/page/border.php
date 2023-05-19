<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/navBar.css">
    <link rel="stylesheet" href="../css/border.css">
    <title>Cooorrs</title>
</head>

<body>
    <div class="page">
        <?php include('./include/navBar.php'); ?>

        <div class="borderGeneratorContainer">

            <div class="propertiesContainer">
            <div class="borderTopContainer">
                <span>Border top</span>
                <input id="colorSelectTop" type="color" value="#009dff">
                <input id="borderTop" type="text" value="2" placeholder="border-top">
                <input id="borderRadiusTop" type="text" value="0" placeholder="border-radius-top">
            </div>
            <div class="borderLeftContainer">
            <span>Border left</span>
                <input id="colorSelectLeft" type="color" value="#009dff">
                <input id="borderLeft" type="text" value="2" placeholder="border-left">
                <input id="borderRadiusLeft" type="text" value="0" placeholder="border-radius-left">
            </div>
            <div class="borderBottomContainer">
            <span>Border bottom</span>
                <input id="colorSelectBottom" type="color" value="#009dff">
                <input id="borderBottom" type="text" value="2" placeholder="border-bottom">
                <input id="borderRadiusBottom" type="text" value="0" placeholder="border-radius-bottom">
            </div>
            <div class="borderRightContainer">
            <span>Border right</span>
                <input id="colorSelectRight" type="color" value="#009dff">
                <input id="borderRight" type="text" value="2" placeholder="border-right">
                <input id="borderRadiusRight" type="text" value="0" placeholder="border-radius-right">
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
            <textarea class="textArea" name="" id="" cols="30" rows="10"></textarea>
            <button class="buttonCopyCss">generate</button>
        </div>


    </div>
    <?php include('./include/footer.php'); ?>
    </div>
    <script src="../js/border.js" defer></script>
</body>

</html>