<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <p>
            <?php
            $vesi_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

            foreach ($vesi_data as $key => $value) {
                echo "{$key}: {$value}<br>";
            }
            ?>
        </p>
    </body>
</html>