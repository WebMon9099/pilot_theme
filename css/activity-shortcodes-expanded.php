<?php

/* ATPL KNOWLEDGE ACTIVITIES */


function activity_shortcode_aerodynamics_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aerodynamics.png"></div>';
    $output .= '<div class="ab-title">Aerodynamics <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning the principles of flight, assessing understanding of both basic and complex fundamentals.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-aerodynamics-ext', 'activity_shortcode_aerodynamics_ext');



function activity_shortcode_aircraft_systems_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aircraft-instruments.png"></div>';
    $output .= '<div class="ab-title">Aircraft Systems <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning systems that enable flight, including instrumentation, hydraulics and electrics.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-aircraft-systems-ext', 'activity_shortcode_aircraft_systems_ext');



function activity_shortcode_engines_propulsion_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/engines.png"></div>';
    $output .= '<div class="ab-title">Engines & Propulsion <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning propellors, fire protection systems, piston engines, gas turbine engines and their differences.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-engines-propulsion-ext', 'activity_shortcode_engines_propulsion_ext');




function activity_shortcode_flight_operations_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/flight-operations.png"></div>';
    $output .= '<div class="ab-title">Flight Operations <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning IFR, VFR, radiotelephony and the application of air law.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-flight-operations-ext', 'activity_shortcode_flight_operations_ext');



function activity_shortcode_human_performance_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/human-performance.png"></div>';
    $output .= '<div class="ab-title">Human Performance <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning the human body and the physiological factors which can affect flight safety.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-human-performance-ext', 'activity_shortcode_human_performance_ext');



function activity_shortcode_meteorology_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/meteorology.png"></div>';
    $output .= '<div class="ab-title">Meterology <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning weather, pressure systems, fronts, clouds, icing, precipitation, turbulence and interpreting reports.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-meteorology-ext', 'activity_shortcode_meteorology_ext');



function activity_shortcode_navigation_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/navigation.png"></div>';
    $output .= '<div class="ab-title">Navigation <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning the usage of charts, airborne equipment, ground-based equipment and radar to aid navigation.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-navigation-ext', 'activity_shortcode_navigation_ext');



function activity_shortcode_performance_planning_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/performance-planning.png"></div>';
    $output .= '<div class="ab-title">Perf. & Planning <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning aircraft performance, incorporating take-off, climb, enroute, descent and landing planning.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-performance-planning-ext', 'activity_shortcode_performance_planning_ext');




/* MATHEMATICS ACTIVITIES */


function activity_shortcode_maths_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Mathematics <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"><img src="/parts/products/adaptive-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Interpret and apply understanding to a wide range of mathematical concepts assessed within pilot aptitude tests.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-ext', 'activity_shortcode_maths_ext');



function activity_shortcode_maths_adapt_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Maths for ADAPT® <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"><img src="/parts/products/adaptive-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Interpret and apply understanding to a range of mathematical concepts evaluated within ADAPT® assessments.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-adapt-ext', 'activity_shortcode_maths_adapt_ext');



function activity_shortcode_maths_aon_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Maths for Aon® <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"><img src="/parts/products/adaptive-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Interpret and apply understanding to a range of mathematical concepts evaluated within Aon® assessments.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-aon-ext', 'activity_shortcode_maths_aon_ext');



function activity_shortcode_maths_compass_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Maths for COMPASS® <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"><img src="/parts/products/adaptive-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Interpret and apply understanding to a range of mathematical concepts evaluated within COMPASS® assessments.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-compass-ext', 'activity_shortcode_maths_compass_ext');



function activity_shortcode_maths_dlr_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Maths for DLR <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"><img src="/parts/products/adaptive-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Interpret and apply understanding to a range of mathematical concepts evaluated within DLR assessments.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-dlr-ext', 'activity_shortcode_maths_dlr_ext');



function activity_shortcode_maths_pilapt_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Maths for PILAPT® <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"><img src="/parts/products/adaptive-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Interpret and apply understanding to a range of mathematical concepts evaluated within PILAPT® assessments.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-pilapt-ext', 'activity_shortcode_maths_pilapt_ext');



/* ENGLISH LANGUAGE ACTIVITIES */


function activity_shortcode_attention_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/attention.png"></div>';
    $output .= '<div class="ab-title">Attention <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/explainer-video-grey.svg"><img src="/parts/products/visual-walkthrough-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Listen to ATC transmissions delivered in different accents and answer questions about each transmission.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-attention-ext', 'activity_shortcode_attention_ext');



function activity_shortcode_grammar_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Grammar <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning the correct use of tenses, verbs, adjectives and punctuation.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-grammar-ext', 'activity_shortcode_grammar_ext');



function activity_shortcode_idioms_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Idioms <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning those common expressions which hold different meanings to their literal meanings.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-idioms-ext', 'activity_shortcode_idioms_ext');



function activity_shortcode_spelling_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Spelling <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning the construction of a variety of different words used in English language.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-spelling-ext', 'activity_shortcode_spelling_ext');



function activity_shortcode_synonyms_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Synonyms <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning words that are different in sound and spelling but have the same meaning.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-synonyms-ext', 'activity_shortcode_synonyms_ext');



function activity_shortcode_vocabulary_ext($atts, $content = null) {
    $output = '<div class="activity-box ext">';
	
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Vocabulary <div class="ab-icons"><img src="/parts/products/training-mode-grey.svg"><img src="/parts/products/customisation-mode-grey.svg"></div></div>';
	$output .= '<div class="ab-text">Questions concerning understanding of vocabulary and the definitions of words used in English language.</div>';
	
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-vocabulary-ext', 'activity_shortcode_vocabulary_ext');

?>