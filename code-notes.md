## Add Resource Controller 
> php artisan make:controller MessageController --resource

## References
[Icons](https://icons8.com/icon/set/messaging/plasticine).
[MarkDown Guide](https://www.markdownguide.org/basic-syntax).

php artisan migrate
php artisan make:model ChatMessage -m

php artisan tinker
User::factory()->count(5)->create();
User::where('id', '>=', 2)->orderBy('id', 'desc')->get();
