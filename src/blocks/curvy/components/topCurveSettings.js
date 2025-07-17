import { ColorPalette, HorizontalRule, RangeControl, ToggleControl } from '@wordpress/components';
import { __ } from "@wordpress/i18n";
import metadata from '../block.json';

export const TopCurveSettings = (props) => {
  return (
    <>
      <HorizontalRule />
      <RangeControl
        min={100}
        max={300}
        value={props.attributes.topWidth || 100}
        onChange={(newValue) => {
          props.setAttributes({
            topWidth: parseInt(newValue)
          });
        }}
        label={__("Width", metadata.textdomain)} />
      <RangeControl
        min={0}
        max={200}
        value={props.attributes.topHeight || 100}
        onChange={(newValue) => {
          props.setAttributes({
            topHeight: parseInt(newValue)
          });
        }}
        label={__("Height", metadata.textdomain)} />
      <HorizontalRule />
      <div style={{ display: 'flex' }}>
        <ToggleControl
          onChange={(isChecked) => props.setAttributes({
            topFlipX: isChecked
          })}
          checked={props.attributes.topFlipX} />
        <span>{__('Flip horizontaly', metadata.textdomain)}</span>
      </div>
      <div style={{ display: 'flex' }}>
        <ToggleControl
          onChange={(isChecked) => props.setAttributes({
            topFlipY: isChecked
          })}
          checked={props.attributes.topFlipY} />
        <span>{__('Flip verticaly', metadata.textdomain)}</span>
      </div>
      <HorizontalRule />
      <div>
        <label>{__("Curve color", metadata.textdomain)}</label>
        <ColorPalette
          colors={[
            {
              name: "Yellow",
              color: "#FFFF00"
            }
          ]}
          value={props.attributes.topColor}
          onChange={(newValue) => {
            props.setAttributes({
              topColor: newValue
            })
          }}
        />
      </div>
    </>
  )
}