from fpdf import FPDF

# Custom PDF class
class PDF(FPDF):
    def __init__(self):
        super().__init__()
    
    def header(self):
        self.set_font("helvetica", "B", 14)
        self.cell(0, 10, "Laravel Interview Questions and Answers", align="C")
        self.ln(15)

    def chapter_title(self, title):
        self.set_font("helvetica", "B", 12)
        self.set_fill_color(220, 230, 240)
        self.cell(0, 10, title, fill=True)
        self.ln(12)

    def chapter_body(self, body):
        self.set_font("helvetica", "", 11)
        # Replace problematic characters
        body = body.replace("'", "'")
        body = body.replace(""", '"')
        body = body.replace(""", '"')
        body = body.replace("—", '-')
        body = body.replace("–", '-')
        self.multi_cell(0, 8, body)
        self.ln()

# Adding more detailed Laravel questions and answers: 20 each for Beginner, Mid, and Expert

beginner_questions = [
    ("What is Laravel?", "Laravel is a PHP framework for web application development with an expressive and elegant syntax."),
    ("How do you install Laravel?", "You can install Laravel via Composer: `composer create-project laravel/laravel project-name`."),
    ("What is artisan in Laravel?", "Artisan is Laravel's command-line interface. You can use it to generate code, run migrations, serve the app, etc."),
    ("What is MVC in Laravel?", "MVC stands for Model-View-Controller. Laravel uses this design pattern to separate application logic."),
    ("What is a route in Laravel?", "A route defines the URL endpoint and maps it to a controller method or closure."),
    ("How to create a controller?", "Use Artisan command: `php artisan make:controller UserController`."),
    ("What is a model in Laravel?", "Models represent a database table and allow interaction with data using Eloquent ORM."),
    ("How to create a model?", "Use: `php artisan make:model Post`."),
    ("What is Eloquent ORM?", "It is Laravel's built-in ORM that provides a beautiful syntax to interact with the database."),
    ("How to define a database connection?", "In `.env` file using DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD."),
    ("What is the use of `.env` file?", "It stores environment-specific variables such as database credentials, mail config, etc."),
    ("How to create a migration?", "`php artisan make:migration create_users_table`."),
    ("What is the use of `php artisan migrate`?", "It runs the database migrations and creates tables."),
    ("What are Blade templates?", "Laravel's templating engine that allows using PHP logic in HTML."),
    ("How do you include a view in Laravel?", "Use `return view('welcome');` in controller or route."),
    ("How do you display data in Blade?", "Use double curly braces: `{{ $name }}`."),
    ("How do you use conditionals in Blade?", "Use `@if`, `@else`, `@elseif`, and `@endif`."),
    ("How do you loop through data in Blade?", "Use `@foreach($items as $item)` and `@endforeach`."),
    ("What is CSRF protection in Laravel?", "Laravel includes CSRF protection using a token. Use `@csrf` in forms."),
    ("What is Laravel Mix?", "A wrapper around Webpack for compiling assets (CSS, JS).")
]

mid_questions = [
    ("What is a middleware in Laravel?", "Middleware filters HTTP requests and is used for tasks like authentication."),
    ("How do you create middleware?", "`php artisan make:middleware CheckAge`."),
    ("How do you apply middleware to a route?", "Use `Route::middleware('auth')->get('/dashboard')`."),
    ("What is Route Model Binding?", "It auto-resolves a model instance based on route parameters."),
    ("What is a Form Request?", "A custom request class that handles validation. Create with `make:request`."),
    ("How to send an email in Laravel?", "Use `Mail::to()->send(new MailableClass)` with a Mailable class."),
    ("How to upload a file in Laravel?", "Use `$request->file('image')->store('images')`."),
    ("What are events and listeners?", "Events trigger an action; listeners handle the logic when that event is fired."),
    ("How to use Laravel's job queue?", "Create a job using `php artisan make:job`, then dispatch using `dispatch()`."),
    ("How to use Soft Deletes?", "Use `use SoftDeletes` in model and add `deleted_at` column."),
    ("What are policies?", "They are used for authorization logic. Created using `php artisan make:policy`."),
    ("How to create and use custom helpers?", "Create a helper file and autoload it via `composer.json`."),
    ("How to use validation rules with custom messages?", "`$request->validate([...], ['name.required' => 'Name is required'])`."),
    ("What is eager loading?", "It loads relationships in one query. Use `User::with('posts')->get()`."),
    ("What is lazy loading?", "Relations are loaded only when accessed, leading to multiple queries."),
    ("How do you paginate in Laravel?", "Use `paginate()` method: `User::paginate(10)`."),
    ("How to use caching in Laravel?", "Use `Cache::put()` and `Cache::get()` methods."),
    ("How do you use Laravel Collections?", "Laravel collections offer a fluent, convenient wrapper for working with arrays."),
    ("What are accessors and mutators?", "Used to modify attributes when getting/setting. Define as `getXAttribute` or `setXAttribute`."),
    ("What is a seeder?", "A way to populate the database with dummy data using `php artisan db:seed`.")
]

expert_questions = [
    ("What are Laravel macros?", "They allow you to add custom methods to built-in Laravel classes."),
    ("How does Laravel handle dependency injection?", "Laravel resolves class dependencies using the service container automatically."),
    ("What is the repository pattern in Laravel?", "A design pattern to abstract the data layer, making code loosely coupled."),
    ("What is Laravel broadcasting?", "It allows real-time broadcasting of events using technologies like Pusher or WebSockets."),
    ("What are single-action controllers?", "Controllers with only one `__invoke` method, useful for simple logic."),
    ("What is the use of Laravel's Facades?", "Facades provide a static interface to classes bound in the service container."),
    ("How to implement multi-auth in Laravel?", "Use guards defined in `config/auth.php` and configure routes/middleware accordingly."),
    ("How does Laravel Octane improve performance?", "Octane boots Laravel once and keeps it in memory using Swoole/RoadRunner."),
    ("What are custom blade directives?", "You can define custom Blade syntax using `Blade::directive()`."),
    ("What is Laravel Jetstream?", "A starter kit that provides auth, team management, session handling with Livewire/Inertia."),
    ("What is Laravel Livewire?", "A full-stack framework for Laravel that makes building dynamic interfaces simple."),
    ("What is Laravel Horizon?", "A dashboard and code-driven configuration for queues powered by Redis."),
    ("What is rate limiting in Laravel?", "Limits how many requests a user can make. Defined via `RateLimiter` facade."),
    ("How to write a custom Artisan command?", "Use `php artisan make:command` and define handle() logic."),
    ("What are Observer classes in Laravel?", "They listen to model events like creating, updating, etc."),
    ("How to implement API versioning in Laravel?", "Use versioned route files like `api/v1`, `api/v2`, or middleware to handle versions."),
    ("How to use Laravel packages like Spatie?", "Install via Composer and configure in `config` and service providers."),
    ("How to use scoped bindings in Laravel 11?", "Scoped bindings bind route-model parameters only within specific route groups."),
    ("What are invokable controllers and when to use them?", "Controllers with a single `__invoke()` method. Useful for single-purpose endpoints."),
    ("How does Laravel handle request lifecycle?", "The HTTP Kernel handles the request through middleware, then routes it to a controller.")
]

# Create PDF
pdf = PDF()
pdf.add_page()

def add_section(title, qa_list):
    pdf.chapter_title(title)
    for q, a in qa_list:
        pdf.chapter_body(f"Q: {q}\nA: {a}")

add_section("Beginner Level Questions", beginner_questions)
add_section("Mid Level Questions", mid_questions)
add_section("Expert Level Questions", expert_questions)

# Save the PDF
pdf_path = "Laravel_Interview_QA_Beginner_Mid_Expert.pdf"
pdf.output(pdf_path)
print(f"PDF saved successfully at: {pdf_path}")
