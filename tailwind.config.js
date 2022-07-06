const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/*.js',
    ],
    theme: {
        extend: {
            dropShadow: {
                '3xl': '0px 0px 4px rgba(62, 34, 255, 0.59)',
            },
            bgGradientDeg: {
                84: '84deg',
            },
            fontFamily: {
                sans: ['Agrandir', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'wgl-blue-1': '#371BF4',
                'wgl-blue-2': '#381CF7',
                'wgl-blue-3': '#2A11D6',
                'wgl-blue-4': '#3016E4',
                'wgl-blue-5': '#3016E5',

                'wgl-green-1': '#24BC21',

                'wgl-purple-1': '#262344',
                'wgl-purple-2': '#545173',
                'wgl-purple-3': '#211E3F',

                'wgl-black-1': '#120F2C',
                'wgl-black-2': '#070418',

                'wgl-gray-1': '#F0F4FF',
                'wgl-gray-2': '#ffffff12',
                'wgl-gray-3': '#ffffff1a',

                'wgh-red-1': '#FF5233',
                'wgh-red-2': '#FF3815',
                'wgh-red-3': '#D62000',
                'wgh-red-4': '#A31800',

                'wgh-purple-1': '#7000F5',
                'wgh-purple-2': '#6100D4',
                'wgh-purple-3': '#4B00A3',
                'wgh-purple-4': '#340070',
                'wgh-purple-5': '#14102D',

                'wgh-gray-0.5': '#F6F6F7',
                'wgh-gray-1': '#D1D2D6',
                'wgh-gray-1.5': '#B7BAC6',
                'wgh-gray-2': '#9C9FA7',
                'wgh-gray-3': '#767980',
                'wgh-gray-4': '#696C73',
                'wgh-gray-5': '#5D5F65',
                'wgh-gray-6': '#313336',

                'wgh-pink-1': '#F0E4FD',

                'wgh-turquoise-2': '#26E1ED',

                'wgh-yellow-2': '#FBDD11',
                'wgh-yellow-3': '#FFA722',
            },
            borderWidth: {
                3: '3px',
                6: '6px',
                9: '9px',
                10: '10px',
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        plugin(function({ matchUtilities, theme }) {
            matchUtilities(
                {
                    'bg-gradient': (angle) => ({
                        'background-image': `linear-gradient(${angle}, var(--tw-gradient-stops))`,
                    }),
                },
                {
                    // values from config and defaults you wish to use most
                    values: Object.assign(
                        theme('bgGradientDeg', {}), // name of config key. Must be unique
                        {
                            10: '10deg', // bg-gradient-10
                            15: '15deg',
                            20: '20deg',
                            25: '25deg',
                            30: '30deg',
                            45: '45deg',
                            60: '60deg',
                            84: '84deg',
                            90: '90deg',
                            120: '120deg',
                            135: '135deg',
                        }
                    )
                }
            )
        })
    ],
};
