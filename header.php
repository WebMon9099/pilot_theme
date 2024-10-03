<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

	global $wpdb;
	$assessors_table = DB_PREFIX . 'assessors';
	$all_data = $wpdb->get_results(
		"SELECT * 
		FROM $assessors_table"
	);
	global $origin_preparations;
	$origin_preparations = array();
	$origin_preparations = [
		[
			"name" => "Aegean Airlines",
			"link" => "/aegean-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Aer Lingus",
			"link" => "/aer-lingus",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Aer Lingus Future Pilot Programme",
			"link" => "/aer-lingus-future-pilot-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Aerologic",
			"link" => "/aerologic",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Aeromexico",
			"link" => "/aeromexico",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Aeromexico Cadet Program",
			"link" => "/aeromexico-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Arabia",
			"link" => "/air-arabia",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Arabia Cadet Pilot",
			"link" => "/air-arabia-cadet-pilot",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Asia",
			"link" => "/air-asia",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Astana",
			"link" => "/air-astana",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Atlanta Icelandic",
			"link" => "/air-atlanta-icelandic",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Cairo",
			"link" => "/air-cairo",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Caraibes",
			"link" => "/air-caraibes",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air Dolomiti",
			"link" => "/air-dolomiti",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air India Cadet Program",
			"link" => "/air-india-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air India Express",
			"link" => "/air-india-express",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Air New Zealand",
			"link" => "/air-new-zealand",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "airBaltic",
			"link" => "/airbaltic",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "AirBlue",
			"link" => "/airblue",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Airways Aviation",
			"link" => "/airways-aviation",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Alpha Aviation Group",
			"link" => "/alpha-aviation-group",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "American Airlines",
			"link" => "/american-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "American Airlines Cadet Academy",
			"link" => "/american-airlines-cadet-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "ANA All Nippon Airways",
			"link" => "/ana-all-nippon-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Arajet",
			"link" => "/arajet",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Ascension Academy with Air Transat",
			"link" => "/air-transat-ascension-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "ASL Airlines",
			"link" => "/asl-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "ATP Flight School",
			"link" => "/atp-flight-school",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Austrian Airlines",
			"link" => "/austrian-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Avion Express",
			"link" => "/avion-express",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Avion Express Cadet Program",
			"link" => "/avion-express-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "BAA Training Aviation Academy",
			"link" => "/baa-training-aviation-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "British Airways",
			"link" => "/british-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "British Airways NQPP",
			"link" => "/british-airways-newly-qualified-pilot-pathway",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "British Airways Whitetail",
			"link" => "/british-airways-whitetail",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "British Airways Speedbird Pilot Academy",
			"link" => "/british-airways-speedbird-pilot-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Brussels Airlines",
			"link" => "/brussels-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "CAE Oxford Aviation Academy",
			"link" => "/cae-oxford-aviation-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Cathay Pacific",
			"link" => "/cathay-pacific",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Cathay Pacific Cadet Pilot Program",
			"link" => "/cathay-pacific-cadet-pilot-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Cebu Pacific",
			"link" => "/cebu-pacific",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "China Airlines",
			"link" => "/china-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "CityJet",
			"link" => "/cityjet",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Copa Airlines",
			"link" => "/copa-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "DAT (Danish Air Transport)",
			"link" => "/dat-danish-air-transport",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Delta Air Lines",
			"link" => "/delta-air-lines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Delta Air Lines Propel",
			"link" => "/delta-air-lines-propel",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "DHL UK (and DHL Bahrain)",
			"link" => "/dhl",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "easyJet",
			"link" => "/easyjet",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Edelweiss Air",
			"link" => "/edelweiss-air",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Egnatia Aviation",
			"link" => "/egnatia-aviation",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Emirates",
			"link" => "/emirates",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "EPST",
			"link" => "/epst",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Etihad Airways",
			"link" => "/etihad-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "EVA Air",
			"link" => "/eva-air",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Frontier Airlines F9 Pilot Cadet Program",
			"link" => "/frontier-airlines-f9-pilot-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Finnair",
			"link" => "/finnair",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Flight One",
			"link" => "/flight-one",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Flight Training Adelaide",
			"link" => "/flight-training-adelaide",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "flyadeal Cadet Pilot Programme",
			"link" => "/flyadeal-cadet-pilot-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "FlyDubai",
			"link" => "/flydubai",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "FTE Jerez",
			"link" => "/fte-jerez",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Garuda",
			"link" => "/garuda",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Generation easyJet Pilot Training Program",
			"link" => "/generation-easyjet-pilot-training-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Global Aviation S.A.",
			"link" => "/global-aviation-s-a",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Greater Bay Airlines",
			"link" => "/greater-bay-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Helvetic Airways Airline Pilot Cadet Program",
			"link" => "/helvetic-airways-airline-pilot-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Heston Airlines",
			"link" => "/heston-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "HK Express",
			"link" => "/hk-express",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Hong Kong Airlines",
			"link" => "/hong-kong-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Iberia",
			"link" => "/iberia",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "IndiGo",
			"link" => "/indigo",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "IndiGo Cadet Pilot Programme",
			"link" => "/indigo-cadet-pilot-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Jazz Approach",
			"link" => "/air-canada-jazz-approach",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Jet Airways",
			"link" => "/jet-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Jet2",
			"link" => "/jet2",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "JetBlue",
			"link" => "/jetblue",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "JetBlue Gateway Select",
			"link" => "/jetblue-gateway-select",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Jetstar Asia",
			"link" => "/jetstar-asia",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Jetstar Cadet Pilot Program",
			"link" => "/jetstar-cadet-pilot-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Kalitta Air",
			"link" => "/kalitta-air",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "KLM Flight Academy",
			"link" => "/klm-flight-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "KLM Royal Dutch Airlines",
			"link" => "/klm-royal-dutch-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Kuwait Airways Cadet Training Programme",
			"link" => "/kuwait-airways-cadet-training-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "L3Harris Airline Academy",
			"link" => "/l3-harris-airline-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Leading Edge",
			"link" => "/leading-edge",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "LOT Polish Airlines",
			"link" => "/lot-polish-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Lufthansa",
			"link" => "/lufthansa",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Luxair",
			"link" => "/luxair",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Malaysia Airlines",
			"link" => "/malaysia-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "NetJets",
			"link" => "/netjets",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Norse Atlantic Airways",
			"link" => "/norse-atlantic-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Norwegian Air Shuttle",
			"link" => "/norwegian-air-shuttle",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "OSM Aviation Academy",
			"link" => "/osm-aviation-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Pilot Flight Academy",
			"link" => "/pilot-flight-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Qantas",
			"link" => "/qantas",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Qatar Airways",
			"link" => "/qatar-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Royal Brunei Airlines",
			"link" => "/royal-brunei-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Royal Brunei Airlines Cadet Pilot Programme",
			"link" => "/royal-brunei-airlines-cadet-pilot-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Ryanair",
			"link" => "/preparation-low-cost-carriers",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SAS Connect",
			"link" => "/sas-connect",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SAS Link",
			"link" => "/sas-link",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SAS Scandinavian Airlines",
			"link" => "/sas-scandinavian-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Scoot Airlines",
			"link" => "/scoot-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Singapore Airlines",
			"link" => "/singapore-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Singapore Airlines Cadet Pilot Program",
			"link" => "/singapore-airlines-cadet-pilot-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Skyborne Airline Academy",
			"link" => "/skyborne-airline-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SmartLynx",
			"link" => "/smartlynx",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SmartLynx Cadet Program",
			"link" => "/smartlynx-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SmartWings (Travel Service)",
			"link" => "/smartwings-travel-service",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Southwest Airlines",
			"link" => "/southwest-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Southwest Airlines Destination 225°® Cadet Pathway",
			"link" => "/southwest-airlines-destination-225-cadet-pathway",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SpiceJet",
			"link" => "/spicejet",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Spirit Wings Pilot Pathway Program",
			"link" => "/spirit-wings-pilot-pathway-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SriLankan Airlines",
			"link" => "/srilankan-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SunExpress",
			"link" => "/sunexpress",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "SWISS (Swiss International Air Lines)",
			"link" => "/swiss-swiss-international-air-lines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "TAP Air Portugal",
			"link" => "/tap-air-portugal",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Thai Airways",
			"link" => "/thai-airways",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Titan Airways Sponsored Cadet Programme",
			"link" => "/titan-airways-sponsored-cadet-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Transavia",
			"link" => "/transavia",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Tréner Flight Academy",
			"link" => "/trener-flight-academy",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "TUI Airways UK Cadet Pilot Programme",
			"link" => "/tui-airways-uk-cadet-pilot-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "TUI Belgium MPL Cadet Program",
			"link" => "/tui-belgium-mpl-cadet-program",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "TUI Fly",
			"link" => "/tui-fly",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "TUI UK",
			"link" => "/tui-uk",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Turkish Airlines",
			"link" => "/turkish-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "United Airlines",
			"link" => "/united-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Vietnam Airlines",
			"link" => "/vietnam-airlines",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Virgin Atlantic",
			"link" => "/virgin-atlantic",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Virgin Atlantic Future Flyer Programme",
			"link" => "/virgin-atlantic-future-flyer-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Virgin Australia",
			"link" => "/virgin-australia",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Vistara",
			"link" => "/vistara",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Volotea",
			"link" => "/volotea",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Volotea MPL Career Programme",
			"link" => "/volotea-mpl-career-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Vueling",
			"link" => "/vueling",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Vueling Cadet Pilot Programme",
			"link" => "/vueling-cadet-pilot-programme",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Wizz Air",
			"link" => "/wizz-air",
			"img_src" => '',
			'desc' => ''
		],
		[
			"name" => "Wizz Air Pilot Academy",
			"link" => "/wizz-air-pilot-academy",
			"img_src" => '',
			'desc' => ''
		],
	];
	
	// foreach($all_data as $item){
	// 	$link = array();
	// 	foreach(explode(' ', $item->name) as $sep_item){
	// 		$link[] = strtolower($sep_item);
	// 	};
	// 	$origin_preparations[] = [
	// 		"name" => $item->name,
	// 		"link" => "/". implode('-', $link),
	// 		"img_src" => $item->image,
	// 		'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non sapien in metus luctus pharetra. Aliquam erat volutpat. Ut nec venenatis turpis. Duis vestibulum, est nec pulvinar condimentum, lacus sapien cursus lacus, at tempus est purus at magna. Aenean tincidunt varius erat, at scelerisque metus suscipit nec. Nullam fringilla, velit eu bibendum tristique, sapien augue elementum nulla, sit amet condimentum magna libero sit amet ante. Suspendisse potenti. Maecenas ac bibendum orci. Vivamus eget turpis nisl. Sed in eros arcu. Nam malesuada, arcu non bibendum pretium, odio sapien fermentum magna, in dignissim arcu sapien eu orci.'
	// 	];
	// }

	$features = [
		[
			"name" => "99+ Activities",
			"link" => "/features#activities",
			"img_src" => "/parts/features/finding_activities.svg",
			'desc' => 'Access nearly one-hundred activities, developed to provide exacting preparation for your assessment.'
		],
		[
			"name" => "Explainer Videos",
			"link" => "/features#explainer-videos",
			"img_src" => "/parts/features/explainer_video.svg",
			'desc' => 'Watch narrated videos that provide in-depth instruction and explanation on how to use each activity.'
		],
		[
			"name" => "USB Joystick Compatibility",
			"link" => "/features#joystick-compatibility",
			"img_src" => "/parts/features/joystick_compatibility.svg",
			'desc' => 'Start using your joystick on PC or Mac immediately with our easy plug-and-play functionality.'
		],
		[
			"name" => "Visual Walkthroughs",
			"link" => "/features#visual-walkthroughs",
			"img_src" => "/parts/features/visual_walkthroughs.svg",
			'desc' => 'Gain an understanding of each activity in a different way, using our unique Visual Walkthroughs.'
		],
		[
			"name" => "Multi-Device Usability",
			"link" => "/features#device-usability",
			"img_src" => "/parts/features/preparing_devices.svg",
			'desc' => 'Take your preparation anywhere, and use our software on PC, Mac, iPad, iPhone and Android.'
		],
		[
			"name" => "Target-Setting",
			"link" => "/features#target-setting",
			"img_src" => "/parts/features/achieving_targets.svg",
			'desc' => 'Set Targets, or have the CoPilot Wizard create them for you, giving you realistic goals to achieve.'
		],
		[
			"name" => "Standardised Scoring",
			"link" => "/features/overall_scoring.svg",
			"img_src" => "/parts/features/overall_scoring.svg",
			'desc' => 'Benefit from standardisation of scoring within activities, providing easier-to-understand feedback.'
		],
		[
			"name" => "Customised Prep Strategies",
			"link" => "/features#preparation-strategies",
			"img_src" => "/parts/features/tailored_strategy.svg",
			'desc' => 'Use the CoPilot Wizard to create a Preparation Strategy tailored to you and your assessment.'
		],
		[
			"name" => "Flaggable Questions",
			"link" => "/features#flaggable-questions",
			"img_src" => "/parts/features/flagged_ques.svg",
			'desc' => 'Flag challenging questions within our theoretical activities, to revisit them at a later date.'
		],
		[
			"name" => "Customisable Exams",
			"link" => "/features#customisable-exams",
			"img_src" => "/parts/features/customisation_mode.svg",
			'desc' => 'Customise the duration, quantity of questions and subject areas assessed within theoretical exams.'
		],
		[
			"name" => "Predictive Scoring",
			"link" => "/features#predictive-scoring",
			"img_src" => "/parts/features/predicting_scores.svg",
			'desc' => 'Discover your predicted score, helping you to plan and adjust the intensity of your preparation.'
		],
		[
			"name" => "Filtering Activities",
			"link" => "/features#filtering-activities",
			"img_src" => "/parts/features/filter_activities.svg",
			'desc' => 'Find and filter activities suitable for a particular Airline, Flying School, Aptitude Test or Skill.'
		],
		[
			"name" => "Performance Monitoring",
			"link" => "/features#performance",
			"img_src" => "/parts/features/using_performance.svg",
			'desc' => 'Examine your performance in unparalleled detail, with feedback provided in an easy-to-read format.'
		],
		[
			"name" => "Adaptive Exams",
			"link" => "/features#adaptive-exams",
			"img_src" => "/parts/features/adaptive_exams.svg",
			'desc' => 'Engage CoPilot Mode in our theoretical activities to focus your efforts on troublesome questions.'
		],
		[
			"name" => "Comprehensive Instruction",
			"link" => "/features#instructions",
			"img_src" => "/parts/features/activity_instructions.svg",
			'desc' => 'Improve your understanding of each activity with comprehensive instruction and pictorial examples.'
		],
		[
			"name" => "Day-by-Day Planner",
			"link" => "/features#planner",
			"img_src" => "/parts/features/planner.svg",
			'desc' => 'Use our Planner to learn about the preparation undertaken on each day, and each hour, by you.'
		],
		[
			"name" => "Training Mode",
			"link" => "/features#training-mode",
			"img_src" => "/parts/features/training_mode_tab.svg",
			'desc' => 'Use Training Mode to change the pace, difficulty of, or disable elements of certain activities.'
		],
		[
			"name" => "Strength & Weakness Map",
			"link" => "/features#strength-weakness-map",
			"img_src" => "/parts/features/strength_weakness_map.svg",
			'desc' => 'See your performance from a different perspective, uniquely identifying strengths and weaknesses. '
		],
		[
			"name" => "Colour-Coding",
			"link" => "/features#colour-coding",
			"img_src" => "/parts/features/improvement_rate_indicator.svg",
			'desc' => 'Quickly and easily interpret your scoring using our universal and easy-to-understand colour-coding.'
		],
		[
			"name" => "Bookmarkable Activities",
			"link" => "/features#bookmarking",
			"img_src" => "/parts/features/focus_items.svg",
			'desc' => 'Bookmark activities, or use the CoPilot Wizard to identify them, helping you to maintain your focus.'
		],
		[
			"name" => "Hour-by-Hour Data",
			"link" => "/features#time-data",
			"img_src" => "/parts/features/time_data.svg",
			'desc' => 'Learn about your changing performance in a different way, examining your performance hour-by-hour.'
		],
	];

	$preparations = [
		[
			"name" => "Maths for Pilots",
			"link" => "/maths-for-pilots",
			"img_src" => "/parts/preparation/maths.png",
			'desc' => 'Engage with hundreds of mathematical questions, styled on computerised pilot aptitude tests.'
		],
		[
			"name" => "Verbal Reasoning for Pilots",
			"link" => "/verbal-reasoning-for-pilots",
			"img_src" => "/parts/preparation/verbal_reasoning.png",
			'desc' => 'Improve your comprehension of Verbal Reasoning with questions styled on real assessments.'
		],
		[
			"name" => "ATPL Knowledge for Pilots",
			"link" => "/atpl-knowledge-for-pilots",
			"img_src" => "/parts/preparation/atpl_knowledge.png",
			'desc' => 'Refresh your memory of the ATPL subject areas and ready yourself for technical interviews.'
		],
		[
			"name" => "Science for Pilots",
			"link" => "/science-for-pilots",
			"img_src" => "/parts/preparation/science.png",
			'desc' => 'Engage with hundreds of scientific questions, styled on computerised pilot aptitude tests.'
		],
		[
			"name" => "Numerical Reasoning for Pilots",
			"link" => "/numerical-reasoning-for-pilots",
			"img_src" => "/parts/preparation/numerical_reasoning.png",
			'desc' => 'Improve your comprehension of Numerical Reasoning with questions styled on real assessments.'
		],
		[
			"name" => "English Language for Pilots",
			"link" => "/english-language-for-pilots",
			"img_src" => "/parts/preparation/english_language.png",
			'desc' => 'Upgrade your understanding of English Language and ready yourself for assessment.'
		],
		[
			"name" => "Mechanical Reasoning for Pilots",
			"link" => "/mechanical-reasoning-for-pilots",
			"img_src" => "/parts/preparation/mechanical_reasoning.png",
			'desc' => 'Improve your comprehension of Mechanical Reasoning with questions styled on real assessments.'
		],
	];

	$suitablilitys = [
		[
			"name" => "Cadet Schemes",
			"link" => "/preparation-cadet-schemes",
			"img_src" => "/parts/suitability/aircraft1.png",
			'background' => '#34424C',
			'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non sapien in metus luctus pharetra. Aliquam erat volutpat. Ut nec venenatis turpis. Duis vestibulum, est nec pulvinar condimentum, lacus sapien cursus lacus, at tempus est purus at magna. Aenean tincidunt varius erat, at scelerisque metus suscipit nec. Nullam fringilla, velit eu bibendum tristique, sapien augue elementum nulla, sit amet condimentum magna libero sit amet ante. Suspendisse potenti. Maecenas ac bibendum orci. Vivamus eget turpis nisl. Sed in eros arcu. Nam malesuada, arcu non bibendum pretium, odio sapien fermentum magna, in dignissim arcu sapien eu orci.'
		],
		[
			"name" => "Aspiring Pilots",
			"link" => "/preparation-aspiring-pilots",
			"img_src" => "/parts/suitability/aircraft1.png",
			'background' => '#586C75',
			'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non sapien in metus luctus pharetra. Aliquam erat volutpat. Ut nec venenatis turpis. Duis vestibulum, est nec pulvinar condimentum, lacus sapien cursus lacus, at tempus est purus at magna. Aenean tincidunt varius erat, at scelerisque metus suscipit nec. Nullam fringilla, velit eu bibendum tristique, sapien augue elementum nulla, sit amet condimentum magna libero sit amet ante. Suspendisse potenti. Maecenas ac bibendum orci. Vivamus eget turpis nisl. Sed in eros arcu. Nam malesuada, arcu non bibendum pretium, odio sapien fermentum magna, in dignissim arcu sapien eu orci.'
		],
		[
			"name" => "Experienced Pilots",
			"link" => "/preparation-experienced-pilots",
			"img_src" => "/parts/suitability/aircraft2.png",
			'background' => '#636363',
			'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non sapien in metus luctus pharetra. Aliquam erat volutpat. Ut nec venenatis turpis. Duis vestibulum, est nec pulvinar condimentum, lacus sapien cursus lacus, at tempus est purus at magna. Aenean tincidunt varius erat, at scelerisque metus suscipit nec. Nullam fringilla, velit eu bibendum tristique, sapien augue elementum nulla, sit amet condimentum magna libero sit amet ante. Suspendisse potenti. Maecenas ac bibendum orci. Vivamus eget turpis nisl. Sed in eros arcu. Nam malesuada, arcu non bibendum pretium, odio sapien fermentum magna, in dignissim arcu sapien eu orci.'
		],
		[
			"name" => "Low-Cost Carriers",
			"link" => "/preparation-low-cost-carriers",
			"img_src" => "/parts/suitability/aircraft4.png",
			'background' => '#393E3F',
			'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non sapien in metus luctus pharetra. Aliquam erat volutpat. Ut nec venenatis turpis. Duis vestibulum, est nec pulvinar condimentum, lacus sapien cursus lacus, at tempus est purus at magna. Aenean tincidunt varius erat, at scelerisque metus suscipit nec. Nullam fringilla, velit eu bibendum tristique, sapien augue elementum nulla, sit amet condimentum magna libero sit amet ante. Suspendisse potenti. Maecenas ac bibendum orci. Vivamus eget turpis nisl. Sed in eros arcu. Nam malesuada, arcu non bibendum pretium, odio sapien fermentum magna, in dignissim arcu sapien eu orci.'
		],
	];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
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
	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<div class="site-inner">
			<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentysixteen'); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-header-main">
					<div class="site-branding">
						<?php if(is_user_logged_in()): ?>
						<!-- <a href="/dashboard"><img src="/parts/logo_concise.png"></a> -->
						<a href="/dashboard"><img src="<?php echo home_url("/parts/logo_concise.svg"); ?>"></a>
<?php else: // Else show this. ?>
						<a href="/homepage"><img src="/parts/logo_concise.svg"></a>
						<?php endif; ?>
						<?php if (is_front_page() && is_home()) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;



						$description = get_bloginfo('description', 'display');
						if ($description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->



					
						<div id="site-header-menu" class="site-header-menu">
						<p class="name-label">Hey,
							<?php
							$user = wp_get_current_user();

							echo strlen($user->first_name) > 0 ? $user->first_name : "User";
							?></p>
						<?php
						if (is_user_logged_in()) {
							wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'primary-menu',));
						?>
							<a href="<?php echo wp_logout_url() ?>">
								<button class="mobile-logout-button">Log Out</button>
							</a>
						<?php
						} else {
							wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'secondary-menu',));
						} ?>
					</div><!-- .site-header-menu -->
				</div><!-- .site-header-main -->

				<?php if (is_user_logged_in()) { ?>
					<div class="header_user_buttons">
						<a href="/preparation-strategy">
							<div class="preparation_strategy_button"></div>
						</a>
						
							<div class="profile_button">
							<?php $unread_announcements = do_shortcode('[unread_announcements url="/"]'); echo $unread_announcements; ?>
							<a href="/account"><img src="/parts/profile_icon.svg"></a>
							</div>
						
						<a href="<?php echo wp_logout_url('/goodbye') ?>">
							<div class="access_button">Log Out</div>
						</a>
					</div>
				<?php } ?>


				<?php if (!is_user_logged_in()) { ?>
						<a href="/login">
							<div class="mobile_access_button">
								Login
							</div>
						</a>
				
					<div class="header_user_buttons">
						<a href="/purchase">
							<div class="action_button">Buy Now</div>
						</a>
						<a href="/login" title="Login">
							<div class="access_button">Log In</div>
						</a>
					</div>
				<?php } ?>

				<button id="toggle-nav" class="toggle-nav"><img id="toggle-nav-img" src="/parts/icon_open.svg"></button>


				<?php if (get_header_image()) : ?>
					<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters('twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px');
					?>
					<div class="header-image">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr(wp_get_attachment_image_srcset(get_custom_header()->attachment_id)); ?>" sizes="<?php echo esc_attr($custom_header_sizes); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
						</a>
					</div><!-- .header-image -->
				<?php endif; // End header image check. 
				?>

				
			</header><!-- .site-header -->

			<div id="content" class="site-content">
				<div class="mobile-menu">
					<div class="mobile-menu-inner">
					<?php if(is_user_logged_in()): ?>
		
						<div class="user-name"><?php echo $display_name = get_user_field('display_name'); ?></div>
						<div class="user-label"><?php echo $s2member_access_label = get_user_field('s2member_access_label'); ?></div>
						<div class="user-menu">
							<div class="user-menu-tile"><a href="/dashboard"><div class="inner-tile"><img src="/parts/mobile-menu/dashboard.svg"></div></a>Dashboard</div>
							<div class="user-menu-tile"><a href="/preparation-strategy"><div class="inner-tile"><img src="/parts/mobile-menu/prep-strategy.svg"></div></a>Prep. Strategy</div>
							<div class="user-menu-tile"><a href="/activities"><div class="inner-tile"><img src="/parts/mobile-menu/activities.svg"></div></a>Activities</div>
							<div class="user-menu-tile"><a href="/performance"><div class="inner-tile"><img src="/parts/mobile-menu/performance.svg"></div></a>Performance</div>
							<div class="user-menu-tile"><a href="/planner"><div class="inner-tile"><img src="/parts/mobile-menu/planner.svg"></div></a>Planner</div>
							<div class="user-menu-tile"><a href="/targets"><div class="inner-tile"><img src="/parts/mobile-menu/targets.svg"></div></a>Targets</div>
							<div class="user-menu-tile"><a href="/tools"><div class="inner-tile"><img src="/parts/mobile-menu/tools.svg"></div></a>Tools</div>
							<div class="user-menu-tile"><a href="/account"><div class="inner-tile"><img src="/parts/mobile-menu/account.svg"></div></a>Account</div>
							<div class="user-menu-tile"><a href="/help"><div class="inner-tile"><img src="/parts/mobile-menu/help.svg"></div></a>Help</div>
						</div>
						<a class="logout" href="<?php echo wp_logout_url('/goodbye') ?>">Log Out</a>

					<?php else: // Else show this. ?>
						<div class="mobile-gradient-container">
							<img src="/parts/mobile-menu/logo.svg" style="margin: 12px 12px 0;">
							<div style="border-bottom: 1px solid #B4CDDB; margin: 0px 27px 0 27px; box-shadow: 0px 4px 10px #9dc0d3;"></div>
							<div id="scrollable_content">
								<div class="_title">The <b>original</b> preparation software for flying school and airline assessments!</div>
								<div class="drop-down-container"><div class="_select_box"><?php global $origin_preparations;?>
<select class="select-tag">
		<?php foreach($origin_preparations as $origin_item): ?>
			<option value="<?php echo $origin_item['link']; ?>"><?php echo $origin_item['name'] ?></option>
		<?php endforeach ?>
		</select>
		<button class="find-btn">Find my preparation!</button>

</div></div>
								<div class="_subtitle">Or, learn more about our software:</div>
									<a class="_primary" href="/about">About</a>
									<a class="_primary" href="/features">Features</a>
									<a class="_primary" href="#">Suitability</a>
										<a class="_secondary" href="/preparation-aspiring-pilots"><span>for</span> Aspiring Pilots</a>
										<a class="_secondary" href="/preparation-experienced-pilots"><span>for</span> Experienced Pilots</a>
										<a class="_secondary" href="/preparation-cadet-schemes"><span>for</span> Cadet Schemes</a>
										<a class="_secondary" href="/preparation-low-cost-carriers"><span>for</span> Low-Cost Carriers</a>
									<a class="_primary" style="margin-top: 10px;" href="/knowledgebase">Knowledgebase</a>
									<div style="border-bottom: 1px solid #DDDDDD; margin: 35px 27px 35px 27px;"></div>
									<a class="_primary" href="#">Other Preparation</a>
										<a class="_secondary_other" href="/maths-for-pilots"><img src="/parts/mobile-menu/maths.svg">Maths for Pilots</a>
										<a class="_secondary_other" href="/science-for-pilots"><img src="/parts/mobile-menu/science.svg">Science for Pilots</a>
										<a class="_secondary_other" href="/english-language-for-pilots"><img src="/parts/mobile-menu/english-language.svg">English Language for Pilots</a>
										<a class="_secondary_other" href="/verbal-reasoning-for-pilots"><img src="/parts/mobile-menu/verbal-reasoning.svg">Verbal Reasoning for Pilots</a>
										<a class="_secondary_other" href="/numerical-reasoning-for-pilots"><img src="/parts/mobile-menu/numerical-reasoning.svg">Numerical Reasoning for Pilots</a>
										<a class="_secondary_other" href="/mechanical-reasoning-for-pilots"><img src="/parts/mobile-menu/mechanical-reasoning.svg">Mechanical Reasoning for Pilots</a>
										<a class="_secondary_other" href="/atpl-knowledge-for-pilots"><img src="/parts/mobile-menu/atpl-knowledge.svg">ATPL Knowledge for Pilots</a>
									<div style="border-bottom: 1px solid #DDDDDD; margin: 35px 27px 35px 27px;"></div>
									<a class="_primary" href="#">Contact</a>
										<a class="_secondary_other" style="color: #70CD2F !important;" href="https://wa.me/+442034754142"><img src="/parts/mobile-menu/whatsapp.svg">WhatsApp</a>
										<a class="_secondary_other" style="color: #3793D1 !important;" href="https://facebook.com/pilotaptitudetest"><img src="/parts/mobile-menu/facebook.svg">Facebook Chat</a>
										<a class="_secondary_other" style="color: #2D4D56 !important;" href="mailto:support@pilotaptitudetest.com"><img src="/parts/mobile-menu/email.svg">Email</a>
								
								<a href="/purchase"><div class="purchase-button">Buy now <span>from £29</span></div></a>
							
							</div>
						</div>
					<?php endif; ?>
					</div>
				</div>
				<div id="features-box" class="popupbox">
					<div style="display:flex;height:100%;width:100%;">
						<div class="left-box">
							<img src="<?php echo home_url("/parts/login_logo_small.svg") ?>"/>
							<p style="font-size:13px;">The <span style="font-weight:bold;">original</span> preparation software for flying school and airline assessments!</p>
							<div class="select-box">
								<select class="select-tag">
									<?php foreach($origin_preparations as $origin_item): ?>
									<option value="<?php echo $origin_item['link']; ?>"><?php echo $origin_item['name'] ?></option>
									<?php endforeach ?>
								</select>
								<button class="find-btn">Find my preparation!</button>
							</div>
						</div>
						<div class="main-box">
							<div class="title-area">
								<div class="main-title">Features</div>
								<div>Click or touch the feature to learn more</div>
							</div>
							<div class="contents-area">
								<?php foreach($features as $feature): ?>
									<div class="block">
										<a href="<?php echo home_url($feature['link']); ?>">
											<div class="flex">
												<div class="image-part">
													<img src="<?php echo home_url($feature['img_src']) ?>" />
												</div>
												<div class="paragraph-part">
													<p style="color:black;" class="main-title"><?php echo $feature['name'] ?></p>
													<p style="color:black;" class="desc"><?php echo $feature['desc'] ?></p>
												</div>
											</div>
										</a>
									</div>
									
								<?php endforeach?>
							</div>
						</div>
					</div>
				</div>
				<div id="preparation-box" class="popupbox">
					<div style="display:flex;height:100%;width:100%;">
						<div class="left-box">
							<img src="<?php echo home_url("/parts/login_logo_small.svg") ?>"/>
							<p style="font-size:13px;">The <span style="font-weight:bold;">original</span> preparation software for flying school and airline assessments!</p>
							<div class="select-box">
								<select class="select-tag">
									<?php foreach($origin_preparations as $origin_item): ?>
									<option value="<?php echo $origin_item['link']; ?>"><?php echo $origin_item['name'] ?></option>
									<?php endforeach ?>
								</select>
								<button class="find-btn">Find my preparation!</button>
							</div>
						</div>
						<div class="main-box" id="other-preparation-content-box">
							<div class="title-area">
								<div class="main-title">Other Preparation</div>
								<div>Click or touch the menu option to learn more</div>
							</div>
							<div class="contents-area">
								<?php foreach($preparations as $preparation): ?>
									<div class="block">
										<a href="<?php echo home_url($preparation['link']); ?>">
											<div class="flex">
												<div class="image-part" style="background-color: transparent;">
													<img src="<?php echo home_url($preparation['img_src']) ?>" />
												</div>
												<div class="paragraph-part">
													<p style="color:black;" class="main-title"><?php echo $preparation['name'] ?></p>
													<p style="color:black;" class="desc"><?php echo $preparation['desc'] ?></p>
												</div>
											</div>
										</a>
									</div>
									
								<?php endforeach?>
							</div>
						</div>
					</div>
				
				</div>
				<div id="suitability-box" class="popupbox">
					<div style="display:flex;height:100%;width:100%;">
						<div class="left-box">
							<img src="<?php echo home_url("/parts/login_logo_small.svg") ?>"/>
							<p style="font-size:13px;">The <span style="font-weight:bold;">original</span> preparation software for flying school and airline assessments!</p>
							<div class="select-box">
								<select class="select-tag">
									<?php foreach($origin_preparations as $origin_item): ?>
									<option value="<?php echo $origin_item['link']; ?>"><?php echo $origin_item['name'] ?></option>
									<?php endforeach ?>
								</select>
								<button class="find-btn">Find my preparation!</button>
							</div>
						</div>
						<div class="main-box">
							<div class="title-area">
								<div class="main-title">Suitability</div>
								<div>Click or touch the menu option to learn more</div>
							</div>
							<div class="contents-area">
								<?php foreach($suitablilitys as $suitablility): ?>
									<div class="block">
									<a href="<?php echo home_url($suitablility['link']); ?>">
										<div class="flex suitablility-box" style="background-color:<?php echo $suitablility['background'] ?>;background-image:url(<?php echo home_url($suitablility['img_src']); ?>);">
											<div>
												<p style="font-size:14px;opacity:0.8;color:white;">Preparation for</p>
												<p class="main-title" style="color:white;"><?php echo $suitablility['name'] ?></p>
											</div>
											<!-- <div style="margin-left: 20px;">
												<img style="width:100px;" src="<?php echo home_url($suitablility['img_src']) ?>" />
											</div> -->
										</div>
									</a>
									</div>
									
								<?php endforeach?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>