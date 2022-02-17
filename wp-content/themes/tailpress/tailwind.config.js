const _ = require("lodash");
const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");
//
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
            "dm-medium": ["DM Sans Medium"],
            "font-awesome": ["Font Awesome 6 Pro"],
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
                'desktop-bg': "url('../images/bg/header.svg')",
                'footer-bg': "url('../images/bg/footer.svg')",
            },
            backgroundColor:{
                'bullet-gray': '#EAEAEA',
            },
            gridTemplateColumns: {
                'product': 'auto 1fr',
                'footer-md': 'repeat(3, minmax(0, max-content))',
                'footer-lg': 'repeat(4, minmax(0, max-content))',
            },
            width: {
                'pixel-22': '1.375rem',
                'pixel-39': '2.4375rem',
                'pixel-46': '46px',
                'pixel-360': '360px'
            },
            height: {
                'pixel-22': '1.375rem',
                'pixel-39': '2.4375rem',
                'pixel-46': '46px',
                'pixel-250': '250px'
            },
            minHeight: {
                'pixel-250': '250px',
            },
            maxWidth: {
                'screen': '100vw',
                'char-24': '24ch',
                'lg-product-img': '398px',
                'md-product-img': '250px',
                'sm-product-img': '200px',
            },
            fontSize: {
                'pixel-13' : '0.8125rem',
                'pixel-14' : '0.875rem',
                'pixel-22' : '1.375rem',
                'pixel-30' : '1.875rem',
                'pixel-35' : '2.1875rem',
                'pixel-50' : '3.125rem',
            },
            margin: {
                'pixel-25' : '25px',
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
        require('tailwind-scrollbar-hide'),
        require('@tailwindcss/typography'),
    ]
};
