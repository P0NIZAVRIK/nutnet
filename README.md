# NutNet - Система управления складом

Привет! Это мой проект по созданию системы управления складом. Я разработал его для удобного отслеживания товаров и их наличия на складе.

## Что умеет система
- Показывает список всех товаров
- Группирует товары по категориям
- Отображает наличие товаров на складе
- Показывает цены на товары

## Что я использовал
- PHP для бэкенда
- MySQL для хранения данных
- Bootstrap 5 для красивого интерфейса
- HTML/CSS для верстки

## Как запустить проект
1. Скачайте проект:
```bash
git clone https://github.com/P0NIZAVRIK/nutnet.git
```

2. Настройте базу данных:
- Импортируйте `db_dump.sql` в вашу MySQL
- Это создаст все нужные таблицы

3. Подключите базу:
- Откройте `db.php`
- Впишите свои данные для подключения к MySQL

4. Запустите через веб-сервер (я использовал OSPanel)

## Как устроена база данных
Я создал три основные таблицы:
- `product` - здесь хранится информация о товарах
- `categories` - здесь список категорий товаров
- `warehouse` - здесь данные о наличии товаров на складе

Если у вас есть вопросы по проекту - пишите в Issues, я обязательно отвечу!

---

# NutNet - Warehouse Management System

## Project Description
NutNet is a web application for warehouse management that allows tracking products, their categories, and stock availability.

### Main Features
- Product list viewing
- Product categories display
- Stock availability tracking
- Price viewing

## Technologies
- PHP
- MySQL
- Bootstrap 5
- HTML/CSS

## Installation
1. Clone the repository:
```bash
git clone https://github.com/P0NIZAVRIK/nutnet.git
```

2. Import the database:
- Use the `db_dump.sql` file to create the database structure

3. Configure database connection:
- Edit the `db.php` file with your credentials

4. Run the project through a web server

## Database Structure
- `product` table - product information
- `categories` table - product categories
- `warehouse` table - stock availability information 