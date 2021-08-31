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

### Manual Auth
1. wep.php > add Auth:routes();
2. Create views


### pattern to add logout button dummy form submit
`@guest
    @if (Route::has('register'))
        <a class="p-2 text-dark" href="{{ route('register') }}">Register</a>
    @endif
        <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
@else
        <a class="p-2 text-dark" href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit()"
        >Logout</a>

        <form id="logout-form" action={{ route('logout') }} method="POST"
            style="display: none;">
            @csrf
        </form>
@endguest`


### Check if user authenticated
`use Illuminate\Support\Facades\Auth;`
