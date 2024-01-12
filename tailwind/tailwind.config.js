// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
        'primary': {
          DEFAULT: '#F4856D',
          '50': '#FEF4F2',
          '100': '#FDE4DF',
          '200': '#FAC4B9',
          '300': '#F7A593',
          '400': '#F4856D',
          '500': '#F05939',
          '600': '#E03611',
          '700': '#AC290D',
          '800': '#781D09',
          '900': '#431005'
        },
        'secondary': {
          DEFAULT: '#094E5D',
          '50': '#dae4e7',
          '100': '#b2c4ca',
          '200': '#8ba5ad',
          '300': '#648791',
          '400': '#3d6a77',
          '500': '#094E5D',
          '600': '#08414d',
          '700': '#07343e',
          '800': '#05272f',
          '900': '#031b21'
        },
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
	],
};
