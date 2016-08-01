<?php

/**
 * Class GridGallery_SocialSharing_Module for work with social share plugin
 */
class GridGallery_SocialSharing_Module extends GridGallery_Core_Module{

	public function onInit()
	{
		parent::onInit();
		add_action('sgg_disable_social_sharing',array($this,'disableSocialSharing'),10,1);
		add_action('sgg_clean_cache',array($this,'cleanSocialSharingCache'),10,1);
		add_action('parse_request', array($this, 'onRequest'));
	}


	public function cleanSocialSharingCache($projectId){
		/**
		 * @var GridGallery_Galleries_Module $galleryModule
		 * @var GridGallery_Galleries_Model_Galleries $galleryModel
		 * @var GridGallery_Galleries_Model_Settings $settingsModel
		 */
		$galleryModule = $this->getEnvironment()->getModule('galleries');
		$galleryModel = $galleryModule->getModel('galleries');
		$settingsModel = $galleryModule->getModel('settings');

		$galleriesList = $galleryModel->getList();
		foreach($galleriesList as $gallery){
			$settings = $settingsModel->get($gallery->id);
			if($settings->data['socialSharing']['projectId'] == $projectId){
				$galleryModule->cleanCache($gallery->id);
			}
		}
	}

	/**
	 * disable social sharing in gallery if project setting "where_to_show" where changed from
	 * "grid_gallery" to something else
	 * @param int $projectId id of social sharing project
  	*/
	public function disableSocialSharing($projectId){
		/**
		 * @var GridGallery_Galleries_Module $galleryModule
		 * @var GridGallery_Galleries_Model_Galleries $galleryModel
		 * @var GridGallery_Galleries_Model_Settings $settingsModel
		 */
		$galleryModule = $this->getEnvironment()->getModule('galleries');
		$galleryModel = $galleryModule->getModel('galleries');
		$settingsModel = $galleryModule->getModel('settings');

		$galleriesList = $galleryModel->getList();
		foreach($galleriesList as $gallery){
			$settings = $settingsModel->get($gallery->id);
			if($settings->data['socialSharing']['projectId'] == $projectId){
				$settings->data['socialSharing']['enabled'] = false;
				$settingsModel->save($gallery->id,$settings->data);
				$galleryModule->cleanCache($gallery->id);
			}
		}
	}

	public function onRequest(){

		$request = urldecode($_SERVER["REQUEST_URI"]);
		preg_match('/sgg_share_\d+_\d+/', $request, $matches);
		if(!empty($matches)){
			preg_match_all('/\d+/', $request, $matches);
			$galleryId = $matches[0][0];
			$photoId = $matches[0][1];

			/**
			 * @var GridGallery_Photos_Model_Photos $photoModel
			 */
			$photoModel = new GridGallery_Photos_Model_Photos();
			$photoData = $photoModel->getById($photoId);
//			$thumb_url = wp_get_attachment_thumb_url($photoData->attachment_id);
			$back_url = substr($request,strpos($request,'[') + 1,strpos($request,']') - strpos($request,'[') -1);
			$back_url = str_replace('(_)','?',$back_url);
			$back_url = str_replace('(*)','=',$back_url);
//			$back_url.="#gg-".$galleryId."-".$photoId;
			$this->getEnvironment()->getTwig()->clearCacheFiles();
			$this->getEnvironment()->getTwig()->clearTemplateCache();
			echo $this->getEnvironment()->getTwig()->render(
				'@socialsharing/shareImage.twig',
				array(
					'curr_url' => "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
					'title' => $photoData->attachment['title'],
					'description' => $photoData->attachment['description'],
					'img_url' => $photoData->attachment['url'],
//					'thumb_url' => $thumb_url,
					'back_url' => $back_url,
				)
			);
			die();
		}
	}
}