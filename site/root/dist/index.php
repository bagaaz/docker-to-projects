<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos</title>

    <link href="style/styles.css" rel="stylesheet">

</head>
<body class="bg-gray-100 flex flex-col items-center min-h-screen py-2">
    <h1 class="text-4xl font-bold my-6">Meus Projetos</h1>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg max-w-2xl w-full my-6">
        <ul>
        <li class="border-t border-gray-200">
            <div class="grid grid-cols-3 gap-4 px-4 py-5 sm:px-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Nome do Projeto 1
            </h3>
            <p class="mt-1 text-sm text-gray-900 sm:mt-0">
                Descrição do Projeto 1...
            </p>
            <a href="link-projeto-1" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Acesse
            </a>
            </div>
        </li>
        <!-- Repita o <li> para cada projeto -->
        </ul>
    </div>

    <a href="http://localhost:8080" class="fixed bottom-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
        <i data-feather="database" alt="Banco de Dados"></i>
    </a>

    <a href="https://github.com/bagaaz" class="fixed bottom-4 left-4">
        <i data-feather="github" alt="Github"></i>
    </a>

    <a href="https://www.linkedin.com/in/bagaaz/" class="fixed bottom-4 right-4">
        <i data-feather="linkedin" alt="LinkedIn"></i>
    </a>

    <div id="theme-button" class="fixed top-4 right-4">
        <i data-feather="sun" alt="Sun"></i>
    </div>

    <script src="../src/app.js"></script>
</body>

</html>