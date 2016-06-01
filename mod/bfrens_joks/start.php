<?php


 
function bfrens_joks_init() {

elgg_extend_view('css/elgg', 'bfrens_joks_css');


	$action_path = elgg_get_plugins_path() . 'bfrens_joks/actions/joks';
	elgg_register_action("joks/upload", "$action_path/upload.php");	
	
	elgg_register_page_handler('joks', 'joks_page_handler');
	
	elgg_register_entity_type('object', 'joks');
	
	elgg_extend_view('extensions/item', 'joks/enclosure');
	
	elgg_register_entity_url_handler('object', 'joks', 'joks_url_override');
	elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'joks_icon_url_override');

}


function joks_page_handler($page) {

	if (!isset($page[0])) {
		return false;
	}

	$file_dir = elgg_get_plugins_path() . 'bfrens_joks/pages/joks';

	$page_type = $page[0];
	switch ($page_type) {

		case 'add':
			include "$file_dir/upload.php";
			break;
		case 'view':
			set_input('guid', $page[1]);
			include "$file_dir/view.php";
			break;
		default:
			return false;
	}
	return true;
}


function joks_url_override($entity) {
	$title = $entity->title;
	$title = elgg_get_friendly_title($title);
	return "joks/view/" . $entity->getGUID() . "/" . $title;
}

/**
 * Override the default entity icon for files
 *
 * Plugins can override or extend the icons using the plugin hook: 'file:icon:url', 'override'
 *
 * @return string Relative URL
 */
function joks_icon_url_override($hook, $type, $returnvalue, $params) {
	$file = $params['entity'];
	$size = $params['size'];
	if (elgg_instanceof($file, 'object', 'joks')) {

		// thumbnails get first priority
		if ($file->thumbnail) {
			$ts = (int)$file->icontime;
			return "mod/bfrens_joks/thumbnail.php?file_guid=$file->guid&size=$size&icontime=$ts";
		}

		$mapping = array(
			'application/excel' => 'excel',
			'application/msword' => 'word',
			'application/ogg' => 'music',
			'application/pdf' => 'pdf',
			'application/powerpoint' => 'ppt',
			'application/vnd.ms-excel' => 'excel',
			'application/vnd.ms-powerpoint' => 'ppt',
			'application/vnd.oasis.opendocument.text' => 'openoffice',
			'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'word',
			'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'excel',
			'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'ppt',
			'application/x-gzip' => 'archive',
			'application/x-rar-compressed' => 'archive',
			'application/x-stuffit' => 'archive',
			'application/zip' => 'archive',

			'text/directory' => 'vcard',
			'text/v-card' => 'vcard',

			'application' => 'application',
			'audio' => 'music',
			'text' => 'text',
			'video' => 'video',
		);

		$mime = $file->mimetype;
		if ($mime) {
			$base_type = substr($mime, 0, strpos($mime, '/'));
		} else {
			$mime = 'none';
			$base_type = 'none';
		}

		if (isset($mapping[$mime])) {
			$type = $mapping[$mime];
		} elseif (isset($mapping[$base_type])) {
			$type = $mapping[$base_type];
		} else {
			$type = 'general';
		}

		if ($size == 'large') {
			$ext = '_lrg';
		} else {
			$ext = '';
		}
		
		$url = "mod/file/graphics/icons/{$type}{$ext}.gif";
		$url = elgg_trigger_plugin_hook('file:icon:url', 'override', $params, $url);
		return $url;
	}
}



// register for the init, system event when our plugin start.php is loaded
register_elgg_event_handler('init', 'system', 'bfrens_joks_init');

?>