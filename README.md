# FlashPopupWidget

FlashPopupWidget is a Yii2 widget that displays session flashes as popups based on the flash types.

## Installation

Install the widget using Composer:

```bash
composer require xililo/flash-popup-widget
```
## Usage
Import the FlashPopupWidget class at the top of your view file:

```php
use xililo\Popups\FlashPopupWidget;
```
Place the widget call in your view file or controller where you want to display the flashes and trigger the popups:

```php
echo FlashPopupWidget::widget();
```
This will render the FlashPopupWidget and display the session flashes as div elements with appropriate CSS classes. It will also trigger the popups based on the flash types.
