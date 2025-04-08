<?php
require_once 'db.php';

$sql = "SELECT p.id, p.product, p.price, c.category, w.availability_on_stock 
        FROM product p 
        JOIN categories c ON p.id_category = c.id 
        JOIN warehouse w ON p.id_product = w.id_product";

$result = $conn->query($sql);

if (!$result) {
    die("ошибка в запросе: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>nutnet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Номер</th>
          <th>Категория</th>
          <th>Товар</th>
          <th>Цена</th>
          <th>Остаток на складе</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['category'] ?></td>
          <td><?= $row['product'] ?></td>
          <td><?= $row['price'] ?></td>
          <td><?= $row['availability_on_stock'] ? 'В наличии' : 'Нет' ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
</div>
</body>
</html>
