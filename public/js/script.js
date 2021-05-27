
function initMap() {
    const cairo = { lat: 54.412452, lng: -1.267468};
    const map = new google.maps.Map(document.getElementById("map"), {
      scaleControl: true,
      center: cairo,
      zoom: 14,
    });
    const infowindow = new google.maps.InfoWindow();
    infowindow.setContent("<b>Retro cars</b>");
    const marker = new google.maps.Marker({ map, position: cairo });
    marker.addListener("click", () => {
      infowindow.open(map, marker);
    });
  }