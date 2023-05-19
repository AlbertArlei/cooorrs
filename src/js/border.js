function borderGenerator() {
    let borderTop = document.querySelector('#borderTop').value;
    let borderLeft = document.querySelector('#borderLeft').value;
    let borderBottom = document.querySelector('#borderBottom').value;
    let borderRight = document.querySelector('#borderRight').value;

    let borderRadiusTop = document.querySelector('#borderRadiusTop').value;
    let borderRadiusLeft = document.querySelector('#borderRadiusLeft').value;
    let borderRadiusBottom = document.querySelector('#borderRadiusBottom').value;
    let borderRadiusRight = document.querySelector('#borderRadiusRight').value;

    let borderColorTop = document.querySelector('#colorSelectTop').value;
    let borderColorLeft = document.querySelector('#colorSelectLeft').value;
    let borderColorBottom = document.querySelector('#colorSelectBottom').value;
    let borderColorRight = document.querySelector('#colorSelectRight').value;
    let borderStyle= document.querySelector('#borderStyle').value;

    let blockContainer = document.querySelector('.blockContainer').style = `
    border-top:${borderTop}px ${borderStyle} ${borderColorTop};
    border-left:${borderLeft}px ${borderStyle} ${borderColorLeft};
    border-bottom:${borderBottom}px ${borderStyle} ${borderColorBottom};
    border-right:${borderRight}px ${borderStyle} ${borderColorRight};
    border-radius: ${borderRadiusTop}px ${borderRadiusLeft}px ${borderRadiusBottom}px ${borderRadiusRight}px`;

    let circleContainer = document.querySelector('.circleContainer').style = `
    border-top:${borderTop}px ${borderStyle} ${borderColorTop};
    border-left:${borderLeft}px ${borderStyle} ${borderColorLeft};
    border-bottom:${borderBottom}px ${borderStyle} ${borderColorBottom};
    border-right:${borderRight}px ${borderStyle} ${borderColorRight};`;

    document.querySelector('.textArea').value = `
    border-top:${borderTop}px ${borderStyle} ${borderColorTop};
    border-left:${borderLeft}px ${borderStyle} ${borderColorLeft};
    border-bottom:${borderBottom}px ${borderStyle} ${borderColorBottom};
    border-right:${borderRight}px ${borderStyle} ${borderColorRight};
    border-radius: ${borderRadiusTop}px ${borderRadiusLeft}px ${borderRadiusBottom}px ${borderRadiusRight}px`.trimStart();
}

document.querySelector('.borderGeneratorContainer').addEventListener('click', ()=>{
    borderGenerator();
});

borderGenerator();