# Statamic Environment Permissions

Disable certain permissions on specific environments. This overrides the configured permissions for a user so you can for example always disable blueprint changes.

## Installation

```
composer require justbetter/statamic-environment-permissions
```

## Configuration

Publish the config and change it how you'd like it in `config/environment-permissions.php`
```
php artisan vendor:publish --provider="JustBetter\StatamicEnvironmentPermissions\StatamicEnvironmentPermissionsServiceProvider" --tag="config"
```

## Note

This currently only works if your users are [stored in the database](https://statamic.dev/tips/storing-users-in-a-database)! A pull request will be accepted to make this work with all user providers.

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.
