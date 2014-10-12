<?php
	$items = $variables['items'];
?>
<div class="sp-twitter">
<?php foreach($items['tweets'] as $tweet):?>
<div class="twitterSearchesNTweet clearfix">
	<i class="icon-twitter left"></i>
	<div class="content">
		<span class="twitterSearchesNUser">
			<a target="_blank" href="http://www.twitter.com/<?php print $items['name'];?>" style="text-decoration: none;"><?php print $tweet->name;?></a>
		</span> 
		<span class="twitterSearchesNTime" style="font-size: smaller;">(<?php print $tweet->created;?>)</span>
		<div class="twitterSearchesNText">
			<?php print $tweet->text;?>xx
		</div>
		</div>
</div>
<?php endforeach;?>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.sp-twitter').bxSlider({
			mode: 'vertical',
			slideMargin: 5,
			pager: false,
			moveSlides: 1,
			auto: true,
			minSlides: 3,
			controls: false
		});
	})
</script>