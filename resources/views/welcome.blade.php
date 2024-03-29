<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Newserific
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PI_Rasyid</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/layout/styles/layout.css') }}">
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html">Newscid.</a></h1>
      <p>Menyuguhkan berita terkini untuk anda</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="">Home</a></li>
        <li><a href="berita">Berita</a></li>
        <li><a href="market">Market</a></li>
        <li><a href="tech">Tech</a></li>
        <li class="last"><a href="etc">Etc</a></li>
      </ul>
    </div>
    <div id="search">
        <form class="row g-2 mt-5 " id="pokemon-form" >
        <fieldset>
          <legend>Site Search</legend>
          <div class="col-auto">
          <input type="text" class="form-control" name="pokemon" placeholder="Cari Pokemon">
          <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Search</button>
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
    @if ($index->count())
        <div id="container">
            <div id="content">
            <div id="featured_post">
                <h1><p align="center"><a href="{{$index[224]->source_url}}">{{$index[224]->title}}</a></p></h1>
                <img src="{{$index[224]->img_url}}" alt="">
                <strong><p align="justify">{{$index[224]->description}} <a href="{{$index[224]->source_url}}">Continue Reading &raquo;</a></p></strong>
            </div>
            <div id="hpage_latest">
            <div id="featured_post">
                <h1><p align="center"><a href="{{$index[170]->source_url}}">{{$index[170]->title}}</a></p></h1>
                <img src="{{$index[170]->img_url}}" alt="">
                <strong><p align="justify">{{$index[170]->description}} <a href="{{$index[170]->source_url}}">Continue Reading &raquo;</a></p></strong>
            </div>
            <div id="featured_post">
                <h1><p align="center"><a href="{{$index[8]->source_url}}">{{$index[8]->title}}</a></p></h1>
                <img src="{{$index[8]->img_url}}" alt="">
                <strong><p align="justify">{{$index[8]->description}} <a href="{{$index[8]->source_url}}">Continue Reading &raquo;</a></p></strong>
            </div>
            <div id="featured_post">
                <h1><p align="center"><a href="{{$index[171]->source_url}}">{{$index[171]->title}}</a></p></h1>
                <img src="{{$index[171]->img_url}}" alt="">
                <strong><p align="justify">{{$index[171]->description}} <a href="{{$index[171]->source_url}}">Continue Reading &raquo;</a></p></strong>
            </div>
            </div>
            </div>
    @endif
    <div id="column">
    <div class="mb-5" id="pokemon-content"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js" integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const form = document.querySelector("#pokemon-form");
        const pokemonContent= document.querySelector("#pokemon-content")
        const BASE_URI = `https://pokeapi.co/api/v2/pokemon/`;
        form.addEventListener('submit', SearchPokemon);
        function SearchPokemon (e) {
            if(pokemonContent.hasChildNodes()){
                pokemonContent.removeChild(pokemonContent.firstChild)
            }
            e.preventDefault()
            let pokemonName = form.pokemon.value.toLowerCase();
            axios.get(`${BASE_URI}${pokemonName}`)
            .then(function (response) {
                let data = response.data
                const contentHTML = 
                `<div class="p-4">
                  <div>
                      <center><img  style="width: 200px" src="${data.sprites.front_default}">
                      <center><img  style="width: 200px" src="${data.sprites.back_default}">
                  </div>
                  <h3 style="text-align: center; margin-bottom: 20px">Pokemon ${data.name}</h3>
                  <div>
                      <ul style="font-size: 18px">
                          <li>${data.abilities[0].ability.name}</li>
                          <li>${data.abilities[1].ability.name}</li>
                      </ul>
                  </div>
                </div>`
            console.log(data.abilities[1].ability.name);
                pokemonContent.innerHTML += contentHTML;
            })
            .catch(function (error) {
                // handle error
                alert("Pokemon Not found")
            });
        }
        
    </script>
    @if ($index->count())
      <ul id="latestnews">
        <li><img src="{{$index[1]->img_url}}" alt=""width ="290" height="200">
          <p><strong><a href="{{$index[1]->source_url}}">{{$index[1]->title}}</a></strong>{{$index[1]->description}}</p>
        </li>
        <li><img src="{{$index[210]->img_url}}" alt=""width ="290" height="200">
          <p><strong><a href="{{$index[210]->source_url}}">{{$index[210]->title}}</a></strong>{{$index[210]->description}}</p>
        </li>
        <li><img src="{{$index[211]->img_url}}" alt=""width ="290" height="200">
          <p><strong><a href="{{$index[211]->source_url}}">{{$index[211]->title}}</a></strong>{{$index[211]->description}}</p>
        </li>
        <li><img src="{{$index[159]->img_url}}" alt=""width ="290" height="200">
          <p><strong><a href="{{$index[159]->source_url}}">{{$index[159]->title}}</a></strong>{{$index[159]->description}}</p>
        </li>
        <li class="last"><img src="{{$index[158]->img_url}}" alt=""width ="290" height="200">
          <p><strong><a href="{{$index[158]->source_url}}">{{$index[158]->title}}</a></strong>{{$index[158]->description}}</p>
        </li>
      </ul>
    @endif
    </div>
    <br class="clear" />
  </div>
  <br class="clear" />
</div>
<div class="wrapper col7">
  <div id="copyright">
    <p class="center">Copyright &copy; 2022 by <a href="#">Rasyid | IT-0202 | 1202190009</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>