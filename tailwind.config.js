// tailwind.config.js
module.exports = {
	content: [
		"./assets/css/src/main.css",
		"./**/*.php"
	],
	theme: {
		extend: {
			fontFamily: {
				'montserrat': ['Montserrat', 'sans-serif']
			},
			colors: {
				'blue-light': '#4b6fb5',
				'blue-dark': '#1c335d',
			},
			zIndex: {
				'1': '1',
				'2': '2',
				'3': '3',
				'4': '4',
				'5': '5',
				'6': '6',
				'7': '7',
				'8': '8',
				'9': '9',
			  }
		}
	},
	variants: {
		extend: {},
	},
	plugins: [],
}