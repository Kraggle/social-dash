import TC from '../../plugins/tinycolor.js';

// put any colors you want in here
// any format is acceptable
const colors = {
	blue: '#2380f7',
	pink: '#e14eca',
	purple: '#a02acc',
	orange: '#d98a33',
	red: '#d82a2a',
	green: '#0b9556',
	yellow: '#cdc02f',
	white: '#fff',
	black: '#000'
}

const _colors = {
	hex: {},
	rgb: {},

	alpha(color, alpha = 0.6) {
		return TC(this.hex[color]).setAlpha(alpha).toRgbString();
	},

	darken(color, amount = 10) {
		color = TC(color in colors ? this.hex[color] : color);
		return color.darken(amount)[color.getAlpha() < 1 ? 'toRgbString' : 'toHexString']();
	},

	lighten(color, amount = 10) {
		color = TC(color in colors ? this.hex[color] : color);
		return color.lighten(amount)[color.getAlpha() < 1 ? 'toRgbString' : 'toHexString']();
	}
}

for (const color in colors) {
	const value = colors[color];
	_colors.hex[color] = TC(value).toHexString();
	_colors.rgb[color] = TC(value).toRgbString();
}

export default _colors;
