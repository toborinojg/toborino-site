<?php
/* Login */
function my_login_logo() { ?>
    <style type="text/css">
        body.login {
			background-color:#fff;
		}
        form#loginform {
			background-color:#0b0757;
		}
		.login label {
			color: #fff;
		}
        body.login div#login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/img/core-img/logo_tbr.png);
            background-size: 200px;
			width: 100%;
			height:60px;
        }
		
    </style>
<?php }
add_action( 'login_head', 'my_login_logo' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*Admin*/
function add_custom_admin_styles() {
	$color = "#0b0757";
	echo '<style>#wpadminbar *{color:#fff;} #wpadminbar {background-color:'.$color.'; background-image:-webkit-linear-gradient(bottom, '.$color.', '.$color.' 5px);}.js .postbox .hndle { background:#fdd76e; }</style>';
}
add_action('admin_head', 'add_custom_admin_styles');

// Add a widget in WordPress Dashboard
function wpc_dashboard_widget_function() {
    // Entering the text between the quotes
	$theme_name = get_current_theme();
	echo '<div style="width: 100%;height:140px;"><img src="'.get_template_directory_uri().'/img/creditos.png" style="float:right;max-width:50%;" alt="Toborino"><p style="font-family:Arial,sans serif;font-size:18px;letter-spacing:-1px;margin:10px 0;">'. get_bloginfo('name') .'</p>';
    echo "<ul>";
	echo "<li>Host: ".$_SERVER['SERVER_SOFTWARE']."<br>IP int: ".$_SERVER['SERVER_ADDR']."</li>\n";
	echo "<li>Admin: <a href='mailto:". get_bloginfo('admin_email') ."'>". get_bloginfo('admin_email') ."</a></li>\n";
	echo "<li>Publicado em: <strong>09/06/20</strong></li>\n";
    echo "</ul></div>\n";
}
function wpc_add_dashboard_widgets() {
    wp_add_dashboard_widget('wp_dashboard_widget', 'Créditos', 'wpc_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );
