//tmdb

const API_KEY = 'api_key=9255f031f4119658c22b77519aac244e';
const BASE_URL = 'https://api.themoviedb.org/3';
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'  + API_KEY + '&language=pt-BR';
const IMG_URL = 'https://image.tmdb.org/t/p/w500';
const searchURL = BASE_URL + '/search/movie?' + API_KEY;

const main = document.getElementById('main');
const form = document.getElementById('form');
const barra = document.getElementById('barra');

getMovies(API_URL);

function getMovies(url) {

fetch(url).then(res => res.json()).then(data => {
    console.log(data.results)
    showMovies(data.results);
})

}

function showMovies(data) {
    main.innerHTML = '';


    data.forEach(movie => {
        const {title, poster_path, vote_average, overview} = movie;
        const movieEl = document.createElement('div');
        movieEl.classList.add('movie');
        movieEl.innerHTML = `
        <img src="${IMG_URL+poster_path}" alt="${title}">

            <div class="movie-info">
                <h3>${title}</h3>
                <span class="${getColor(vote_average)}">${vote_average}</span>
            </div>

            <div class="overview">
                <h3>Sinopse</h3>
                ${overview}
            </div>
            `

        main.appendChild(movieEl);
    })
}

function getColor(vote) {
    if(vote >= 7){
        return 'green'
    }else if(vote >= 4){
        return 'orange'
    }else{
        return 'red'
    }
}

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const barraTerm = barra.value;

    if(barraTerm) {
        getMovies(searchURL+'&query='+barraTerm+'&language=pt-BR')
    }else{
        getMovies(API_URL);
    }
})