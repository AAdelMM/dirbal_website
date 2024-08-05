document.addEventListener('trix-initialize', function (event) {
    const editor = event.target;

    if (!editor.dataset.customRichEditor) {
        return;
    }

    const buttonGroup = editor.toolbarElement.querySelector('.trix-button-group--text-tools');

    const fontSizeButtonHTML = `
        <button type="button" class="trix-button trix-button--icon trix-button--icon-custom" data-trix-attribute="fontSize">
            <svg class="trix-icon" width="100%" height="100%">
                <use xlink:href="#icon-font-size"></use>
            </svg>
        </button>
    `;

    buttonGroup.insertAdjacentHTML('beforeend', fontSizeButtonHTML);

    const fontColorButtonHTML = `
        <button type="button" class="trix-button trix-button--icon trix-button--icon-custom" data-trix-attribute="fontColor">
            <svg class="trix-icon" width="100%" height="100%">
                <use xlink:href="#icon-font-color"></use>
            </svg>
        </button>
    `;

    buttonGroup.insertAdjacentHTML('beforeend', fontColorButtonHTML);

    editor.addEventListener('trix-action-invoke', function (event) {
        if (event.actionName === 'fontSize') {
            const fontSize = prompt('Enter font size in pixels:');
            if (fontSize) {
                document.execCommand('fontSize', false, fontSize);
            }
        } else if (event.actionName === 'fontColor') {
            const fontColor = prompt('Enter font color (e.g., red, #FF0000):');
            if (fontColor) {
                document.execCommand('foreColor', false, fontColor);
            }
        }
    });
});
