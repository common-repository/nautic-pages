<?php
/**
 * Plugin Name: Nautic Pages
 * Description: Nautical pages, maps, shortcodes for marinetraffic site.
 * Plugin URI:  http://bugacms.com/wpen/nauticPages
 * Author URI:  https://profiles.wordpress.org/stur/
 * Author:      stur
 * Version:     2.0
 * Tested up to: 5.8
 * Requires PHP: 5.4
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:   true
 */


//https://www.marinetraffic.com/ru/p/embed-map

add_shortcode( 'np_marinetraffic_map', 'np_marinetraffic_map' );

function np_marinetraffic_map($args, $content, $codeName){
    static $id_map = 0;
    $id_map++;
    if($args['help'])
        return np_marinetraffic_help();

    $default = [
        'width' => '100%',
        'zoom'=> '11'
    ];
    $args =  array_merge($default, $args);

    if( $args ){
        if( $args['h4'] )
            $h = "<h4>{$args['h4']}</h4>";
        elseif( $args['h3'] )
            $h = "<h3>{$args['h3']}</h3>";
        elseif( $args['h2'] )
            $h = "<h2>{$args['h2']}</h2>";
        elseif( $args['h1'] )
            $h = "\r\n<h1>{$args['h1']}</h1>\r\n";

        $stArgs = "\r\n";
        foreach ($args as $key => $value) {
            $value = trim($value);
            $stArgs .= " $key=\"$value\";\r\n";
        }

    }
    if($content){
        $content = "\r\n<div class='np_marinetraffic_content'>$content</div>\r\n";
    }

    $html = "
<div class='np_marinetraffic_map' id='np_marinetraffic_map_$id_map'>$h
<script type=\"text/javascript\">$stArgs
</script>
<script type=\"text/javascript\" src=\"//www.marinetraffic.com/js/embed.js\"></script>$content
</div>
    ";


    return  $html;

}

function np_marinetraffic_help(){
    return "<pre>
&lbrack;np_marinetraffic_map
    h4 ='Title for map'  // header for the map, you can use h4, h3, h2, h1 size
    width='100%'		 // the width of the embedded map in pixels or percentage
    height='450'		 // the height of the embedded map in pixels or percentage
    border='1'		     // the width of the border around the map (zero means no border)
    shownames='false'	 // to display ship names on the map (true or false)
    <b>latitude</b>='37.4460'	 // the latitude of the center of the map, in decimal degrees
    <b>longitude</b>='24.9467' // the longitude of the center of the map, in decimal degrees
    zoom='9'		     // the zoom level of the map (values between 2 and 17)
    maptype='1'		 // use 0 for Normal Map, 1 for Satellite
    trackvessel='0'	 // MMSI of a vessel (note: vessel will be displayed only if within range of the system) - overrides \"zoom\" option
    fleet=''		     // the registered email address of a user-defined fleet (user's default fleet is used) - overrides \"zoom\" option
    help=1           // help text
&rbrack;
simple description text for the map, (optional)
&lbrack;/np_marinetraffic_map&rbrack;
   </pre> " ;
}