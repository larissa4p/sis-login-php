<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login</title>
    <link href="./src/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 ">
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full sm:w-8/12 mx-auto py-5 px-5 sm:px-20 rounded-lg bg-white ">
            <h3 class="text-3xl font-semibold text-center py-4">Acesso Restrito</h3>
            <form action="login.php" method="POST">
                <div class="mb-4">
                    <label>Usuário</label>
                    <input type="text" name="usuario"
                        class="form-control block w-full py-1.5 pl-3 border border-gray-400 rounded-md text-gray-900 sm:text-sm sm:leading-6">
                </div>
                <div class="mb-4">
                    <label>Senha</label>
                    <input type="password" name="senha"
                        class="form-control block w-full py-1.5 pl-3 border border-gray-400 rounded-md text-gray-900 sm:text-sm sm:leading-6">
                </div>
                <div class="mb-4">
                    <button type="submit" class="mb-3 rounded-lg bg-blue-500 text-white p-2">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>