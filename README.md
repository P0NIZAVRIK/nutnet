# Система управления складом

Здравствуйте, это мой проект по созданию системы управления складом.

## Что умеет система
- Показывает список всех товаров
- Группирует товары по категориям
- Отображает наличие товаров на складе
- Показывает цены на товары

## Что я использовал
- PHP для бэкенда
- MySQL для хранения данных
- Bootstrap 5 для красивого интерфейса

## Как запустить проект
1. Скачайте проект:
```bash
git clone https://github.com/P0NIZAVRIK/nutnet.git
```

2. Настройте базу данных:
- Импортируйте `db_dump.sql` в вашу MySQL

3. Подключите базу:
- Откройте `db.php`

4. Запустите через веб-сервер (я использовал OSPanel)

## Как устроена база данных
Я создал три основные таблицы:
- `product` - здесь хранится информация о товарах
- `categories` - здесь список категорий товаров
- `warehouse` - здесь данные о наличии товаров на складе

---

# Warehouse Management System

Hello, this is my project for creating a warehouse management system.

## System Features
- Shows a list of all products
- Groups products by categories
- Displays product availability in the warehouse
- Shows product prices

## Technologies Used
- PHP for backend
- MySQL for data storage
- Bootstrap 5 for a beautiful interface

## How to Run the Project
1. Download the project:
```bash
git clone https://github.com/P0NIZAVRIK/nutnet.git
```

2. Set up the database:
- Import `db_dump.sql` into your MySQL

3. Connect the database:
- Open `db.php`

4. Run through a web server (I used OSPanel)

## Database Structure
I created three main tables:
- `product` - stores product information
- `categories` - contains product categories
- `warehouse` - contains data about product availability in the warehouse
