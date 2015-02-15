<?php 

    add_action('admin_init', 'fuente_add_custom_box', 1);
function fuente_add_custom_box() {
    add_meta_box( 
        'id_fuente',
        'fuente',
        'wp_box_fuente',
        'post'
    );
}

function wp_box_fuente($post) {
wp_nonce_field(plugin_basename(__FILE__), 'fuente_noncename');
if($_GET['action']=='edit'){
$fuente=get_post_meta($post->ID,'fuente',true);
echo'<input name="fuente" type="text" value="'.$fuente.'" class="regular-text" style="width:100%" />';
}else{
echo'<input name="fuente" type="text" value="" class="regular-text" style="width:100%" />'; 
}
}

add_action('save_post', 'guardar_fuente');

function guardar_fuente($post_id){
  if ( !wp_verify_nonce( $_POST['fuente_noncename'], plugin_basename(__FILE__) ) )
      return $post_id;

  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
      return $post_id;

    
  if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;
  
delete_post_meta($post_id, 'fuente');
if(!empty($_POST['fuente'])){
  add_post_meta($post_id, 'fuente', esc_attr($_POST['fuente']));
}
  
}
 ?>