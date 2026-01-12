## Commands

	composer create-project laravel/laravel Name

	composer require laravel/breeze
	php artisan breeze:install
	
	php artisan tinker








----------------------------------------------------------------------------------------------------------------------------------

# Laravel Migration – Schema Builder Cheat Sheet

This document explains the most commonly used **Laravel migration column types, helpers, and modifiers** in a simple and practical way.

---

## 1. Basic Columns

```php
$table->id();                 // BIGINT auto-increment primary key
$table->string('name');       // VARCHAR(255)
$table->text('description');  // TEXT
$table->longText('content');  // LONGTEXT
$table->integer('age');       // INT
$table->bigInteger('views');  // BIGINT
$table->boolean('is_active'); // BOOLEAN / TINYINT(1)
```

---

## 2. Numeric Columns

```php
$table->float('rating');
$table->double('score');
$table->decimal('salary', 8, 2);
```

---

## 3. Date & Time Columns

```php
$table->timestamps();           // created_at, updated_at
$table->timestamp('published_at')->nullable();
$table->date('birth_date');
$table->time('start_time');
$table->dateTime('expires_at');
$table->softDeletes();          // deleted_at
```

---

## 4. Foreign Keys & Relationships

```php
$table->foreignId('user_id')->constrained();
$table->foreignId('category_id')->constrained()->onDelete('cascade');
$table->foreignIdFor(User::class);
```

**Equivalent long form:**

```php
$table->unsignedBigInteger('user_id');
$table->foreign('user_id')->references('id')->on('users');
```

---

## 5. Indexes & Constraints

```php
$table->unique('email');
$table->index('title');
$table->primary('id');
```

---

## 6. Enum & Set

```php
$table->enum('status', ['draft', 'published', 'archived']);
$table->set('roles', ['admin', 'editor', 'user']);
```

---

## 7. JSON & Special Types

```php
$table->json('options');
$table->uuid('uuid');
$table->ulid('ulid');
$table->ipAddress('ip_address');
$table->macAddress('mac');
```

---

## 8. Authentication Helpers

```php
$table->rememberToken();  // remember_token
```

---

## 9. Column Modifiers

```php
->nullable()
->default('draft')
->unique()
->index()
->comment('Post title')
```

**Example:**

```php
$table->string('status')->default('draft')->index();
```

---

