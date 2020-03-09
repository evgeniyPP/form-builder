<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/form.css">
    <title>Форма</title>
</head>

<body>
    <form method=<?=$form->method();?> class="form">
        <?foreach ($form->fields() as $field): ?>
        <div class="form-item">
            <?=$field?>
        </div>
        <?endforeach;?>
    </form>
</body>

</html>