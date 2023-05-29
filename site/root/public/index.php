<?php
    $scan = scandir('../../');
    $folders = array();
    foreach($scan as $folder) {
        if($folder != "." && $folder != ".." && $folder != "root") {
            array_push($folders, $folder);
        }
    }
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
<body class="dark">
    <main class="bg-blue-100 dark:bg-gray-700 flex flex-col items-center min-h-screen py-2">

        <h1 class="dark:text-white text-4xl font-bold my-6">Meus Projetos</h1>
    
        <div class="bg-white dark:bg-gray-200 shadow overflow-hidden sm:rounded-lg max-w-6xl w-full my-6">
            <ul>
            <?php
                foreach($folders as $folder) {
            ?>
            <li class="border-t border-gray-200">
                <div class="flex px-4 py-5 sm:px-6 items-center">
                    <h3 class="flex-1 w-64 text-lg leading-6 font-medium text-gray-900">
                        <?php echo file_get_contents('../../'.$folder.'/name.txt') ?>
                    </h3>
                    <p class="grow mt-1 text-sm text-gray-900 sm:mt-0 flex-grow">
                        <?php echo file_get_contents('../../'.$folder.'/description.txt') ?>
                    </p>
                    <div class="flex-1 w-14 flex justify-end">
                        <a href="http://<?php echo $folder; ?>.localhost" class="py-2 px-4 border border-transparent shadow-sm text-m font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span>Acesse</span>
                        </a>
                    </div>
                </div>
            </li>
            <?php
                }
            ?>
            </ul>
        </div>
    
        <a href="http://localhost:8080" class="fixed bottom-6 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
            <i data-feather="database" alt="Banco de Dados"></i>
        </a>
    
        <a href="https://github.com/bagaaz" class="dark:text-white fixed bottom-4 left-4">
            <i data-feather="github" alt="Github"></i>
        </a>
    
        <a href="https://www.linkedin.com/in/bagaaz/" class="dark:text-white fixed bottom-4 right-4">
            <i data-feather="linkedin" alt="LinkedIn"></i>
        </a>
    
        <div id="theme-button" class="dark:text-white fixed top-4 right-4" onclick="toggleTheme()">
            <i id="theme-icon" data-feather="moon"></i>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()

        function toggleTheme() {
        var element = document.body;
        var themeIcon = document.getElementById('theme-icon');
        element.classList.toggle("dark");

        if (element.classList.contains('dark')) {
            themeIcon.setAttribute('data-feather', 'moon');
        } else {
            themeIcon.setAttribute('data-feather', 'sun');
        }

        feather.replace()
    }
    </script>
</body>


</html>