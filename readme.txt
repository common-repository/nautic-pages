=== Nautic Pages ===
Donate link:  http://bugacms.com/wpEn/nauticPage
Stable tag: 2.0.0
Tested up to: 5.8
Contributors: stur
Tags: pages, marinetraffic, map, marine, see, port, sea port

Nautical pages, maps, shortcodes for marinetraffic site.

== Description ==
Shortcode for the map [marinetraffic](http://marinetraffic.com) - displays the position of vessels on the roadstead of the port.


Use a shortcode:

**[np_marinetraffic_map latitude='37.4460' longitude='24.9467' /]**

or with description text:

**[np_marinetraffic_map latitude='37.4460' longitude='24.9467']
simple description text for the map, (optional)
[/np_marinetraffic_map]**



=Shortcode parameters=
**latitude**='37.4460'  the latitude of the center of the map, in decimal degrees
**longitude**='24.9467' the longitude of the center of the map, in decimal degrees

**h4** ='Title for map' header for the map, you can use h4, h3, h2, h1 size
**width**='100%'	    the width of the embedded map in pixels or percentage
**height**='450'	    the height of the embedded map in pixels or percentage
**border**='1'		    the width of the border around the map (zero means no border)
**shownames**='false'   to display ship names on the map (true or false)
**zoom=**'9'            the zoom level of the map (values between 2 and 17)
**maptype**='1'         use 0 for Normal Map, 1 for Satellite
**trackvessel**='0'	    MMSI of a vessel (note: vessel will be displayed only if within range of the system) - overrides "zoom" option
**fleet**=''		    the registered email address of a user-defined fleet (user's default fleet is used) - overrides "zoom" option
**help**=1              help text

[Nautic Pages exemple](http://bugacms.com/wpEn/nauticpages)
[Nautic Pages exemple ru](http://bugacms.com/wpRu/nauticpages)

== Screenshots ==
1. Port water area
2. External raid