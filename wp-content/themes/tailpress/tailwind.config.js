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
                'primary-hover': '#246596',
                'filter-search': '#2E84AF',
                'input': '#5DA0C1',
                'primary-active': '#215C8A',
                'secondary-hover': '#55992B',
                'secondary-active': '#478024',
                'mobile': '#E9F2F7',
            },
            gridTemplateColumns: {
                'product-lg': 'auto 1fr',
                'filter': '144px 1fr 2fr',
                'footer-md': 'repeat(3, minmax(0, max-content))',
                'footer-lg': 'repeat(4, minmax(0, max-content))',
            },
            padding: {
                '7px' :'7px',
            },
            width: {
                'price-sticker': '4.375rem',
                'filter-mobile': '64px',
                'pixel-22': '1.375rem',
                'pixel-39': '2.4375rem',
                'pixel-46': '46px',
                'pixel-360': '360px',
                '50vw': '50vw',
                'logo-xs': '60px',
                'logo-md': '65px',
                'logo-lg': '75px',
                'logo-xl': '100px',
                'cart-base': '25px',
                'cart-md': '19px',
            },
            height: {
                'price-sticker': '4.375rem',
                'filter-mobile': '73px',
                'slider': '100px',
                'pixel-22': '1.375rem',
                'pixel-39': '2.4375rem',
                'pixel-46': '46px',
                'pixel-250': '250px',
                'circle': '750px',
                '40vh': '40vh',
                '50vh': '50vh',
                'cart-base': '23px',
                'cart-md': '17px',
                'huge-circle': '300vh',
            },
            minHeight: {
                'pixel-250': '250px',
            },
            maxWidth: {
                'screen': '100vw',
                'char-24': '24ch',
                'filter': '9.375rem',
                'lg-product-img': '398px',
                'md-product-img': '250px',
                'sm-product-img': '200px',
            },
            fontSize: {
                'category' : '0.8125rem',
                'button' : '0.8125rem',
                'pixel-14' : '0.875rem',
                'footer' : '0.875rem',
                'pixel-22' : '1.375rem',
                'pixel-30' : '1.875rem',
                'pixel-35' : '2.1875rem',
                'pixel-50' : '3.125rem',
            },
            margin: {
                'pixel-25' : '25px',
            },
            zIndex: {
                '1': '1',
                '2': '2',
                '3': '3',
                '4': '4',
                '5': '5',
            },
            inset: {
                '10%' : '10%',
            },
            translate: {
            },
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
