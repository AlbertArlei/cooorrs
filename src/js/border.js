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
    let borderStyle = document.querySelector('#borderStyle').value;

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

    const code = `
border-top:${borderTop}px ${borderStyle} ${borderColorTop};<br>
border-left:${borderLeft}px ${borderStyle} ${borderColorLeft};<br>
border-bottom:${borderBottom}px ${borderStyle} ${borderColorBottom};<br>
border-right:${borderRight}px ${borderStyle} ${borderColorRight};<br>
border-radius: ${borderRadiusTop}px ${borderRadiusLeft}px ${borderRadiusBottom}px ${borderRadiusRight}px
`;

    document.querySelector('.textArea').innerHTML = code;
}

document.querySelector('.borderGeneratorContainer').addEventListener('keyup', () => {
    borderGenerator();
});

document.querySelector('.borderGeneratorContainer').addEventListener('click', () => {
    borderGenerator();
});

document.querySelector('.borderGeneratorContainer').addEventListener('touch', () => {
    borderGenerator();
});

document.querySelector('.buttonCopyCss').addEventListener('click', () => {
    const code = document.querySelector('.textArea');
    console.log(code.textContent.trimStart())
    navigator.clipboard.writeText(code.textContent.trimStart());

})

borderGenerator();