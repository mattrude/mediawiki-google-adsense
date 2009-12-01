<?php

if( !defined( 'MEDIAWIKI' ) ) {
	echo( 'This file is an extension to the MediaWiki software and cannot be used standalone' );
	die( 1 );
}

function GoogleAdSenseInHeader() {
		?><!-- Google AdSense -->
		<link rel="stylesheet" href="<?php $IP ?>/extensions/GoogleAdSense-header/GoogleAdSense.css">
		<div id="column-google" style="text-align: center;">
		
		<script type="text/javascript"><!--
		google_ad_client = "pub-4278475968017396";
		/* 728x90, created 11/7/09 */
		google_ad_slot = "9195329739";
		google_ad_width = 728;
		google_ad_height = 90;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
		</div>
		<!-- end of Google Adsense --><?php
		$vars = 'true';
}

$wgHooks['SkinTemplateNavigation'][] = GoogleAdSenseInHeader();

?>
