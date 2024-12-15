<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="600" alt="Laravel Logo"></a></p>

# Laravel API project

### Setting up the project. All commands are executed on project directory command prompt.

1. Creating an Application :

```bash
composer create-project laravel/laravel <project-name>
```

2. Go to project directory :

```bash
cd <project-name>
```

- To open Vs code on project directotory

```bash
code .
```

3. Run project server :

```bash
php artisan serve
```

## Setting up API

1. Install nececessary packages :

```bash
php artisan install:api
```

2. Make model with neccesary documents :

```bash
php artisan make:model <model-name> -a --api
```

3. Setup model object :

```bash
class <model-name> extends Model
{
  use HasFactory;
  protected $fillable = ['Column1', 'Column2'];
}
```

4. Setup migration :

```bash
public function up(): void
{
  Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title', 255)->unique();
    $table->text('body');
    $table->timestamps();
  });
}
```

5. Run migrations :

```bash
php artisan migrate
```

## Setting up API routes

Edit files to create API routes

1. Set-up API resource in `routes\api.php` :

```bash
use App\Http\Controllers\<Controller-class>;

Route::apiResource('posts', <Controller-class>::class);
```

2. List routes on powershell :

```bash
php artisan route:list
```

3. Set-up specific <Controller-class> function in `app\Http\Controllers\<model-controler>` :

- Import model

```bash
use App\Models\<model-name>;
```

- Index function

```bash
public function index()
{
  return <model-name>::all();
}
```

- show function

```bash
public function show(post $post)
{
    return $post;
}
```
