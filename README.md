
![Logo](https://indiega.net/assets/images/indiega-web-logo-path.svg)
# Watzap.id PHP Module

Paket ini dibuat dan dikembangkan untuk integrasi WhatsApp notifikasi yang disediakan oleh layanan Watzap.id. 



## Installation

Install paket PHP ini dengan composer

```bash
  composer require ay4t/watzap-id
```
Atau Anda dapat menambahkan repository dari github saya dengan cara tambahkan baris berikut pada composer.json
```bash
composer config minimum-stability dev
composer config repositories.watzap vcs git@github.com:ay4t/watzap-id
composer require ay4t/watzap-id
``` 
## Usage/Examples

```php
require_once 'vendor/autoload.php';

$sendText    = new \Ay4t\WatzapId\SendText();
$sendText->setApiKey('YOUR-API-KEY');
$sendText->setNumberKey('YOUR-NUMBER-KEY');
$sendText->setPhone('6285791555506');
$sendText->setMessage('isi pesan Anda');
$result     = $sendText->result();

var_dump($result);
```


## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## License

[MIT](https://choosealicense.com/licenses/mit/)

