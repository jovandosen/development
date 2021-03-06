<?php

class ForwardslashRealEstateAppAssets
{
	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'loadAssets'));
		add_action('admin_enqueue_scripts', array($this, 'loadAdminAssets'));
		add_action('wp_ajax_real_estate', array($this, 'updateRealEstateWithAjax'));
	}

	public function loadAssets()
	{
		wp_register_script('js', plugins_url('/forwardslash-real-estate-app/assets/js/app.js'), array('jquery'),'1.1', true);
		wp_enqueue_script('js');

		wp_register_style('css', plugins_url('/forwardslash-real-estate-app/assets/css/app.css'));
		wp_enqueue_style('css');

		$real_estate_nonce = wp_create_nonce( 'real_estate_nonce' );

	    wp_localize_script( 'js', 'real_estate_obj', array(
	       'ajax_url' => admin_url( 'admin-ajax.php' ),
	       'nonce'    => $real_estate_nonce,
	    ) );

	}

	public function loadAdminAssets()
	{
		wp_register_script('adminjs', plugins_url('/forwardslash-real-estate-app/assets/js/real-estate-admin.js'), array('jquery'),'1.1', true);
		wp_enqueue_script('adminjs');
	}

	public function updateRealEstateWithAjax()
	{
		check_ajax_referer( 'real_estate_nonce' );

  		$recordData = [];

  		parse_str($_POST['details'], $recordData);

  		$recordSubtitle = $recordData['subtitle'];

  		$recordTitle = $recordData['title'];

  		$recordID = $recordData['recordID'];

  		$recordLocation = (int) $recordData['location'];

  		$recordType = (int) $recordData['type'];

  		$record = array(
      		'ID'           => $recordID,
      		'post_title'   => $recordTitle,
  		);

  		$result = wp_update_post($record);

  		$recordLocationResult = wp_set_object_terms($recordID, $recordLocation, 'location');

  		$recordTypeResult = wp_set_object_terms($recordID, $recordType, 'type');

  		$recordSubtitleResult = update_field('real_estate_subtitle', $recordSubtitle, $recordID);

  		if($result || $recordLocationResult || $recordTypeResult || $recordSubtitleResult){

  			$newData = new stdClass();

  			$newData->titleValue = $recordTitle;
  			$newData->subtitleValue = $recordSubtitle;
  			$newData->status = "success";

  			$jsonData = json_encode($newData);
  			
  			echo $jsonData;
  		}

		wp_die();
	}
}

?>