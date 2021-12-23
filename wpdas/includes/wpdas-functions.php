<?php 

// WP_List_Table is not loaded automatically so we need to load it in our application
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}


/* add an admin menus to manage zipcodes and content */
add_action('admin_menu', 'wpdas_admin_menus');

if( !function_exists('wpdas_admin_menus')){

	function wpdas_admin_menus(){
		add_menu_page( 
	      esc_html__('Manage Zipcodes', 'wpdas'), 
	      esc_html__('Manage Zipcodes', 'wpdas'), 
	      'manage_options', 
	      'wpdas_table', 
	      'wpdas_table_page', 
	      'dashicons-media-spreadsheet',
	      '12'
	     );

		add_submenu_page( 'wpdas_table', esc_html__('Zipcode Content', 'wpdas'), esc_html__('Zipcode Content', 'wpdas'), 'read', 'wpdas_content', 'wpdas_content_function', 10);

		add_action( 'admin_init', 'register_wpdas_content_settings' );
	}
}

/* register the zipcode content field values */
function register_wpdas_content_settings(){
	register_setting( 'wpdas-content-settings', 'wpdas_fuel_boil_text' );
	register_setting( 'wpdas-content-settings', 'wpdas_fuel_text' );
	register_setting( 'wpdas-content-settings', 'wpdas_no_boil_fuel_text' );
}

/* display the zipcode content page*/
function wpdas_content_function(){ ?>

<div class="wrap">

	<h1><?php esc_html_e('Zipcode Content', 'wpdas'); ?></h1>
	<form method="post" action="options.php">
	    <?php settings_fields( 'wpdas-content-settings' ); ?>
	    <?php do_settings_sections( 'wpdas-content-settings' ); ?>
	    <table class="form-table">
	        <tr valign="top">
		        <th scope="row"><?php esc_html_e('Boiler & Fuel Service', 'wpdas')?></th>
		        <td>
		        	<textarea name="wpdas_fuel_boil_text" rows="5" cols="100"><?php echo esc_attr( get_option('wpdas_fuel_boil_text') ); ?></textarea>
		        </td>
	        </tr>
	         
	        <tr valign="top">
		        <th scope="row"><?php esc_html_e('Only Fuel Service', 'wpdas')?></th>
		        <td>
		        	<textarea name="wpdas_fuel_text" rows="5" cols="100"><?php echo esc_attr( get_option('wpdas_fuel_text') ); ?></textarea>
		        </td>
	        </tr>

	        <tr valign="top">
		        <th scope="row"><?php esc_html_e('Not Available Service', 'wpdas')?></th>
		        <td>
		        	<textarea name="wpdas_no_boil_fuel_text" rows="5" cols="100"><?php echo esc_attr( get_option('wpdas_no_boil_fuel_text') ); ?></textarea>
		        </td>
	        </tr>
	    </table>
	    
	    <?php submit_button(); ?>

	</form>
</div>

<?php }

/* display the manage zipdcode page */
function wpdas_table_page(){

	$wpdasListTable = new Wpdas_List_Table();
    $wpdasListTable->prepare_items(); ?>

    <div class="wrap">
        <h2><?php esc_html_e('Manage Zipcodes', 'wpdas')?></h2>
        <a href="#" id="addnewzipcode" class="button button-primary"><?php esc_html_e('Add Zipcode', 'wpdas')?></a>
        <form id="post-filter" method="post">
        	<input type="hidden" name="page" value="zipcode" />
	        <?php
	        	$wpzgListTable->search_box('Search', 'search'); 
	        	$wpzgListTable->display(); 
	        ?>
	    </form>
    </div>
    <div class="modal fade" id="ModalPopup">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"></h5>
				</div>
				<div class="modal-body">
					
				</div>
			</div>
		</div>
	</div>
	
<?php }

/* add css and js files to admin */
add_action( 'admin_enqueue_scripts', 'wpdas_plugins_admin_scripts' );
function wpdas_plugins_admin_scripts(){

	wp_enqueue_style( 'wpdas-admin-style', plugin_dir_url( __DIR__ ) . 'admin/assets/css/style.css', array(), '1.0', 'all');

	wp_enqueue_script( 'wpdas-script', plugin_dir_url( __DIR__ ) . 'admin/assets/js/wpdas-custom.js', array ( 'jquery' ), 1.0, true);

  	wp_localize_script( 'wpdas-script', 'ajaxObj', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

}

/* add css and js files to frontend */
add_action( 'wp_enqueue_scripts', 'wpdas_plugins_scripts' );
function wpdas_plugins_scripts(){
    wp_enqueue_style( 'wpdas-style', plugin_dir_url( __DIR__ ) . 'public/assets/css/style.css', array(), '1.0', 'all');
}

/* display the zipcode edit form by ajax */
add_action('wp_ajax_editwpdasform', 'editwpdasform');
add_action('wp_ajax_nopriv_editwpdasform', 'editwpdasform');

function editwpdasform(){
	
	if($_POST['action'] == 'editwpdasform'){
		
		$city = $_POST['city'];

		global $wpdb;

		$html = '';

		$zipcodes = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons WHERE city='$city'");

		if(!empty($zipcodes)){
			$i = 1;
			$html .= '<div class="msg-editform"></div>';
			$html .= '<form method="POST" name="updatezipcodeform" id="updatezipcodeform">';
				$html .= '<div class="form-row grid-2">';
					$html .= '<div class="form-group">';
						$html .= '<label>'. esc_html__('City', 'wpdas') .'</label>';
						$html .= '<input type="text" name="city" class="form-field" value="'. $zipcodes['0']->city .'" readonly>';
					$html .= '</div>';
					$html .= '<div class="form-group">';
						$html .= '<label>'. esc_html__('Tax Group', 'wpdas') .'</label>';
						$html .= '<input type="text" name="tax_group" class="form-field" value="'. $zipcodes['0']->tax_group .'">';
					$html .= '</div>';
				$html .= '</div>';

				$html .= '<div class="form-row grid-2">';

					$html .= '<div class="form-group inner-row">';
                        $html .= '<div class="form-col">';
                            if($zipcodes['0']->boiler == 'Fuel & Service'){
                                $html .= '<input type="radio" name="fuel_service" class="form-field w-auto" value="2" checked>';
                                $html .= '<label>'. esc_html__('Boil & Fuel Service', 'wpdas') .'</label>';
                            }else{
                                $html .= '<input type="radio" name="fuel_service" class="form-field w-auto" value="2">';
                                $html .= '<label>'. esc_html__('Boil & Fuel Service', 'wpdas') .'</label>';
                            }
                        $html .= '</div>';

                        $html .= '<div class="form-col">';
                            if($zipcodes['0']->fuel == 'Fuel ONLY'){
                                $html .= '<input type="radio" name="fuel_service" class="form-field w-auto" value="1" checked>';
                                $html .= '<label>'. esc_html__('Fuel ONLY', 'wpdas') .'</label>';
                            }else{
                                $html .= '<input type="radio" name="fuel_service" class="form-field w-auto" value="1">';
                                $html .= '<label>'. esc_html__('Fuel ONLY', 'wpdas') .'</label>';
                            }
                        $html .= '</div>';
					$html .= '</div>';

                    $html .= '<div class="form-group">';
						$html .= '<label>'. esc_html__('Minimum Delivery Gallons', 'wpdas') .'</label>';
						$html .= '<input type="text" name="quantity" class="form-field" value="'. $zipcodes['0']->quantity .'">';
					$html .= '</div>';

				$html .= '</div>';



				$html .= '<div class="form-row grid-4">';
					foreach ($zipcodes as $zipcode) {
						$html .= '<div class="form-group">';
							$html .= '<label>'. esc_html__('Zipcode', 'wpdas') .' '. $i .'<span class="ast">*</span></label>';
							$html .= '<input type="text" name="zipcode['. $zipcode->id .']" class="form-field required" value="'. $zipcode->zipcode .'">';
						$html .= '</div>';
						$i++;
					}
				$html .= '</div>';
				
				$html .= '<div class="form-footer">';
					$html .= '<input type="button" class="btn btn-modal-close" value="Cancel">';
					$html .= '<input type="button" class="btn btn-modal-save" id="updatezipcode" value="Save">';
				$html .= '</div>';

			$html .= '</form>';
		}

		echo $html;
	}
	wp_die();
}

/* update the zipcode data by ajax */
add_action('wp_ajax_updatezipcodesdata', 'updatezipcodesdata');
add_action('wp_ajax_nopriv_updatezipcodesdata', 'updatezipcodesdata');

function updatezipcodesdata(){
	
	if($_POST['action'] == 'updatezipcodesdata'){

		global $wpdb;
       
		$html = '';

        $fuel_service = $_POST['fuel_service'];

        if($fuel_service == 2 ){
            $boil = 'Fuel & Service';
            $fuel = 'Fuel & Service';
        }else{
            $boil = 'NO';
            $fuel = 'Fuel ONLY';
        }

		$zipcodes = $_POST['zipcode'];

		$tablename = $wpdb->prefix .'zipcode_gallons';

		$wpdb->update( $tablename , array( 'tax_group' => $_POST['tax_group'], 'boiler' => $boil, 'fuel' => $fuel, 'quantity'	=> $_POST['quantity'] ), array( 'city' => $_POST['city'] ) );

		if(!empty($zipcodes)){
			foreach( $zipcodes as $key => $zipcode ){
				$wpdb->update( $tablename , array( 'zipcode' => $zipcode ), array( 'id' => $key ) );
			}
			$msg = 'success';
		}else{
			$msg = 'error';
		}

		echo $msg;
	}
	wp_die();
}

/* display the zipcode delete form by ajax */
add_action('wp_ajax_deletewpdasform', 'deletewpdasform');
add_action('wp_ajax_nopriv_deletewpdasform', 'deletewpdasform');

function deletewpdasform(){

	if($_POST['action'] == 'deletewpdasform'){

		$city = $_POST['city'];

		global $wpdb;

		$html = '';

		$zipcodes = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons WHERE city='$city'");

		if(!empty($zipcodes)){

			$i = 1;

			$html .= '<div class="msg-deleteform"></div>';

			$html .= '<form method="POST" name="deletezipcodeform" id="deletezipcodeform">';

				$html .='<p>'. esc_html__('Select the zipcodes to DELETE', 'wpdas') .'</p>';

				$html .= '<div class="form-row grid-4">';

					foreach ($zipcodes as $zipcode) {
						$html .= '<div class="form-group">';
							$html .= '<input type="checkbox" name="zipcode['. $zipcode->id .']" class="form-field" value="'. $zipcode->zipcode .'">';
							$html .= '<label>'. $zipcode->zipcode .'</label>';
						$html .= '</div>';
						$i++;
					}

				$html .= '</div>';
				
				$html .= '<div class="form-footer">';
					$html .= '<input type="button" class="btn btn-modal-close" value="Cancel">';
					$html .= '<input type="button" class="btn btn-modal-save" id="deletezipcodes" value="Confirm">';
				$html .= '</div>';

			$html .= '</form>';
		}

		echo $html;

	}
	wp_die();
}


/* delete the zipcode data by ajax */
add_action('wp_ajax_deletezipcodesdata', 'deletezipcodesdata');
add_action('wp_ajax_nopriv_deletezipcodesdata', 'deletezipcodesdata');

function deletezipcodesdata(){

	if($_POST['action'] == 'deletezipcodesdata'){
		
		$zipcodes = $_POST['zipcode'];
		
		if(!empty($zipcodes)){

			global $wpdb;

			$tablename = $wpdb->prefix .'zipcode_gallons';

			foreach($zipcodes as $key => $value){

				$wpdb->delete( $tablename, array( 'id' => $key, 'zipcode' => $value ) );
			}

			$msg = 'success';
		}
		else{
			$msg = 'failed';
		}

		echo $msg;
	}
	wp_die();
}


/* display the add new zipcode form by ajax */
add_action('wp_ajax_newzipcodeform', 'newzipcodeform');
add_action('wp_ajax_nopriv_newzipcodeform', 'newzipcodeform');

function newzipcodeform(){

	if($_POST['action'] == 'newzipcodeform'){

		global $wpdb;

		$html = '';

		$cities = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons GROUP BY city ORDER BY city ASC");

		if(!empty($cities)){

			$html .= '<div class="msg-addform"></div>';

			$html .= '<form method="POST" name="addzipcodesform" id="addzipcodesform">';
			
				$html .= '<div class="form-row grid-2">';

					$html .= '<div class="form-group">';
						$html .= '<label>'. esc_html__('Select City', 'wpdas') .'</label>';
						$html .= '<select name="city_name" id="city_name" class="form-field">';
							foreach( $cities as $city ){
								$html .= '<option value="'. $city->city .'">'. $city->city .'</option>';
							}
						$html .= '</select>';
					$html .= '</div>';

					$html .= '<div class="form-group">';
						$html .= '<label>'. esc_html__('Or, New City?', 'wpdas') .'</label>';
						$html .= '<input type="text" name="new_city" id="new_city" class="form-field" value="" placeholder="Enter New City Name">';
					$html .= '</div>';

				$html .= '</div>';

				$html .= '<div class="form-row">';
					$html .= '<div class="form-group">';
						$html .= '<label>'. esc_html__('Zipcode ', 'wpdas') .' <span class="ast">*</span></label></label>';
						$html .= '<input type="text" name="zipcode" id="zipcode" class="form-field required" value="" placeholder="Enter Zipcode: 10001, 10002, 10003">';
					$html .= '</div>';
				$html .= '</div>';

				$html .= '<div class="newfields"></div>';

				$html .= '<div class="form-footer">';
					$html .= '<input type="button" class="btn btn-modal-close" value="Cancel">';
					$html .= '<input type="button" class="btn btn-modal-save" id="createzipcodedata" value="Create">';
				$html .= '</div>';

			$html .= '</form>';
		}

		echo $html;
	}
	wp_die();
}


/* add zipcode data by ajax */
add_action('wp_ajax_addzipcodesdata', 'addzipcodesdata');
add_action('wp_ajax_nopriv_addzipcodesdata', 'addzipcodesdata');

function addzipcodesdata(){

	if($_POST['action'] == 'addzipcodesdata'){

		global $wpdb;

		$new_city = $_POST['new_city'];
		$city_name = $_POST['city_name'];
		$zipcodes = isset($_POST['zipcode']) && $_POST['zipcode'] != '' ? explode(',',$_POST['zipcode']) : '';
		$tax_group = $_POST['tax_group'];

        $fuel_service = $_POST['fuel_service'];

        if($fuel_service == 2 ){
            $boil = 'Fuel & Service';
            $fuel = 'Fuel & Service';
        }else{
            $boil = 'NO';
            $fuel = 'Fuel ONLY';
        }

		$gallons = $_POST['gallons'];

		$tablename = $wpdb->prefix .'zipcode_gallons';

		// add new city with zipcodes, gallons tax group, fuel and boil services
		if(!empty($new_city) && !empty($zipcodes)){
			
			foreach( $zipcodes as $zipcode ){

				if(!empty($zipcode)){

					$query = $wpdb->insert($tablename, array(
						'city'			=>	$new_city,
					    'tax_group' 	=>	$tax_group,
					    'zipcode' 		=>	$zipcode,
					    'boiler' 		=>	$boil,
					    'fuel'			=>	$fuel,
					    'quantity'		=>	$gallons
					));

				}
			}

		}
		// add new zip codes to existing city with the tax group, fuel and boil services
		else{

			$cities = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}zipcode_gallons WHERE city='$city_name'");
			
			if(!empty($zipcodes)){

				foreach( $zipcodes as $zipcode ){

					if(!empty($zipcode)){

						$query = $wpdb->insert($tablename, array(
							'city'			=>	$city_name,
						    'tax_group' 	=>	$cities->tax_group,
						    'zipcode' 		=>	$zipcode,
						    'boiler' 		=>	$cities->boiler,
						    'fuel'			=>	$cities->fuel,
						    'quantity'		=>	$cities->quantity
						));

					}
					
				}
			}
		}
	}

	wp_die();
}


/**
 * Create a new table class that will extend the WP_List_Table
 */
class Wpdas_List_Table extends WP_List_Table
{
    /**
     * Prepare the items for the table to process
     *
     * @return Void
     */
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();

        $search_terms = isset($_POST['s']) ? trim($_POST['s']) : "";

        $data = $this->table_data($search_terms);

        usort( $data, array( $this, 'sort_data' ) );

        $perPage = 10;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);

        $this->set_pagination_args( array(
            'total_items' => $totalItems,
            'per_page'    => $perPage
        ) );

        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
    }

    /**
     * Override the parent columns method. Defines the columns to use in your listing table
     *
     * @return Array
     */
    public function get_columns()
    {
        $columns = array(
            'sno'          	=> 'S.No',
            'city'       	=> 'City',
            'tax_group'     => 'Tax Group',
            'zipcode' 		=> 'Zipcodes',
            'boiler'        => 'Boiler Service',
            'fuel'    		=> 'Fuel Only',
            'quantity'      => 'Minimum Delivery Gallons',
            'action'		=>	'Action',
        );

        return $columns;
    }

    /**
     * Define which columns are hidden
     *
     * @return Array
     */
    public function get_hidden_columns()
    {
        return array();
    }

    /**
     * Define the sortable columns
     *
     * @return Array
     */
    public function get_sortable_columns()
    {
        return array('city' => array('city', false));
    }

    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data($search)
    {
        $data = array();
        
        global $wpdb;

        if(!empty($search)){
        	$results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons WHERE city LIKE '%$search%' OR zipcode='$search' GROUP BY city ORDER BY city ASC");
        }else{
        	$results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons GROUP BY city ORDER BY city ASC");
        }

        $i = 1;

		foreach( $results as $item ){

			$zipcodes = array();

			$city_results = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}zipcode_gallons WHERE city='$item->city'");
			
			if(!empty($city_results)){

				foreach( $city_results as $zipcode ){

					if($item->city == $zipcode->city ){
						$zipcodes[] = $zipcode->zipcode;
					}
				}

				$avail_zipcode = implode(', ', $zipcodes);
			}

			$data[] = array(
				'sno'		=>	$i,
				'city'		=>	$item->city,
				'tax_group'	=>	$item->tax_group,
				'zipcode'	=>	$avail_zipcode,
				'boiler'	=>	$item->boiler,
				'fuel'		=>	$item->fuel,
				'quantity'	=>	$item->quantity,
				'action'	=>	'<a href="#" class="btn edit-zipcode-btn" data-city="'. $item->city .'">'. esc_html__('Edit', 'wpdas') .'</a> | <a href="#" class="btn delete-zipcode-btn" data-city="'. $item->city .'">'. esc_html__('Delete', 'wpdas') .'</a>',
			);

			$i++;
		}
        
        return $data;
    }


     public function search_box( $text, $input_id ) {
        if ( empty( $_REQUEST['s'] ) && ! $this->has_items() ) {
            return;
        }
 
        $input_id = $input_id . '-search-input';
 
        if ( ! empty( $_REQUEST['orderby'] ) ) {
            echo '<input type="hidden" name="orderby" value="' . esc_attr( $_REQUEST['orderby'] ) . '" />';
        }
        if ( ! empty( $_REQUEST['order'] ) ) {
            echo '<input type="hidden" name="order" value="' . esc_attr( $_REQUEST['order'] ) . '" />';
        }
        if ( ! empty( $_REQUEST['post_mime_type'] ) ) {
            echo '<input type="hidden" name="post_mime_type" value="' . esc_attr( $_REQUEST['post_mime_type'] ) . '" />';
        }
        if ( ! empty( $_REQUEST['detached'] ) ) {
            echo '<input type="hidden" name="detached" value="' . esc_attr( $_REQUEST['detached'] ) . '" />';
        }
        ?>
		<p class="search-box">
		    <label class="screen-reader-text" for="<?php echo esc_attr( $input_id ); ?>"><?php echo $text; ?>:</label>
		    <input type="search" id="<?php echo esc_attr( $input_id ); ?>" name="s" value="<?php _admin_search_query(); ?>" />
		        <?php submit_button( $text, '', '', false, array( 'id' => 'search-submit' ) ); ?>
		</p>
        <?php
    }

    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default( $item, $column_name )
    {
        switch( $column_name ) {
            case 'sno':
            case 'city':
            case 'tax_group':
            case 'zipcode':
            case 'boiler':
            case 'fuel':
            case 'quantity':
            case 'action':
            default:
                return $item[ $column_name ];
        }
    }

    /**
     * Allows you to sort the data by the variables set in the $_GET
     *
     * @return Mixed
     */
    private function sort_data( $a, $b )
    {
        // Set defaults
        $orderby = 'city';
        $order = 'asc';

        // If orderby is set, use this as the sort column
        if(!empty($_GET['orderby']))
        {
            $orderby = $_GET['orderby'];
        }

        // If order is set use this as the order
        if(!empty($_GET['order']))
        {
            $order = $_GET['order'];
        }


        $result = strcmp( $a[$orderby], $b[$orderby] );

        if($order === 'asc')
        {
            return $result;
        }

        return -$result;
    }
}

/* zipcode search form shortcode */
add_shortcode( 'wpdas_search_form', 'wpdas_search_form_shortcode' );


if(!function_exists('wpdas_search_form_shortcode')){
	
	function wpdas_search_form_shortcode(){
		
        global $wpdb;

		$html = '';
		
		$html .= '<div class="wpzg-search-form-wrap">';
			$html .= '<div class="inner-wrap">';
				$html .= '<form class="wpzg-search-form" method="post">';
					$html .= '<input type="text" name="zipcode" class="form-control" placeholder="'. esc_html__('Enter Zipcode to search', 'wpdas') .'">';
					$html .= '<input type="submit" name="search" class="button button-search-zipcode" value="search zipcode">';
				$html .= '</form>';

                if(isset($_POST['zipcode'])){
                    
                    $zipcode = $_POST['zipcode'];
                    
                    $result = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}zipcode_gallons WHERE zipcode='$zipcode'");

                    if(!empty($result)){
                        
                        $boiler_service = $result->boiler;
                        $fuel = $result->fuel;
                        $quantity = $result->quantity;

                        if($boiler_service == 'NO' && $fuel == 'Fuel ONLY'){
                            $wpdas_fuel_text = get_option('wpdas_fuel_text');
                            $final_word = preg_replace("/\d{3,}/", $quantity, $wpdas_fuel_text);
                            $html .= '<h3>'. $final_word .'</h3>';
                        }else{
                            $wpdas_fuel_boil_text = get_option('wpdas_fuel_boil_text');
                            $final_word = preg_replace("/\d{3,}/", $quantity, $wpdas_fuel_boil_text);
                            $html .= '<h3>'. $final_word .'</h3>';
                        }
                    }else{
                        $final_word = get_option('wpdas_no_boil_fuel_text');
                        $html .= '<h3>'. $final_word .'</h3>';
                    }
                }

            $html .= '</div>';
		$html .= '</div>';
        echo $html;
	}
}