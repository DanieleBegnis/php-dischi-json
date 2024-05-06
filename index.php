<!-- Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <title>Document</title>
</head>

<body class=" ms-background">
    <header>
        <div class="ms-container py-3">
            <img class="logo" src="Spotify_logo_without_text.svg.webp" alt="">
        </div>
    </header>
    <main>
        <div id="app">
            <div class="container">
                <h1 class="text-center text-white">Dischi json</h1>
                <div class="row">
                    <div v-for="disk in disks" class="col-4 ms-card my-4 px-4">
                        <img class="image py-3" :src="`${disk.poster}`" alt="">
                        <h4>{{ disk.title }}</h4>
                        <h5> {{ disk.author }} </h5>
                        <h4> {{ disk.year }} </h4>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <script src="js/script.js"></script>
</body>

</html>