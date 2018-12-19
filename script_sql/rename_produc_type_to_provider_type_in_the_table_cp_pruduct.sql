/*importar este script en la db de medconnex para modificar el nombre de el campo
	cp_products por product_type y asignarle las restricciones 'storefront','on-demand' y 'doctors'
			ESTO ES NESESARIO PARA EL CORRECTO FUNSIONAMIENTO DEL MODULO DE PRODUCTOS EN EL STOREFRONT PANEL.
*/
ALTER TABLE cp_products CHANGE product_type
		 provider_type enum('storefront','on-demand','doctors');