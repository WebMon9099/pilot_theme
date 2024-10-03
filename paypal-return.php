<?php
// @codingStandardsIgnoreFile
if(!defined('WPINC')) // MUST have WordPress.
	exit("Do not access this file directly.");
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
<link rel="stylesheet" id="twentysixteen-style-css" href="/wp-content/themes/twentysixteen/auto-return-style.css" type="text/css" media="all">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3793d1">
	<meta name="msapplication-TileColor" content="#3793d1">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#3999db" >
	
</head>

<!-- Note. The DOCTYPE and HEAD Replacement Code can be removed if you would rather build your own. -->
<!-- Note. It is OK to use PHP code inside this template file (when/if needed). -->
	<body class="s2member-return-body s2member-default-return-body">

		<!-- Header Section (contains information and possible custom code from the originating site/domain). -->

		<!-- Response Section (this is auto-filled by s2Member, based on what action has taken place). -->
		<!-- Although NOT recommended, you can remove the response Replacement Code and build your own message if you prefer. -->
		<!-- It is NOT recommended, because the dynamic response message may vary, depending on what action has taken place. -->
		<div id="s2member-default-return-response-section" class="s2member-return-section s2member-return-response-section s2member-default-return-response-section">
			<div id="s2member-default-return-response-div" class="s2member-return-div s2member-return-response-div s2member-default-return-response-div">
				%%response%% <!-- (this is auto-filled by s2Member, based on what action has taken place). -->
				<div id="s2member-default-return-continue" class="s2member-return-continue s2member-default-return-continue">
					%%continue%% <!-- (auto-filled by s2Member, based on what action has taken place). -->
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>

		<!-- Support Section (contains information about how a Customer can contact support). -->
		<div id="s2member-default-return-support-section" class="s2member-return-section s2member-return-support-section s2member-default-return-support-section">
			<div id="s2member-default-return-support-div" class="s2member-return-div s2member-return-support-div s2member-default-return-support-div">
				<table>
<tbody><tr>
<td bgcolor="#fff" style="font-size: 13px;color: #aaa;font-family: arial; font-weight: bold; padding-top: 17px;padding-left: 0;padding-bottom: 9px;">Contact us by: 
<a href="#" target="_blank" style="font-family: Helvetica, Arial, sans-serif;font-size: 13px; color: #666666;text-decoration: none;font-weight:bold;display: inline-block;">Email</a> |
<a href="#" target="_blank" style="font-family: Helvetica, Arial, sans-serif;font-size: 13px; color: #3793d1;text-decoration: none;font-weight:bold;display: inline-block;">Facebook Chat</a> |
<a href="#" target="_blank" style="font-family: Helvetica, Arial, sans-serif;font-size: 13px; color: #70cd28;text-decoration: none;font-weight:bold;display: inline-block;">WhatsApp</a>
</td>
</tr>      
</tbody></table>
			</div>
			<div style="clear:both;"></div>
		</div>

		%%tracking%% <!-- (this is auto-filled, supports tracking codes integrated w/ s2Member). -->

	</body>
</html>
