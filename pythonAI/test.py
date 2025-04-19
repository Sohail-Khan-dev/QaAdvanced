from fpdf import FPDF

# Custom PDF class
class PDF(FPDF):
    def header(self):
        self.set_font("Arial", "B", 14)
        self.cell(0, 10, "Laravel 10 & 11 Interview Questions and Answers", ln=True, align="C")
        self.ln(5)

    def chapter_title(self, title):
        self.set_font("Arial", "B", 12)
        self.set_fill_color(220, 230, 240)
        self.cell(0, 10, title, ln=True, fill=True)
        self.ln(2)

    def chapter_body(self, body):
        self.set_font("Arial", "", 11)
        self.multi_cell(0, 8, body)
        self.ln()

# Sample Laravel Q&A content
laravel_qa = [
    ("What is Laravel and what are its key features?",
     "Laravel is a PHP web application framework with expressive, elegant syntax. It offers routing, authentication, sessions, caching, queues, and more out of the box."),

    ("What is the difference between Laravel 10 and Laravel 11?",
     "Laravel 11 introduces a simplified application structure, with a single entry point file (`bootstrap/app.php` is removed), updated default route files, and a more modular architecture."),

    ("What is a service container in Laravel?",
     "The service container is a powerful tool for managing class dependencies and performing dependency injection. It allows you to bind interfaces to implementations.\n\nExample:\n```php\napp()->bind(UserRepository::class, EloquentUserRepository::class);\n```"),

    ("What are service providers in Laravel?",
     "Service providers are the central place to configure and bind services into the service container. Almost all Laravel bootstrapping happens in service providers."),

    ("How does routing work in Laravel?",
     "Routes are defined in `routes/web.php` or `routes/api.php`. You can define routes like:\n```php\nRoute::get('/users', [UserController::class, 'index']);\n```"),

    ("What is route model binding?",
     "It automatically injects model instances into your routes. Laravel resolves the model based on the ID in the URL.\n\nExample:\n```php\nRoute::get('/user/{user}', function(User $user) {\n    return $user->email;\n});\n```"),

    ("How do you validate a form request in Laravel?",
     "You can validate directly in the controller or use Form Request classes.\n\nExample:\n```php\n$request->validate([\n    'email' => 'required|email',\n]);\n```"),

    ("What are Eloquent relationships?",
     "They define relations between models: `hasOne`, `hasMany`, `belongsTo`, `belongsToMany`. They allow you to query related data easily."),

    ("What is a migration in Laravel?",
     "Migrations are version control for your database. They allow you to define your schema in PHP code.\n\nExample:\n```php\nSchema::create('users', function (Blueprint $table) {\n    $table->id();\n    $table->string('name');\n});\n```"),

    ("What are Laravel policies and gates?",
     "Policies are classes that organize authorization logic around a model. Gates are closures that determine access to actions.\n\nGate Example:\n```php\nGate::define('edit-post', function ($user, $post) {\n    return $user->id === $post->user_id;\n});\n```"),

    ("How do you use middleware in Laravel?",
     "Middleware filters HTTP requests entering your application. You can assign it globally or to specific routes.\n\nExample:\n```php\nRoute::middleware(['auth'])->group(function () {\n    Route::get('/dashboard', function () {\n        // ...\n    });\n});\n```"),

    ("What is Laravel Sanctum used for?",
     "Laravel Sanctum provides a featherweight authentication system for SPAs (single page applications), mobile apps, and simple token-based APIs."),

    ("What is the purpose of Laravel queues?",
     "Queues allow you to defer the processing of time-consuming tasks (like sending emails) to improve performance."),

    ("What are jobs and listeners in Laravel?",
     "Jobs represent tasks to run in the background. Listeners respond to events and can dispatch jobs. They help decouple your code."),

    ("How do you schedule tasks in Laravel?",
     "Laravel's task scheduler allows you to fluently define command-based scheduled tasks inside the `app/Console/Kernel.php` file.\n\nExample:\n```php\n$schedule->command('emails:send')->daily();\n```"),
]

# Generate PDF
pdf = PDF()
pdf.add_page()

# Add each Q&A to the PDF
for question, answer in laravel_qa:
    pdf.chapter_title(f"Q: {question}")
    pdf.chapter_body(f"A: {answer}")

# Save the PDF
pdf_path = "Laravel_10_11_Interview_QA.pdf"
pdf.output(pdf_path)
print(f"PDF saved successfully at: {pdf_path}")
