<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Axxela', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

register_sidebar( array(
    'id'          => 'secondary_menu',
    'name'        => __( 'Top Menu', 'Axxela' ),
    'description' => __( 'This Widget is located beside the logo.', 'Axxela' ),
) );
register_sidebar( array(
    'id'          => 'first_contact',
    'name'        => __( 'First Contact', 'Axxela' ),
    'description' => __( 'This Widget will appear below the press release single page.', 'Axxela' ),
) );
register_sidebar( array(
    'id'          => 'second_contact',
    'name'        => __( 'Second Contact', 'Axxela' ),
    'description' => __( 'This Widget will appear below the press release single page.', 'Axxela' ),
) );

add_action( 'widgets_init', 'my_contact_info_widget_init' );

 
function my_contact_info_widget_init() {
    register_widget( 'my_contact_info_widget' );
}
 
class my_contact_info_widget extends WP_Widget
{
 
    public function __construct()
    {
        $widget_details = array(
            'classname' => 'my_contact_info_widget',
            'description' => 'My custom widget to display contact information by Emmanuel'
        );
 
        parent::__construct( 'my_contact_info_widget', 'Contact Info Widget', $widget_details );
 
    }
 
    public function form( $instance ) {
        $name = '';
        if( !empty( $instance['name'] ) ) {
            $name = $instance['name'];
        }

        $position = '';
        if( !empty( $instance['position'] ) ) {
            $position = $instance['position'];
        }
     
        $address = '';
        if( !empty( $instance['address'] ) ) {
            $address = $instance['address'];
        }

        $email = '';
        if( !empty( $instance['email'] ) ) {
            $email = $instance['email'];
        }

        $tel = '';
        if( !empty( $instance['tel'] ) ) {
            $tel = $instance['tel'];
        }
     
        ?>
     
        <p>
            <label for="<?php echo $this->get_field_name( 'name' ); ?>"><?php _e( 'Name:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'position' ); ?>"><?php _e( 'Position:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'position' ); ?>" name="<?php echo $this->get_field_name( 'position' ); ?>" type="text" value="<?php echo esc_attr( $position ); ?>" />
        </p>
     
        <p>
            <label for="<?php echo $this->get_field_name( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" ><?php echo esc_attr( $address ); ?></textarea>
        </p>
     
        <p>
            <label for="<?php echo $this->get_field_name( 'email' ); ?>"><?php _e( 'Email:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_name( 'tel' ); ?>"><?php _e( 'Tel:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'tel' ); ?>" name="<?php echo $this->get_field_name( 'tel' ); ?>" type="text" value="<?php echo esc_attr( $tel ); ?>" />
        </p>
     
        <div class='mfc-text'>
             
        </div>
     
        <?php
     
        echo $args['after_widget'];
    }
 
    public function update( $new_instance, $old_instance ) {  
        return $new_instance;
    }
 
    public function widget( $args, $instance ) {
        $q = array("Ext.","ext.","Ext","ext");
        $name = apply_filters( 'widget_name', $instance['name'] );
        $position = apply_filters( 'widget_position', $instance['position'] );
        $address = apply_filters( 'widget_address', $instance['address'] );
        $email = apply_filters( 'widget_email', $instance['email'] );
        $tel = apply_filters( 'widget_tel', $instance['tel'] );
        $telQ = str_replace($q,'p', $tel);
        $telNew = preg_replace('/[^A-Za-z0-9]/', "", $telQ);
         
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $name ) ) ?>
        <h3> <?php echo $args['before_name'] . $name . $args['after_name'];?> </h3>
        
        <?php if ( ! empty( $position ) ) ?>
        <p> <?php echo $args['before_position'] . $position . $args['after_position'];?> </p>
        
        <?php if ( ! empty( $address ) ) ?>
        <p> <?php echo $args['before_address'] . $address . $args['after_address'];?> </p>
        
        <?php if ( ! empty( $email ) ) ?>
        <p> E-mail: <a href="mailto:<?php echo $email; ?>"><?php echo $args['before_email'] . $email . $args['after_email'];?> </a></p>
        
        <?php if ( ! empty( $tel ) ) ?>
        <p> Tel: <a href="mailto:+<?php echo $telNew; ?>"><?php echo $args['before_tel'] . $tel . $args['after_tel'];?> </a></p>
        
        <?php
        // This is where you run the code and display the output
        echo __( '', 'wpb_widget_domain' );
        echo $args['after_widget'];
        }
 
}

function add_upload_mimes($mimes) {
    $mimes['kml'] = 'text/xml';
    $mimes['kmz'] = 'application/zip';
    return $mimes;
}
add_filter('upload_mimes', 'add_upload_mimes');

//===== Articles Custom Type ======//
function custom_article_type() {
    // Labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Article', 'Post Type General Name', 'Axxela' ),
        'singular_name'       => _x( 'Article', 'Post Type Singular Name', 'Axxela' ),
        'menu_name'           => __( 'Articles', 'Axxela' ),
        'parent_item_colon'   => __( 'Parent Article', 'Axxela' ),
        'all_items'           => __( 'All Articles', 'Axxela' ),
        'view_item'           => __( 'View Article', 'Axxela' ),
        'add_new_item'        => __( 'Add New Article', 'Axxela' ),
        'add_new'             => __( 'Add Article', 'Axxela' ),
        'edit_item'           => __( 'Edit Article', 'Axxela' ),
        'update_item'         => __( 'Update Article', 'Axxela' ),
        'search_items'        => __( 'Search Article', 'Axxela' ),
        'not_found'           => __( 'Not Found', 'Axxela' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'Axxela' ),
    );
     
    // Customize option for Custom Post Type  
    $args = array(
        'label'               => __( 'article', 'Axxela' ),
        'description'         => __( 'article for blog post', 'Axxela' ),
        'labels'              => $labels,
        // Custom Post Type supports features in the Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this Custom Post Type with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( '' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_Article'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'menu_icon'           => 'dashicons-paperclip',
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'article', $args );
}
 
add_action( 'init', 'custom_article_type', 0 );