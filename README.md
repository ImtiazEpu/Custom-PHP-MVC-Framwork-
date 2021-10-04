## XpeedStudio Assignment
Simple PHP form submission script with frontend validation
## Inside
* [laravel-mix](https://github.com/laravel-mix/laravel-mix)
* [Jquery](https://github.com/jquery/jquery)
* [International Telephone Input](https://github.com/jackocnr/intl-tel-input)
* [Milligram CSS](https://github.com/milligram/milligram-less)
* [Font-awesome](https://github.com/FortAwesome/Font-Awesome)
* [Suggestags](https://github.com/amsify42/jquery.amsify.suggestags)

## PHP Packages Used
- [PHRoute](https://github.com/mrjgreen/phroute)
- [Illuminate Database](https://github.com/illuminate/database)
- [Respect Validation](https://github.com/Respect/Validation)

## Installation instruction

- Clone the repo.
- Run `composer install`
- Run `yarn install`
- Create a database and import the `.sql` file from `database/sql` folder.
- Server user `laravel Valet`. For `Valet` you just need run `xpeedstudio.your-tld`
- For `Xamp` base url will be `/folder_name`
- .htaccess for apache server`RewriteEngine On
  RewriteBase /folder_name/
  RewriteRule ^index\.php$ - [L]
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . /folder_name/index.php [L]`
