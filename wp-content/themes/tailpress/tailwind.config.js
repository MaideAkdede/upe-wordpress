const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    mode: 'jit',
    content: [
        './*/*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        fontFamily: {
            "dm-regular": ["DM Sans Regular"],
            "dm-bold": ["DM Sans Bold"],
            "dm-medium": ["DM Sans Medium"]
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            backgroundImage: {
                'desktop-bg': "url('../images/svg.svg')",
            },
            width: {
                'pixel-22': '1.375rem',
                'pixel-39': '2.4375rem',
                'pixel-46': '46px'
            },
            height: {
                'pixel-22': '1.375rem',
                'pixel-39': '2.4375rem',
                'pixel-46': '46px'
            }
        },
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': tailpress.theme('settings.layout.wideSize', theme)
        }
    },
    plugins: [
        tailpress.tailwind,
        require('@tailwindcss/line-clamp'),
    ]
};
