A simple Open Graph Protocol parser and add Open Graph metadata to pages for Yii.

## Installation

1. Extract the release file under <tt>protected/extensions</tt>.
2. Add to your config file:
 * in import section:
	...
	'application.extensions.OpenGraph.*',
	...

 * in components section:
	...
	'openGraphNode' => array(
	    'class' => 'application.extensions.OpenGraph.phaOpenGraphNode'
	),
	...

## Basic Usage

Now you can create new node of openGraph:

	$node = Yii::app()->getComponent('openGraphNode');


### Building page with Open Graph metadata

### Parse Open Graph metadata from page

## Author

Vadim Kruchkov <long@phargo.net>.

## Licence

Choose your favourite of:

 * [GPL-LICENSE](https://github.com/phargo/phaOpenGraph/blob/master/GPL-LICENSE)
 * [MIT-LICENSE](https://github.com/phargo/phaOpenGraph/blob/master/MIT-LICENSE)

Thanks for sharing!