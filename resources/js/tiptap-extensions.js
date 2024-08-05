import { Extension } from '@tiptap/core';

export const TextColorExtension = Extension.create({
    name: 'textColor',

    addAttributes() {
        return {
            color: {
                default: null,
                parseHTML: element => element.style.color,
                renderHTML: attributes => {
                    if (!attributes.color) {
                        return {}
                    }
                    return {
                        style: `color: ${attributes.color}`,
                    }
                },
            },
        }
    },

    addCommands() {
        return {
            setTextColor: color => ({ chain }) => {
                return chain().setMark('textColor', { color: color }).run()
            },
        }
    },
});

export const FontSizeExtension = Extension.create({
    name: 'fontSize',

    addAttributes() {
        return {
            size: {
                default: null,
                parseHTML: element => element.style.fontSize,
                renderHTML: attributes => {
                    if (!attributes.size) {
                        return {}
                    }
                    return {
                        style: `font-size: ${attributes.size}`,
                    }
                },
            },
        }
    },

    addCommands() {
        return {
            setFontSize: size => ({ chain }) => {
                return chain().setMark('fontSize', { size: size }).run()
            },
        }
    },
});