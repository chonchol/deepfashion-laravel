// Simple example, see optional options for more configuration.
const pickr = Pickr.create({
    el: '.color-picker',
    theme: 'nano',

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)'
    ],

    defaultRepresentation: 'HEXA',
    default: '#FFFFFF',
    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: false,
            rgba: false,
            hsva: false,
            input: true,
            clear: true,
            save: true
        }
    }
});

pickr.on('save', (...args) => {
    let mainColor = args[0].toHEXA();
    let totalColor = mainColor[0]+mainColor[1]+mainColor[2];
    //console.log(totalColor);
    $("#inputBackColor").val('#' + totalColor);
});
