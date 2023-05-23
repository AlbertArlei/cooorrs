
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
    })
}

let order = document.getElementById('order');
let flexGrow = document.getElementById('flexGrow');
let flexBasis = document.getElementById('flexBasis');
let flexShrink = document.getElementById('flexShrink');
let flex = document.getElementById('flex');
let alignSelf = document.getElementById('alignSelf');

const divOneObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    flex: flex.value,
    alignSelf: alignSelf.value
};

const divTwoObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    flex: flex.value,
    alignSelf: alignSelf.value
};

const divThreeObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    flex: flex.value,
    alignSelf: alignSelf.value
};

const divFourObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    flex: flex.value,
    alignSelf: alignSelf.value
};

const divFiveObj = {
    order: order.value,
    flexGrow: flexGrow.value,
    flexBasis: flexBasis.value,
    flexShrink: flexShrink.value,
    flex: flex.value,
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
                flex.value = divOneObj.flex;
                alignSelf.value = divOneObj.alignSelf;

                divBlock = 'divOne';
                break;
            case divTwo:
                order.value = divTwoObj.order;
                flexGrow.value = divTwoObj.flexGrow;
                flexBasis.value = divTwoObj.flexBasis;
                flexShrink.value = divTwoObj.flexShrink;
                flex.value = divTwoObj.flex;
                alignSelf.value = divTwoObj.alignSelf;

                divBlock = 'divTwo';
                break;
            case divThree:
                order.value = divThreeObj.order;
                flexGrow.value = divThreeObj.flexGrow;
                flexBasis.value = divThreeObj.flexBasis;
                flexShrink.value = divThreeObj.flexShrink;
                flex.value = divThreeObj.flex;
                alignSelf.value = divThreeObj.alignSelf;

                divBlock = 'divThree';
                break;

            case divFour:
                order.value = divFourObj.order;
                flexGrow.value = divFourObj.flexGrow;
                flexBasis.value = divFourObj.flexBasis;
                flexShrink.value = divFourObj.flexShrink;
                flex.value = divFourObj.flex;
                alignSelf.value = divFourObj.alignSelf;

                divBlock = 'divFour';
                break;
            case divFive:
                order.value = divFiveObj.order;
                flexGrow.value = divFiveObj.flexGrow;
                flexBasis.value = divFiveObj.flexBasis;
                flexShrink.value = divFiveObj.flexShrink;
                flex.value = divFiveObj.flex;
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



document.getElementById('setContent').addEventListener('click', function setObjetctContent(e) {
    let code = '';
    switch (divBlock) {
        case 'divOne':
            console.log('a')
            console.log(divBlock)
            divOneObj.order = order.value;
            divOneObj.flexGrow = flexGrow.value;
            divOneObj.flexBasis = flexBasis.value;
            divOneObj.flexShrink = flexShrink.value;
            divOneObj.flex = flex.value;
            divOneObj.alignSelf = alignSelf.value;
            
            if(order.value.trim() !== '') code += `order: ${divOneObj.order};`;
            if(flexGrow.value.trim() !== '') code += `flex-grow: ${divOneObj.flexGrow};`;
            if(flexBasis.value.trim() !== '') code += `flex-basis: ${divOneObj.flexBasis};`;
            if(flexShrink.value.trim() !== '') code += `flex-shrink: ${divOneObj.flexShrink};`;
            if(flex.value.trim() !== '') code += `flex: ${divOneObj.flex};`;
            if(alignSelf.value !== 'unset') code += `align-self: ${divOneObj.alignSelf};`;

            divOne.style = code;
            break;
        case 'divTwo':
            console.log('b')
            console.log(divBlock)
            divTwoObj.order = order.value;
            divTwoObj.flexGrow = flexGrow.value;
            divTwoObj.flexBasis = flexBasis.value;
            divTwoObj.flexShrink = flexShrink.value;
            divTwoObj.flex = flex.value;
            divTwoObj.alignSelf = alignSelf.value;

            
            if(order.value.trim() !== '') code += `order: ${divTwoObj.order};`;
            if(flexGrow.value.trim() !== '') code += `flex-grow: ${divTwoObj.flexGrow};`;
            if(flexBasis.value.trim() !== '') code += `flex-basis: ${divTwoObj.flexBasis};`;
            if(flexShrink.value.trim() !== '') code += `flex-shrink: ${divTwoObj.flexShrink};`;
            if(flex.value.trim() !== '') code += `flex: ${divTwoObj.flex};`;
            if(alignSelf.value !== 'unset') code += `align-self: ${divTwoObj.alignSelf};`;

            divTwo.style = code;
            break;
        case 'divThree':
            console.log('c')
            console.log(divBlock)
            divThreeObj.order = order.value;
            divThreeObj.flexGrow = flexGrow.value;
            divThreeObj.flexBasis = flexBasis.value;
            divThreeObj.flexShrink = flexShrink.value;
            divThreeObj.flex = flex.value;
            divThreeObj.alignSelf = alignSelf.value;

            
            if(order.value.trim() !== '') code += `order: ${divThreeObj.order};`;
            if(flexGrow.value.trim() !== '') code += `flex-grow: ${divThreeObj.flexGrow};`;
            if(flexBasis.value.trim() !== '') code += `flex-basis: ${divThreeObj.flexBasis};`;
            if(flexShrink.value.trim() !== '') code += `flex-shrink: ${divThreeObj.flexShrink};`;
            if(flex.value.trim() !== '') code += `flex: ${divThreeObj.flex};`;
            if(alignSelf.value !== 'unset') code += `align-self: ${divThreeObj.alignSelf};`;

            divThree.style = code;
            break;
        case 'divFour':
            console.log('d')
            console.log(divBlock)
            divFourObj.order = order.value;
            divFourObj.flexGrow = flexGrow.value;
            divFourObj.flexBasis = flexBasis.value;
            divFourObj.flexShrink = flexShrink.value;
            divFourObj.flex = flex.value;
            divFourObj.alignSelf = alignSelf.value;

            
            if(order.value.trim() !== '') code += `order: ${divFourObj.order};`;
            if(flexGrow.value.trim() !== '') code += `flex-grow: ${divFourObj.flexGrow};`;
            if(flexBasis.value.trim() !== '') code += `flex-basis: ${divFourObj.flexBasis};`;
            if(flexShrink.value.trim() !== '') code += `flex-shrink: ${divFourObj.flexShrink};`;
            if(flex.value.trim() !== '') code += `flex: ${divFourObj.flex};`;
            if(alignSelf.value !== 'unset') code += `align-self: ${divFourObj.alignSelf};`;

            divFour.style = code;
            break;
        case 'divFive':
            console.log('e')
            console.log(divBlock)
            divFiveObj.order = order.value;
            divFiveObj.flexGrow = flexGrow.value;
            divFiveObj.flexBasis = flexBasis.value;
            divFiveObj.flexShrink = flexShrink.value;
            divFiveObj.flex = flex.value;
            divFiveObj.alignSelf = alignSelf.value;

            
            if(order.value.trim() !== '') code += `order: ${divFiveObj.order};`;
            if(flexGrow.value.trim() !== '') code += `flex-grow: ${divFiveObj.flexGrow};`;
            if(flexBasis.value.trim() !== '') code += `flex-basis: ${divFiveObj.flexBasis};`;
            if(flexShrink.value.trim() !== '') code += `flex-shrink: ${divFiveObj.flexShrink};`;
            if(flex.value.trim() !== '') code += `flex: ${divFiveObj.flex};`;
            if(alignSelf.value !== 'unset') code += `align-self: ${divFiveObj.alignSelf};`;

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

document.getElementById('flexboxViewContainer').addEventListener('click', ()=>{

});

document.getElementById('flexboxContainer').addEventListener('click', () => {
    flexboxContainer();
    addDivBlock();
});

document.getElementById('flexboxContainer').addEventListener('mousemove', () => {
    flexboxContainer();
    addDivBlock();
});

document.getElementById('flexboxContainer').addEventListener('keyup', () => {
    flexboxContainer();
    addDivBlock();
});

document.getElementById('flexboxContainer').addEventListener('touchmove', () => {
    flexboxContainer();
    addDivBlock();
});

flexboxContainer();
question();