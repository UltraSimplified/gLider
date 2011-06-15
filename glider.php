<?php
/*
Plugin Name: glider
Plugin URI: http://www.chichira.com/glider/
Description: Displays the hacker "glider" logo in your sidebar, along with one of the five stated beliefs of hackerdom
Author: Robin Layfield
Version: 1.00
Author URI: http://www.chichira.com/
*/
function get_credo(){
		$hacker_credo = "#believe1\"><em>one</em><br/> The world is full of problems waiting to be solved.
#believe2\"><em>two</em><br/> No problem should ever have to be solved twice.
#believe3\"><em>three</em><br/> Boredom and drudgery are evil.<br/>
#believe4\"><em>four</em><br/> Freedom is good.<br/><br/>
#believe5\"><em>five</em><br/> Attitude is no substitute for competence.";

		// Here we split it into lines
		$hacker_credo = explode("\n", $hacker_credo);
	
		// And then randomly choose a line
		return $hacker_credo[ mt_rand(0, count($hacker_credo) - 1) ];
	}	    

function init_glider(){
	
    function widget_glider($args) {
        extract($args);
        echo $before_widget;
	    echo $before_title . "glider >" . $after_title;
        echo "<a href=\"http://en.wikipedia.org/wiki/Glider_(Conway%27s_Life)\" target=\"_blank\"><img src=\"wp-content/plugins/chichira/glider.png\" style=\"width: 55px; height:55px; float: left; margin-right: 10px;\" /></a><a target=\"_blank\" href=\"http://www.catb.org/~esr/faqs/hacker-howto.html" . get_credo(). "</a><span style=\"clear:both\">&nbsp;</span>";
        echo $after_widget;
    }

   register_sidebar_widget("Glider", 'widget_glider');

}
add_action("plugins_loaded", "init_glider");
?>
