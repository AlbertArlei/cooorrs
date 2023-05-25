let codeDivOne = '';
let codeDivTwo = '';
let codeDivThree = '';
let codeDivFour = '';
let codeDivFive = '';
let boxContainerCode = '';
const flexBoxContainer = document.getElementById('flexboxContainer');



function question() {
    let textItemAll = document.querySelectorAll('.flexItemText');
    let i = 0;
    textItemAll.forEach(item => {
        const element = document.createElement('span');
        element.id = 'question';
        element.className = 'material-symbols-outlined';
        element.textContent = 'question_mark';
        textItemAll[i].insertBefore(element, textItemAll[i].childNodes[0]);
        i++;
    });
}

let order = document.getElementById('order');
let flexGrow = document.getElementById('flexGrow');
let flexBasis = document.getElementById('flexBasis');
let flexShrink = document.getElementById('flexShrink');
// let flex = document.getElementById('flex');
let alignSelf = document.getElementById('alignSelf');

const divOneObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    // flex: flex.value,
    alignSelf: alignSelf.value
};

const divTwoObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    // flex: flex.value,
    alignSelf: alignSelf.value
};

const divThreeObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    // flex: flex.value,
    alignSelf: alignSelf.value
};

const divFourObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    // flex: flex.value,
    alignSelf: alignSelf.value
};

const divFiveObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    // flex: flex.value,
    alignSelf: alignSelf.value
};

const divOne = document.getElementById('divBlockOne');
const divTwo = document.getElementById('divBlockTwo');
const divThree = document.getElementById('divBlockThree');
const divFour = document.getElementById('divBlockFour');
const divFive = document.getElementById('divBlockFive');

let divBlock = 'divOne';

document.getElementById('flexboxViewContainer').addEventListener('click', function divBlockEdit(e) {
    const el = e.target;


    if (el !== this) {
        switch (el) {
            case divOne:
                order.value = divOneObj.order;
                flexGrow.value = divOneObj.flexGrow;
                flexBasis.value = divOneObj.flexBasis;
                flexShrink.value = divOneObj.flexShrink;
                // flex.value = divOneObj.flex;
                alignSelf.value = divOneObj.alignSelf;

                divBlock = 'divOne';
                break;
            case divTwo:
                order.value = divTwoObj.order;
                flexGrow.value = divTwoObj.flexGrow;
                flexBasis.value = divTwoObj.flexBasis;
                flexShrink.value = divTwoObj.flexShrink;
                // flex.value = divTwoObj.flex;
                alignSelf.value = divTwoObj.alignSelf;

                divBlock = 'divTwo';
                break;
            case divThree:
                order.value = divThreeObj.order;
                flexGrow.value = divThreeObj.flexGrow;
                flexBasis.value = divThreeObj.flexBasis;
                flexShrink.value = divThreeObj.flexShrink;
                // flex.value = divThreeObj.flex;
                alignSelf.value = divThreeObj.alignSelf;

                divBlock = 'divThree';
                break;

            case divFour:
                order.value = divFourObj.order;
                flexGrow.value = divFourObj.flexGrow;
                flexBasis.value = divFourObj.flexBasis;
                flexShrink.value = divFourObj.flexShrink;
                // flex.value = divFourObj.flex;
                alignSelf.value = divFourObj.alignSelf;

                divBlock = 'divFour';
                break;
            case divFive:
                order.value = divFiveObj.order;
                flexGrow.value = divFiveObj.flexGrow;
                flexBasis.value = divFiveObj.flexBasis;
                flexShrink.value = divFiveObj.flexShrink;
                // flex.value = divFiveObj.flex;
                alignSelf.value = divFiveObj.alignSelf;

                divBlock = 'divFive';
                break;
        }
    }

    return;
});

function flexboxContainer() {
    let flexDirection = document.getElementById('flexDirection').value;
    let flexWrap = document.getElementById('flexWrap').value;
    let flexFlow = document.getElementById('flexFlow').value;
    let justifyContent = document.getElementById('justifyContent').value;
    let alignItems = document.getElementById('alignItems').value;
    let alignContent = document.getElementById('alignContent').value;
    let gap = document.getElementById('gap').value;

    let code = '';
    boxContainerCode = '';

    if (flexDirection !== 'unset') {
        code += `\nflex-direction: ${flexDirection}; `;
        boxContainerCode += `\nflex-direction: ${flexDirection}; `;
    }
    if (flexWrap !== 'unset') {
        code += `\nflex-wrap: ${flexWrap};`;
        boxContainerCode += `\nflex-wrap: ${flexWrap};`;
    }
    if (flexFlow !== 'unset') {
        code += `\nflex-flow: ${flexFlow};`;
        boxContainerCode += `\nflex-flow: ${flexFlow};`;
    }
    if (justifyContent !== 'unset') {
        code += `\njustify-content: ${justifyContent};`;
        boxContainerCode += `\njustify-content: ${justifyContent};`;
    }
    if (alignItems !== 'unset') {
        code += `\nalign-items: ${alignItems};`;
        boxContainerCode += `\nalign-items: ${alignItems};`;
    }
    if (alignContent !== 'unset') {
        code += `\nalign-content:${alignContent};`;
        boxContainerCode += `\nalign-content:${alignContent};`;
    }
    if (gap !== '') {
        code += `\ngap: ${gap};`;
        boxContainerCode += `\ngap: ${gap};`;

    }

    document.getElementById('flexboxViewContainer').style = code;
}



document.getElementById('setContent').addEventListener('click', (e)=>{
    let code = '';
    switch (divBlock) {
        case 'divOne':
            codeDivOne = '';
            divOneObj.order = order.value;
            divOneObj.flexGrow = flexGrow.value;
            divOneObj.flexBasis = flexBasis.value;
            divOneObj.flexShrink = flexShrink.value;
            // divOneObj.flex = flex.value;
            divOneObj.alignSelf = alignSelf.value;

            if (order.value.trim() !== '') {
                code += `order: ${divOneObj.order};`;
                codeDivOne += `\norder:${order.value};`;

            }
            if (flexGrow.value.trim() !== '') {
                code += `flex-grow: ${divOneObj.flexGrow};`;
                codeDivOne += `\nflex-grow:${flexGrow.value};`;
            }
            if (flexBasis.value.trim() !== '') {
                code += `flex-basis: ${divOneObj.flexBasis};`;
                codeDivOne += `\nlex-basis:${flexBasis.value};`;
            }
            if (flexShrink.value.trim() !== '') {
                code += `flex-shrink: ${divOneObj.flexShrink};`;
                codeDivOne += `\nlex-shrink:${flexShrink.value};`;
            }
            // if (flex.value.trim() !== '') {
            //     code += `flex: ${divOneObj.flex};`;
            //     codeDivOne += `\nlex:${flex.value};`;
            // }
            if (alignSelf.value !== 'unset') {
                code += `align-self: ${divOneObj.alignSelf};`;
                codeDivOne += `\nlign-self:${alignSelf.value};`;

            }

            divOne.style = code;
            break;
        case 'divTwo':
            codeDivTwo = '';
            divTwoObj.order = order.value;
            divTwoObj.flexGrow = flexGrow.value;
            divTwoObj.flexBasis = flexBasis.value;
            divTwoObj.flexShrink = flexShrink.value;
            // divTwoObj.flex = flex.value;
            divTwoObj.alignSelf = alignSelf.value;


            if (order.value.trim() !== '') {
                code += `order: ${divTwoObj.order};`;
                codeDivTwo += `\norder:${order.value};`;
            }
            if (flexGrow.value.trim() !== '') {
                code += `flex-grow: ${divTwoObj.flexGrow};`;
                codeDivTwo += `\nflex-grow:${flexGrow.value};`;
            }
            if (flexBasis.value.trim() !== '') {
                code += `flex-basis: ${divTwoObj.flexBasis};`;
                codeDivTwo += `\nflex-basis:${flexBasis.value};`;
            }
            if (flexShrink.value.trim() !== '') {
                code += `flex-shrink: ${divTwoObj.flexShrink};`;
                codeDivTwo += `\nflex-shrink:${flexShrink.value};`;
            }
            // if (flex.value.trim() !== '') {
            //     code += `flex: ${divTwoObj.flex};`;
            //     codeDivTwo += `\nflex:${flex.value};`;
            // }
            if (alignSelf.value !== 'unset') {
                code += `align-self: ${divTwoObj.alignSelf};`;
                codeDivTwo += `\nalign-self:${alignSelf.value};`;
            }

            divTwo.style = code;
            break;
        case 'divThree':
            codeDivThree = '';
            divThreeObj.order = order.value;
            divThreeObj.flexGrow = flexGrow.value;
            divThreeObj.flexBasis = flexBasis.value;
            divThreeObj.flexShrink = flexShrink.value;
            // divThreeObj.flex = flex.value;
            divThreeObj.alignSelf = alignSelf.value;


            if (order.value.trim() !== '') {
                code += `order: ${divThreeObj.order};`;
                codeDivThree += `\norder:${order.value};`;
            }
            if (flexGrow.value.trim() !== '') {
                code += `flex-grow: ${divThreeObj.flexGrow};`;
                codeDivThree += `\nflex-grow:${flexGrow.value};`;
            }
            if (flexBasis.value.trim() !== '') {
                code += `flex-basis: ${divThreeObj.flexBasis};`;
                codeDivThree += `\nflex-basis:${flexBasis.value};`;
            }
            if (flexShrink.value.trim() !== '') {
                code += `flex-shrink: ${divThreeObj.flexShrink};`;
                codeDivThree += `\nflex-shrink:${flexShrink.value};`;
            }
            // if (flex.value.trim() !== '') {
            //     code += `flex: ${divThreeObj.flex};`;
            //     codeDivThree += `\nflex:${flex.value};`;
            // }
            if (alignSelf.value !== 'unset') {
                code += `align-self: ${divThreeObj.alignSelf};`;
                codeDivThree += `\nalign-self:${alignSelf.value};`;
            }

            divThree.style = code;
            break;
        case 'divFour':
            codeDivFour = '';
            divFourObj.order = order.value;
            divFourObj.flexGrow = flexGrow.value;
            divFourObj.flexBasis = flexBasis.value;
            divFourObj.flexShrink = flexShrink.value;
            //divFourObj.flex = flex.value;
            divFourObj.alignSelf = alignSelf.value;


            if (order.value.trim() !== '') {
                code += `order: ${divFourObj.order};`;
                codeDivFour += `\norder:${order.value};`;
            }
            if (flexGrow.value.trim() !== '') {
                code += `flex-grow: ${divFourObj.flexGrow};`;
                codeDivFour += `\nflex-grow:${flexGrow.value};`;
            }
            if (flexBasis.value.trim() !== '') {
                code += `flex-basis: ${divFourObj.flexBasis};`;
                codeDivFour += `\nflex-basis:${flexBasis.value};`;
            }
            if (flexShrink.value.trim() !== '') {
                code += `flex-shrink: ${divFourObj.flexShrink};`;
                codeDivFour += `\nflex-shrink:${flexShrink.value};`;
            }
            // if (flex.value.trim() !== '') {
            //     code += `flex: ${divFourObj.flex};`;
            //     codeDivFour += `\nflex:${flex.value};`;
            // }
            if (alignSelf.value !== 'unset') {
                code += `align-self: ${divFourObj.alignSelf};`;
                codeDivFour += `\nalign-self:${alignSelf.value};`;
            }

            divFour.style = code;
            break;
        case 'divFive':
            codeDivFive = '';

            divFiveObj.order = order.value;
            divFiveObj.flexGrow = flexGrow.value;
            divFiveObj.flexBasis = flexBasis.value;
            divFiveObj.flexShrink = flexShrink.value;
            // divFiveObj.flex = flex.value;
            divFiveObj.alignSelf = alignSelf.value;


            if (order.value.trim() !== '') {
                code += `order: ${divFiveObj.order};`;
                codeDivFive += `\norder:${order.value};`;
            }
            if (flexGrow.value.trim() !== '') {
                code += `flex-grow: ${divFiveObj.flexGrow};`;
                codeDivFive += `\nflex-grow:${flexGrow.value};`;
            }
            if (flexBasis.value.trim() !== '') {
                code += `flex-basis: ${divFiveObj.flexBasis};`;
                codeDivFive += `\nflex-basis:${flexBasis.value};`;
            }
            if (flexShrink.value.trim() !== '') {
                code += `flex-shrink: ${divFiveObj.flexShrink};`;
                codeDivFive += `\nflex-shrink:${flexShrink.value};`;
            }
            // if (flex.value.trim() !== '') {
            //     code += `flex: ${divFiveObj.flex};`;
            //     codeDivFive += `\nflex:${flex.value};`;
            // }
            if (alignSelf.value !== 'unset') {
                code += `align-self: ${divFiveObj.alignSelf};`;
                codeDivFive += `\nalign-self:${alignSelf.value};`;
            }

            divFive.style = code;
            break;
    }
});

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

document.getElementById('copyButton').addEventListener('click', ()=>{
    navigator.clipboard.writeText(`#container{${boxContainerCode}\n}\n#blockOne{${codeDivOne}\n}\n#blockTwo{${codeDivTwo}\n}\n#blockThree{${codeDivThree}\n}\n#blockFour{${codeDivFour}\n}\n#blockFive{${codeDivFive}\n}`);
});

flexBoxContainer.addEventListener('click', () => {
    flexboxContainer();
    addDivBlock();
});

flexBoxContainer.addEventListener('mousemove', () => {
    flexboxContainer();
    addDivBlock();
});

flexBoxContainer.addEventListener('keyup', () => {
    flexboxContainer();
    addDivBlock();
});

flexBoxContainer.addEventListener('touchmove', () => {
    flexboxContainer();
    addDivBlock();
});

// flexboxContainer();
question();