
add_filter('woocommerce_admin_order_date_format', 'custom_post_date_column_time');
function custom_post_date_column_time($format){
    return __('j F Y h:i A', 'woocommerce');   
}
