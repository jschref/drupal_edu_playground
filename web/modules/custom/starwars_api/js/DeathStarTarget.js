let searchCategory = "planets/";
let numberOfPlanets = 0;

$(document).ready(function () {
  //something about this may be superflous in Drupal due to Drupal.behaviors?
  getAllPlanets();
});

function getAllPlanets() {
  $.ajax({
    type: "GET",
    url: "https://swapi.dev/api/" + searchCategory
  }).done(function (data) {
    numberOfPlanets = data.count;
    for (i = 1; i <= numberOfPlanets; i++) {
      // $("select").append("<option class=planets>planet " + i + "</option>");

      $.ajax({
        type: "GET",
        url: "https://swapi.dev/api/" + searchCategory + "/" + i,
        success: function (result, status, xhr) {

          $("select").append("<option class=planets value=" + result.url.match(/\d+/g) + "> " + result.name + "</option>");
        },
        error: function (xhr, status, error) {
          console.log("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
        }
      })
    }
  });
  // sortSelectableOptions() 
}

function sortSelectableOptions() { //the value of this is questionable. Get it? :P 
  //This sorts by API #ID, which roughly correlates with notoriety. Alphabetical 
  //would make it easier to find planets, but put more obscure ones at the top. 
  //sorting by population might make the most sense if this were actually a 
  //convenience app for Death Star owning megalomaniacs.  
  $("#selectablePlanetList").html($('#selectablePlanetList option').sort(function (x, y) {
    return $(x).value < $(y).value ? -1 : 1;
  }));
  // $("#selectablePlanetList").get(0).selectedIndex = 0;
  event.preventDefault();
}

function searchStarWars(swquery) {
  console.log(
    "searchFunctionCalled",
    searchCategory,
    swquery,
    "https://swapi.dev/api/" + searchCategory + swquery
  );
  $.ajax({
    type: "GET",
    url: "https://swapi.dev/api/" + searchCategory + swquery,
    error: function (xhr, status, error) {
      console.log("Result: " + status + " " + error + " " + xhr.status + " " + xhr.statusText)
    }
  }).done(function (data) {
    $("pre").remove();
    $("main").append(
      "<div><pre>" +
      "<div> Name:             " +
      data.name +
      "</div>" +
      "<div> Rotation Period:  " +
      data.rotation_period +
      "</div>" +
      "<div> Orbital Period:   " +
      data.orbital_period +
      "</div>" +
      "<div> Diameter:         " +
      data.diameter +
      "</div>" +
      "<div> Climate:          " +
      data.climate +
      "</div>" +
      "<div> Gravity:          " +
      data.gravity +
      "</div>" +
      "<div> Terrain:          " +
      data.terrain +
      "</div>" +
      "<div> Surface Water:    " +
      data.surface_water +
      "</div>" +
      "<div> Population:       " +
      data.population +
      "</div>" +
      "</pre></div>"
    );
  });
}
