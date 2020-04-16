<?php 
if(isset($params['post']->postbackground_type) && !empty($params['post']->postbackground_type) && strlen($params['text']) <= 125){
		$id = str_replace('pbg', '', $params['post']->postbackground_type);
		$url = ossn_site_url("components/PostBackground/images/{$id}.jpg");
?>
<script>
	$(document).ready(function(){
			$element = $('#activity-item-<?php echo $params['post']->guid;?>');						   
			if($element.length){
					if($element.find('p:first').length){
						$element.find('p:first').addClass('postbg-container');
						$element.find('p:first').addClass('postbg-text');
						
						$element.find('p:first').css({
							'background': 'url("<?php echo $url;?>")',
							'background-position': 'center',
							'background-size': 'cover',
						});				

					}
			}
	});
</script>
<?php } 
