<?php
if (!defined('MEDIAWIKI')) die();
/**
 * Class file for the GoogleAdSense extension
 *
 * @addtogroup Extensions
 * @author Siebrand Mazeland
 * @license MIT
 */
class GoogleAdSense {
	static function GoogleAdSenseInSidebar( $skin, &$bar ) {
		global $wgGoogleAdSenseWidth, $wgGoogleAdSenseID,
			$wgGoogleAdSenseHeight, $wgGoogleAdSenseClient,
			$wgGoogleAdSenseSlot, $wgGoogleAdSenseSrc,
			$wgGoogleAdSenseAnonOnly, $wgUser;


		// Return $bar unchanged if not all values have been set.
		// FIXME: signal incorrect configuration nicely?
		if( $wgGoogleAdSenseClient == 'none' || $wgGoogleAdSenseSlot == 'none' || $wgGoogleAdSenseID == 'none' )
			return $bar;

		if( $wgUser->isLoggedIn() && $wgGoogleAdSenseAnonOnly ) {
			return $bar;
		}
		if( !$wgGoogleAdSenseSrc ) {
			return $bar;
		}

		wfLoadExtensionMessages( 'GoogleAdSense' );
		$bar['googleadsense'] = "<script type='text/javascript'><!--
google_ad_client = 'ca-pub-4278475968017396';
/* WIKI-Sidebar */
google_ad_slot = '2608059619';
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type='text/javascript'
src='http://pagead2.googlesyndication.com/pagead/show_ads.js'>
</script>";
		return true;
	}

/* Not working yet. Need to find out why...
	static function injectCSS( $out ) {

		global $wgUser, $wgGoogleAdSenseAnonOnly, $wgGoogleAdSenseCssLocation;
		
		if( $wgUser->isLoggedIn() && $wgGoogleAdSenseAnonOnly ) {
			return true;
		}
		
		$out->addLink(
			array(
				'rel' => 'stylesheet',
				'type' => 'text/css',
				'href' => $wgGoogleAdSenseCssLocation . '/GoogleAdSense.css',
			)
		);
		return true;
	}
*/
}
