# bench
simple reporter for console.

```php
$bench = new \Krafjp\Bench\Bench();

// 処理
$bench->process();

// Insert
$bench->incrementInsertCount();

// Update 
$bench->incrementUpdateCount();

//....

//　終了
$bench->report();
```