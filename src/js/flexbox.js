

function flexboxContainer() {
    let flexDirection = document.getElementById('flexDirection').value;
    let flexWrap = document.getElementById('flexWrap').value;
    let flexFlow = document.getElementById('flexFlow').value;
    let justifyContent = document.getElementById('justifyContent').value;
    let alignItems = document.getElementById('alignItems').value;
    let alignContent = document.getElementById('alignContent').value;
    let gap = document.getElementById('gap').value;

    let code = '';

    if (flexDirection !== 'unset') code += `flex-direction: ${flexDirection}; `;
    if (flexWrap !== 'unset') code += ` flex-wrap: ${flexWrap};`;
    if (flexFlow !== 'unset') code += `flex-flow: ${flexFlow};`;
    if (justifyContent !== 'unset') code += `justify-content: ${justifyContent};`;
    if (alignItems !== 'unset') code += `align-items: ${alignItems};`;
    if (alignContent !== 'unset') code += `align-content:${alignContent};`;
    if (gap !== '') code += `gap: ${gap};`;

    document.getElementById('flexboxViewContainer').style = code;
    return;
}

function flexboxItems() {
    let order = document.getElementById('order').value;
    let flexGrow = document.getElementById('flexGrow').value;
    let flexBasis = document.getElementById('flexBasis').value;
    let flexShrink = document.getElementById('flexShrink').value;
    let flex = document.getElementById('flex').value;
    let alignSelf = document.getElementById('alignSelf').value;
}

function addDivBlock() {
    let range = document.getElementById('addDivBlock').value;

    switch (range) {
        
        case '1':
            document.getElementById('divBlockTwo').style.display = 'none';
            document.getElementById('divBlockThree').style.display = 'none';
            document.getElementById('divBlockFour').style.display = 'none';
            document.getElementById('divBlockFive').style.display = 'none';
            break;
        case '2':
            document.getElementById('divBlockTwo').style.display = 'block';
            document.getElementById('divBlockThree').style.display = 'none';
            document.getElementById('divBlockFour').style.display = 'none';
            document.getElementById('divBlockFive').style.display = 'none';
            break;
        case '3':
            document.getElementById('divBlockTwo').style.display = 'block';
            document.getElementById('divBlockThree').style.display = 'block';
            document.getElementById('divBlockFour').style.display = 'none';
            document.getElementById('divBlockFive').style.display = 'none';
            break;
        case '4':
            document.getElementById('divBlockTwo').style.display = 'block';
            document.getElementById('divBlockThree').style.display = 'block';
            document.getElementById('divBlockFour').style.display = 'block';
            document.getElementById('divBlockFive').style.display = 'none';
            break;
        case '5':
            document.getElementById('divBlockTwo').style.display = 'block';
            document.getElementById('divBlockThree').style.display = 'block';
            document.getElementById('divBlockFour').style.display = 'block';
            document.getElementById('divBlockFive').style.display = 'block';
            break;
    }
}

document.getElementById('flexboxContainer').addEventListener('click', () => {
    flexboxContainer();
    addDivBlock();
});

document.getElementById('flexboxContainer').addEventListener('mousemove', () => {
    flexboxContainer();
    addDivBlock();
})

document.getElementById('flexboxContainer').addEventListener('keyup', () => {
    flexboxContainer();
    addDivBlock();  
})

flexboxContainer();
flexboxItems();