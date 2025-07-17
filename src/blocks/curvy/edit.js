import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls, InnerBlocks } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';
import metadata from './block.json'
import { Curve } from './components/curve'
import { TopCurveSettings } from './components/topCurveSettings';
import { BottomCurveSettings } from './components/bottomCurveSetting';
import './editor.scss';

export default function Edit(props) {

	const { className, ...blockProps } = useBlockProps();
	return (
		<>
			<section className={`${className} alignfull`} {...blockProps}>
				{props.attributes.enableTopCurve && (
					<Curve
						color={props.attributes.topColor}
						flipX={props.attributes.topFlipX}
						flipY={props.attributes.topFlipY}
						height={props.attributes.topHeight}
						width={props.attributes.topWidth}
					/>
				)}
				<InnerBlocks />
				{props.attributes.enableBottomCurve && (
					<Curve
						isBottom
						color={props.attributes.bottomColor}
						flipX={props.attributes.bottomFlipX}
						flipY={props.attributes.bottomFlipY}
						height={props.attributes.bottomHeight}
						width={props.attributes.bottomWidth}
					/>
				)}
			</section>

			<InspectorControls>
				<PanelBody title={__('Top curve', metadata.textdomain)}>
					<div style={{ display: 'flex' }}>
						<ToggleControl
							onChange={(isChecked) => props.setAttributes({ enableTopCurve: isChecked })}
							checked={props.attributes.enableTopCurve} />
						<span>{__('Enable top curve', metadata.textdomain)}</span>
					</div>
					{props.attributes.enableTopCurve &&
						<TopCurveSettings attributes={props.attributes} setAttributes={props.setAttributes} />
					}
				</PanelBody>
				<PanelBody title={__('Bottom curve', metadata.textdomain)}>
					<div style={{ display: 'flex' }}>
						<ToggleControl
							onChange={(isChecked) => props.setAttributes({ enableBottomCurve: isChecked })}
							checked={props.attributes.enableBottomCurve} />
						<span>{__('Enable bottom curve', metadata.textdomain)}</span>
					</div>
					{props.attributes.enableBottomCurve &&
						<BottomCurveSettings attributes={props.attributes} setAttributes={props.setAttributes} />
					}
				</PanelBody>
			</InspectorControls>
		</>
	);
}