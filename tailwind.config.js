const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '80': '20rem',
                '108': '27rem',
                '160': '40rem',
            },
            inset: {
                '-16': '-4rem',
            },
            fontSize: {
                xxs: '0.625rem'
            },
            boxShadow: {
                'outline-green': '0 0 0 3px rgba(5,202,160, 0.8)',
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
        textColor: ['responsive', 'hover', 'focus', 'group-hover'],
        backgroundColor: ['responsive', 'hover', 'focus', 'even', 'odd'],
    },

    plugins: [require('@tailwindcss/forms')],
};
