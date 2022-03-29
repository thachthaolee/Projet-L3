/*
const { Sequelize } = require('sequelize');
const sequelize = new Sequelize("hapmap", "nom_utilisateur ?????", "mot_de_passe_utilisateur ???", {
  dialect: "mysql",
  host: "localhost"
});*/

// Les url trouvés à partir de excel (bureau mattis)

var simplemaps_worldmap_mapdata={
  main_settings: {
    //General settings
		width: "responsive", //or 'responsive'
    background_color: "on s'en fiche c'est transparent",
    background_transparent: "yes",
    popups: "detect", // ou on_click ou on_hover
    
		//State defaults
		state_description: "State description", // Ici requête pour afficher score quand on survole
    state_color: "#88A4BC", //couleur pas ouf
    state_hover_color: "#3B729F", //couleur pas ouf
    border_size: 1.5,
    border_color: "#ffffff",
    all_states_inactive: "no",
    all_states_zoomable: "no",
    
		//Location defaults
		location_description: "Location description",
    location_color: "#FF0067",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_url: "",
    location_size: 25,
    location_type: "square",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
		//Label defaults
		label_color: "#ffffff",
    label_hover_color: "#ffffff",
    label_size: 22,
    label_font: "Arial",
    hide_labels: "no",
   
		//Zoom settings
		manual_zoom: "yes",
    back_image: "no",
    arrow_box: "no",
    navigation_size: "40",
    navigation_color: "#f7f7f7",
    navigation_border_color: "#636363",
    initial_back: "no",
    initial_zoom: -1,
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
		//Popup settings
		popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
		//Advanced settings
		div: "map",
    auto_load: "yes",
    rotate: "0",
    url_new_tab: "yes",
    images_directory: "default",
    import_labels: "no",
    fade_time: 0.1,
    link_text: "View Website",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  state_specific: {
    AF: {
      name: "Afghanistan",
      url: "continents3.php?id_pays=1&annee=2019",
      description: "2015 : 3,575 <br /> 2016 : 3,36 <br /> 2017 : 3,794 <br /> 2018 : 3,632 <br /> 2019 : 3,203"
    },
    AO: {
      name: "Angola",
      url: "continents3.php?id_pays=4&annee=2019",
      description: "2015 : 4,033 <br /> 2016 : 3,866 <br /> 2017 : 3,795 <br /> 2018 : 3,795"
    },
    AL: {
      name: "Albania",
      url: "continents3.php?id_pays=2&annee=2019",
      description: "2015 : 4,959 <br /> 2016 : 4,655 <br /> 2017 : 4,644 <br /> 2018 : 4,586 <br /> 2019 : 4,719"
    },
    AE: {
      name: "United Arab Emirates",
      url: "continents3.php?id_pays=159&annee=2019",
      description: "2015 : 6,901 <br /> 2016 : 6,573 <br /> 2017 : 6,648 <br /> 2018 : 6,774 <br /> 2019 : 6,825"
    },
    AR: {
      name: "Argentina",
      url: "continents3.php?id_pays=5&annee=2019",
      description: "2015 : 6,574 <br /> 2016 : 6,65 <br /> 2017 : 6,599 <br /> 2018 : 6,388 <br /> 2019 : 6,086"
    },
    AM: {
      name: "Armenia",
      url: "continents3.php?id_pays=6&annee=2019",
      description: "2015 : 4,35 <br /> 2016 : 4,36 <br /> 2017 : 4,376 <br /> 2018 : 4,321 <br /> 2019 : 4,559"
    },
    AU: {
      name: "Australia",
      url: "continents3.php?id_pays=7&annee=2019",
      description: "2015 : 7,284 <br /> 2016 : 7,313 <br /> 2017 : 7,284 <br /> 2018 : 7,272 <br /> 2019 : 7,228"
    },
    AT: {
      name: "Austria",
      url: "continents3.php?id_pays=8&annee=2019",
      description: "2015 : 7,2 <br /> 2016 : 7,119 <br /> 2017 : 7,006 <br /> 2018 : 7,139 <br /> 2019 : 7,246"
    },
    AZ: {
      name: "Azerbaijan",
      url: "continents3.php?id_pays=9&annee=2019",
      description: "2015 : 5,212 <br /> 2016 : 5,291 <br /> 2017 : 5,234 <br /> 2018 : 5,201 <br /> 2019 : 5,208"
    },
    BI: {
      name: "Burundi",
      url: "continents3.php?id_pays=23&annee=2019",
      description: "2015 : 2,905 <br /> 2016 : 2,905 <br /> 2017 : 2,905 <br /> 2018 : 2,905 <br /> 2019 : 3,775"
    },
    BE: {
      name: "Belgium",
      url: "continents3.php?id_pays=13&annee=2019",
      description: "2015 : 6,937 <br /> 2016 : 6,929 <br /> 2017 : 6,891 <br /> 2018 : 6,927 <br /> 2019 : 6,923"
    },
    BJ: {
      name: "Benin",
      url: "continents3.php?id_pays=15&annee=2019",
      description: "2015 : 3,34 <br /> 2016 : 3,484 <br /> 2017 : 3,657 <br /> 2018 : 4,141 <br /> 2019 : 4,883"
    },
    BF: {
      name: "Burkina Faso",
      url: "continents3.php?id_pays=22&annee=2019",
      description: "2015 : 3,587 <br /> 2016 : 3,739 <br /> 2017 : 4,032 <br /> 2018 : 4,424 <br /> 2019 : 4,587"
    },
    BD: {
      name: "Bangladesh",
      url: "continents3.php?id_pays=11&annee=2019",
      description: "2015 : 4,694 <br /> 2016 : 4,643 <br /> 2017 : 4,608 <br /> 2018 : 4,5 <br /> 2019 : 4,456"
    },
    BG: {
      name: "Bulgaria",
      url: "continents3.php?id_pays=21&annee=2019",
      description: "2015 : 4,218 <br /> 2016 : 4,217 <br /> 2017 : 4,714 <br /> 2018 : 4,933 <br /> 2019 : 5,011"
    },
    BH: {
      name: "Bahrain",
      url: "continents3.php?id_pays=10&annee=2019",
      description: "2015 : 5,96 <br /> 2016 : 6,218 <br /> 2017 : 6,087 <br /> 2018 : 6,105 <br /> 2019 : 6,199"
    },
    BA: {
      name: "Bosnia and Herzegovina",
      url: "continents3.php?id_pays=18&annee=2019",
      description: "2015 : 4,949 <br /> 2016 : 5,163 <br /> 2017 : 5,182 <br /> 2018 : 5,129 <br /> 2019 : 5,386"
    },
    BY: {
      name: "Belarus",
      url: "continents3.php?id_pays=12&annee=2019",
      description: "2015 : 5,813 <br /> 2016 : 5,802 <br /> 2017 : 5,569 <br /> 2018 : 5,483 <br /> 2019 : 5,323"
    },
    BZ: {
      name: "Belize",
      url: "continents3.php?id_pays=14&annee=2019",
      description: "2016 : 5,956 <br /> 2017 : 5,956 <br /> 2018 : 5,956"
    },
    BO: {
      name: "Bolivia",
      url: "continents3.php?id_pays=17&annee=2019",
      description: "2015 : 5,89 <br /> 2016 : 5,822 <br /> 2017 : 5,823 <br /> 2018 : 5,752 <br /> 2019 : 5,779"
    },
    BR: {
      name: "Brazil",
      url: "continents3.php?id_pays=20&annee=2019",
      description: "2015 : 6,983 <br /> 2016 : 6,952 <br /> 2017 : 6,635 <br /> 2018 : 6,419 <br /> 2019 : 6,3"
    },
    BN: {
      name: "Brunei Darussalam",
      url: "#N/A",
      description: "#N/A"
    },
    BT: {
      name: "Bhutan",
      url: "continents3.php?id_pays=16&annee=2019",
      description: "2015 : 5,253 <br /> 2016 : 5,196 <br /> 2017 : 5,011 <br /> 2018 : 5,082 <br /> 2019 : 5,082"
    },
    BW: {
      name: "Botswana",
      url: "continents3.php?id_pays=19&annee=2019",
      description: "2015 : 4,332 <br /> 2016 : 3,974 <br /> 2017 : 3,766 <br /> 2018 : 3,59 <br /> 2019 : 3,488"
    },
    CF: {
      name: "Central African Republic",
      url: "continents3.php?id_pays=27&annee=2019",
      description: "2015 : 3,678 <br /> 2017 : 2,693 <br /> 2018 : 3,083 <br /> 2019 : 3,083"
    },
    CA: {
      name: "Canada",
      url: "continents3.php?id_pays=26&annee=2019",
      description: "2015 : 7,427 <br /> 2016 : 7,404 <br /> 2017 : 7,316 <br /> 2018 : 7,328 <br /> 2019 : 7,278"
    },
    CH: {
      name: "Switzerland",
      url: "continents3.php?id_pays=144&annee=2019",
      description: "2015 : 7,587 <br /> 2016 : 7,509 <br /> 2017 : 7,494 <br /> 2018 : 7,487 <br /> 2019 : 7,48"
    },
    CL: {
      name: "Chile",
      url: "continents3.php?id_pays=29&annee=2019",
      description: "2015 : 6,67 <br /> 2016 : 6,705 <br /> 2017 : 6,652 <br /> 2018 : 6,476 <br /> 2019 : 6,444"
    },
    CN: {
      name: "China",
      url: "continents3.php?id_pays=30&annee=2019",
      description: "2015 : 5,14 <br /> 2016 : 5,245 <br /> 2017 : 5,273 <br /> 2018 : 5,246 <br /> 2019 : 5,191"
    },
    CI: {
      name: "Côte d'Ivoire",
      url: "#N/A",
      description: "#N/A"
    },
    CM: {
      name: "Cameroon",
      url: "continents3.php?id_pays=25&annee=2019",
      description: "2015 : 4,252 <br /> 2016 : 4,513 <br /> 2017 : 4,695 <br /> 2018 : 4,975 <br /> 2019 : 5,044"
    },
    CD: {
      name: "Democratic Republic of the Congo",
      url: "#N/A",
      description: "#N/A"
    },
    CG: {
      name: "Republic of Congo",
      url: "#N/A",
      description: "#N/A"
    },
    CO: {
      name: "Colombia",
      url: "continents3.php?id_pays=31&annee=2019",
      description: "2015 : 6,477 <br /> 2016 : 6,481 <br /> 2017 : 6,357 <br /> 2018 : 6,26 <br /> 2019 : 6,125"
    },
    CR: {
      name: "Costa Rica",
      url: "continents3.php?id_pays=35&annee=2019",
      description: "2015 : 7,226 <br /> 2016 : 7,087 <br /> 2017 : 7,079 <br /> 2018 : 7,072 <br /> 2019 : 7,167"
    },
    CU: {
      name: "Cuba",
      url: "#N/A",
      description: "#N/A"
    },
    CZ: {
      name: "Czech Republic",
      url: "continents3.php?id_pays=38&annee=2019",
      description: "2015 : 6,505 <br /> 2016 : 6,596 <br /> 2017 : 6,609 <br /> 2018 : 6,711 <br /> 2019 : 6,852"
    },
    DE: {
      name: "Germany",
      url: "continents3.php?id_pays=52&annee=2019",
      description: "2015 : 6,75 <br /> 2016 : 6,994 <br /> 2017 : 6,951 <br /> 2018 : 6,965 <br /> 2019 : 6,985"
    },
    DJ: {
      name: "Djibouti",
      url: "continents3.php?id_pays=40&annee=2019",
      description: "2015 : 4,369"
    },
    DK: {
      name: "Denmark",
      url: "continents3.php?id_pays=39&annee=2019",
      description: "2015 : 7,527 <br /> 2016 : 7,526 <br /> 2017 : 7,522 <br /> 2018 : 7,555 <br /> 2019 : 7,6"
    },
    DO: {
      name: "Dominican Republic",
      url: "continents3.php?id_pays=41&annee=2019",
      description: "2015 : 4,885 <br /> 2016 : 5,155 <br /> 2017 : 5,23 <br /> 2018 : 5,302 <br /> 2019 : 5,425"
    },
    DZ: {
      name: "Algeria",
      url: "continents3.php?id_pays=3&annee=2019",
      description: "2015 : 5,605 <br /> 2016 : 6,355 <br /> 2017 : 5,872 <br /> 2018 : 5,295 <br /> 2019 : 5,211"
    },
    EC: {
      name: "Ecuador",
      url: "continents3.php?id_pays=42&annee=2019",
      description: "2015 : 5,975 <br /> 2016 : 5,976 <br /> 2017 : 6,008 <br /> 2018 : 5,973 <br /> 2019 : 6,028"
    },
    EG: {
      name: "Egypt",
      url: "continents3.php?id_pays=43&annee=2019",
      description: "2015 : 4,194 <br /> 2016 : 4,362 <br /> 2017 : 4,735 <br /> 2018 : 4,419 <br /> 2019 : 4,166"
    },
    ER: {
      name: "Eritrea",
      url: "#N/A",
      description: "#N/A"
    },
    EE: {
      name: "Estonia",
      url: "continents3.php?id_pays=45&annee=2019",
      description: "2015 : 5,429 <br /> 2016 : 5,517 <br /> 2017 : 5,611 <br /> 2018 : 5,739 <br /> 2019 : 5,893"
    },
    ET: {
      name: "Ethiopia",
      url: "continents3.php?id_pays=46&annee=2019",
      description: "2015 : 4,512 <br /> 2016 : 4,508 <br /> 2017 : 4,46 <br /> 2018 : 4,35 <br /> 2019 : 4,286"
    },
    FI: {
      name: "Finland",
      url: "continents3.php?id_pays=47&annee=2019",
      description: "2015 : 7,406 <br /> 2016 : 7,413 <br /> 2017 : 7,469 <br /> 2018 : 7,632 <br /> 2019 : 7,769"
    },
    FJ: {
      name: "Fiji",
      url: "#N/A",
      description: "#N/A"
    },
    GA: {
      name: "Gabon",
      url: "continents3.php?id_pays=49&annee=2019",
      description: "2015 : 3,896 <br /> 2016 : 4,121 <br /> 2017 : 4,465 <br /> 2018 : 4,758 <br /> 2019 : 4,799"
    },
    GB: {
      name: "United Kingdom",
      url: "continents3.php?id_pays=160&annee=2019",
      description: "2015 : 6,867 <br /> 2016 : 6,725 <br /> 2017 : 6,714 <br /> 2018 : 7,19 <br /> 2019 : 7,054"
    },
    GE: {
      name: "Georgia",
      url: "continents3.php?id_pays=51&annee=2019",
      description: "2015 : 4,297 <br /> 2016 : 4,252 <br /> 2017 : 4,286 <br /> 2018 : 4,34 <br /> 2019 : 4,519"
    },
    GH: {
      name: "Ghana",
      url: "continents3.php?id_pays=53&annee=2019",
      description: "2015 : 4,633 <br /> 2016 : 4,276 <br /> 2017 : 4,12 <br /> 2018 : 4,657 <br /> 2019 : 4,996"
    },
    GN: {
      name: "Guinea",
      url: "continents3.php?id_pays=56&annee=2019",
      description: "2015 : 3,656 <br /> 2016 : 3,607 <br /> 2017 : 3,507 <br /> 2018 : 3,964 <br /> 2019 : 4,534"
    },
    GM: {
      name: "The Gambia",
      url: "#N/A",
      description: "#N/A"
    },
    GW: {
      name: "Guinea-Bissau",
      url: "#N/A",
      description: "#N/A"
    },
    GQ: {
      name: "Equatorial Guinea",
      url: "#N/A",
      description: "#N/A"
    },
    GR: {
      name: "Greece",
      url: "continents3.php?id_pays=54&annee=2019",
      description: "2015 : 4,857 <br /> 2016 : 5,033 <br /> 2017 : 5,227 <br /> 2018 : 5,358 <br /> 2019 : 5,287"
    },
    GL: {
      name: "Greenland",
      url: "#N/A",
      description: "#N/A"
    },
    GT: {
      name: "Guatemala",
      url: "continents3.php?id_pays=55&annee=2019",
      description: "2015 : 6,123 <br /> 2016 : 6,324 <br /> 2017 : 6,454 <br /> 2018 : 6,382 <br /> 2019 : 6,436"
    },
    GY: {
      name: "Guyana",
      url: "#N/A",
      description: "#N/A"
    },
    HN: {
      name: "Honduras",
      url: "continents3.php?id_pays=58&annee=2019",
      description: "2015 : 4,788 <br /> 2016 : 4,871 <br /> 2017 : 5,181 <br /> 2018 : 5,504 <br /> 2019 : 5,86"
    },
    HR: {
      name: "Croatia",
      url: "continents3.php?id_pays=36&annee=2019",
      description: "2015 : 5,759 <br /> 2016 : 5,488 <br /> 2017 : 5,293 <br /> 2018 : 5,321 <br /> 2019 : 5,432"
    },
    HT: {
      name: "Haiti",
      url: "continents3.php?id_pays=57&annee=2019",
      description: "2015 : 4,518 <br /> 2016 : 4,028 <br /> 2017 : 3,603 <br /> 2018 : 3,582 <br /> 2019 : 3,597"
    },
    HU: {
      name: "Hungary",
      url: "continents3.php?id_pays=60&annee=2019",
      description: "2015 : 4,8 <br /> 2016 : 5,145 <br /> 2017 : 5,324 <br /> 2018 : 5,62 <br /> 2019 : 5,758"
    },
    ID: {
      name: "Indonesia",
      url: "continents3.php?id_pays=63&annee=2019",
      description: "2015 : 5,399 <br /> 2016 : 5,314 <br /> 2017 : 5,262 <br /> 2018 : 5,093 <br /> 2019 : 5,192"
    },
    IN: {
      name: "India",
      url: "continents3.php?id_pays=62&annee=2019",
      description: "2015 : 4,565 <br /> 2016 : 4,404 <br /> 2017 : 4,315 <br /> 2018 : 4,19 <br /> 2019 : 4,015"
    },
    IE: {
      name: "Ireland",
      url: "continents3.php?id_pays=66&annee=2019",
      description: "2015 : 6,94 <br /> 2016 : 6,907 <br /> 2017 : 6,977 <br /> 2018 : 6,977 <br /> 2019 : 7,021"
    },
    IR: {
      name: "Iran",
      url: "continents3.php?id_pays=64&annee=2019",
      description: "2015 : 4,686 <br /> 2016 : 4,813 <br /> 2017 : 4,692 <br /> 2018 : 4,707 <br /> 2019 : 4,548"
    },
    IQ: {
      name: "Iraq",
      url: "continents3.php?id_pays=65&annee=2019",
      description: "2015 : 4,677 <br /> 2016 : 4,575 <br /> 2017 : 4,497 <br /> 2018 : 4,456 <br /> 2019 : 4,437"
    },
    IS: {
      name: "Iceland",
      url: "continents3.php?id_pays=61&annee=2019",
      description: "2015 : 7,561 <br /> 2016 : 7,501 <br /> 2017 : 7,504 <br /> 2018 : 7,495 <br /> 2019 : 7,494"
    },
    IL: {
      name: "Israel",
      url: "continents3.php?id_pays=67&annee=2019",
      description: "2015 : 7,278 <br /> 2016 : 7,267 <br /> 2017 : 7,213 <br /> 2018 : 6,814 <br /> 2019 : 7,139"
    },
    IT: {
      name: "Italy",
      url: "continents3.php?id_pays=68&annee=2019",
      description: "2015 : 5,948 <br /> 2016 : 5,977 <br /> 2017 : 5,964 <br /> 2018 : 6 <br /> 2019 : 6,223"
    },
    JM: {
      name: "Jamaica",
      url: "continents3.php?id_pays=70&annee=2019",
      description: "2015 : 5,709 <br /> 2016 : 5,51 <br /> 2017 : 5,311 <br /> 2018 : 5,89 <br /> 2019 : 5,89"
    },
    JO: {
      name: "Jordan",
      url: "continents3.php?id_pays=72&annee=2019",
      description: "2015 : 5,192 <br /> 2016 : 5,303 <br /> 2017 : 5,336 <br /> 2018 : 5,161 <br /> 2019 : 4,906"
    },
    JP: {
      name: "Japan",
      url: "continents3.php?id_pays=71&annee=2019",
      description: "2015 : 5,987 <br /> 2016 : 5,921 <br /> 2017 : 5,92 <br /> 2018 : 5,915 <br /> 2019 : 5,886"
    },
    KZ: {
      name: "Kazakhstan",
      url: "continents3.php?id_pays=73&annee=2019",
      description: "2015 : 5,855 <br /> 2016 : 5,919 <br /> 2017 : 5,819 <br /> 2018 : 5,79 <br /> 2019 : 5,809"
    },
    KE: {
      name: "Kenya",
      url: "continents3.php?id_pays=74&annee=2019",
      description: "2015 : 4,419 <br /> 2016 : 4,356 <br /> 2017 : 4,553 <br /> 2018 : 4,41 <br /> 2019 : 4,509"
    },
    KG: {
      name: "Kyrgyzstan",
      url: "continents3.php?id_pays=77&annee=2019",
      description: "2015 : 5,286 <br /> 2016 : 5,185 <br /> 2017 : 5,004 <br /> 2018 : 5,131 <br /> 2019 : 5,261"
    },
    KH: {
      name: "Cambodia",
      url: "continents3.php?id_pays=24&annee=2019",
      description: "2015 : 3,819 <br /> 2016 : 3,907 <br /> 2017 : 4,168 <br /> 2018 : 4,433 <br /> 2019 : 4,7"
    },
    KR: {
      name: "Republic of Korea",
      url: "#N/A",
      description: "#N/A"
    },
    XK: {
      name: "Kosovo",
      url: "continents3.php?id_pays=75&annee=2019",
      description: "2015 : 5,589 <br /> 2016 : 5,401 <br /> 2017 : 5,279 <br /> 2018 : 5,662 <br /> 2019 : 6,1"
    },
    KW: {
      name: "Kuwait",
      url: "continents3.php?id_pays=76&annee=2019",
      description: "2015 : 6,295 <br /> 2016 : 6,239 <br /> 2017 : 6,105 <br /> 2018 : 6,083 <br /> 2019 : 6,021"
    },
    LA: {
      name: "Lao PDR",
      url: "#N/A",
      description: "#N/A"
    },
    LB: {
      name: "Lebanon",
      url: "continents3.php?id_pays=80&annee=2019",
      description: "2015 : 4,839 <br /> 2016 : 5,129 <br /> 2017 : 5,225 <br /> 2018 : 5,358 <br /> 2019 : 5,197"
    },
    LR: {
      name: "Liberia",
      url: "continents3.php?id_pays=82&annee=2019",
      description: "2015 : 4,571 <br /> 2016 : 3,622 <br /> 2017 : 3,533 <br /> 2018 : 3,495 <br /> 2019 : 3,975"
    },
    LY: {
      name: "Libya",
      url: "continents3.php?id_pays=83&annee=2019",
      description: "2015 : 5,754 <br /> 2016 : 5,615 <br /> 2017 : 5,525 <br /> 2018 : 5,566 <br /> 2019 : 5,525"
    },
    LK: {
      name: "Sri Lanka",
      url: "continents3.php?id_pays=139&annee=2019",
      description: "2015 : 4,271 <br /> 2016 : 4,415 <br /> 2017 : 4,44 <br /> 2018 : 4,471 <br /> 2019 : 4,366"
    },
    LS: {
      name: "Lesotho",
      url: "continents3.php?id_pays=81&annee=2019",
      description: "2015 : 4,898 <br /> 2017 : 3,808 <br /> 2018 : 3,808 <br /> 2019 : 3,802"
    },
    LT: {
      name: "Lithuania",
      url: "continents3.php?id_pays=84&annee=2019",
      description: "2015 : 5,833 <br /> 2016 : 5,813 <br /> 2017 : 5,902 <br /> 2018 : 5,952 <br /> 2019 : 6,149"
    },
    LU: {
      name: "Luxembourg",
      url: "continents3.php?id_pays=85&annee=2019",
      description: "2015 : 6,946 <br /> 2016 : 6,871 <br /> 2017 : 6,863 <br /> 2018 : 6,91 <br /> 2019 : 7,09"
    },
    LV: {
      name: "Latvia",
      url: "continents3.php?id_pays=79&annee=2019",
      description: "2015 : 5,098 <br /> 2016 : 5,56 <br /> 2017 : 5,85 <br /> 2018 : 5,933 <br /> 2019 : 5,94"
    },
    MA: {
      name: "Morocco",
      url: "continents3.php?id_pays=98&annee=2019",
      description: "2015 : 5,013 <br /> 2016 : 5,151 <br /> 2017 : 5,235 <br /> 2018 : 5,254 <br /> 2019 : 5,208"
    },
    MD: {
      name: "Moldova",
      url: "continents3.php?id_pays=95&annee=2019",
      description: "2015 : 5,889 <br /> 2016 : 5,897 <br /> 2017 : 5,838 <br /> 2018 : 5,64 <br /> 2019 : 5,529"
    },
    MG: {
      name: "Madagascar",
      url: "continents3.php?id_pays=87&annee=2019",
      description: "2015 : 3,681 <br /> 2016 : 3,695 <br /> 2017 : 3,644 <br /> 2018 : 3,774 <br /> 2019 : 3,933"
    },
    MX: {
      name: "Mexico",
      url: "continents3.php?id_pays=94&annee=2019",
      description: "2015 : 7,187 <br /> 2016 : 6,778 <br /> 2017 : 6,578 <br /> 2018 : 6,488 <br /> 2019 : 6,595"
    },
    MK: {
      name: "Macedonia",
      url: "continents3.php?id_pays=86&annee=2019",
      description: "2015 : 5,007 <br /> 2016 : 5,121 <br /> 2017 : 5,175 <br /> 2018 : 5,185"
    },
    ML: {
      name: "Mali",
      url: "continents3.php?id_pays=90&annee=2019",
      description: "2015 : 3,995 <br /> 2016 : 4,073 <br /> 2017 : 4,19 <br /> 2018 : 4,447 <br /> 2019 : 4,39"
    },
    MM: {
      name: "Myanmar",
      url: "continents3.php?id_pays=100&annee=2019",
      description: "2015 : 4,307 <br /> 2016 : 4,395 <br /> 2017 : 4,545 <br /> 2018 : 4,308 <br /> 2019 : 4,36"
    },
    ME: {
      name: "Montenegro",
      url: "continents3.php?id_pays=97&annee=2019",
      description: "2015 : 5,192 <br /> 2016 : 5,161 <br /> 2017 : 5,237 <br /> 2018 : 5,347 <br /> 2019 : 5,523"
    },
    MN: {
      name: "Mongolia",
      url: "continents3.php?id_pays=96&annee=2019",
      description: "2015 : 4,874 <br /> 2016 : 4,907 <br /> 2017 : 4,955 <br /> 2018 : 5,125 <br /> 2019 : 5,285"
    },
    MZ: {
      name: "Mozambique",
      url: "continents3.php?id_pays=99&annee=2019",
      description: "2015 : 4,971 <br /> 2017 : 4,55 <br /> 2018 : 4,417 <br /> 2019 : 4,466"
    },
    MR: {
      name: "Mauritania",
      url: "continents3.php?id_pays=92&annee=2019",
      description: "2015 : 4,436 <br /> 2016 : 4,201 <br /> 2017 : 4,292 <br /> 2018 : 4,356 <br /> 2019 : 4,49"
    },
    MW: {
      name: "Malawi",
      url: "continents3.php?id_pays=88&annee=2019",
      description: "2015 : 4,292 <br /> 2016 : 4,156 <br /> 2017 : 3,97 <br /> 2018 : 3,587 <br /> 2019 : 3,41"
    },
    MY: {
      name: "Malaysia",
      url: "continents3.php?id_pays=89&annee=2019",
      description: "2015 : 5,77 <br /> 2016 : 6,005 <br /> 2017 : 6,084 <br /> 2018 : 6,322 <br /> 2019 : 5,339"
    },
    NA: {
      name: "Namibia",
      url: "continents3.php?id_pays=101&annee=2019",
      description: "2016 : 4,574 <br /> 2017 : 4,574 <br /> 2018 : 4,441 <br /> 2019 : 4,639"
    },
    NE: {
      name: "Niger",
      url: "continents3.php?id_pays=106&annee=2019",
      description: "2015 : 3,845 <br /> 2016 : 3,856 <br /> 2017 : 4,028 <br /> 2018 : 4,166 <br /> 2019 : 4,628"
    },
    NG: {
      name: "Nigeria",
      url: "continents3.php?id_pays=107&annee=2019",
      description: "2015 : 5,268 <br /> 2016 : 4,875 <br /> 2017 : 5,074 <br /> 2018 : 5,155 <br /> 2019 : 5,265"
    },
    NI: {
      name: "Nicaragua",
      url: "continents3.php?id_pays=105&annee=2019",
      description: "2015 : 5,828 <br /> 2016 : 5,992 <br /> 2017 : 6,071 <br /> 2018 : 6,141 <br /> 2019 : 6,105"
    },
    NL: {
      name: "Netherlands",
      url: "continents3.php?id_pays=103&annee=2019",
      description: "2015 : 7,378 <br /> 2016 : 7,339 <br /> 2017 : 7,377 <br /> 2018 : 7,441 <br /> 2019 : 7,488"
    },
    NO: {
      name: "Norway",
      url: "continents3.php?id_pays=111&annee=2019",
      description: "2015 : 7,522 <br /> 2016 : 7,498 <br /> 2017 : 7,537 <br /> 2018 : 7,594 <br /> 2019 : 7,554"
    },
    NP: {
      name: "Nepal",
      url: "continents3.php?id_pays=102&annee=2019",
      description: "2015 : 4,514 <br /> 2016 : 4,793 <br /> 2017 : 4,962 <br /> 2018 : 4,88 <br /> 2019 : 4,913"
    },
    NZ: {
      name: "New Zealand",
      url: "continents3.php?id_pays=104&annee=2019",
      description: "2015 : 7,286 <br /> 2016 : 7,334 <br /> 2017 : 7,314 <br /> 2018 : 7,324 <br /> 2019 : 7,307"
    },
    OM: {
      name: "Oman",
      url: "continents3.php?id_pays=112&annee=2019",
      description: "2015 : 6,853"
    },
    PK: {
      name: "Pakistan",
      url: "continents3.php?id_pays=113&annee=2019",
      description: "2015 : 5,194 <br /> 2016 : 5,132 <br /> 2017 : 5,269 <br /> 2018 : 5,472 <br /> 2019 : 5,653"
    },
    PA: {
      name: "Panama",
      url: "continents3.php?id_pays=115&annee=2019",
      description: "2015 : 6,786 <br /> 2016 : 6,701 <br /> 2017 : 6,452 <br /> 2018 : 6,43 <br /> 2019 : 6,321"
    },
    PE: {
      name: "Peru",
      url: "continents3.php?id_pays=117&annee=2019",
      description: "2015 : 5,824 <br /> 2016 : 5,743 <br /> 2017 : 5,715 <br /> 2018 : 5,663 <br /> 2019 : 5,697"
    },
    PH: {
      name: "Philippines",
      url: "continents3.php?id_pays=118&annee=2019",
      description: "2015 : 5,073 <br /> 2016 : 5,279 <br /> 2017 : 5,43 <br /> 2018 : 5,524 <br /> 2019 : 5,631"
    },
    PG: {
      name: "Papua New Guinea",
      url: "#N/A",
      description: "#N/A"
    },
    PL: {
      name: "Poland",
      url: "continents3.php?id_pays=119&annee=2019",
      description: "2015 : 5,791 <br /> 2016 : 5,835 <br /> 2017 : 5,973 <br /> 2018 : 6,123 <br /> 2019 : 6,182"
    },
    KP: {
      name: "Dem. Rep. Korea",
      url: "#N/A",
      description: "#N/A"
    },
    PT: {
      name: "Portugal",
      url: "continents3.php?id_pays=120&annee=2019",
      description: "2015 : 5,102 <br /> 2016 : 5,123 <br /> 2017 : 5,195 <br /> 2018 : 5,41 <br /> 2019 : 5,693"
    },
    PY: {
      name: "Paraguay",
      url: "continents3.php?id_pays=116&annee=2019",
      description: "2015 : 5,878 <br /> 2016 : 5,538 <br /> 2017 : 5,493 <br /> 2018 : 5,681 <br /> 2019 : 5,743"
    },
    PS: {
      name: "Palestine",
      url: "#N/A",
      description: "#N/A"
    },
    QA: {
      name: "Qatar",
      url: "continents3.php?id_pays=122&annee=2019",
      description: "2015 : 6,611 <br /> 2016 : 6,375 <br /> 2017 : 6,375 <br /> 2018 : 6,374 <br /> 2019 : 6,374"
    },
    RO: {
      name: "Romania",
      url: "continents3.php?id_pays=123&annee=2019",
      description: "2015 : 5,124 <br /> 2016 : 5,528 <br /> 2017 : 5,825 <br /> 2018 : 5,945 <br /> 2019 : 6,07"
    },
    RU: {
      name: "Russia",
      url: "continents3.php?id_pays=124&annee=2019",
      description: "2015 : 5,716 <br /> 2016 : 5,856 <br /> 2017 : 5,963 <br /> 2018 : 5,81 <br /> 2019 : 5,648"
    },
    RW: {
      name: "Rwanda",
      url: "continents3.php?id_pays=125&annee=2019",
      description: "2015 : 3,465 <br /> 2016 : 3,515 <br /> 2017 : 3,471 <br /> 2018 : 3,408 <br /> 2019 : 3,334"
    },
    EH: {
      name: "Western Sahara",
      url: "#N/A",
      description: "#N/A"
    },
    SA: {
      name: "Saudi Arabia",
      url: "continents3.php?id_pays=126&annee=2019",
      description: "2015 : 6,411 <br /> 2016 : 6,379 <br /> 2017 : 6,344 <br /> 2018 : 6,371 <br /> 2019 : 6,375"
    },
    SD: {
      name: "Sudan",
      url: "continents3.php?id_pays=140&annee=2019",
      description: "2015 : 4,55 <br /> 2016 : 4,139 <br /> 2017 : 4,139 <br /> 2018 : 4,139"
    },
    SS: {
      name: "South Sudan",
      url: "continents3.php?id_pays=137&annee=2019",
      description: "2016 : 3,832 <br /> 2017 : 3,591 <br /> 2018 : 3,254 <br /> 2019 : 2,853"
    },
    SN: {
      name: "Senegal",
      url: "continents3.php?id_pays=127&annee=2019",
      description: "2015 : 3,904 <br /> 2016 : 4,219 <br /> 2017 : 4,535 <br /> 2018 : 4,631 <br /> 2019 : 4,681"
    },
    SL: {
      name: "Sierra Leone",
      url: "continents3.php?id_pays=129&annee=2019",
      description: "2015 : 4,507 <br /> 2016 : 4,635 <br /> 2017 : 4,709 <br /> 2018 : 4,571 <br /> 2019 : 4,374"
    },
    SV: {
      name: "El Salvador",
      url: "continents3.php?id_pays=44&annee=2019",
      description: "2015 : 6,13 <br /> 2016 : 6,068 <br /> 2017 : 6,003 <br /> 2018 : 6,167 <br /> 2019 : 6,253"
    },
    RS: {
      name: "Serbia",
      url: "continents3.php?id_pays=128&annee=2019",
      description: "2015 : 5,123 <br /> 2016 : 5,177 <br /> 2017 : 5,395 <br /> 2018 : 5,398 <br /> 2019 : 5,603"
    },
    SR: {
      name: "Suriname",
      url: "continents3.php?id_pays=141&annee=2019",
      description: "2015 : 6,269 <br /> 2016 : 6,269"
    },
    SK: {
      name: "Slovakia",
      url: "continents3.php?id_pays=131&annee=2019",
      description: "2015 : 5,995 <br /> 2016 : 6,078 <br /> 2017 : 6,098 <br /> 2018 : 6,173 <br /> 2019 : 6,198"
    },
    SI: {
      name: "Slovenia",
      url: "continents3.php?id_pays=132&annee=2019",
      description: "2015 : 5,848 <br /> 2016 : 5,768 <br /> 2017 : 5,758 <br /> 2018 : 5,948 <br /> 2019 : 6,118"
    },
    SE: {
      name: "Sweden",
      url: "continents3.php?id_pays=143&annee=2019",
      description: "2015 : 7,364 <br /> 2016 : 7,291 <br /> 2017 : 7,284 <br /> 2018 : 7,314 <br /> 2019 : 7,343"
    },
    SZ: {
      name: "Swaziland",
      url: "continents3.php?id_pays=142&annee=2019",
      description: "2015 : 4,867 <br /> 2019 : 4,212"
    },
    SY: {
      name: "Syria",
      url: "continents3.php?id_pays=145&annee=2019",
      description: "2015 : 3,006 <br /> 2016 : 3,069 <br /> 2017 : 3,462 <br /> 2018 : 3,462 <br /> 2019 : 3,462"
    },
    TD: {
      name: "Chad",
      url: "continents3.php?id_pays=28&annee=2019",
      description: "2015 : 3,667 <br /> 2016 : 3,763 <br /> 2017 : 3,936 <br /> 2018 : 4,301 <br /> 2019 : 4,35"
    },
    TG: {
      name: "Togo",
      url: "continents3.php?id_pays=151&annee=2019",
      description: "2015 : 2,839 <br /> 2016 : 3,303 <br /> 2017 : 3,495 <br /> 2018 : 3,999 <br /> 2019 : 4,085"
    },
    TH: {
      name: "Thailand",
      url: "continents3.php?id_pays=150&annee=2019",
      description: "2015 : 6,455 <br /> 2016 : 6,474 <br /> 2017 : 6,424 <br /> 2018 : 6,072 <br /> 2019 : 6,008"
    },
    TJ: {
      name: "Tajikistan",
      url: "continents3.php?id_pays=148&annee=2019",
      description: "2015 : 4,786 <br /> 2016 : 4,996 <br /> 2017 : 5,041 <br /> 2018 : 5,199 <br /> 2019 : 5,467"
    },
    TM: {
      name: "Turkmenistan",
      url: "continents3.php?id_pays=156&annee=2019",
      description: "2015 : 5,548 <br /> 2016 : 5,658 <br /> 2017 : 5,822 <br /> 2018 : 5,636 <br /> 2019 : 5,247"
    },
    TL: {
      name: "Timor-Leste",
      url: "#N/A",
      description: "#N/A"
    },
    TN: {
      name: "Tunisia",
      url: "continents3.php?id_pays=154&annee=2019",
      description: "2015 : 4,739 <br /> 2016 : 5,045 <br /> 2017 : 4,805 <br /> 2018 : 4,592 <br /> 2019 : 4,461"
    },
    TR: {
      name: "Turkey",
      url: "continents3.php?id_pays=155&annee=2019",
      description: "2015 : 5,332 <br /> 2016 : 5,389 <br /> 2017 : 5,5 <br /> 2018 : 5,483 <br /> 2019 : 5,373"
    },
    TW: {
      name: "Taiwan",
      url: "continents3.php?id_pays=146&annee=2019",
      description: "2015 : 6,298 <br /> 2016 : 6,379 <br /> 2018 : 6,441 <br /> 2019 : 6,446"
    },
    TZ: {
      name: "Tanzania",
      url: "continents3.php?id_pays=149&annee=2019",
      description: "2015 : 3,781 <br /> 2016 : 3,666 <br /> 2017 : 3,349 <br /> 2018 : 3,303 <br /> 2019 : 3,231"
    },
    UG: {
      name: "Uganda",
      url: "continents3.php?id_pays=157&annee=2019",
      description: "2015 : 3,931 <br /> 2016 : 3,739 <br /> 2017 : 4,081 <br /> 2018 : 4,161 <br /> 2019 : 4,189"
    },
    UA: {
      name: "Ukraine",
      url: "continents3.php?id_pays=158&annee=2019",
      description: "2015 : 4,681 <br /> 2016 : 4,324 <br /> 2017 : 4,096 <br /> 2018 : 4,103 <br /> 2019 : 4,332"
    },
    UY: {
      name: "Uruguay",
      url: "continents3.php?id_pays=162&annee=2019",
      description: "2015 : 6,485 <br /> 2016 : 6,545 <br /> 2017 : 6,454 <br /> 2018 : 6,379 <br /> 2019 : 6,293"
    },
    US: {
      name: "United States",
      url: "continents3.php?id_pays=161&annee=2019",
      description: "2015 : 7,119 <br /> 2016 : 7,104 <br /> 2017 : 6,993 <br /> 2018 : 6,886 <br /> 2019 : 6,892"
    },
    UZ: {
      name: "Uzbekistan",
      url: "continents3.php?id_pays=163&annee=2019",
      description: "2015 : 6,003 <br /> 2016 : 5,987 <br /> 2017 : 5,971 <br /> 2018 : 6,096 <br /> 2019 : 6,174"
    },
    VE: {
      name: "Venezuela",
      url: "continents3.php?id_pays=164&annee=2019",
      description: "2015 : 6,81 <br /> 2016 : 6,084 <br /> 2017 : 5,25 <br /> 2018 : 4,806 <br /> 2019 : 4,707"
    },
    VN: {
      name: "Vietnam",
      url: "continents3.php?id_pays=165&annee=2019",
      description: "2015 : 5,36 <br /> 2016 : 5,061 <br /> 2017 : 5,074 <br /> 2018 : 5,103 <br /> 2019 : 5,175"
    },
    VU: {
      name: "Vanuatu",
      url: "#N/A",
      description: "#N/A"
    },
    YE: {
      name: "Yemen",
      url: "continents3.php?id_pays=166&annee=2019",
      description: "2015 : 4,077 <br /> 2016 : 3,724 <br /> 2017 : 3,593 <br /> 2018 : 3,355 <br /> 2019 : 3,38"
    },
    ZA: {
      name: "South Africa",
      url: "continents3.php?id_pays=135&annee=2019",
      description: "2015 : 4,642 <br /> 2016 : 4,459 <br /> 2017 : 4,829 <br /> 2018 : 4,724 <br /> 2019 : 4,722"
    },
    ZM: {
      name: "Zambia",
      url: "continents3.php?id_pays=167&annee=2019",
      description: "2015 : 5,129 <br /> 2016 : 4,795 <br /> 2017 : 4,514 <br /> 2018 : 4,377 <br /> 2019 : 4,107"
    },
    ZW: {
      name: "Zimbabwe",
      url: "continents3.php?id_pays=168&annee=2019",
      description: "2015 : 4,61 <br /> 2016 : 4,193 <br /> 2017 : 3,875 <br /> 2018 : 3,692 <br /> 2019 : 3,663"
    },
    SO: {
      name: "Somalia",
      url: "continents3.php?id_pays=133&annee=2019",
      description: "2016 : 5,44 <br /> 2017 : 5,151 <br /> 2018 : 4,982 <br /> 2019 : 4,668"
    },
    GF: {
      name: "France",
      url: "continents3.php?id_pays=48&annee=2019",
      description: "2015 : 6,575 <br /> 2016 : 6,478 <br /> 2017 : 6,442 <br /> 2018 : 6,489 <br /> 2019 : 6,592"
    },
    FR: {
      name: "France",
      url: "continents3.php?id_pays=48&annee=2019",
      description: "2015 : 6,575 <br /> 2016 : 6,478 <br /> 2017 : 6,442 <br /> 2018 : 6,489 <br /> 2019 : 6,592"
    },
    ES: {
      name: "Spain",
      url: "continents3.php?id_pays=138&annee=2019",
      description: "2015 : 6,329 <br /> 2016 : 6,361 <br /> 2017 : 6,403 <br /> 2018 : 6,31 <br /> 2019 : 6,354"
    },
    AW: {
      name: "Aruba",
      url: "#N/A",
      description: "#N/A"
    },
    AI: {
      name: "Anguilla",
      url: "#N/A",
      description: "#N/A"
    },
    AD: {
      name: "Andorra",
      url: "#N/A",
      description: "#N/A"
    },
    AG: {
      name: "Antigua and Barbuda",
      url: "#N/A",
      description: "#N/A"
    },
    BS: {
      name: "Bahamas",
      url: "#N/A",
      description: "#N/A"
    },
    BM: {
      name: "Bermuda",
      url: "#N/A",
      description: "#N/A"
    },
    BB: {
      name: "Barbados",
      url: "#N/A",
      description: "#N/A"
    },
    KM: {
      name: "Comoros",
      url: "continents3.php?id_pays=32&annee=2019",
      description: "2015 : 3,956 <br /> 2016 : 3,956 <br /> 2019 : 3,973"
    },
    CV: {
      name: "Cape Verde",
      url: "#N/A",
      description: "#N/A"
    },
    KY: {
      name: "Cayman Islands",
      url: "#N/A",
      description: "#N/A"
    },
    DM: {
      name: "Dominica",
      url: "#N/A",
      description: "#N/A"
    },
    FK: {
      name: "Falkland Islands",
      url: "#N/A",
      description: "#N/A"
    },
    FO: {
      name: "Faeroe Islands",
      url: "#N/A",
      description: "#N/A"
    },
    GD: {
      name: "Grenada",
      url: "#N/A",
      description: "#N/A"
    },
    HK: {
      name: "Hong Kong",
      url: "continents3.php?id_pays=59&annee=2019",
      description: "2015 : 5,474 <br /> 2016 : 5,458 <br /> 2018 : 5,43 <br /> 2019 : 5,43"
    },
    KN: {
      name: "Saint Kitts and Nevis",
      url: "#N/A",
      description: "#N/A"
    },
    LC: {
      name: "Saint Lucia",
      url: "#N/A",
      description: "#N/A"
    },
    LI: {
      name: "Liechtenstein",
      url: "#N/A",
      description: "#N/A"
    },
    MF: {
      name: "Saint Martin (French)",
      url: "#N/A",
      description: "#N/A"
    },
    MV: {
      name: "Maldives",
      url: "#N/A",
      description: "#N/A"
    },
    MT: {
      name: "Malta",
      url: "continents3.php?id_pays=91&annee=2019",
      description: "2015 : 6,302 <br /> 2016 : 6,488 <br /> 2017 : 6,527 <br /> 2018 : 6,627 <br /> 2019 : 6,726"
    },
    MS: {
      name: "Montserrat",
      url: "#N/A",
      description: "#N/A"
    },
    MU: {
      name: "Mauritius",
      url: "continents3.php?id_pays=93&annee=2019",
      description: "2015 : 5,477 <br /> 2016 : 5,648 <br /> 2017 : 5,629 <br /> 2018 : 5,891 <br /> 2019 : 5,888"
    },
    NC: {
      name: "New Caledonia",
      url: "#N/A",
      description: "#N/A"
    },
    NR: {
      name: "Nauru",
      url: "#N/A",
      description: "#N/A"
    },
    PN: {
      name: "Pitcairn Islands",
      url: "#N/A",
      description: "#N/A"
    },
    PR: {
      name: "Puerto Rico",
      url: "continents3.php?id_pays=121&annee=2019",
      description: "2016 : 7,039"
    },
    PF: {
      name: "French Polynesia",
      url: "#N/A",
      description: "#N/A"
    },
    SG: {
      name: "Singapore",
      url: "continents3.php?id_pays=130&annee=2019",
      description: "2015 : 6,798 <br /> 2016 : 6,739 <br /> 2017 : 6,572 <br /> 2018 : 6,343 <br /> 2019 : 6,262"
    },
    SB: {
      name: "Solomon Islands",
      url: "#N/A",
      description: "#N/A"
    },
    ST: {
      name: "São Tomé and Principe",
      url: "#N/A",
      description: "#N/A"
    },
    SX: {
      name: "Saint Martin (Dutch)",
      url: "#N/A",
      description: "#N/A"
    },
    SC: {
      name: "Seychelles",
      url: "#N/A",
      description: "#N/A"
    },
    TC: {
      name: "Turks and Caicos Islands",
      url: "#N/A",
      description: "#N/A"
    },
    TO: {
      name: "Tonga",
      url: "#N/A",
      description: "#N/A"
    },
    TT: {
      name: "Trinidad and Tobago",
      url: "continents3.php?id_pays=153&annee=2019",
      description: "2015 : 6,168 <br /> 2016 : 6,168 <br /> 2017 : 6,168 <br /> "
    },
    VC: {
      name: "Saint Vincent and the Grenadines",
      url: "#N/A",
      description: "#N/A"
    },
    VG: {
      name: "British Virgin Islands",
      url: "#N/A",
      description: "#N/A"
    },
    VI: {
      name: "United States Virgin Islands",
      url: "#N/A",
      description: "#N/A"
    },
    CY: {
      name: "Cyprus",
      url: "continents3.php?id_pays=37&annee=2019",
      description: "2015 : 5,689 <br /> 2016 : 5,546 <br /> 2017 : 5,621 <br /> 2018 : 5,762 <br /> 2019 : 6,046"
    },
    RE: {
      name: "Reunion (France)",
      url: "#N/A",
      description: "#N/A"
    },
    YT: {
      name: "Mayotte (France)",
      url: "#N/A",
      description: "#N/A"
    },
    MQ: {
      name: "Martinique (France)",
      url: "#N/A",
      description: "#N/A"
    },
    GP: {
      name: "Guadeloupe (France)",
      url: "#N/A",
      description: "#N/A"
    },
    CW: {
      name: "Curaco (Netherlands)",
      url: "#N/A",
      description: "#N/A"
    },
    IC: {
      name: "Canary Islands (Spain)",
      url: "#N/A",
      description: "#N/A"
    }
  },
  labels: {}
};