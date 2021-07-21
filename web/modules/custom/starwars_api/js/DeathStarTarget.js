let searchCategory = "planets/"
let numberOfPlanets = 0;

$(document).ready(function () {
  getAllPlanets();
});

function getAllPlanets() {
  $.ajax({
    type: 'GET',
    url: 'https://swapi.dev/api/' + searchCategory
  }).done(function (data) {
    numberOfPlanets = data.count;
    for (i = 1; i <= numberOfPlanets; i++) {
      $("select").append("<option class=planets>planet " + i + "</option>");
    };
  });
};

function checkAlert(event) { //some sort of filtering may be necessary, use this for that?
  // console.log("event called", event.target.value)
  searchStarWars(event.target.value)
  // if (event.target.value.soString().test(/planet\s[0-9]+/i)) {
  // }
}




function searchStarWars(swapiquery) {
console.log("hi", searchCategory, swapiquery, 'https://swapi.dev/api/' + searchCategory + swapiquery.split(" ")[1])
  $.ajax({
    type: 'GET',
    url: 'https://swapi.dev/api/' + searchCategory + swapiquery.split(" ")[1]    
  }).done(function (data) {
    $("pre").remove();
    $("main").append("<div><pre>" +
                     "<div> Name:             "+ data.name + "</div>" +
                     "<div> Rotation Period:  "+ data.rotation_period + "</div>" +
                     "<div> Orbital Period:   "+ data.orbital_period + "</div>" +
                     "<div> Diameter:         "+ data.diameter + "</div>" +
                     "<div> Climate:          "+ data.climate + "</div>" +
                     "<div> Gravity:          "+ data.gravity + "</div>" +
                     "<div> Terrain:          "+ data.terrain + "</div>" +
                     "<div> Surface Water:    "+ data.surface_water + "</div>" +
                     "<div> Population:       "+ data.population + "</div>" +
                     //stick a recursive call in here to display residents? 
                     "</pre></div>")
   
  });
};