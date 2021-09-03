## Hello, this is my first created simple packages

### Requirements
    - PHP ^8.*

For the first step, you can edit composer.json file to require my package.
```
...
"require": {
    ...
    "turbin/pse": "^1.0.0"
},
...
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Xiaowilz/try-create-laravel-package"
    }
]
```

Run the following command to load the changed composer.json file and install package.
```
composer update
```
