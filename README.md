# application
Descent Framework Application Component

## Work in Progress

This component is currently under construction. The intended
ways are:

### The all-OOP way

```php
use Descent\{
    Application\Main,
    Contracts\ConfigurationInterface,
    Facades\Request,
    Facades\Response
};

new class extends Main {
    
    public function main(ConfigurationInterface $settings)
    {
        $settings->set('framework.charset', 'utf-8');
        
        Route::get('/', function() {
            return Response::defaultDocument(
                'A website',
                'Hello World!'
            );
        });
    }
}
```

### The "Silex" way

```php
use Descent\Application\Application;

$app = new Application([
    'framework.charset' => 'utf-8'
]);

$app->get('/', function() use($app) {
    return $app->response()->defaultDocument(
        'A website',
        'Hello World!'
    );
});

$app->run();

```