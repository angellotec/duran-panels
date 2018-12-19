/*ejecutar este script para crear el campos fecha y hora del registro de un producto por parte de
	un usuario storefront, ondemand o doctor. este dato se visualizara en la tabla donde se listan todos los productos en venta. en el apartado products
*/
ALTER TABLE cp_products add data_time_product datetime ;