<?php
ob_start();
include plugin_dir_path(__FILE__) . 'views/plugin_compare_table.php';
$plugin_compare_table = ob_get_contents();
ob_end_clean();
$cminds_plugin_config = array(
	'plugin-is-pro'				 => FALSE,
	'plugin-is-addon'			 => FALSE,
	'plugin-has-addons'			 => TRUE,
	'plugin-version'			 => '1.2.6',
	'plugin-addons'        => array(
		array(
			'title' => 'Search and Replace Plugin',
			'description' => 'Search and replace words, phrases, and HTML within your website posts and pages.',
			'link' => 'https://wordpress.org/plugins/cm-on-demand-search-and-replace/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPOnDemandSearchandReplaceS.png',
		),
		array(
			'title' => 'Ad Changer Manager',
			'description' => 'Manage banner ad campaigns with the WordPress ad management plugin. Display ads via shortcodes or widgets and control how banners rotate.',
			'link' => 'https://wordpress.org/plugins/cm-ad-changer/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPAdManagerAndServerS.png',
		),
		array(
			'title' => 'FAQ Plugin',
			'description' => 'Create and manage a user-friendly FAQ section on your site with this FAQ plugin. Answer common questions and improve user experience.',
			'link' => 'https://wordpress.org/plugins/cm-faq/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPFAQS.png',
		),
		array(
			'title' => 'Custom Reports Plugin',
			'description' => 'Generate custom reports and get efficient analytics for your site with the custom reports plugin. Filter data and create tailored reports.',
			'link' => 'https://wordpress.org/plugins/cm-custom-reports/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPReportsS.png',
		),
		array(
			'title' => 'Email Blacklist Registration',
			'description' => 'Block unwanted email registrations on your site with this email blacklist plugin. Protect your site by preventing spam sign-ups.',
			'link' => 'https://wordpress.org/plugins/cm-email-blacklist/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPEmailDomainBlacklistS.png',
		),
		array(
			'title' => 'Table of Contents Plugin',
			'description' => 'Create and display a table of contents for your posts and pages. Improve navigation with an easy-to-use TOC generator.',
			'link' => 'https://wordpress.org/plugins/cm-table-of-content/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPTableOfContentS.png',
		),
	),
	'plugin-specials'        => array(
		array(
			'title' => 'Reviews and Rating Plugin',
			'description' => 'Allow visitors and users to submit reviews and ratings, and display them on any product, posts, or pages.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/customer-reviews-plugin-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPCustomerReviewsS.png',
		),
		array(
			'title' => 'Site Access and Content Restriction',
			'description' => 'A robust membership solution and content restriction plugin that supports role-based access to content on your WordPress website.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/membership-plugin-for-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPSiteRestrictionS.png',
		),
		array(
			'title' => 'Registration and Invitation Codes',
			'description' => 'Adds a registration and login popup to your WP site. Supports invitation codes, email verification and assign user roles.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/registration-and-invitation-codes-plugin-for-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPUserRegistrationAndInvitationCodesS.png',
		),
		array(
			'title' => 'Secure Login 2FA Authentication',
			'description' => 'Offers a robust solution for WordPress two-factor authentication and provide a better account security for your WordPress users.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/secure-login-two-factor-authentication-wordpress/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPSecureLoginAndTwoFactorS.png',
		),
		array(
			'title' => 'Questions and Answers Plugin',
			'description' => 'Experience a mobile-responsive discussion forum where members can post questions, answers, and comments, with integrated payment support.',
			'link' => 'https://www.cminds.com/cm-answer-store-page-content/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPQuestionsAndAnswersS.png',
		),
		array(
			'title' => 'RSS Post Importer Plugin',
			'description' => 'Support importing and displaying external posts using RSS, Atom feeds and scraping tool to your WordPress site.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/rss-post-importer-plugin-wordpress-creativeminds/?discount=CMINDS10',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPRSSPostImporterS.png',
		),
	),
	'plugin-bundles'        => array(
		array(
			'title' => '99+ Free Pass Plugins Suite',
			'description' => 'Get all CM 99+ WordPress plugins and addons. Includes unlimited updates and one year of priority support.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/cm-wordpress-plugins-yearly-membership/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundleWPSuiteS.png',
		),
		array(
			'title' => 'Essential Publishing Plugin Package',
			'description' => 'Enhance your WordPress publishing with a bundle of seven plugins that elevate content generation, presentation, and user engagement on your site.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/essential-wordpress-publishing-tools-bundle/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundlePublishingS.png',
		),
		array(
			'title' => 'Essential Content Marketing Tools',
			'description' => 'Enhance your WordPress content marketing with seven plugins for improved content generation, presentation, and user engagement.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/essential-wordpress-content-marketing-tools-bundle/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundleContentS.png',
		),
		array(
			'title' => 'Essential Security Plugins',
			'description' => 'Enhance your WordPress security with a bundle of five plugins that provide additional ways to protect your content and site from spammers, hackers, and exploiters.',
			'link' => 'https://www.cminds.com/wordpress-plugins-library/essential-wordpress-security-tools-plugin-bundle/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPBundleSecurityS.png',
		),
	),
	'plugin-services'        => array(
		array(
			'title' => 'WordPress Custom Hourly Support',
			'description' => 'Hire our expert WordPress developers on an hourly basis, offering a-la-carte service to craft your custom WordPress solution.',
			'link' => 'https://www.cminds.com/wordpress-services/wordpress-custom-hourly-support-package/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesHourlySupportS.png',
		),
		array(
			'title' => 'Performance and Optimization Analysis',
			'description' => 'Receive a comprehensive review of your WordPress website with optimization suggestions to enhance its speed and performance.',
			'link' => 'https://www.cminds.com/wordpress-services/wordpress-performance-and-speed-optimization-analysis-service/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesPerformanceS.png',
		),
		array(
			'title' => 'WordPress Plugin Installation',
			'description' => 'We offer professional installation and configuration of plugins or add-ons on your site, tailored to your specified requirements.',
			'link' => 'https://www.cminds.com/wordpress-services/plugin-installation-service-for-wordpress-by-creativeminds/',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesExtensionInstallationS.png',
		),
		array(
			'title' => 'WordPress Consulting',
			'description' => 'Purchase consulting hours to receive assistance in designing or planning your WordPress solution. Our expert consultants are here to help bring your vision to life.',
			'link' => 'https://www.cminds.com/wordpress-services/consulting-planning-hourly-support-service-wordpress-creativeminds/#description',
			'image' => plugin_dir_url( __FILE__ ) . 'views/icons/WPServicesConsultingS.png',
		),
	),
	'plugin-abbrev'				 => 'cmhandfsl',
	'plugin-file'				 => CMHeaderAndFooterSL::$plugin_file,
	'plugin-dir-path'			 => plugin_dir_path( CMHeaderAndFooterSL::$plugin_file ),
	'plugin-dir-url'			 => plugin_dir_url( CMHeaderAndFooterSL::$plugin_file ),
	'plugin-basename'			 => plugin_basename( CMHeaderAndFooterSL::$plugin_file ),
    'plugin-campign'             => '?utm_source=scriptloaderfree&utm_campaign=freeupgrade',
    'plugin-show-guide'                 => TRUE,
    'plugin-guide-text'                 => '    <div style="display:block">
        <ol>
         <li>Go to the plugin <strong>"Setting"</strong></li>
         <li>Add JavaScript or CSS code and choose if this will appear in the header or footer. </li>
         <li>You can also restrict if to choose this on pages or posts only</li>
        <li> You can add additional codes or pause specific code based on your needs.</li>
         </ol>
    </div>',
     'plugin-guide-video-height'         => 240,
     'plugin-guide-videos'               => array(
          array( 'title' => 'Installation tutorial', 'video_id' => '162714982' ),
     ),
    'plugin-upgrade-text'           => 'Good Reasons to Upgrade to Pro',
    'plugin-upgrade-text-list'      => array(
        array( 'title' => 'Support custom posts type', 'video_time' => 'More' ),
        array( 'title' => 'Target by post type', 'video_time' => 'More' ),
        array( 'title' => 'Manually approve each script and style', 'video_time' => 'More' ),
        array( 'title' => 'Ability to override default settings in each post', 'video_time' => 'More' ),
        array( 'title' => 'Load in header or in footer', 'video_time' => 'More' ),
        array( 'title' => 'Target script by specific URL', 'video_time' => 'More' ),
        array( 'title' => 'Set script for specific post', 'video_time' => 'More' ),
     ),
    'plugin-upgrade-video-height'   => 240,
    'plugin-upgrade-videos'         => array(
        array( 'title' => 'Script Loader Premium Features', 'video_id' => '141020978' ),
    ),
	'plugin-icon'				 => '',
    'plugin-affiliate'               => '',
    'plugin-redirect-after-install'  => admin_url( 'admin.php?page=cm-handfsl' ),
	'plugin-name'				 => CMHeaderAndFooterSL::$plugin_name,
	'plugin-license-name'		 => CMHeaderAndFooterSL::$plugin_name,
	'plugin-slug'				 => '',
	'plugin-short-slug'			 => 'ecommerce-tracking',
	'plugin-menu-item'			 => CMHeaderAndFooterSL::$plugin_slug,
	'plugin-textdomain'			 => CMHeaderAndFooterSL::$plugin_text_domain,
	'plugin-userguide-key'		 => '2727-header-and-footer-script-loader-free-version-tutorial',
	'plugin-video-tutorials-url'		 => 'https://www.videolessonsplugin.com/video-lesson/lesson/header-footer-script-loader-plugin/',
	'plugin-store-url'			 => 'https://www.cminds.com/wordpress-plugins-library/cm-header-and-footer-script-loader-plugin-for-wordpress?utm_source=scriptloaderfree&utm_campaign=freeupgrade&upgrade=1',
	'plugin-support-url'		 => 'https://www.cminds.com/contact/',
	'plugin-review-url'			 => 'https://www.cminds.com/wordpress-plugins-library/wordpress-header-and-footer-script-loader-plugin/#reviews',
	'plugin-changelog-url'		 => 'https://www.cminds.com/wordpress-plugins-library/cm-header-and-footer-script-loader-plugin-for-wordpress/#changelog',
	'plugin-licensing-aliases'	 => array(),
	'plugin-compare-table'	 => $plugin_compare_table,
);