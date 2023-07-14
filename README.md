# FlashPopupWidget

FlashPopupWidget is a Yii2 widget that displays session flashes as popups based on the flash types.

## Installation

Install the widget using Composer:

```bash
composer require xililo/flash-popup-widget
```
## Usage
Let's say you have the folowing in the controller:
```php
  Yii::$app->session->addFlash('danger', 'Log in to proceed with the operation.');
```
Import the FlashPopupWidget class at the top of your main layout view or any view file (e.g. in your `views/layouts/main.php`):

```php
  use xililo\Popups\FlashPopupWidget;
```
Place the widget call in your view file or controller where you want to display the flashes and trigger the popups:

```php
  echo FlashPopupWidget::widget();
```
This will render the FlashPopupWidget popups based on the flash types.
