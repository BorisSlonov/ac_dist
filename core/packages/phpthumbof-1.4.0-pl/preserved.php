<?php return array (
  '08c29ea61f2e20403821a0a1d1a7497b' => 
  array (
    'criteria' => 
    array (
      'name' => 'phpthumbof',
    ),
    'object' => 
    array (
      'name' => 'phpthumbof',
      'path' => '{core_path}components/phpthumbof/',
      'assets_path' => '{assets_path}components/phpthumbof/',
    ),
  ),
  '0f257501b9d21e815c786e81aa13ff59' => 
  array (
    'criteria' => 
    array (
      'name' => 'phpThumbOfCacheManager',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'phpThumbOfCacheManager',
      'description' => 'Handles cache cleaning when clearing the Site Cache.',
      'editor_type' => 0,
      'category' => 8,
      'cache_type' => 0,
      'plugincode' => '/*
 * Handles cache cleanup
 * pThumb
 * Copyright 2013 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

if ($modx->event->name === \'OnSiteRefresh\') {
	if (!$modx->loadClass(\'pThumbCacheCleaner\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load pThumbCacheCleaner class.\');
		return;
	}
	static $pt_settings = array();
	$pThumb = new pThumbCacheCleaner($modx, $pt_settings, array(), true);
	$pThumb->cleanCache();
}',
      'locked' => 0,
      'properties' => NULL,
      'disabled' => 0,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/*
 * Handles cache cleanup
 * pThumb
 * Copyright 2013 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

if ($modx->event->name === \'OnSiteRefresh\') {
	if (!$modx->loadClass(\'pThumbCacheCleaner\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load pThumbCacheCleaner class.\');
		return;
	}
	static $pt_settings = array();
	$pThumb = new pThumbCacheCleaner($modx, $pt_settings, array(), true);
	$pThumb->cleanCache();
}',
    ),
  ),
  'a50624ced27c6ff758296a9c2f04610d' => 
  array (
    'criteria' => 
    array (
      'pluginid' => 7,
      'event' => 'OnSiteRefresh',
    ),
    'object' => 
    array (
      'pluginid' => 7,
      'event' => 'OnSiteRefresh',
      'priority' => 0,
      'propertyset' => 0,
    ),
  ),
  '7b8973e12472856190ea0da40648d2ac' => 
  array (
    'criteria' => 
    array (
      'name' => 'phpthumbof',
    ),
    'object' => 
    array (
      'id' => 14,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'phpthumbof',
      'description' => 'Identical to pthumb. Retained for backwards compatibility.
Documentation: https://github.com/oo12/phpThumbOf',
      'editor_type' => 0,
      'category' => 8,
      'cache_type' => 0,
      'snippet' => '/**
 * pThumb
 * Copyright 2013-2014 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * Forked from phpThumbOf 1.4.0
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 */
/**
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $input
 * @var string|array $options
 *
 */

if (empty($input)) {  // Exit quietly if no file name given
	return;
}

$scriptProperties[\'debug\'] = isset($debug) ? $debug : false;


static $pt_settings = array();

if (empty($pt_settings)) {
	if (!$modx->loadClass(\'phpThumbOf\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load phpThumbOf class.\');
		return $input;
	}
}

$pThumb = new phpThumbOf($modx, $pt_settings, $scriptProperties);

$result = $pThumb->createThumbnail($input, $options);

if (!empty($toPlaceholder) || $result[\'outputDims\']) {
	if ($result[\'width\'] === \'\' && $result[\'file\'] && $dims = getimagesize($result[\'file\']) ) {
			$result[\'width\'] = $dims[0];
			$result[\'height\'] = $dims[1];
	}
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholders(array(
			$toPlaceholder => $result[\'src\'],
			"$toPlaceholder.width" => $result[\'width\'],
			"$toPlaceholder.height" => $result[\'height\']
		));
		$output = \'\';
	}
	if ($result[\'outputDims\']) {
		$output = "src=\\"{$result[\'src\']}\\"" . ($result[\'width\'] ? " width=\\"{$result[\'width\']}\\" height=\\"{$result[\'height\']}\\"" : \'\');
	}
}
else {
	$output = $result[\'src\'];
}

if ($debug && $result[\'success\']) {  // if debugging is on and createThumbnail was successful, log the debug info
	$pThumb->debugmsg(isset($pThumb->phpThumb->debugmessages) ? \':: Processed ::\' : ":: Loaded from cache: {$result[\'src\']}", true);
}

return $output;',
      'locked' => 0,
      'properties' => 'a:1:{s:5:"debug";a:7:{s:4:"name";s:5:"debug";s:4:"desc";s:22:"prop_pthumb.debug_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";s:18:"phpthumbof:default";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * pThumb
 * Copyright 2013-2014 Jason Grant
 *
 * Please see the GitHub page for documentation or to report bugs:
 * https://github.com/oo12/phpThumbOf
 *
 * Forked from phpThumbOf 1.4.0
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * pThumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * pThumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * phpThumbOf; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 */
/**
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var string $input
 * @var string|array $options
 *
 */

if (empty($input)) {  // Exit quietly if no file name given
	return;
}

$scriptProperties[\'debug\'] = isset($debug) ? $debug : false;


static $pt_settings = array();

if (empty($pt_settings)) {
	if (!$modx->loadClass(\'phpThumbOf\', MODX_CORE_PATH . \'components/phpthumbof/model/\', true, true)) {
		$modx->log(modX::LOG_LEVEL_ERROR, \'[pThumb] Could not load phpThumbOf class.\');
		return $input;
	}
}

$pThumb = new phpThumbOf($modx, $pt_settings, $scriptProperties);

$result = $pThumb->createThumbnail($input, $options);

if (!empty($toPlaceholder) || $result[\'outputDims\']) {
	if ($result[\'width\'] === \'\' && $result[\'file\'] && $dims = getimagesize($result[\'file\']) ) {
			$result[\'width\'] = $dims[0];
			$result[\'height\'] = $dims[1];
	}
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholders(array(
			$toPlaceholder => $result[\'src\'],
			"$toPlaceholder.width" => $result[\'width\'],
			"$toPlaceholder.height" => $result[\'height\']
		));
		$output = \'\';
	}
	if ($result[\'outputDims\']) {
		$output = "src=\\"{$result[\'src\']}\\"" . ($result[\'width\'] ? " width=\\"{$result[\'width\']}\\" height=\\"{$result[\'height\']}\\"" : \'\');
	}
}
else {
	$output = $result[\'src\'];
}

if ($debug && $result[\'success\']) {  // if debugging is on and createThumbnail was successful, log the debug info
	$pThumb->debugmsg(isset($pThumb->phpThumb->debugmessages) ? \':: Processed ::\' : ":: Loaded from cache: {$result[\'src\']}", true);
}

return $output;',
    ),
  ),
  '46a9dd70fdd58595117e0b8f909c6d8a' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbof.cache_path',
    ),
    'object' => 
    array (
      'key' => 'phpthumbof.cache_path',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbof',
      'area' => 'Cache [phpThumbOf]',
      'editedon' => NULL,
    ),
  ),
  '6b77318db5e97f1bc492ddc54f36d025' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbof.cache_url',
    ),
    'object' => 
    array (
      'key' => 'phpthumbof.cache_url',
      'value' => '',
      'xtype' => 'textfield',
      'namespace' => 'phpthumbof',
      'area' => 'Cache [common]',
      'editedon' => NULL,
    ),
  ),
  '6bcb9314275586f5a5a566a4b89f162f' => 
  array (
    'criteria' => 
    array (
      'key' => 'phpthumbof.postfix_property_hash',
    ),
    'object' => 
    array (
      'key' => 'phpthumbof.postfix_property_hash',
      'value' => '1',
      'xtype' => 'combo-boolean',
      'namespace' => 'phpthumbof',
      'area' => 'Cache [phpThumbOf]',
      'editedon' => NULL,
    ),
  ),
);