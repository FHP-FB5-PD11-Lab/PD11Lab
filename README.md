# PD11Lab
 
## Development Server
1. Make your own `.env` file in the root directory as mentioned in `.env.example` file.
2. Fill out `DB_CONNECTION`, `DB_HOST, DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in your `.env` file.
3. Enter `composer run dev` in terminal.
4. Visit `http://localhost:8000/` with our project.

## Development with Laravel 12
### How to add a new database table?
1. Bash command: `php artisan make:migration create_TABLENAME_table`
2. Complete the `up()` function as in this example:
    ```
    Schema::create('versions', function (Blueprint $table) {
        $table->id()->comment('Primary Key');
        $table->integer('main')->default(1);
        $table->float('minor_patch')->default(0.0);
        $table->integer('build')->default(0);
        $table->string('name', 30)->default('alpha')->index();
        $table->text('description')->nullable();
        $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
        $table->date('release_date')->nullable()->useCurrent();
        $table->time('release_time')->nullable()->useCurrent();
        $table->timestamps();
    });
    ```
3. Bash command: `php artisan migrate`
4. Check if table has been created.
5. Debugging: For rolling back last migration run `php artisan migrate:rollback` and for complete refresh of database structure `php artisan migrate:fresh`

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
    DB::table('users')->where('email', 'max.mustermann@fh-potsdam.de')->delete();
    ```
4. Check your database if data is in the table.
5. Debugging: For rolling back last migration run `php artisan migrate:rollback` and for complete refresh of database structure `php artisan migrate:fresh`

### How to add a model for our new database table?
1. Bash command: `php artisan make:model Version`
2. Write new model under `app\Models\Version.php`:
    - Add `$fillable`
    - Set casts to datatypes in `$casts` (not needed but better for security)
    - Add relations
    - Write functions for data transformation (no getters and setter needed if data will not be transformed)
3. Create new unit test file with bash command `php artisan make:test VersionTest --unit`
4. Write unit test as known from PHPUnit
5. Run unit test with bash command `php artisan test --filter=VersionTest`
6. If unit test passed you are done. Not -> Debugging Model -> run unit test again

### How to ad a first (static) view?
1. Bash command: `php artisan make:view changelog`
2. Add new route `/changelog` to routes\web.php:
    ```
    Route::view('/changelog', 'changelog');
    ```
3. Create structure in `resources\views\changelog.blade.php` with HTML
4. Start devlopment server with bash command: `composer run dev`
5. Check your new view under `http://localhost:8000/changelog`
6. Now you can edit your view with live testing
