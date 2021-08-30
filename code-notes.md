## Add Resource Controller 
> php artisan make:controller MessageController --resource

## References
[Icons](https://icons8.com/icon/set/messaging/plasticine).
[MarkDown Guide](https://www.markdownguide.org/basic-syntax).

## Special code snippets to remember
php artisan migrate
php artisan make:model ChatMessage -m

php artisan tinker
User::factory()->count(5)->create();
User::where('id', '>=', 2)->orderBy('id', 'desc')->get();

// specialised validation
php artisan make:request StoreMessage

// show old values when editing form fields
<div><input type="text" name="title" value="{{ old('title', optional($post ?? null)->title) }}"></div>

// method spoofing for form action + CSRF
    <form action="{{ route('messages.update', ['message' => $message->id]) }}" method="POST">
        @csrf
        @method('PUT')
        ...
    </form>

### Load Laravel UI / Bootstrap
composer require laravel/ui 3.0.0
php artisan ui bootstrap
php artisan ui:controllers
npm install
npm run dev

### Auth
php artisan ui bootstrap --auth
npm install && npm run dev
npm install && npm run dev
