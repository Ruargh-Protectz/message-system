
## About Messaging System

The Messaging System allows you to view, send, receive and delete messages between various users.

- Tailwind CSS
- Blade templates and partials
- DRY and KISS coding principles
- SQLlite database 

## Installation

1. Clone Repository
2. Run `composer install`
3. Run `npm install & npm run dev`
4. Run `php artisan migrate`

## Run
`php artisan serve`

## Usage

### Create message
[http://127.0.0.1:8001/messages/create](http://127.0.0.1:8001/messages/create)
1. Add user handle
2. Add message content
3. Click `Create`
### View all messages
[http://127.0.0.1:8001/messages](http://127.0.0.1:8001/messages)

### View a message
[http://127.0.0.1:8001/messages/id](http://127.0.0.1:8001/messages/1)

### Edit a message
[http://127.0.0.1:8001/messages/id/edit](http://127.0.0.1:8001/messages/1/edit)
1. Edit user handle
2. Edit message content
3. Click `Update`


