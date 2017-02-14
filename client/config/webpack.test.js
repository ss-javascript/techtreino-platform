/*
 * Dependencies
 */
var webpack = require('webpack');
var helpers = require('./helpers');

/*
 * Paths
 */
var sourcePath = "./../src";

module.exports = {

	devtool: "inline-source-map",

	resolve: {
		extensions: [".ts", ".js"]
	},

	module: {
		rules: [
			{ test: /\.ts$/, loaders: ["awesome-typescript-loader", "angular2-template-loader"] },
			{ test: /\.html$/, loaders: "html-loader" },
			{ test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|eot|ico)$/, loaders: "null-loader" },
			{ test: /\.css$/, exclude: helpers.root(sourcePath, "app"), loader: "null-loader" },
			{ test: /\.css$/, include: helpers.root(sourcePath, "app"), loader: "raw-loader" }
		]
	},

	plugins: [
		new webpack.ContextReplacementPlugin(
			/angular(\\|\/)core(\\|\/)(esm(\\|\/)src|src)(\\|\/)linker/,
			helpers.root(sourcePath),
			{}
		)
	]
}