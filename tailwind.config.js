const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './*.html'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                blue: {
                    950: '#14213D'
                },
                github: {
                    DEFAULT: '#333333',
                    dark: '#000000'
                },
                twitter: {
                    DEFAULT: '#1da1f2',
                    dark: '#1a91da'
                },
                primary: {
                    light: defaultTheme.colors.green[400],
                    DEFAULT: defaultTheme.colors.green[600],
                    dark: defaultTheme.colors.green[700]
                },
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require("kutty")
    ],
};
