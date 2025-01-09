import { registerBlockType } from '@wordpress/blocks';
import { button as icon } from '@wordpress/icons';
import ServerSideRender from '@wordpress/server-side-render';
import metadata from './block.json';

const edit = () => {
  return <ServerSideRender block="galactictalk/cta-button" />;
};

const save = () => null;

registerBlockType(metadata, { icon, edit, save });
