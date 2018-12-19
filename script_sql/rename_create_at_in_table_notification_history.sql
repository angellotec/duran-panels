/*este script es para cambiar el nombre de un campo de dicha tabla*/
/*es importante para que se visualice el dato correcto en la vista requerida*/
ALTER TABLE notification_history CHANGE created_at
	created_at_noti timestamp;