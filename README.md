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
5. Debugging: For rolling back last migration: `php artisan migrate:rollback`
