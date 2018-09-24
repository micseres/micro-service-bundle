# Micro Service Bundle

## Config

```yaml
micro_service:
  connections:
    passport:
      ip: 127.0.0.1
      port: 9001
      route:  passport
      apiKey:  pass
      algorithm:  aes128
```

## Register
```php
return [
        \Micseres\MicroServiceBundle\MicroServiceBundle::class => ['all' => true],
];
```

## Usage

```php
    protected function execute(InputInterface $input, OutputInterface $output): void
    {
        $this->input  = $input;
        $this->output = $output;

        $this->microServiceReactor->setController([$this, 'generate']);
        $this->microServiceReactor->setLogger([$this, 'log']);

        $this->microServiceReactor->process();
    }
```

## License

The Soft Deletable Bundle is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
