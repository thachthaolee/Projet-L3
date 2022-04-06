//Fichier de paramètre de la carte dans index.php

var simplemaps_worldmap_mapdata={
  main_settings: {
    //General settings
		width: "responsive",
    background_color: "none", //Pas besoin, transparent
    background_transparent: "yes",
    popups: "detect", // ou on_click ou on_hover
    
    //Paramètre des pays par défaut
		//State defaults
		state_description: "State description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
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
    url_new_tab: "no", //Pour ne pas ouvrir le lien dans une nouvelle fenêtre
    images_directory: "default",
    import_labels: "no",
    fade_time: 0.1,
    link_text: "View Website",
    //partie inutile
    /*state_image_url: "",
    state_image_position: "",
    location_image_url: ""*/ 
  },
  // On modifie les paramètres par défaut ici, tous les champs ont été rempli grâce à l'éditeur en ligne et un fichier excel en local
  // Le fichier excel qui a permis ces modifications est disponible dans le github dans le dossier Données (mais compliqué à )
  state_specific: {
    AF: {
      name: "Afghanistan",
      url: "continents3.php?id_pays=1&annee=avg",
      description: "2015 : 3,575 <br /> 2016 : 3,360 <br /> 2017 : 3,794 <br /> 2018 : 3,632 <br /> 2019 : 3,203",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    AO: {
      name: "Angola",
      url: "continents3.php?id_pays=4&annee=avg",
      description: "2015 : 4,033 <br /> 2016 : 3,866 <br /> 2017 : 3,795 <br /> 2018 : 3,795",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    AL: {
      name: "Albania",
      url: "continents3.php?id_pays=2&annee=avg",
      description: "2015 : 4,959 <br /> 2016 : 4,655 <br /> 2017 : 4,644 <br /> 2018 : 4,586 <br /> 2019 : 4,719",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    AE: {
      name: "United Arab Emirates",
      url: "continents3.php?id_pays=159&annee=avg",
      description: "2015 : 6,901 <br /> 2016 : 6,573 <br /> 2017 : 6,648 <br /> 2018 : 6,774 <br /> 2019 : 6,825",
      color: "#25e645",
      hover_color: "#008A17"
    },
    AR: {
      name: "Argentina",
      url: "continents3.php?id_pays=5&annee=avg",
      description: "2015 : 6,574 <br /> 2016 : 6,650 <br /> 2017 : 6,599 <br /> 2018 : 6,388 <br /> 2019 : 6,086",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    AM: {
      name: "Armenia",
      url: "continents3.php?id_pays=6&annee=avg",
      description: "2015 : 4,35 <br /> 2016 : 4,360 <br /> 2017 : 4,376 <br /> 2018 : 4,321 <br /> 2019 : 4,559",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    AU: {
      name: "Australia",
      url: "continents3.php?id_pays=7&annee=avg",
      description: "2015 : 7,284 <br /> 2016 : 7,313 <br /> 2017 : 7,284 <br /> 2018 : 7,272 <br /> 2019 : 7,228",
      color: "#25e645",
      hover_color: "#008A17"
    },
    AT: {
      name: "Austria",
      url: "continents3.php?id_pays=8&annee=avg",
      description: "2015 : 7,200 <br /> 2016 : 7,119 <br /> 2017 : 7,006 <br /> 2018 : 7,139 <br /> 2019 : 7,246",
      color: "#25e645",
      hover_color: "#008A17"
    },
    AZ: {
      name: "Azerbaijan",
      url: "continents3.php?id_pays=9&annee=avg",
      description: "2015 : 5,212 <br /> 2016 : 5,291 <br /> 2017 : 5,234 <br /> 2018 : 5,201 <br /> 2019 : 5,208",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BI: {
      name: "Burundi",
      url: "continents3.php?id_pays=23&annee=avg",
      description: "2015 : 2,905 <br /> 2016 : 2,905 <br /> 2017 : 2,905 <br /> 2018 : 2,905 <br /> 2019 : 3,775",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    BE: {
      name: "Belgium",
      url: "continents3.php?id_pays=13&annee=avg",
      description: "2015 : 6,937 <br /> 2016 : 6,929 <br /> 2017 : 6,891 <br /> 2018 : 6,927 <br /> 2019 : 6,923",
      color: "#25e645",
      hover_color: "#008A17"
    },
    BJ: {
      name: "Benin",
      url: "continents3.php?id_pays=15&annee=avg",
      description: "2015 : 3,340 <br /> 2016 : 3,484 <br /> 2017 : 3,657 <br /> 2018 : 4,141 <br /> 2019 : 4,883",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    BF: {
      name: "Burkina Faso",
      url: "continents3.php?id_pays=22&annee=avg",
      description: "2015 : 3,587 <br /> 2016 : 3,739 <br /> 2017 : 4,032 <br /> 2018 : 4,424 <br /> 2019 : 4,587",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    BD: {
      name: "Bangladesh",
      url: "continents3.php?id_pays=11&annee=avg",
      description: "2015 : 4,694 <br /> 2016 : 4,643 <br /> 2017 : 4,608 <br /> 2018 : 4,5 <br /> 2019 : 4,456",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    BG: {
      name: "Bulgaria",
      url: "continents3.php?id_pays=21&annee=avg",
      description: "2015 : 4,218 <br /> 2016 : 4,217 <br /> 2017 : 4,714 <br /> 2018 : 4,933 <br /> 2019 : 5,011",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    BH: {
      name: "Bahrain",
      url: "continents3.php?id_pays=10&annee=avg",
      description: "2015 : 5,960 <br /> 2016 : 6,218 <br /> 2017 : 6,087 <br /> 2018 : 6,105 <br /> 2019 : 6,199",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    BA: {
      name: "Bosnia and Herzegovina",
      url: "continents3.php?id_pays=18&annee=avg",
      description: "2015 : 4,949 <br /> 2016 : 5,163 <br /> 2017 : 5,182 <br /> 2018 : 5,129 <br /> 2019 : 5,386",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BY: {
      name: "Belarus",
      url: "continents3.php?id_pays=12&annee=avg",
      description: "2015 : 5,813 <br /> 2016 : 5,802 <br /> 2017 : 5,569 <br /> 2018 : 5,483 <br /> 2019 : 5,323",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BZ: {
      name: "Belize",
      url: "continents3.php?id_pays=14&annee=avg",
      description: "2016 : 5,956 <br /> 2017 : 5,956 <br /> 2018 : 5,956",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BO: {
      name: "Bolivia",
      url: "continents3.php?id_pays=17&annee=avg",
      description: "2015 : 5,890 <br /> 2016 : 5,822 <br /> 2017 : 5,823 <br /> 2018 : 5,752 <br /> 2019 : 5,779",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BR: {
      name: "Brazil",
      url: "continents3.php?id_pays=20&annee=avg",
      description: "2015 : 6,983 <br /> 2016 : 6,952 <br /> 2017 : 6,635 <br /> 2018 : 6,419 <br /> 2019 : 6,300",
      color: "#25e645",
      hover_color: "#008A17"
    },
    BN: {
      name: "Brunei Darussalam",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BT: {
      name: "Bhutan",
      url: "continents3.php?id_pays=16&annee=avg",
      description: "2015 : 5,253 <br /> 2016 : 5,196 <br /> 2017 : 5,011 <br /> 2018 : 5,082 <br /> 2019 : 5,082",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BW: {
      name: "Botswana",
      url: "continents3.php?id_pays=19&annee=avg",
      description: "2015 : 4,332 <br /> 2016 : 3,974 <br /> 2017 : 3,766 <br /> 2018 : 3,59 <br /> 2019 : 3,488",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    CF: {
      name: "Central African Republic",
      url: "continents3.php?id_pays=27&annee=avg",
      description: "2015 : 3,678 <br /> 2017 : 2,693 <br /> 2018 : 3,083 <br /> 2019 : 3,083",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    CA: {
      name: "Canada",
      url: "continents3.php?id_pays=26&annee=avg",
      description: "2015 : 7,427 <br /> 2016 : 7,404 <br /> 2017 : 7,316 <br /> 2018 : 7,328 <br /> 2019 : 7,278",
      color: "#25e645",
      hover_color: "#008A17"
    },
    CH: {
      name: "Switzerland",
      url: "continents3.php?id_pays=144&annee=avg",
      description: "2015 : 7,587 <br /> 2016 : 7,509 <br /> 2017 : 7,494 <br /> 2018 : 7,487 <br /> 2019 : 7,48",
      color: "#25e645",
      hover_color: "#008A17"
    },
    CL: {
      name: "Chile",
      url: "continents3.php?id_pays=29&annee=avg",
      description: "2015 : 6,67 <br /> 2016 : 6,705 <br /> 2017 : 6,652 <br /> 2018 : 6,476 <br /> 2019 : 6,444",
      color: "#25e645",
      hover_color: "#008A17"
    },
    CN: {
      name: "China",
      url: "continents3.php?id_pays=30&annee=avg",
      description: "2015 : 5,14 <br /> 2016 : 5,245 <br /> 2017 : 5,273 <br /> 2018 : 5,246 <br /> 2019 : 5,191",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CI: {
      name: "Côte d'Ivoire",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CM: {
      name: "Cameroon",
      url: "continents3.php?id_pays=25&annee=avg",
      description: "2015 : 4,252 <br /> 2016 : 4,513 <br /> 2017 : 4,695 <br /> 2018 : 4,975 <br /> 2019 : 5,044",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    CD: {
      name: "Democratic Republic of the Congo",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CG: {
      name: "Republic of Congo",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CO: {
      name: "Colombia",
      url: "continents3.php?id_pays=31&annee=avg",
      description: "2015 : 6,477 <br /> 2016 : 6,481 <br /> 2017 : 6,357 <br /> 2018 : 6,260 <br /> 2019 : 6,125",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    CR: {
      name: "Costa Rica",
      url: "continents3.php?id_pays=35&annee=avg",
      description: "2015 : 7,226 <br /> 2016 : 7,087 <br /> 2017 : 7,079 <br /> 2018 : 7,072 <br /> 2019 : 7,167",
      color: "#25e645",
      hover_color: "#008A17"
    },
    CU: {
      name: "Cuba",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CZ: {
      name: "Czech Republic",
      url: "continents3.php?id_pays=38&annee=avg",
      description: "2015 : 6,505 <br /> 2016 : 6,596 <br /> 2017 : 6,609 <br /> 2018 : 6,711 <br /> 2019 : 6,852",
      color: "#25e645",
      hover_color: "#008A17"
    },
    DE: {
      name: "Germany",
      url: "continents3.php?id_pays=52&annee=avg",
      description: "2015 : 6,750 <br /> 2016 : 6,994 <br /> 2017 : 6,951 <br /> 2018 : 6,965 <br /> 2019 : 6,985",
      color: "#25e645",
      hover_color: "#008A17"
    },
    DJ: {
      name: "Djibouti",
      url: "continents3.php?id_pays=40&annee=avg",
      description: "2015 : 4,369",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    DK: {
      name: "Denmark",
      url: "continents3.php?id_pays=39&annee=avg",
      description: "2015 : 7,527 <br /> 2016 : 7,526 <br /> 2017 : 7,522 <br /> 2018 : 7,555 <br /> 2019 : 7,600",
      color: "#25e645",
      hover_color: "#008A17"
    },
    DO: {
      name: "Dominican Republic",
      url: "continents3.php?id_pays=41&annee=avg",
      description: "2015 : 4,885 <br /> 2016 : 5,155 <br /> 2017 : 5,230 <br /> 2018 : 5,302 <br /> 2019 : 5,425",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    DZ: {
      name: "Algeria",
      url: "continents3.php?id_pays=3&annee=avg",
      description: "2015 : 5,605 <br /> 2016 : 6,355 <br /> 2017 : 5,872 <br /> 2018 : 5,295 <br /> 2019 : 5,211",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    EC: {
      name: "Ecuador",
      url: "continents3.php?id_pays=42&annee=avg",
      description: "2015 : 5,975 <br /> 2016 : 5,976 <br /> 2017 : 6,008 <br /> 2018 : 5,973 <br /> 2019 : 6,028",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    EG: {
      name: "Egypt",
      url: "continents3.php?id_pays=43&annee=avg",
      description: "2015 : 4,194 <br /> 2016 : 4,362 <br /> 2017 : 4,735 <br /> 2018 : 4,419 <br /> 2019 : 4,166",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    ER: {
      name: "Eritrea",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    EE: {
      name: "Estonia",
      url: "continents3.php?id_pays=45&annee=avg",
      description: "2015 : 5,429 <br /> 2016 : 5,517 <br /> 2017 : 5,611 <br /> 2018 : 5,739 <br /> 2019 : 5,893",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    ET: {
      name: "Ethiopia",
      url: "continents3.php?id_pays=46&annee=avg",
      description: "2015 : 4,512 <br /> 2016 : 4,508 <br /> 2017 : 4,460 <br /> 2018 : 4,350 <br /> 2019 : 4,286",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    FI: {
      name: "Finland",
      url: "continents3.php?id_pays=47&annee=avg",
      description: "2015 : 7,406 <br /> 2016 : 7,413 <br /> 2017 : 7,469 <br /> 2018 : 7,632 <br /> 2019 : 7,769",
      color: "#25e645",
      hover_color: "#008A17"
    },
    FJ: {
      name: "Fiji",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GA: {
      name: "Gabon",
      url: "continents3.php?id_pays=49&annee=avg",
      description: "2015 : 3,896 <br /> 2016 : 4,121 <br /> 2017 : 4,465 <br /> 2018 : 4,758 <br /> 2019 : 4,799",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    GB: {
      name: "United Kingdom",
      url: "continents3.php?id_pays=160&annee=avg",
      description: "2015 : 6,867 <br /> 2016 : 6,725 <br /> 2017 : 6,714 <br /> 2018 : 7,19 <br /> 2019 : 7,054",
      color: "#25e645",
      hover_color: "#008A17"
    },
    GE: {
      name: "Georgia",
      url: "continents3.php?id_pays=51&annee=avg",
      description: "2015 : 4,297 <br /> 2016 : 4,252 <br /> 2017 : 4,286 <br /> 2018 : 4,340 <br /> 2019 : 4,519",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    GH: {
      name: "Ghana",
      url: "continents3.php?id_pays=53&annee=avg",
      description: "2015 : 4,633 <br /> 2016 : 4,276 <br /> 2017 : 4,120 <br /> 2018 : 4,657 <br /> 2019 : 4,996",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    GN: {
      name: "Guinea",
      url: "continents3.php?id_pays=56&annee=avg",
      description: "2015 : 3,656 <br /> 2016 : 3,607 <br /> 2017 : 3,507 <br /> 2018 : 3,964 <br /> 2019 : 4,534",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    GM: {
      name: "The Gambia",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GW: {
      name: "Guinea-Bissau",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GQ: {
      name: "Equatorial Guinea",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GR: {
      name: "Greece",
      url: "continents3.php?id_pays=54&annee=avg",
      description: "2015 : 4,857 <br /> 2016 : 5,033 <br /> 2017 : 5,227 <br /> 2018 : 5,358 <br /> 2019 : 5,287",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GL: {
      name: "Greenland",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GT: {
      name: "Guatemala",
      url: "continents3.php?id_pays=55&annee=avg",
      description: "2015 : 6,123 <br /> 2016 : 6,324 <br /> 2017 : 6,454 <br /> 2018 : 6,382 <br /> 2019 : 6,436",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    GY: {
      name: "Guyana",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    HN: {
      name: "Honduras",
      url: "continents3.php?id_pays=58&annee=avg",
      description: "2015 : 4,788 <br /> 2016 : 4,871 <br /> 2017 : 5,181 <br /> 2018 : 5,504 <br /> 2019 : 5,860",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    HR: {
      name: "Croatia",
      url: "continents3.php?id_pays=36&annee=avg",
      description: "2015 : 5,759 <br /> 2016 : 5,488 <br /> 2017 : 5,293 <br /> 2018 : 5,321 <br /> 2019 : 5,432",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    HT: {
      name: "Haiti",
      url: "continents3.php?id_pays=57&annee=avg",
      description: "2015 : 4,518 <br /> 2016 : 4,028 <br /> 2017 : 3,603 <br /> 2018 : 3,582 <br /> 2019 : 3,597",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    HU: {
      name: "Hungary",
      url: "continents3.php?id_pays=60&annee=avg",
      description: "2015 : 4,800 <br /> 2016 : 5,145 <br /> 2017 : 5,324 <br /> 2018 : 5,620 <br /> 2019 : 5,758",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    ID: {
      name: "Indonesia",
      url: "continents3.php?id_pays=63&annee=avg",
      description: "2015 : 5,399 <br /> 2016 : 5,314 <br /> 2017 : 5,262 <br /> 2018 : 5,093 <br /> 2019 : 5,192",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    IN: {
      name: "India",
      url: "continents3.php?id_pays=62&annee=avg",
      description: "2015 : 4,565 <br /> 2016 : 4,404 <br /> 2017 : 4,315 <br /> 2018 : 4,190 <br /> 2019 : 4,015",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    IE: {
      name: "Ireland",
      url: "continents3.php?id_pays=66&annee=avg",
      description: "2015 : 6,940 <br /> 2016 : 6,907 <br /> 2017 : 6,977 <br /> 2018 : 6,977 <br /> 2019 : 7,021",
      color: "#25e645",
      hover_color: "#008A17"
    },
    IR: {
      name: "Iran",
      url: "continents3.php?id_pays=64&annee=avg",
      description: "2015 : 4,686 <br /> 2016 : 4,813 <br /> 2017 : 4,692 <br /> 2018 : 4,707 <br /> 2019 : 4,548",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    IQ: {
      name: "Iraq",
      url: "continents3.php?id_pays=65&annee=avg",
      description: "2015 : 4,677 <br /> 2016 : 4,575 <br /> 2017 : 4,497 <br /> 2018 : 4,456 <br /> 2019 : 4,437",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    IS: {
      name: "Iceland",
      url: "continents3.php?id_pays=61&annee=avg",
      description: "2015 : 7,561 <br /> 2016 : 7,501 <br /> 2017 : 7,504 <br /> 2018 : 7,495 <br /> 2019 : 7,494",
      color: "#25e645",
      hover_color: "#008A17"
    },
    IL: {
      name: "Israel",
      url: "continents3.php?id_pays=67&annee=avg",
      description: "2015 : 7,278 <br /> 2016 : 7,267 <br /> 2017 : 7,213 <br /> 2018 : 6,814 <br /> 2019 : 7,139",
      color: "#25e645",
      hover_color: "#008A17"
    },
    IT: {
      name: "Italy",
      url: "continents3.php?id_pays=68&annee=avg",
      description: "2015 : 5,948 <br /> 2016 : 5,977 <br /> 2017 : 5,964 <br /> 2018 : 6 <br /> 2019 : 6,223",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    JM: {
      name: "Jamaica",
      url: "continents3.php?id_pays=70&annee=avg",
      description: "2015 : 5,709 <br /> 2016 : 5,510 <br /> 2017 : 5,311 <br /> 2018 : 5,890 <br /> 2019 : 5,890",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    JO: {
      name: "Jordan",
      url: "continents3.php?id_pays=72&annee=avg",
      description: "2015 : 5,192 <br /> 2016 : 5,303 <br /> 2017 : 5,336 <br /> 2018 : 5,161 <br /> 2019 : 4,906",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    JP: {
      name: "Japan",
      url: "continents3.php?id_pays=71&annee=avg",
      description: "2015 : 5,987 <br /> 2016 : 5,921 <br /> 2017 : 5,920 <br /> 2018 : 5,915 <br /> 2019 : 5,886",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KZ: {
      name: "Kazakhstan",
      url: "continents3.php?id_pays=73&annee=avg",
      description: "2015 : 5,855 <br /> 2016 : 5,919 <br /> 2017 : 5,819 <br /> 2018 : 5,790 <br /> 2019 : 5,809",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KE: {
      name: "Kenya",
      url: "continents3.php?id_pays=74&annee=avg",
      description: "2015 : 4,419 <br /> 2016 : 4,356 <br /> 2017 : 4,553 <br /> 2018 : 4,410 <br /> 2019 : 4,509",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    KG: {
      name: "Kyrgyzstan",
      url: "continents3.php?id_pays=77&annee=avg",
      description: "2015 : 5,286 <br /> 2016 : 5,185 <br /> 2017 : 5,004 <br /> 2018 : 5,131 <br /> 2019 : 5,261",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KH: {
      name: "Cambodia",
      url: "continents3.php?id_pays=24&annee=avg",
      description: "2015 : 3,819 <br /> 2016 : 3,907 <br /> 2017 : 4,168 <br /> 2018 : 4,433 <br /> 2019 : 4,700",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    KR: {
      name: "Republic of Korea",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    XK: {
      name: "Kosovo",
      url: "continents3.php?id_pays=75&annee=avg",
      description: "2015 : 5,589 <br /> 2016 : 5,401 <br /> 2017 : 5,279 <br /> 2018 : 5,662 <br /> 2019 : 6,100",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KW: {
      name: "Kuwait",
      url: "continents3.php?id_pays=76&annee=avg",
      description: "2015 : 6,295 <br /> 2016 : 6,239 <br /> 2017 : 6,105 <br /> 2018 : 6,083 <br /> 2019 : 6,021",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    LA: {
      name: "Lao PDR",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    LB: {
      name: "Lebanon",
      url: "continents3.php?id_pays=80&annee=avg",
      description: "2015 : 4,839 <br /> 2016 : 5,129 <br /> 2017 : 5,225 <br /> 2018 : 5,358 <br /> 2019 : 5,197",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    LR: {
      name: "Liberia",
      url: "continents3.php?id_pays=82&annee=avg",
      description: "2015 : 4,571 <br /> 2016 : 3,622 <br /> 2017 : 3,533 <br /> 2018 : 3,495 <br /> 2019 : 3,975",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    LY: {
      name: "Libya",
      url: "continents3.php?id_pays=83&annee=avg",
      description: "2015 : 5,754 <br /> 2016 : 5,615 <br /> 2017 : 5,525 <br /> 2018 : 5,566 <br /> 2019 : 5,525",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    LK: {
      name: "Sri Lanka",
      url: "continents3.php?id_pays=139&annee=avg",
      description: "2015 : 4,271 <br /> 2016 : 4,415 <br /> 2017 : 4,440 <br /> 2018 : 4,471 <br /> 2019 : 4,366",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    LS: {
      name: "Lesotho",
      url: "continents3.php?id_pays=81&annee=avg",
      description: "2015 : 4,898 <br /> 2017 : 3,808 <br /> 2018 : 3,808 <br /> 2019 : 3,802",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    LT: {
      name: "Lithuania",
      url: "continents3.php?id_pays=84&annee=avg",
      description: "2015 : 5,833 <br /> 2016 : 5,813 <br /> 2017 : 5,902 <br /> 2018 : 5,952 <br /> 2019 : 6,149",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    LU: {
      name: "Luxembourg",
      url: "continents3.php?id_pays=85&annee=avg",
      description: "2015 : 6,946 <br /> 2016 : 6,871 <br /> 2017 : 6,863 <br /> 2018 : 6,910 <br /> 2019 : 7,090",
      color: "#25e645",
      hover_color: "#008A17"
    },
    LV: {
      name: "Latvia",
      url: "continents3.php?id_pays=79&annee=avg",
      description: "2015 : 5,098 <br /> 2016 : 5,560 <br /> 2017 : 5,850 <br /> 2018 : 5,933 <br /> 2019 : 5,940",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MA: {
      name: "Morocco",
      url: "continents3.php?id_pays=98&annee=avg",
      description: "2015 : 5,013 <br /> 2016 : 5,151 <br /> 2017 : 5,235 <br /> 2018 : 5,254 <br /> 2019 : 5,208",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MD: {
      name: "Moldova",
      url: "continents3.php?id_pays=95&annee=avg",
      description: "2015 : 5,889 <br /> 2016 : 5,897 <br /> 2017 : 5,838 <br /> 2018 : 5,64 <br /> 2019 : 5,529",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MG: {
      name: "Madagascar",
      url: "continents3.php?id_pays=87&annee=avg",
      description: "2015 : 3,681 <br /> 2016 : 3,695 <br /> 2017 : 3,644 <br /> 2018 : 3,774 <br /> 2019 : 3,933",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    MX: {
      name: "Mexico",
      url: "continents3.php?id_pays=94&annee=avg",
      description: "2015 : 7,187 <br /> 2016 : 6,778 <br /> 2017 : 6,578 <br /> 2018 : 6,488 <br /> 2019 : 6,595",
      color: "#25e645",
      hover_color: "#008A17"
    },
    MK: {
      name: "Macedonia",
      url: "continents3.php?id_pays=86&annee=avg",
      description: "2015 : 5,007 <br /> 2016 : 5,121 <br /> 2017 : 5,175 <br /> 2018 : 5,185",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    ML: {
      name: "Mali",
      url: "continents3.php?id_pays=90&annee=avg",
      description: "2015 : 3,995 <br /> 2016 : 4,073 <br /> 2017 : 4,19 <br /> 2018 : 4,447 <br /> 2019 : 4,390",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    MM: {
      name: "Myanmar",
      url: "continents3.php?id_pays=100&annee=avg",
      description: "2015 : 4,307 <br /> 2016 : 4,395 <br /> 2017 : 4,545 <br /> 2018 : 4,308 <br /> 2019 : 4,360",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    ME: {
      name: "Montenegro",
      url: "continents3.php?id_pays=97&annee=avg",
      description: "2015 : 5,192 <br /> 2016 : 5,161 <br /> 2017 : 5,237 <br /> 2018 : 5,347 <br /> 2019 : 5,523",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MN: {
      name: "Mongolia",
      url: "continents3.php?id_pays=96&annee=avg",
      description: "2015 : 4,874 <br /> 2016 : 4,907 <br /> 2017 : 4,955 <br /> 2018 : 5,125 <br /> 2019 : 5,285",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MZ: {
      name: "Mozambique",
      url: "continents3.php?id_pays=99&annee=avg",
      description: "2015 : 4,971 <br /> 2017 : 4,550 <br /> 2018 : 4,417 <br /> 2019 : 4,466",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    MR: {
      name: "Mauritania",
      url: "continents3.php?id_pays=92&annee=avg",
      description: "2015 : 4,436 <br /> 2016 : 4,201 <br /> 2017 : 4,292 <br /> 2018 : 4,356 <br /> 2019 : 4,490",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    MW: {
      name: "Malawi",
      url: "continents3.php?id_pays=88&annee=avg",
      description: "2015 : 4,292 <br /> 2016 : 4,156 <br /> 2017 : 3,970 <br /> 2018 : 3,587 <br /> 2019 : 3,410",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    MY: {
      name: "Malaysia",
      url: "continents3.php?id_pays=89&annee=avg",
      description: "2015 : 5,770 <br /> 2016 : 6,005 <br /> 2017 : 6,084 <br /> 2018 : 6,322 <br /> 2019 : 5,339",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    NA: {
      name: "Namibia",
      url: "continents3.php?id_pays=101&annee=avg",
      description: "2016 : 4,574 <br /> 2017 : 4,574 <br /> 2018 : 4,441 <br /> 2019 : 4,639",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    NE: {
      name: "Niger",
      url: "continents3.php?id_pays=106&annee=avg",
      description: "2015 : 3,845 <br /> 2016 : 3,856 <br /> 2017 : 4,028 <br /> 2018 : 4,166 <br /> 2019 : 4,628",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    NG: {
      name: "Nigeria",
      url: "continents3.php?id_pays=107&annee=avg",
      description: "2015 : 5,268 <br /> 2016 : 4,875 <br /> 2017 : 5,074 <br /> 2018 : 5,155 <br /> 2019 : 5,265",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    NI: {
      name: "Nicaragua",
      url: "continents3.php?id_pays=105&annee=avg",
      description: "2015 : 5,828 <br /> 2016 : 5,992 <br /> 2017 : 6,071 <br /> 2018 : 6,141 <br /> 2019 : 6,105",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    NL: {
      name: "Netherlands",
      url: "continents3.php?id_pays=103&annee=avg",
      description: "2015 : 7,378 <br /> 2016 : 7,339 <br /> 2017 : 7,377 <br /> 2018 : 7,441 <br /> 2019 : 7,488",
      color: "#25e645",
      hover_color: "#008A17"
    },
    NO: {
      name: "Norway",
      url: "continents3.php?id_pays=111&annee=avg",
      description: "2015 : 7,522 <br /> 2016 : 7,498 <br /> 2017 : 7,537 <br /> 2018 : 7,594 <br /> 2019 : 7,554",
      color: "#25e645",
      hover_color: "#008A17"
    },
    NP: {
      name: "Nepal",
      url: "continents3.php?id_pays=102&annee=avg",
      description: "2015 : 4,514 <br /> 2016 : 4,793 <br /> 2017 : 4,962 <br /> 2018 : 4,880 <br /> 2019 : 4,913",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    NZ: {
      name: "New Zealand",
      url: "continents3.php?id_pays=104&annee=avg",
      description: "2015 : 7,286 <br /> 2016 : 7,334 <br /> 2017 : 7,314 <br /> 2018 : 7,324 <br /> 2019 : 7,307",
      color: "#25e645",
      hover_color: "#008A17"
    },
    OM: {
      name: "Oman",
      url: "continents3.php?id_pays=112&annee=avg",
      description: "2015 : 6,853",
      color: "#25e645",
      hover_color: "#008A17"
    },
    PK: {
      name: "Pakistan",
      url: "continents3.php?id_pays=113&annee=avg",
      description: "2015 : 5,194 <br /> 2016 : 5,132 <br /> 2017 : 5,269 <br /> 2018 : 5,472 <br /> 2019 : 5,653",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PA: {
      name: "Panama",
      url: "continents3.php?id_pays=115&annee=avg",
      description: "2015 : 6,786 <br /> 2016 : 6,701 <br /> 2017 : 6,452 <br /> 2018 : 6,430 <br /> 2019 : 6,321",
      color: "#25e645",
      hover_color: "#008A17"
    },
    PE: {
      name: "Peru",
      url: "continents3.php?id_pays=117&annee=avg",
      description: "2015 : 5,824 <br /> 2016 : 5,743 <br /> 2017 : 5,715 <br /> 2018 : 5,663 <br /> 2019 : 5,697",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PH: {
      name: "Philippines",
      url: "continents3.php?id_pays=118&annee=avg",
      description: "2015 : 5,073 <br /> 2016 : 5,279 <br /> 2017 : 5,430 <br /> 2018 : 5,524 <br /> 2019 : 5,631",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PG: {
      name: "Papua New Guinea",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PL: {
      name: "Poland",
      url: "continents3.php?id_pays=119&annee=avg",
      description: "2015 : 5,791 <br /> 2016 : 5,835 <br /> 2017 : 5,973 <br /> 2018 : 6,123 <br /> 2019 : 6,182",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    KP: {
      name: "Dem. Rep. Korea",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PT: {
      name: "Portugal",
      url: "continents3.php?id_pays=120&annee=avg",
      description: "2015 : 5,102 <br /> 2016 : 5,123 <br /> 2017 : 5,195 <br /> 2018 : 5,410 <br /> 2019 : 5,693",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PY: {
      name: "Paraguay",
      url: "continents3.php?id_pays=116&annee=avg",
      description: "2015 : 5,878 <br /> 2016 : 5,538 <br /> 2017 : 5,493 <br /> 2018 : 5,681 <br /> 2019 : 5,743",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PS: {
      name: "Palestine",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    QA: {
      name: "Qatar",
      url: "continents3.php?id_pays=122&annee=avg",
      description: "2015 : 6,611 <br /> 2016 : 6,375 <br /> 2017 : 6,375 <br /> 2018 : 6,374 <br /> 2019 : 6,374",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    RO: {
      name: "Romania",
      url: "continents3.php?id_pays=123&annee=avg",
      description: "2015 : 5,124 <br /> 2016 : 5,528 <br /> 2017 : 5,825 <br /> 2018 : 5,945 <br /> 2019 : 6,070",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    RU: {
      name: "Russia",
      url: "continents3.php?id_pays=124&annee=avg",
      description: "2015 : 5,716 <br /> 2016 : 5,856 <br /> 2017 : 5,963 <br /> 2018 : 5,810 <br /> 2019 : 5,648",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    RW: {
      name: "Rwanda",
      url: "continents3.php?id_pays=125&annee=avg",
      description: "2015 : 3,465 <br /> 2016 : 3,515 <br /> 2017 : 3,471 <br /> 2018 : 3,408 <br /> 2019 : 3,334",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    EH: {
      name: "Western Sahara",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    SA: {
      name: "Saudi Arabia",
      url: "continents3.php?id_pays=126&annee=avg",
      description: "2015 : 6,411 <br /> 2016 : 6,379 <br /> 2017 : 6,344 <br /> 2018 : 6,371 <br /> 2019 : 6,375",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    SD: {
      name: "Sudan",
      url: "continents3.php?id_pays=140&annee=avg",
      description: "2015 : 4,550 <br /> 2016 : 4,139 <br /> 2017 : 4,139 <br /> 2018 : 4,139",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    SS: {
      name: "South Sudan",
      url: "continents3.php?id_pays=137&annee=avg",
      description: "2016 : 3,832 <br /> 2017 : 3,591 <br /> 2018 : 3,254 <br /> 2019 : 2,853",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    SN: {
      name: "Senegal",
      url: "continents3.php?id_pays=127&annee=avg",
      description: "2015 : 3,904 <br /> 2016 : 4,219 <br /> 2017 : 4,535 <br /> 2018 : 4,631 <br /> 2019 : 4,681",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    SL: {
      name: "Sierra Leone",
      url: "continents3.php?id_pays=129&annee=avg",
      description: "2015 : 4,507 <br /> 2016 : 4,635 <br /> 2017 : 4,709 <br /> 2018 : 4,571 <br /> 2019 : 4,374",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    SV: {
      name: "El Salvador",
      url: "continents3.php?id_pays=44&annee=avg",
      description: "2015 : 6,130 <br /> 2016 : 6,068 <br /> 2017 : 6,003 <br /> 2018 : 6,167 <br /> 2019 : 6,253",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    RS: {
      name: "Serbia",
      url: "continents3.php?id_pays=128&annee=avg",
      description: "2015 : 5,123 <br /> 2016 : 5,177 <br /> 2017 : 5,395 <br /> 2018 : 5,398 <br /> 2019 : 5,603",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    SR: {
      name: "Suriname",
      url: "continents3.php?id_pays=141&annee=avg",
      description: "2015 : 6,269 <br /> 2016 : 6,269",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    SK: {
      name: "Slovakia",
      url: "continents3.php?id_pays=131&annee=avg",
      description: "2015 : 5,995 <br /> 2016 : 6,078 <br /> 2017 : 6,098 <br /> 2018 : 6,173 <br /> 2019 : 6,198",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    SI: {
      name: "Slovenia",
      url: "continents3.php?id_pays=132&annee=avg",
      description: "2015 : 5,848 <br /> 2016 : 5,768 <br /> 2017 : 5,758 <br /> 2018 : 5,948 <br /> 2019 : 6,118",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    SE: {
      name: "Sweden",
      url: "continents3.php?id_pays=143&annee=avg",
      description: "2015 : 7,364 <br /> 2016 : 7,291 <br /> 2017 : 7,284 <br /> 2018 : 7,314 <br /> 2019 : 7,343",
      color: "#25e645",
      hover_color: "#008A17"
    },
    SZ: {
      name: "Swaziland",
      url: "continents3.php?id_pays=142&annee=avg",
      description: "2015 : 4,867 <br /> 2019 : 4,212",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    SY: {
      name: "Syria",
      url: "continents3.php?id_pays=145&annee=avg",
      description: "2015 : 3,006 <br /> 2016 : 3,069 <br /> 2017 : 3,462 <br /> 2018 : 3,462 <br /> 2019 : 3,462",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    TD: {
      name: "Chad",
      url: "continents3.php?id_pays=28&annee=avg",
      description: "2015 : 3,667 <br /> 2016 : 3,763 <br /> 2017 : 3,936 <br /> 2018 : 4,301 <br /> 2019 : 4,350",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    TG: {
      name: "Togo",
      url: "continents3.php?id_pays=151&annee=avg",
      description: "2015 : 2,839 <br /> 2016 : 3,303 <br /> 2017 : 3,495 <br /> 2018 : 3,999 <br /> 2019 : 4,085",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    TH: {
      name: "Thailand",
      url: "continents3.php?id_pays=150&annee=avg",
      description: "2015 : 6,455 <br /> 2016 : 6,474 <br /> 2017 : 6,424 <br /> 2018 : 6,072 <br /> 2019 : 6,008",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    TJ: {
      name: "Tajikistan",
      url: "continents3.php?id_pays=148&annee=avg",
      description: "2015 : 4,786 <br /> 2016 : 4,996 <br /> 2017 : 5,041 <br /> 2018 : 5,199 <br /> 2019 : 5,467",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TM: {
      name: "Turkmenistan",
      url: "continents3.php?id_pays=156&annee=avg",
      description: "2015 : 5,548 <br /> 2016 : 5,658 <br /> 2017 : 5,822 <br /> 2018 : 5,636 <br /> 2019 : 5,247",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TL: {
      name: "Timor-Leste",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TN: {
      name: "Tunisia",
      url: "continents3.php?id_pays=154&annee=avg",
      description: "2015 : 4,739 <br /> 2016 : 5,045 <br /> 2017 : 4,805 <br /> 2018 : 4,592 <br /> 2019 : 4,461",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    TR: {
      name: "Turkey",
      url: "continents3.php?id_pays=155&annee=avg",
      description: "2015 : 5,332 <br /> 2016 : 5,389 <br /> 2017 : 5,500 <br /> 2018 : 5,483 <br /> 2019 : 5,373",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TW: {
      name: "Taiwan",
      url: "continents3.php?id_pays=146&annee=avg",
      description: "2015 : 6,298 <br /> 2016 : 6,379 <br /> 2018 : 6,441 <br /> 2019 : 6,446",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    TZ: {
      name: "Tanzania",
      url: "continents3.php?id_pays=149&annee=avg",
      description: "2015 : 3,781 <br /> 2016 : 3,666 <br /> 2017 : 3,349 <br /> 2018 : 3,303 <br /> 2019 : 3,231",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    UG: {
      name: "Uganda",
      url: "continents3.php?id_pays=157&annee=avg",
      description: "2015 : 3,931 <br /> 2016 : 3,739 <br /> 2017 : 4,081 <br /> 2018 : 4,161 <br /> 2019 : 4,189",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    UA: {
      name: "Ukraine",
      url: "continents3.php?id_pays=158&annee=avg",
      description: "2015 : 4,681 <br /> 2016 : 4,324 <br /> 2017 : 4,096 <br /> 2018 : 4,103 <br /> 2019 : 4,332",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    UY: {
      name: "Uruguay",
      url: "continents3.php?id_pays=162&annee=avg",
      description: "2015 : 6,485 <br /> 2016 : 6,545 <br /> 2017 : 6,454 <br /> 2018 : 6,379 <br /> 2019 : 6,293",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    US: {
      name: "United States",
      url: "continents3.php?id_pays=161&annee=avg",
      description: "2015 : 7,119 <br /> 2016 : 7,104 <br /> 2017 : 6,993 <br /> 2018 : 6,886 <br /> 2019 : 6,892",
      color: "#25e645",
      hover_color: "#008A17"
    },
    UZ: {
      name: "Uzbekistan",
      url: "continents3.php?id_pays=163&annee=avg",
      description: "2015 : 6,003 <br /> 2016 : 5,987 <br /> 2017 : 5,971 <br /> 2018 : 6,096 <br /> 2019 : 6,174",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    VE: {
      name: "Venezuela",
      url: "continents3.php?id_pays=164&annee=avg",
      description: "2015 : 6,810 <br /> 2016 : 6,084 <br /> 2017 : 5,250 <br /> 2018 : 4,806 <br /> 2019 : 4,707",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    VN: {
      name: "Vietnam",
      url: "continents3.php?id_pays=165&annee=avg",
      description: "2015 : 5,360 <br /> 2016 : 5,061 <br /> 2017 : 5,074 <br /> 2018 : 5,103 <br /> 2019 : 5,175",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    VU: {
      name: "Vanuatu",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    YE: {
      name: "Yemen",
      url: "continents3.php?id_pays=166&annee=avg",
      description: "2015 : 4,077 <br /> 2016 : 3,724 <br /> 2017 : 3,593 <br /> 2018 : 3,355 <br /> 2019 : 3,38",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    ZA: {
      name: "South Africa",
      url: "continents3.php?id_pays=135&annee=avg",
      description: "2015 : 4,642 <br /> 2016 : 4,459 <br /> 2017 : 4,829 <br /> 2018 : 4,724 <br /> 2019 : 4,722",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    ZM: {
      name: "Zambia",
      url: "continents3.php?id_pays=167&annee=avg",
      description: "2015 : 5,129 <br /> 2016 : 4,795 <br /> 2017 : 4,514 <br /> 2018 : 4,377 <br /> 2019 : 4,107",
      color: "#ff8000",
      hover_color: "#cf0000"
    },
    ZW: {
      name: "Zimbabwe",
      url: "continents3.php?id_pays=168&annee=avg",
      description: "2015 : 4,61 <br /> 2016 : 4,193 <br /> 2017 : 3,875 <br /> 2018 : 3,692 <br /> 2019 : 3,663",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    SO: {
      name: "Somalia",
      url: "continents3.php?id_pays=133&annee=avg",
      description: "2016 : 5,440 <br /> 2017 : 5,151 <br /> 2018 : 4,982 <br /> 2019 : 4,668",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GF: {
      name: "France",
      url: "continents3.php?id_pays=48&annee=avg",
      description: "2015 : 6,575 <br /> 2016 : 6,478 <br /> 2017 : 6,442 <br /> 2018 : 6,489 <br /> 2019 : 6,592",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    FR: {
      name: "France",
      url: "continents3.php?id_pays=48&annee=avg",
      description: "2015 : 6,575 <br /> 2016 : 6,478 <br /> 2017 : 6,442 <br /> 2018 : 6,489 <br /> 2019 : 6,592",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    ES: {
      name: "Spain",
      url: "continents3.php?id_pays=138&annee=avg",
      description: "2015 : 6,329 <br /> 2016 : 6,361 <br /> 2017 : 6,403 <br /> 2018 : 6,31 <br /> 2019 : 6,354",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    AW: {
      name: "Aruba",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    AI: {
      name: "Anguilla",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    AD: {
      name: "Andorra",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    AG: {
      name: "Antigua and Barbuda",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BS: {
      name: "Bahamas",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BM: {
      name: "Bermuda",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    BB: {
      name: "Barbados",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KM: {
      name: "Comoros",
      url: "continents3.php?id_pays=32&annee=avg",
      description: "2015 : 3,956 <br /> 2016 : 3,956 <br /> 2019 : 3,973",
      color: "#f02e18",
      hover_color: "#cf0000"
    },
    CV: {
      name: "Cape Verde",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KY: {
      name: "Cayman Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    DM: {
      name: "Dominica",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    FK: {
      name: "Falkland Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    FO: {
      name: "Faeroe Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GD: {
      name: "Grenada",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    HK: {
      name: "Hong Kong",
      url: "continents3.php?id_pays=59&annee=avg",
      description: "2015 : 5,474 <br /> 2016 : 5,458 <br /> 2018 : 5,430 <br /> 2019 : 5,430",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    KN: {
      name: "Saint Kitts and Nevis",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    LC: {
      name: "Saint Lucia",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    LI: {
      name: "Liechtenstein",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MF: {
      name: "Saint Martin (French)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MV: {
      name: "Maldives",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MT: {
      name: "Malta",
      url: "continents3.php?id_pays=91&annee=avg",
      description: "2015 : 6,302 <br /> 2016 : 6,488 <br /> 2017 : 6,527 <br /> 2018 : 6,627 <br /> 2019 : 6,726",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    MS: {
      name: "Montserrat",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MU: {
      name: "Mauritius",
      url: "continents3.php?id_pays=93&annee=avg",
      description: "2015 : 5,477 <br /> 2016 : 5,648 <br /> 2017 : 5,629 <br /> 2018 : 5,891 <br /> 2019 : 5,888",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    NC: {
      name: "New Caledonia",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    NR: {
      name: "Nauru",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PN: {
      name: "Pitcairn Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    PR: {
      name: "Puerto Rico",
      url: "continents3.php?id_pays=121&annee=avg",
      description: "2016 : 7,039",
      color: "#25e645",
      hover_color: "#008A17"
    },
    PF: {
      name: "French Polynesia",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    SG: {
      name: "Singapore",
      url: "continents3.php?id_pays=130&annee=avg",
      description: "2015 : 6,798 <br /> 2016 : 6,739 <br /> 2017 : 6,572 <br /> 2018 : 6,343 <br /> 2019 : 6,262",
      color: "#25e645",
      hover_color: "#008A17"
    },
    SB: {
      name: "Solomon Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    ST: {
      name: "São Tomé and Principe",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    SX: {
      name: "Saint Martin (Dutch)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    SC: {
      name: "Seychelles",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TC: {
      name: "Turks and Caicos Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TO: {
      name: "Tonga",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    TT: {
      name: "Trinidad and Tobago",
      url: "continents3.php?id_pays=153&annee=avg",
      description: "2015 : 6,168 <br /> 2016 : 6,168 <br /> 2017 : 6,168 <br /> ",
      color: "#b1f754",
      hover_color: "#008A17"
    },
    VC: {
      name: "Saint Vincent and the Grenadines",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    VG: {
      name: "British Virgin Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    VI: {
      name: "United States Virgin Islands",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CY: {
      name: "Cyprus",
      url: "continents3.php?id_pays=37&annee=avg",
      description: "2015 : 5,689 <br /> 2016 : 5,546 <br /> 2017 : 5,621 <br /> 2018 : 5,762 <br /> 2019 : 6,046",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    RE: {
      name: "Reunion (France)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    YT: {
      name: "Mayotte (France)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    MQ: {
      name: "Martinique (France)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    GP: {
      name: "Guadeloupe (France)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    CW: {
      name: "Curaco (Netherlands)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    },
    IC: {
      name: "Canary Islands (Spain)",
      url: "#N/A",
      description: "No data avaible",
      color: "#88A4BC",
      hover_color: "#3B729F"
    }
  },
  labels: {}
};