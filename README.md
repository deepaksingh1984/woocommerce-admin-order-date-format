# woocommerce-admin-order-date-format
Display Nice Order Date in Woocommerce Admin Order

open your wp-content/themes/theme-folder/functions.php

and add the code.

After adding the above code go to 
wp-content/plugins/woocommerce/includes/admin/list-tables/class-wc-admin-list-table-orders.php

Replace 
```
'<time datetime="%1$s" title="%2$s">%3$s</time>',
```
with
```
'<time datetime="%1$s" title="%2$s">%2$s</time>',
```
