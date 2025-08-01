/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
import { registerBlockType, createBlock } from '@wordpress/blocks';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './style.scss';

/**
 * Internal dependencies
 */
import Edit from './edit';
import save from './save';
import metadata from './block.json';
import icon from './assets/icon.svg'

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType( metadata.name, {
	/**
	 * @see ./edit.js
	 */
	edit: Edit,

	/**
	 * @see ./save.js
	 */
	save,
	icon: <img src={icon}/>,
	transforms:{
		from: [
			{
				type: "block",
				blocks: ['core/paragraph'],
				transform: (attributes) => {
					return createBlock("blockylicious/curvy", {}, [
						createBlock("core/paragraph", attributes),
					])
				}
			},
			{
				type: "block",
				blocks: ['core/heading'],
				transform: (attributes) => {
					return createBlock("blockylicious/curvy", {}, [
						createBlock("core/heading", attributes),
					])
				}
			}
	]
	}
} );
