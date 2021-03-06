<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" />
    <title>Vue Php Spotify Dischi</title>
</head>

<body>
    <div id="root">
        <header>
            <img src="img/Spotify_logo.png" alt="">
             
        </header>
        <main>
            
            <div class="selector">
                <label for="selection">Scegli l'artista</label> 
                <select name="selection" id="selection" v-model="filter" @change="authFilter(filter)">
                    <option value="">All</option>
                    <option :value="artist" v-for="(artist, index) in artists">{{artist}}</option>
                </select>
            </div>


            <div v-for="album in albums" class="album">
                <img :src="album.poster" alt="album poster">
                <h3>{{album.title}}</h3>
                <p>{{album.author}}</p>
                <h4>{{album.year}}</h4>
            </div>

        </main>

    </div>
    <script src="js/root.js"></script>
</body>

</html>