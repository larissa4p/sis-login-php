<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login</title>
    <link href="./src/output.css" rel="stylesheet">
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-4">
            <a href="#" class="" aria-current="page">Sistema X</a>
            <?php
            print "Olá, " . $_SESSION["nome"];
            print "<a href='logout.php' class='mb-3 rounded-lg bg-blue-500 text-white p-2'>Sair</a>";
            ?>
        </div>
    </nav>
    CONTEÚDO DO BODY
</body>
</html>