# PHP Conference Call with Nexmo

:telephone_receiver: This is the sample code to create a very simple telephone conference on the Nexmo platform with PHP. When each user calls the number, they will be added into a telephone conference so they can chat with one another.

## Installation

Clone the repository to your local machine and run `composer install`.

Run the local webserver by doing `cd public/` and then `php -S localhost:8080`.

Make your code publicly available with [ngrok](https://ngrok.io): `ngrok http 8080`. **Copy** the https URL, we'll need this later!

Now set up the Nexmo side of things - if you don't already have an account you can [sign up here](https://dashboard.nexmo.com/sign-up).

- Install the [Nexmo CLI tool](https://github.com/nexmo/nexmo-cli) if you don't have it already.
- Buy a Nexmo number (you can also do this via your account dashboard):
    * `nexmo number:search [country]` (the country code will be something like `US` or `GB`) to get a list of available numbers.
    * `nexmo number:buy [number]` to buy the number you chose from the list
- Create an application (also possible using the account dashboard): `nexmo app:create PHPConfCall [ngrok_url]/answer.php [ngrok_url]/event.php --keyfile private.key`. This command will show you the UUID of the application you created, we need this in the next step.
- Link the number and the application: `nexmo link:app [number] [application ID`

## Usage

:iphone: Phone the number and ask your friends to do the same! Now chat!

You'll see the various call events arriving and in this simple example they are simply written to the error log.
