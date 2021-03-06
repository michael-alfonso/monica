<?php
class FinalTilesLiteDB {
	
	private static $pInstance;
	
	private function __construct() {}
	
	public static function getInstance() 
	{
		if(!self::$pInstance) {
			self::$pInstance = new FinalTilesLiteDB();
		}
		
		return self::$pInstance;
	}
	
	public function query() 
	{
		return "Test";	
	}
	
	public function updateConfiguration()
	{
		global $wpdb;

		$galleries = $wpdb->get_results($wpdb->prepare("SELECT %s FROM $wpdb->FinalTilesGalleries", "*"));
		foreach($galleries as $gallery)
		{
			if(isset($gallery->configuration))
			{
				unset($gallery->configuration);
				$configuration = json_encode($gallery);				
				$wpdb->update($wpdb->FinalTilesGalleries, 
								array('configuration' => $configuration),
								array('Id' => $gallery->Id));
			}
		}
	}
	
	public function addGallery($data) 
	{
		global $wpdb;		  
		$configuration = json_encode($data);
		
		$data = array('configuration' => $configuration);
		$galleryAdded = $wpdb->insert( $wpdb->FinalTilesGalleries, $data);
		return $galleryAdded;
	}
	
	public function getNewGalleryId() 
	{
		global $wpdb;
		return $wpdb->insert_id;
	}
	
	public function deleteGallery($gid) 
	{
		global $wpdb;
		$wpdb->query($wpdb->prepare("DELETE FROM $wpdb->FinalTilesImages WHERE gid = %d", $gid));
		$wpdb->query( $wpdb->prepare("DELETE FROM $wpdb->FinalTilesGalleries WHERE Id = %d", $gid));
	}
	
	public function editGallery($gid, $data) 
	{
		global $wpdb;
		$configuration = json_encode($data);
		
		$g = $wpdb->update($wpdb->FinalTilesGalleries, 
						array('configuration' => $configuration),
						array('Id' => $gid));
						
		//exit( var_dump( $wpdb->last_query ) );
		return $g;
	}
	
	public function getGalleryById($id, $array=false) 
	{
		global $wpdb;
		$gallery = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->FinalTilesGalleries WHERE Id = %d", $id));

		if($array)
		{
			return get_object_vars(json_decode($gallery->configuration));
		}
			
		$data = json_decode($gallery->configuration);
		
		
		// compatibility checks
		
		
		if(empty($data->enableTwitter))
			$data->enableTwitter = 'F';
		if(empty($data->enableFacebook))
			$data->enableFacebook = 'F';
		if(empty($data->enableGplus))
			$data->enableGplus = 'F';
		if(empty($data->enablePinterest))
			$data->enablePinterest = 'F';
		if(empty($data->captionFrame))
			$data->captionFrame = "F";
		if(empty($data->hoverIconRotation))
			$data->hoverIconRotation = "F";
		if(empty($data->blank))
			$data->blank = "F";
		if(empty($data->aClass))
			$data->aClass = "";
		if(empty($data->rel))
			$data->rel = "";
		if(empty($data->style))
			$data->style = "";
		if(empty($data->script))
			$data->script = "";
		if(empty($data->loadingBarColor))
			$data->loadingBarColor = "#fff";
		if(empty($data->loadingBarBackgroundColor))
			$data->loadingBarBackgroundColor = "#fff";
		if(empty($data->backgroundColor))
			$data->backgroundColor = "#fff";
		
		if(empty($data->wp_field_caption))
			$data->wp_field_caption = "description";
		if(empty($data->captionBehavior))
			$data->captionBehavior = "hidden";
		
		if(empty($data->imageSizeFactor))
			$data->imageSizeFactor = 90;
		if(empty($data->imageSizeFactorTabletLandscape))
			$data->imageSizeFactorTabletLandscape = 80;
		if(empty($data->imageSizeFactorTabletPortrait))
			$data->imageSizeFactorTabletPortrait = 70;
		if(empty($data->imageSizeFactorPhoneLandscape))
			$data->imageSizeFactorPhoneLandscape = 60;
		if(empty($data->imageSizeFactorPhonePortrait))
			$data->imageSizeFactorPhonePortrait = 50;

		if(empty($data->compressHTML))
			$data->compressHTML = 'T';
		
		if(empty($data->sequentialImageLoading))
			$data->sequentialImageLoading = 'T';

		if(empty($data->delay))
			$data->delay = 0;


		if(empty($data->captionFullHeight))
			$data->captionFullHeight = "T";
		if(empty($data->captionEmpty))
			$data->captionEmpty = "hide";
		if(empty($data->captionEffect))
		//	$data->captionEffect = $gallery->hoverEffect;
		if(empty($data->captionBackgroundColor))
			$data->captionBackgroundColor = $gallery->hoverColor;
		if(empty($data->captionOpacity))
			$data->captionOpacity = 80;
		if(empty($data->captionEasing))
			//$data->captionEasing = $gallery->hoverEasing;
		if(empty($data->captionFrame))
			$data->captionFrame = "F";
		if(empty($data->captionFrameColor))
			$data->captionFrameColor = "#ffffff";
		if(empty($data->captionEffectDuration))
			$data->captionEffectDuration = $gallery->hoverEffectDuration;
		if(empty($data->hoverZoom))
			$data->hoverZoom = 100;
		if(empty($data->hoverRotation))
			$data->hoverRotation = 0;
		if(empty($data->socialIconColor))
			$data->socialIconColor = '#ffffff';
		if(empty($data->captionIconSize))
			$data->captionIconSize = 12;
		if(empty($data->captionFontSize))
			$data->captionFontSize = 12;
        if(empty($data->source))
			$data->source = 'images';
		if(empty($data->recentPostsCaption))
			$data->recentPostsCaption = 'title';
		if(empty($data->recentPostsCaptionAutoExcerptLength))
			$data->recentPostsCaptionAutoExcerptLength = 20;
		if(empty($data->captionMobileBehavior))
			$data->captionMobileBehavior = "desktop";
		if(empty($data->imagesOrder))
			$data->imagesOrder = "user";
		if(empty($data->beforeGalleryText))
			$data->beforeGalleryText = "";
		if(empty($data->afterGalleryText))
			$data->afterGalleryText = "";
		if(empty($data->imagesOrder) && !empty($data->shuffle))
			$data->imagesOrder = $data->shuffle == 'T' ? "random" : "user";
		if(empty($data->support))
			$data->support = 'F';
		if(empty($data->supportText))
			$data->supportText = 'Powered by Final Tiles Grid Gallery';
		if(empty($data->envatoReferral))
			$data->envatoReferral = "GreenTreeLabs";
		
        $easings = array("ease", "linear", "ease-in", "ease-out", "ease-in-out");
        if(! in_array($data->captionEasing, $easings))
            $data->captionEasing = "linear";

		return $data;
	}
	
	public function getGalleries() 
	{
		global $wpdb;
		$query = "SELECT Id, configuration FROM $wpdb->FinalTilesGalleries order by id";
		$galleryResults = $wpdb->get_results($query);
		
		$result = array();
		foreach($galleryResults as $gallery)
		{
			$data = json_decode($gallery->configuration);
			$data->Id = $gallery->Id;
			$result[] = $data;
		}
		return $result;
	}
	
	public function addVideo($data) 
	{
		global $wpdb;		
		$videoAdded = $wpdb->insert( $wpdb->FinalTilesImages,
		        array( 'gid' => $data['gid'], 'imagePath' => $data['imagePath'], 'type' => 'video', 'sortOrder' => 0, 'imageId' => rand(100000, 1000000) ));
		$id = $wpdb->insert_id;
        $wpdb->update($wpdb->FinalTilesImages, array('sortOrder' => $id), array('id' => $id));
		return $videoAdded;
	}
	
	public function editVideo($id, $data)
	{
		global $wpdb;
		$result = $wpdb->update( $wpdb->FinalTilesImages, $data, array( 'Id' => $id ) );
		return $result;
	}

	public function addImages($gid, $images) 
	{
		global $wpdb;		

		foreach ($images as $image) {
			$data = array( 'gid' => $gid, 'imagePath' => $image->imagePath, 
     					 'description' => isset($image->description) ? $image->description : "", 
					'imageId' => $image->imageId, 'sortOrder' => 0 );
			$data['type'] = isset($image->type) ? $image->type : 'image';
			
				
			$imageAdded = $wpdb->insert( $wpdb->FinalTilesImages, $data );
			$id = $wpdb->insert_id;
			$wpdb->update($wpdb->FinalTilesImages, array('sortOrder' => $id), array('id' => $id));
		}
		
		return true;
	}
	
	public function addFullImage($data) {
		global $wpdb;		
		$imageAdded = $wpdb->insert( $wpdb->FinalTilesImages, $data );
		return $imageAdded;
	}
	
	public function deleteImage($id) {
		global $wpdb;
		if($wpdb->query($wpdb->prepare("DELETE FROM $wpdb->FinalTilesImages WHERE Id = %d", $id)) === FALSE) {
			return false;
		}
		else {
			return true;
		}
	}
	
	public function editImage($id, $data) 
	{
		global $wpdb;
		$imageEdited = $wpdb->update( $wpdb->FinalTilesImages, $data, array( 'Id' => $id ) );
		return $imageEdited;
	}

	public function sortImages($ids) 
	{
		global $wpdb;
		$index = 1;
		foreach($ids as $id) 
		{
			$data = array('sortOrder' => $index++);
			$wpdb->update( $wpdb->FinalTilesImages, $data, array( 'Id' => $id ) );
		}
		return true;
	}
	
	public function getImagesByGalleryId($gid) 
	{
		global $wpdb;
		$imageResults = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->FinalTilesImages WHERE gid = %d ORDER BY sortOrder ASC", $gid) );

		foreach($imageResults as &$image)
			$image->source = "gallery";
		
		return $imageResults;
	}
	
	public function getGalleryByGalleryId($gid) {
		global $wpdb;
		$gallery = $wpdb->get_results( $wpdb->prepare("SELECT $wpdb->FinalTilesGalleries.*, $wpdb->FinalTilesImages.* FROM $wpdb->FinalTilesGalleries INNER JOIN $wpdb->FinalTilesImages ON ($wpdb->FinalTilesGalleries.Id = $wpdb->FinalTilesImages.gid) WHERE $wpdb->FinalTilesGalleries.Id = %d ORDER BY sortOrder ASC", $gid) );		
		return $gallery;
	}
}
?>