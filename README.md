# PD11Lab
 
## Development Server
1. Make your own `.env` file in the root directory as mentioned in `.env.example` file.
2. Fill out `DB_CONNECTION`, `DB_HOST, DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in your `.env` file.
3. Enter `composer run dev` in terminal.
4. Visit `http://localhost:8000/` with our project.

## Development with Laravel 12
### How to add data in a existing table via migrations?
1. Bash command: `php artisan make:migration seed_TABLENAME_table`
2. In function `up()` in your new migration you can add the data like this:
    ```
    DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'max.mustermann@fh-potsdam.de',
        'password' => bcrypt('admin'),
        'email_verified_at' => now(),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    ```
3. In function `down()` in your new migration you can add the data that should be deleted iff rollback will happen:
    ```
    DB::table('users')->where('email', 'max.mustermann@gmail.com')->delete();
    ```
4. Check your database if data is in the table.
5. Debugging: For rolling back last migration run `php artisan migrate:rollback` and for complete refresh of database structure `php artisan migrate:fresh`