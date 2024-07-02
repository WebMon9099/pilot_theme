<?php

function activity_shortcode_adjust($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/adjust.png"></div>';
    $output .= '<div class="ab-title">Adjust</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-adjust', 'activity_shortcode_adjust');



function activity_shortcode_align($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/align.png"></div>';
    $output .= '<div class="ab-title">Align</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-align', 'activity_shortcode_align');



function activity_shortcode_aspects($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aspects.png"></div>';
    $output .= '<div class="ab-title">Aspects</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-aspects', 'activity_shortcode_aspects');



function activity_shortcode_aerodynamics($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aerodynamics.png"></div>';
    $output .= '<div class="ab-title">Aerodynamics</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-aerodynamics', 'activity_shortcode_aerodynamics');



function activity_shortcode_aircraft_systems($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aircraft-instruments.png"></div>';
    $output .= '<div class="ab-title">Aircraft Systems</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-aircraft-systems', 'activity_shortcode_aircraft_systems');



function activity_shortcode_engines_propulsion($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/engines.png"></div>';
    $output .= '<div class="ab-title alt2">Engines & Propulsion</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-engines-propulsion', 'activity_shortcode_engines_propulsion');



function activity_shortcode_flight_operations($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/flight-operations.png"></div>';
    $output .= '<div class="ab-title">Flight Operations</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-flight-operations', 'activity_shortcode_flight_operations');



function activity_shortcode_human_performance($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/human-performance.png"></div>';
    $output .= '<div class="ab-title alt2">Human Performance</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-human-performance', 'activity_shortcode_human_performance');



function activity_shortcode_meteorology($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/meteorology.png"></div>';
    $output .= '<div class="ab-title">Meterology</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-meteorology', 'activity_shortcode_meteorology');



function activity_shortcode_navigation($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/navigation.png"></div>';
    $output .= '<div class="ab-title">Navigation</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-navigation', 'activity_shortcode_navigation');



function activity_shortcode_performance_planning($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/performance-planning.png"></div>';
    $output .= '<div class="ab-title alt">Perf. & Planning</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';

    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-performance-planning', 'activity_shortcode_performance_planning');



function activity_shortcode_attention($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/attention.png"></div>';
    $output .= '<div class="ab-title">Attention</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-attention', 'activity_shortcode_attention');



function activity_shortcode_ball_and_plate($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/ball-and-plate.png"></div>';
    $output .= '<div class="ab-title">Ball & Plate</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-ball-and-plate', 'activity_shortcode_ball_and_plate');



function activity_shortcode_bearings($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/bearings.png"></div>';
    $output .= '<div class="ab-title">Bearings</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-bearings', 'activity_shortcode_bearings');



function activity_shortcode_calculate($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/calculate.png"></div>';
    $output .= '<div class="ab-title">Calculate</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-calculate', 'activity_shortcode_calculate');



function activity_shortcode_capacity($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/capacity.png"></div>';
    $output .= '<div class="ab-title">Capacity</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-capacity', 'activity_shortcode_capacity');



function activity_shortcode_characters($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/characters.png"></div>';
    $output .= '<div class="ab-title">Characters</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-characters', 'activity_shortcode_characters');



function activity_shortcode_coloured_letters($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/grid-original.png"></div>';
    $output .= '<div class="ab-title">Coloured Letters</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-coloured-letters', 'activity_shortcode_coloured_letters');



function activity_shortcode_control($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/control.png"></div>';
    $output .= '<div class="ab-title">Control</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-control', 'activity_shortcode_control');



function activity_shortcode_crosshairs($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/crosshairs.png"></div>';
    $output .= '<div class="ab-title">Crosshairs</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-crosshairs', 'activity_shortcode_crosshairs');



function activity_shortcode_cube_nets($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/cube-nets.png"></div>';
    $output .= '<div class="ab-title">Cube Nets</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-cube-nets', 'activity_shortcode_cube_nets');



function activity_shortcode_cubes($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/cubes.png"></div>';
    $output .= '<div class="ab-title">Cubes</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-cubes', 'activity_shortcode_cubes');



function activity_shortcode_dials($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/dials.png"></div>';
    $output .= '<div class="ab-title">Dials</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-dials', 'activity_shortcode_dials');



function activity_shortcode_direction($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/direction.png"></div>';
    $output .= '<div class="ab-title">Direction</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-direction', 'activity_shortcode_direction');



function activity_shortcode_dots($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/dots.png"></div>';
    $output .= '<div class="ab-title">Dots</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-dots', 'activity_shortcode_dots');



function activity_shortcode_flashcards($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/flashcards.png"></div>';
    $output .= '<div class="ab-title">Flashcards</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-flashcards', 'activity_shortcode_flashcards');



function activity_shortcode_flight_director($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/flight-director.png"></div>';
    $output .= '<div class="ab-title">Flight Director</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-flight-director', 'activity_shortcode_flight_director');



function activity_shortcode_fms($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/fms.png"></div>';
    $output .= '<div class="ab-title">FMS</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-fms', 'activity_shortcode_fms');



function activity_shortcode_grid($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/grid.png"></div>';
    $output .= '<div class="ab-title">Grid</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-grid', 'activity_shortcode_grid');



function activity_shortcode_hidden1($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/hidden_1_alt.png"></div>';
    $output .= '<div class="ab-title">Hidden 1</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-hidden-1', 'activity_shortcode_hidden1');



function activity_shortcode_hidden2($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/hidden_2_alt2.png"></div>';
    $output .= '<div class="ab-title">Hidden 2</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-hidden-2', 'activity_shortcode_hidden2');



function activity_shortcode_instruments($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/instruments.png"></div>';
    $output .= '<div class="ab-title">Instruments</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-instruments', 'activity_shortcode_instruments');



function activity_shortcode_logic($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/logic.png"></div>';
    $output .= '<div class="ab-title">Logic</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-logic', 'activity_shortcode_logic');



function activity_shortcode_match($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/match.png"></div>';
    $output .= '<div class="ab-title">Match</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-match', 'activity_shortcode_match');



function activity_shortcode_maths($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Mathematics</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths', 'activity_shortcode_maths');



function activity_shortcode_maths_adapt($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title alt">Maths for ADAPT®</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-adapt', 'activity_shortcode_maths_adapt');



function activity_shortcode_maths_aon($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title alt">Maths for Aon®</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-aon', 'activity_shortcode_maths_aon');



function activity_shortcode_maths_compass($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title alt2">Maths for COMPASS®</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-compass', 'activity_shortcode_maths_compass');



function activity_shortcode_maths_dlr($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title alt">Maths for DLR</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-dlr', 'activity_shortcode_maths_dlr');



function activity_shortcode_maths_pilapt($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title alt ">Maths for PILAPT®</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-maths-pilapt', 'activity_shortcode_maths_pilapt');



function activity_shortcode_matrix($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/matrix.png"></div>';
    $output .= '<div class="ab-title">Matrix</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-matrix', 'activity_shortcode_matrix');



function activity_shortcode_mechanical_reasoning($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/technical-comprehension.png"></div>';
    $output .= '<div class="ab-title alt">Mech. Reasoning</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-mechanical-reasoning', 'activity_shortcode_mechanical_reasoning');



function activity_shortcode_mental_arithmetic($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mental-arithmetic.png"></div>';
    $output .= '<div class="ab-title alt">Mental Arithmetic</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-mental-arithmetic', 'activity_shortcode_mental_arithmetic');



function activity_shortcode_multitasker($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/multitasker.png"></div>';
    $output .= '<div class="ab-title">MultiTasker</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-multitasker', 'activity_shortcode_multitasker');



function activity_shortcode_number_series($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mental-arithmetic.png"></div>';
    $output .= '<div class="ab-title">Number Series</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-number-series', 'activity_shortcode_number_series');



function activity_shortcode_numbers($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numbers-2.png"></div>';
    $output .= '<div class="ab-title">Numbers</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numbers', 'activity_shortcode_numbers');



function activity_shortcode_numerical_reasoning($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning', 'activity_shortcode_numerical_reasoning');



function activity_shortcode_numerical_reasoning_a1($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A1</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a1', 'activity_shortcode_numerical_reasoning_a1');



function activity_shortcode_numerical_reasoning_a2($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A2</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a2', 'activity_shortcode_numerical_reasoning_a2');



function activity_shortcode_numerical_reasoning_a3($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A3</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a3', 'activity_shortcode_numerical_reasoning_a3');



function activity_shortcode_numerical_reasoning_a4($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A4</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a4', 'activity_shortcode_numerical_reasoning_a4');



function activity_shortcode_numerical_reasoning_a5($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A5</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a5', 'activity_shortcode_numerical_reasoning_a5');



function activity_shortcode_numerical_reasoning_a6($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A6</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a6', 'activity_shortcode_numerical_reasoning_a6');



function activity_shortcode_numerical_reasoning_a7($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A7</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a7', 'activity_shortcode_numerical_reasoning_a7');



function activity_shortcode_numerical_reasoning_a8($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>A8</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-a8', 'activity_shortcode_numerical_reasoning_a8');



function activity_shortcode_numerical_reasoning_b1($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>B1</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-b1', 'activity_shortcode_numerical_reasoning_b1');



function activity_shortcode_numerical_reasoning_b2($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>B2</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-b2', 'activity_shortcode_numerical_reasoning_b2');



function activity_shortcode_numerical_reasoning_b3($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>B3</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-b3', 'activity_shortcode_numerical_reasoning_b3');



function activity_shortcode_numerical_reasoning_b4($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/numerical-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Num. Reasoning <span>B4</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-numerical-reasoning-b4', 'activity_shortcode_numerical_reasoning_b4');



function activity_shortcode_orientation($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/orientation.png"></div>';
    $output .= '<div class="ab-title">Orientation</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-orientation', 'activity_shortcode_orientation');



function activity_shortcode_perspectives($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/perspectives.png"></div>';
    $output .= '<div class="ab-title">Perspectives</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-perspectives', 'activity_shortcode_perspectives');



function activity_shortcode_pfd($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/pfd.png"></div>';
    $output .= '<div class="ab-title">PFD</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-pfd', 'activity_shortcode_pfd');



function activity_shortcode_puppets($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/puppets.png"></div>';
    $output .= '<div class="ab-title">Puppets</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-puppets', 'activity_shortcode_puppets');



function activity_shortcode_react($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/react.png"></div>';
    $output .= '<div class="ab-title">React</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-react', 'activity_shortcode_react');



function activity_shortcode_rules($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/rules.png"></div>';
    $output .= '<div class="ab-title">Rules</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-rules', 'activity_shortcode_rules');



function activity_shortcode_science($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/science.png"></div>';
    $output .= '<div class="ab-title">Science</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	$output .= '<img src="/parts/products/adaptive-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-science', 'activity_shortcode_science');



function activity_shortcode_sense_of_direction($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/sense-of-direction.png"></div>';
    $output .= '<div class="ab-title alt">Sense of Direction</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-sense-of-direction', 'activity_shortcode_sense_of_direction');



function activity_shortcode_sets($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/sets.png"></div>';
    $output .= '<div class="ab-title">Sets</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-sets', 'activity_shortcode_sets');



function activity_shortcode_shapes($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/shapes.png"></div>';
    $output .= '<div class="ab-title">Shapes</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-shapes', 'activity_shortcode_shapes');



function activity_shortcode_short_term_memory($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/short-term-memory-alt.png"></div>';
    $output .= '<div class="ab-title alt">Short-Term Memory</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-short-term-memory', 'activity_shortcode_short_term_memory');



function activity_shortcode_slalom($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/slalom.png"></div>';
    $output .= '<div class="ab-title">Slalom</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-slalom', 'activity_shortcode_slalom');



function activity_shortcode_spin($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/spin.png"></div>';
    $output .= '<div class="ab-title">Spin</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-spin', 'activity_shortcode_spin');



function activity_shortcode_stroop($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/stroop.png"></div>';
    $output .= '<div class="ab-title">Stroop</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-stroop', 'activity_shortcode_stroop');



function activity_shortcode_switch($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/switch.png"></div>';
    $output .= '<div class="ab-title">Switch</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-switch', 'activity_shortcode_switch');



function activity_shortcode_task_manager($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/task-manager-alt.png"></div>';
    $output .= '<div class="ab-title">Task Manager</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-task-manager', 'activity_shortcode_task_manager');



function activity_shortcode_tracking($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/tracking.png"></div>';
    $output .= '<div class="ab-title">Tracking</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-tracking', 'activity_shortcode_tracking');



function activity_shortcode_triangles($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/triangles.png"></div>';
    $output .= '<div class="ab-title">Triangles</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-triangles', 'activity_shortcode_triangles');



function activity_shortcode_turns($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/turns.png"></div>';
    $output .= '<div class="ab-title">Turns</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-turns', 'activity_shortcode_turns');



function activity_shortcode_verbal_reasoning($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning', 'activity_shortcode_verbal_reasoning');



function activity_shortcode_verbal_reasoning_a1($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A1</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a1', 'activity_shortcode_verbal_reasoning_a1');



function activity_shortcode_verbal_reasoning_a2($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A2</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a2', 'activity_shortcode_verbal_reasoning_a2');



function activity_shortcode_verbal_reasoning_a3($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A3</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a3', 'activity_shortcode_verbal_reasoning_a3');



function activity_shortcode_verbal_reasoning_a4($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A4</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a4', 'activity_shortcode_verbal_reasoning_a4');



function activity_shortcode_verbal_reasoning_a5($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A5</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a5', 'activity_shortcode_verbal_reasoning_a5');



function activity_shortcode_verbal_reasoning_a6($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A6</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a6', 'activity_shortcode_verbal_reasoning_a6');



function activity_shortcode_verbal_reasoning_a7($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A7</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a7', 'activity_shortcode_verbal_reasoning_a7');



function activity_shortcode_verbal_reasoning_a8($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A8</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a8', 'activity_shortcode_verbal_reasoning_a8');



function activity_shortcode_verbal_reasoning_a9($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>A9</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-a9', 'activity_shortcode_verbal_reasoning_a9');



function activity_shortcode_verbal_reasoning_b1($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>B1</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-b1', 'activity_shortcode_verbal_reasoning_b1');



function activity_shortcode_verbal_reasoning_b2($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>B2</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-b2', 'activity_shortcode_verbal_reasoning_b2');



function activity_shortcode_verbal_reasoning_b3($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>B3</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-b3', 'activity_shortcode_verbal_reasoning_b3');



function activity_shortcode_verbal_reasoning_b4($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>B4</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-b4', 'activity_shortcode_verbal_reasoning_b4');



function activity_shortcode_verbal_reasoning_b5($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>B5</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-b5', 'activity_shortcode_verbal_reasoning_b5');



function activity_shortcode_verbal_reasoning_b6($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/verbal-reasoning.png"></div>';
    $output .= '<div class="ab-title alt">Verbal Reasoning <span>B6</span></div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-verbal-reasoning-b6', 'activity_shortcode_verbal_reasoning_b6');



function activity_shortcode_visual_memory($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/visual-memory-2.png"></div>';
    $output .= '<div class="ab-title">Visual Memory</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/explainer-video-grey.svg">';
	$output .= '<img src="/parts/products/visual-walkthrough-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-visual-memory', 'activity_shortcode_visual_memory');



function activity_shortcode_word_problems($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/mathematics.png"></div>';
    $output .= '<div class="ab-title">Word Problems</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-word-problems', 'activity_shortcode_word_problems');



function activity_shortcode_grammar($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Grammar</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-grammar', 'activity_shortcode_grammar');



function activity_shortcode_idioms($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Idioms</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-idioms', 'activity_shortcode_idioms');



function activity_shortcode_spelling($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Spelling</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-spelling', 'activity_shortcode_spelling');



function activity_shortcode_synonyms($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Synonyms</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-synonyms', 'activity_shortcode_synonyms');



function activity_shortcode_vocabulary($atts, $content = null) {
    $output = '<div class="activity-box">';
    $output .= '<div class="ab-img"><div></div><img src="/parts/activities/png/aviation-english.png"></div>';
    $output .= '<div class="ab-title">Vocabulary</div>';
	$output .= '<div class="ab-icons">';
	$output .= '<img src="/parts/products/training-mode-grey.svg">';
	$output .= '<img src="/parts/products/customisation-mode-grey.svg">';
	
    $output .= '</div>';
	$output .= '</div>';

	
    return $output;
}
add_shortcode('activity-vocabulary', 'activity_shortcode_vocabulary');

?>