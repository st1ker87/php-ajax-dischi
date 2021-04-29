var app = new Vue({
    el: "#root",

    data: {
        albums: [],
        artists: [],
        filter : ''

    },

    mounted() {
        this.listAuthors();
        axios
            .get("http://localhost:8888/php-ajax-dischi/server.php")
            .then((response) => {
                console.log(response);
                for (let i = 0; i < response.data.length; i++) {
                    let result = response.data[i];
                    console.log(result);
                    this.albums.push(result);
                };
                /* if (this.albums.length == response.data.length) {
                    console.log(this.albums);
                    this.albums.forEach(element => {
                        console.log(element.author);
                        if (!this.artists.includes(element.author))
                            this.artists.push(element.author);
                    });
                    console.log(this.artists);
                }; */
                
            });

    },

    methods: {

        authFilter(filter) {
            this.albums = [];
            self = this;
            axios
                .get("http://localhost:8888/php-ajax-dischi/server.php?artist="+filter)
                // .get("http://localhost:8888/php-ajax-dischi/server.php")
                .then((response) => {
                    console.log(response);
                    console.log(filter);
                    response.data.forEach(element => {
                        this.albums.push(element);
                    });
                    /* for (let i = 0; i < response.data.length; i++) {
                        let result = response.data[i];
                        console.log(result);
                        if (this.filter == '')
                            this.albums.push(result);
                        else if (result.author == this.filter)
                            this.albums.push(result);
                    } */

                });
        },

        listAuthors() {
            axios
                .get("http://localhost:8888/php-ajax-dischi/server.php?listAuthor=true")
                .then((response) => {
                    this.artists = response.data;
            });
        }

        /* authFilter(author) {
            this.filtered = [];
            this.albums.forEach(element => {
                console.log(this.filter);
                console.log(this.generis);
                if (element.genre == genre)
                    this.filtered.push(element);
            });
        } */

    }
});
Vue.config.devtools = true;