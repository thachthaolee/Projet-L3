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
    link_text: "View Website"
  },
  state_specific: {
    AF: {
      name: "Afghanistan",
      url: "http://localhost/HapMap/continents3.php?id_pays=1&annee=2019"
    },
    AO: {
      name: "Angola",
      url: "http://localhost/HapMap/continents3.php?id_pays=4&annee=2019"
    },
    AL: {
      name: "Albania",
      url: "http://localhost/HapMap/continents3.php?id_pays=2&annee=2019"
    },
    AE: {
      name: "United Arab Emirates",
      url: "http://localhost/HapMap/continents3.php?id_pays=159&annee=2019"
    },
    AR: {
      name: "Argentina",
      url: "http://localhost/HapMap/continents3.php?id_pays=5&annee=2019"
    },
    AM: {
      name: "Armenia",
      url: "http://localhost/HapMap/continents3.php?id_pays=6&annee=2019"
    },
    AU: {
      name: "Australia",
      url: "http://localhost/HapMap/continents3.php?id_pays=7&annee=2019"
    },
    AT: {
      name: "Austria",
      url: "http://localhost/HapMap/continents3.php?id_pays=8&annee=2019"
    },
    AZ: {
      name: "Azerbaijan",
      url: "http://localhost/HapMap/continents3.php?id_pays=9&annee=2019"
    },
    BI: {
      name: "Burundi",
      url: "http://localhost/HapMap/continents3.php?id_pays=23&annee=2019"
    },
    BE: {
      name: "Belgium",
      url: "http://localhost/HapMap/continents3.php?id_pays=13&annee=2019"
    },
    BJ: {
      name: "Benin",
      url: "http://localhost/HapMap/continents3.php?id_pays=15&annee=2019"
    },
    BF: {
      name: "Burkina Faso",
      url: "http://localhost/HapMap/continents3.php?id_pays=22&annee=2019"
    },
    BD: {
      name: "Bangladesh",
      url: "http://localhost/HapMap/continents3.php?id_pays=11&annee=2019"
    },
    BG: {
      name: "Bulgaria",
      url: "http://localhost/HapMap/continents3.php?id_pays=21&annee=2019"
    },
    BH: {
      name: "Bahrain",
      url: "http://localhost/HapMap/continents3.php?id_pays=10&annee=2019"
    },
    BA: {
      name: "Bosnia and Herzegovina",
      url: "http://localhost/HapMap/continents3.php?id_pays=18&annee=2019"
    },
    BY: {
      name: "Belarus",
      url: "http://localhost/HapMap/continents3.php?id_pays=12&annee=2019"
    },
    BZ: {
      name: "Belize",
      url: "http://localhost/HapMap/continents3.php?id_pays=14&annee=2019"
    },
    BO: {
      name: "Bolivia",
      url: "http://localhost/HapMap/continents3.php?id_pays=17&annee=2019"
    },
    BR: {
      name: "Brazil",
      url: "http://localhost/HapMap/continents3.php?id_pays=20&annee=2019"
    },
    BN: {
      name: "Brunei Darussalam",
      url: "#N/A"
    },
    BT: {
      name: "Bhutan",
      url: "http://localhost/HapMap/continents3.php?id_pays=16&annee=2019"
    },
    BW: {
      name: "Botswana",
      url: "http://localhost/HapMap/continents3.php?id_pays=19&annee=2019"
    },
    CF: {
      name: "Central African Republic",
      url: "http://localhost/HapMap/continents3.php?id_pays=27&annee=2019"
    },
    CA: {
      name: "Canada",
      url: "http://localhost/HapMap/continents3.php?id_pays=26&annee=2019"
    },
    CH: {
      name: "Switzerland",
      url: "http://localhost/HapMap/continents3.php?id_pays=144&annee=2019"
    },
    CL: {
      name: "Chile",
      url: "http://localhost/HapMap/continents3.php?id_pays=29&annee=2019"
    },
    CN: {
      name: "China",
      url: "http://localhost/HapMap/continents3.php?id_pays=30&annee=2019"
    },
    CI: {
      name: "Côte d'Ivoire",
      url: "#N/A"
    },
    CM: {
      name: "Cameroon",
      url: "http://localhost/HapMap/continents3.php?id_pays=25&annee=2019"
    },
    CD: {
      name: "Democratic Republic of the Congo",
      url: "#N/A"
    },
    CG: {
      name: "Republic of Congo",
      url: "#N/A"
    },
    CO: {
      name: "Colombia",
      url: "http://localhost/HapMap/continents3.php?id_pays=31&annee=2019"
    },
    CR: {
      name: "Costa Rica",
      url: "http://localhost/HapMap/continents3.php?id_pays=35&annee=2019"
    },
    CU: {
      name: "Cuba",
      url: "#N/A"
    },
    CZ: {
      name: "Czech Republic",
      url: "http://localhost/HapMap/continents3.php?id_pays=38&annee=2019"
    },
    DE: {
      name: "Germany",
      url: "http://localhost/HapMap/continents3.php?id_pays=52&annee=2019"
    },
    DJ: {
      name: "Djibouti",
      url: "http://localhost/HapMap/continents3.php?id_pays=40&annee=2019"
    },
    DK: {
      name: "Denmark",
      url: "http://localhost/HapMap/continents3.php?id_pays=39&annee=2019"
    },
    DO: {
      name: "Dominican Republic",
      url: "http://localhost/HapMap/continents3.php?id_pays=41&annee=2019"
    },
    DZ: {
      name: "Algeria",
      url: "http://localhost/HapMap/continents3.php?id_pays=3&annee=2019"
    },
    EC: {
      name: "Ecuador",
      url: "http://localhost/HapMap/continents3.php?id_pays=42&annee=2019"
    },
    EG: {
      name: "Egypt",
      url: "http://localhost/HapMap/continents3.php?id_pays=43&annee=2019"
    },
    ER: {
      name: "Eritrea",
      url: "#N/A"
    },
    EE: {
      name: "Estonia",
      url: "http://localhost/HapMap/continents3.php?id_pays=45&annee=2019"
    },
    ET: {
      name: "Ethiopia",
      url: "http://localhost/HapMap/continents3.php?id_pays=46&annee=2019"
    },
    FI: {
      name: "Finland",
      url: "http://localhost/HapMap/continents3.php?id_pays=47&annee=2019"
    },
    FJ: {
      name: "Fiji",
      url: "#N/A"
    },
    GA: {
      name: "Gabon",
      url: "http://localhost/HapMap/continents3.php?id_pays=49&annee=2019"
    },
    GB: {
      name: "United Kingdom",
      url: "http://localhost/HapMap/continents3.php?id_pays=160&annee=2019"
    },
    GE: {
      name: "Georgia",
      url: "http://localhost/HapMap/continents3.php?id_pays=51&annee=2019"
    },
    GH: {
      name: "Ghana",
      url: "http://localhost/HapMap/continents3.php?id_pays=53&annee=2019"
    },
    GN: {
      name: "Guinea",
      url: "http://localhost/HapMap/continents3.php?id_pays=56&annee=2019"
    },
    GM: {
      name: "The Gambia",
      url: "#N/A"
    },
    GW: {
      name: "Guinea-Bissau",
      url: "#N/A"
    },
    GQ: {
      name: "Equatorial Guinea",
      url: "#N/A"
    },
    GR: {
      name: "Greece",
      url: "http://localhost/HapMap/continents3.php?id_pays=54&annee=2019"
    },
    GL: {
      name: "Greenland",
      url: "#N/A"
    },
    GT: {
      name: "Guatemala",
      url: "http://localhost/HapMap/continents3.php?id_pays=55&annee=2019"
    },
    GY: {
      name: "Guyana",
      url: "#N/A"
    },
    HN: {
      name: "Honduras",
      url: "http://localhost/HapMap/continents3.php?id_pays=58&annee=2019"
    },
    HR: {
      name: "Croatia",
      url: "http://localhost/HapMap/continents3.php?id_pays=36&annee=2019"
    },
    HT: {
      name: "Haiti",
      url: "http://localhost/HapMap/continents3.php?id_pays=57&annee=2019"
    },
    HU: {
      name: "Hungary",
      url: "http://localhost/HapMap/continents3.php?id_pays=60&annee=2019"
    },
    ID: {
      name: "Indonesia",
      url: "http://localhost/HapMap/continents3.php?id_pays=63&annee=2019"
    },
    IN: {
      name: "India",
      url: "http://localhost/HapMap/continents3.php?id_pays=62&annee=2019"
    },
    IE: {
      name: "Ireland",
      url: "http://localhost/HapMap/continents3.php?id_pays=66&annee=2019"
    },
    IR: {
      name: "Iran",
      url: "http://localhost/HapMap/continents3.php?id_pays=64&annee=2019"
    },
    IQ: {
      name: "Iraq",
      url: "http://localhost/HapMap/continents3.php?id_pays=65&annee=2019"
    },
    IS: {
      name: "Iceland",
      url: "http://localhost/HapMap/continents3.php?id_pays=61&annee=2019"
    },
    IL: {
      name: "Israel",
      url: "http://localhost/HapMap/continents3.php?id_pays=67&annee=2019"
    },
    IT: {
      name: "Italy",
      url: "http://localhost/HapMap/continents3.php?id_pays=68&annee=2019"
    },
    JM: {
      name: "Jamaica",
      url: "http://localhost/HapMap/continents3.php?id_pays=70&annee=2019"
    },
    JO: {
      name: "Jordan",
      url: "http://localhost/HapMap/continents3.php?id_pays=72&annee=2019"
    },
    JP: {
      name: "Japan",
      url: "http://localhost/HapMap/continents3.php?id_pays=71&annee=2019"
    },
    KZ: {
      name: "Kazakhstan",
      url: "http://localhost/HapMap/continents3.php?id_pays=73&annee=2019"
    },
    KE: {
      name: "Kenya",
      url: "http://localhost/HapMap/continents3.php?id_pays=74&annee=2019"
    },
    KG: {
      name: "Kyrgyzstan",
      url: "http://localhost/HapMap/continents3.php?id_pays=77&annee=2019"
    },
    KH: {
      name: "Cambodia",
      url: "http://localhost/HapMap/continents3.php?id_pays=24&annee=2019"
    },
    KR: {
      name: "Republic of Korea",
      url: "#N/A"
    },
    XK: {
      name: "Kosovo",
      url: "http://localhost/HapMap/continents3.php?id_pays=75&annee=2019"
    },
    KW: {
      name: "Kuwait",
      url: "http://localhost/HapMap/continents3.php?id_pays=76&annee=2019"
    },
    LA: {
      name: "Lao PDR",
      url: "#N/A"
    },
    LB: {
      name: "Lebanon",
      url: "http://localhost/HapMap/continents3.php?id_pays=80&annee=2019"
    },
    LR: {
      name: "Liberia",
      url: "http://localhost/HapMap/continents3.php?id_pays=82&annee=2019"
    },
    LY: {
      name: "Libya",
      url: "http://localhost/HapMap/continents3.php?id_pays=83&annee=2019"
    },
    LK: {
      name: "Sri Lanka",
      url: "http://localhost/HapMap/continents3.php?id_pays=139&annee=2019"
    },
    LS: {
      name: "Lesotho",
      url: "http://localhost/HapMap/continents3.php?id_pays=81&annee=2019"
    },
    LT: {
      name: "Lithuania",
      url: "http://localhost/HapMap/continents3.php?id_pays=84&annee=2019"
    },
    LU: {
      name: "Luxembourg",
      url: "http://localhost/HapMap/continents3.php?id_pays=85&annee=2019"
    },
    LV: {
      name: "Latvia",
      url: "http://localhost/HapMap/continents3.php?id_pays=79&annee=2019"
    },
    MA: {
      name: "Morocco",
      url: "http://localhost/HapMap/continents3.php?id_pays=98&annee=2019"
    },
    MD: {
      name: "Moldova",
      url: "http://localhost/HapMap/continents3.php?id_pays=95&annee=2019"
    },
    MG: {
      name: "Madagascar",
      url: "http://localhost/HapMap/continents3.php?id_pays=87&annee=2019"
    },
    MX: {
      name: "Mexico",
      url: "http://localhost/HapMap/continents3.php?id_pays=94&annee=2019"
    },
    MK: {
      name: "Macedonia",
      url: "http://localhost/HapMap/continents3.php?id_pays=86&annee=2019"
    },
    ML: {
      name: "Mali",
      url: "http://localhost/HapMap/continents3.php?id_pays=90&annee=2019"
    },
    MM: {
      name: "Myanmar",
      url: "http://localhost/HapMap/continents3.php?id_pays=100&annee=2019"
    },
    ME: {
      name: "Montenegro",
      url: "http://localhost/HapMap/continents3.php?id_pays=97&annee=2019"
    },
    MN: {
      name: "Mongolia",
      url: "http://localhost/HapMap/continents3.php?id_pays=96&annee=2019"
    },
    MZ: {
      name: "Mozambique",
      url: "http://localhost/HapMap/continents3.php?id_pays=99&annee=2019"
    },
    MR: {
      name: "Mauritania",
      url: "http://localhost/HapMap/continents3.php?id_pays=92&annee=2019"
    },
    MW: {
      name: "Malawi",
      url: "http://localhost/HapMap/continents3.php?id_pays=88&annee=2019"
    },
    MY: {
      name: "Malaysia",
      url: "http://localhost/HapMap/continents3.php?id_pays=89&annee=2019"
    },
    NA: {
      name: "Namibia",
      url: "http://localhost/HapMap/continents3.php?id_pays=101&annee=2019"
    },
    NE: {
      name: "Niger",
      url: "http://localhost/HapMap/continents3.php?id_pays=106&annee=2019"
    },
    NG: {
      name: "Nigeria",
      url: "http://localhost/HapMap/continents3.php?id_pays=107&annee=2019"
    },
    NI: {
      name: "Nicaragua",
      url: "http://localhost/HapMap/continents3.php?id_pays=105&annee=2019"
    },
    NL: {
      name: "Netherlands",
      url: "http://localhost/HapMap/continents3.php?id_pays=103&annee=2019"
    },
    NO: {
      name: "Norway",
      url: "http://localhost/HapMap/continents3.php?id_pays=111&annee=2019"
    },
    NP: {
      name: "Nepal",
      url: "http://localhost/HapMap/continents3.php?id_pays=102&annee=2019"
    },
    NZ: {
      name: "New Zealand",
      url: "http://localhost/HapMap/continents3.php?id_pays=104&annee=2019"
    },
    OM: {
      name: "Oman",
      url: "http://localhost/HapMap/continents3.php?id_pays=112&annee=2019"
    },
    PK: {
      name: "Pakistan",
      url: "http://localhost/HapMap/continents3.php?id_pays=113&annee=2019"
    },
    PA: {
      name: "Panama",
      url: "http://localhost/HapMap/continents3.php?id_pays=115&annee=2019"
    },
    PE: {
      name: "Peru",
      url: "http://localhost/HapMap/continents3.php?id_pays=117&annee=2019"
    },
    PH: {
      name: "Philippines",
      url: "http://localhost/HapMap/continents3.php?id_pays=118&annee=2019"
    },
    PG: {
      name: "Papua New Guinea",
      url: "#N/A"
    },
    PL: {
      name: "Poland",
      url: "http://localhost/HapMap/continents3.php?id_pays=119&annee=2019"
    },
    KP: {
      name: "Dem. Rep. Korea",
      url: "#N/A"
    },
    PT: {
      name: "Portugal",
      url: "http://localhost/HapMap/continents3.php?id_pays=120&annee=2019"
    },
    PY: {
      name: "Paraguay",
      url: "http://localhost/HapMap/continents3.php?id_pays=116&annee=2019"
    },
    PS: {
      name: "Palestine",
      url: "#N/A"
    },
    QA: {
      name: "Qatar",
      url: "http://localhost/HapMap/continents3.php?id_pays=122&annee=2019"
    },
    RO: {
      name: "Romania",
      url: "http://localhost/HapMap/continents3.php?id_pays=123&annee=2019"
    },
    RU: {
      name: "Russia",
      url: "http://localhost/HapMap/continents3.php?id_pays=124&annee=2019"
    },
    RW: {
      name: "Rwanda",
      url: "http://localhost/HapMap/continents3.php?id_pays=125&annee=2019"
    },
    EH: {
      name: "Western Sahara",
      url: "#N/A"
    },
    SA: {
      name: "Saudi Arabia",
      url: "http://localhost/HapMap/continents3.php?id_pays=126&annee=2019"
    },
    SD: {
      name: "Sudan",
      url: "http://localhost/HapMap/continents3.php?id_pays=140&annee=2019"
    },
    SS: {
      name: "South Sudan",
      url: "http://localhost/HapMap/continents3.php?id_pays=137&annee=2019"
    },
    SN: {
      name: "Senegal",
      url: "http://localhost/HapMap/continents3.php?id_pays=127&annee=2019"
    },
    SL: {
      name: "Sierra Leone",
      url: "http://localhost/HapMap/continents3.php?id_pays=129&annee=2019"
    },
    SV: {
      name: "El Salvador",
      url: "http://localhost/HapMap/continents3.php?id_pays=44&annee=2019"
    },
    RS: {
      name: "Serbia",
      url: "http://localhost/HapMap/continents3.php?id_pays=128&annee=2019"
    },
    SR: {
      name: "Suriname",
      url: "http://localhost/HapMap/continents3.php?id_pays=141&annee=2019"
    },
    SK: {
      name: "Slovakia",
      url: "http://localhost/HapMap/continents3.php?id_pays=131&annee=2019"
    },
    SI: {
      name: "Slovenia",
      url: "http://localhost/HapMap/continents3.php?id_pays=132&annee=2019"
    },
    SE: {
      name: "Sweden",
      url: "http://localhost/HapMap/continents3.php?id_pays=143&annee=2019"
    },
    SZ: {
      name: "Swaziland",
      url: "http://localhost/HapMap/continents3.php?id_pays=142&annee=2019"
    },
    SY: {
      name: "Syria",
      url: "http://localhost/HapMap/continents3.php?id_pays=145&annee=2019"
    },
    TD: {
      name: "Chad",
      url: "http://localhost/HapMap/continents3.php?id_pays=28&annee=2019"
    },
    TG: {
      name: "Togo",
      url: "http://localhost/HapMap/continents3.php?id_pays=151&annee=2019"
    },
    TH: {
      name: "Thailand",
      url: "http://localhost/HapMap/continents3.php?id_pays=150&annee=2019"
    },
    TJ: {
      name: "Tajikistan",
      url: "http://localhost/HapMap/continents3.php?id_pays=148&annee=2019"
    },
    TM: {
      name: "Turkmenistan",
      url: "http://localhost/HapMap/continents3.php?id_pays=156&annee=2019"
    },
    TL: {
      name: "Timor-Leste",
      url: "#N/A"
    },
    TN: {
      name: "Tunisia",
      url: "http://localhost/HapMap/continents3.php?id_pays=154&annee=2019"
    },
    TR: {
      name: "Turkey",
      url: "http://localhost/HapMap/continents3.php?id_pays=155&annee=2019"
    },
    TW: {
      name: "Taiwan",
      url: "http://localhost/HapMap/continents3.php?id_pays=146&annee=2019"
    },
    TZ: {
      name: "Tanzania",
      url: "http://localhost/HapMap/continents3.php?id_pays=149&annee=2019"
    },
    UG: {
      name: "Uganda",
      url: "http://localhost/HapMap/continents3.php?id_pays=157&annee=2019"
    },
    UA: {
      name: "Ukraine",
      url: "http://localhost/HapMap/continents3.php?id_pays=158&annee=2019"
    },
    UY: {
      name: "Uruguay",
      url: "http://localhost/HapMap/continents3.php?id_pays=162&annee=2019"
    },
    US: {
      name: "United States",
      url: "http://localhost/HapMap/continents3.php?id_pays=161&annee=2019"
    },
    UZ: {
      name: "Uzbekistan",
      url: "http://localhost/HapMap/continents3.php?id_pays=163&annee=2019"
    },
    VE: {
      name: "Venezuela",
      url: "http://localhost/HapMap/continents3.php?id_pays=164&annee=2019"
    },
    VN: {
      name: "Vietnam",
      url: "http://localhost/HapMap/continents3.php?id_pays=165&annee=2019"
    },
    VU: {
      name: "Vanuatu",
      url: "#N/A"
    },
    YE: {
      name: "Yemen",
      url: "http://localhost/HapMap/continents3.php?id_pays=166&annee=2019"
    },
    ZA: {
      name: "South Africa",
      url: "http://localhost/HapMap/continents3.php?id_pays=135&annee=2019"
    },
    ZM: {
      name: "Zambia",
      url: "http://localhost/HapMap/continents3.php?id_pays=167&annee=2019"
    },
    ZW: {
      name: "Zimbabwe",
      url: "http://localhost/HapMap/continents3.php?id_pays=168&annee=2019"
    },
    SO: {
      name: "Somalia",
      url: "http://localhost/HapMap/continents3.php?id_pays=133&annee=2019"
    },
    GF: {
      name: "France",
      url: "http://localhost/HapMap/continents3.php?id_pays=48&annee=2019"
    },
    FR: {
      name: "France",
      url: "http://localhost/HapMap/continents3.php?id_pays=48&annee=2019"
    },
    ES: {
      name: "Spain",
      url: "http://localhost/HapMap/continents3.php?id_pays=138&annee=2019"
    },
    AW: {
      name: "Aruba",
      url: "#N/A"
    },
    AI: {
      name: "Anguilla",
      url: "#N/A"
    },
    AD: {
      name: "Andorra",
      url: "#N/A"
    },
    AG: {
      name: "Antigua and Barbuda",
      url: "#N/A"
    },
    BS: {
      name: "Bahamas",
      url: "#N/A"
    },
    BM: {
      name: "Bermuda",
      url: "#N/A"
    },
    BB: {
      name: "Barbados",
      url: "#N/A"
    },
    KM: {
      name: "Comoros",
      url: "http://localhost/HapMap/continents3.php?id_pays=32&annee=2019"
    },
    CV: {
      name: "Cape Verde",
      url: "#N/A"
    },
    KY: {
      name: "Cayman Islands",
      url: "#N/A"
    },
    DM: {
      name: "Dominica",
      url: "#N/A"
    },
    FK: {
      name: "Falkland Islands",
      url: "#N/A"
    },
    FO: {
      name: "Faeroe Islands",
      url: "#N/A"
    },
    GD: {
      name: "Grenada",
      url: "#N/A"
    },
    HK: {
      name: "Hong Kong",
      url: "http://localhost/HapMap/continents3.php?id_pays=59&annee=2019"
    },
    KN: {
      name: "Saint Kitts and Nevis",
      url: "#N/A"
    },
    LC: {
      name: "Saint Lucia",
      url: "#N/A"
    },
    LI: {
      name: "Liechtenstein",
      url: "#N/A"
    },
    MF: {
      name: "Saint Martin (French)",
      url: "#N/A"
    },
    MV: {
      name: "Maldives",
      url: "#N/A"
    },
    MT: {
      name: "Malta",
      url: "http://localhost/HapMap/continents3.php?id_pays=91&annee=2019"
    },
    MS: {
      name: "Montserrat",
      url: "#N/A"
    },
    MU: {
      name: "Mauritius",
      url: "http://localhost/HapMap/continents3.php?id_pays=93&annee=2019"
    },
    NC: {
      name: "New Caledonia",
      url: "#N/A"
    },
    NR: {
      name: "Nauru",
      url: "#N/A"
    },
    PN: {
      name: "Pitcairn Islands",
      url: "#N/A"
    },
    PR: {
      name: "Puerto Rico",
      url: "http://localhost/HapMap/continents3.php?id_pays=121&annee=2019"
    },
    PF: {
      name: "French Polynesia",
      url: "#N/A"
    },
    SG: {
      name: "Singapore",
      url: "http://localhost/HapMap/continents3.php?id_pays=130&annee=2019"
    },
    SB: {
      name: "Solomon Islands",
      url: "#N/A"
    },
    ST: {
      name: "São Tomé and Principe",
      url: "#N/A"
    },
    SX: {
      name: "Saint Martin (Dutch)",
      url: "#N/A"
    },
    SC: {
      name: "Seychelles",
      url: "#N/A"
    },
    TC: {
      name: "Turks and Caicos Islands",
      url: "#N/A"
    },
    TO: {
      name: "Tonga",
      url: "#N/A"
    },
    TT: {
      name: "Trinidad and Tobago",
      url: "http://localhost/HapMap/continents3.php?id_pays=153&annee=2019"
    },
    VC: {
      name: "Saint Vincent and the Grenadines",
      url: "#N/A"
    },
    VG: {
      name: "British Virgin Islands",
      url: "#N/A"
    },
    VI: {
      name: "United States Virgin Islands",
      url: "#N/A"
    },
    CY: {
      name: "Cyprus",
      url: "http://localhost/HapMap/continents3.php?id_pays=37&annee=2019"
    },
    RE: {
      name: "Reunion (France)",
      url: "#N/A"
    },
    YT: {
      name: "Mayotte (France)",
      url: "#N/A"
    },
    MQ: {
      name: "Martinique (France)",
      url: "#N/A"
    },
    GP: {
      name: "Guadeloupe (France)",
      url: "#N/A"
    },
    CW: {
      name: "Curaco (Netherlands)",
      url: "#N/A"
    },
    IC: {
      name: "Canary Islands (Spain)",
      url: "#N/A"
    }
  },
  labels: {}
};