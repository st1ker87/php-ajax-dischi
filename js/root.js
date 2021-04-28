var app = new Vue({
    el: "#root",

    data: {
        albums: [],
        generis: [],
        filtered: []

    },

    mounted() {
        axios
            .get("http://localhost:8888/php-ajax-dischi/server.php")
            .then((response) => {
                console.log(response);
                for (let i = 0; i < response.data.length; i++) {
                    let result = response.data[i];
                    console.log(result);
                    this.albums.push(result);
                };
                /* if (this.albums.length == 6) {

                    console.log(this.albums);
                    this.albums.forEach(element => {
                        console.log(element.genre);
                        if (!this.generis.includes(element.genre))
                            this.generis.push(element.genre);
                    });
                } */
            });

    },

    methods: {
        /* genFilter(genre) {
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