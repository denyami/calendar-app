create-project:
	rm .gitkeep
	composer create-project laravel/laravel ./
create_tables:
	php artisan make:migration create_tablename_table
