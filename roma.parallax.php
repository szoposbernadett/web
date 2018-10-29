<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
}

.parallax {
    /* The image used */
    background-image: url('r.jpg');

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed */
@media only screen and (max-device-width: 1366px) {
    .parallax {
        background-attachment: scroll;
    }
}
.responsive{
	width:100%;
	height:auto;
}


* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>






<div class="parallax"></div>


<div style="height:100px;background-color:#aaa;font-size:36px">
<font size="6">Rome  is the capital city of Italy and a special comune . Rome also serves as the capital of the Lazio region. With 2,868,782 residents in 1,285 km2 (496.1 sq mi),[1] it is also the country's most populated comune. It is the fourth-most populous city in the European Union by population within city limits. It is the centre of the Metropolitan City of Rome, which has a population of 4.3 million residents. Rome is located in the central-western portion of the Italian Peninsula, within Lazio, along the shores of the Tiber. The Vatican City (the smallest country in the world)[3] is an independent country inside the city boundaries of Rome, the only existing example of a country within a city: for this reason Rome has been often defined as capital of two states.</font>
</div>
</div>
</div class="parallax"></div>


<div class="parallax"></div>

<div style="height:1000px;background-color:#aaa;font-size:36px">


<div class="row">
  <div class="column" >
    <h2 style="font-size:4vw;">Colosseum</h2>
    <img src="c.jpg" width="480" height="360" class="responsive">
    <p style="font-size:2vw;">The Colosseum or Coliseum , also known as the Flavian Amphitheatre  or Colosseo is an oval amphitheatre in the centre of the city of Rome, Italy. Built of travertine, tuff, and brick-faced concrete, it is the largest amphitheatre ever built.</p>
  </div>
  <div class="column">
    <h2 style="font-size:4vw;">Trevi fountain</h2>
    <img src="t.jpg" width="480" height="360" class="responsive">
    <p style="font-size:1.5vw;">The Trevi Fountain is a fountain in the Trevi district in Rome, Italy, designed by Italian architect Nicola Salvi and completed by Giuseppe Pannini. Standing 26.3 metres high and 49.15 metres  wide, it is the largest Baroque fountain in the city and one of the most famous fountains in the world. The fountain has appeared in several notable films, including Federico Fellini's La Dolce Vita, the eponymous Three Coins in the Fountain, The Lizzie McGuire Movie, and Roman Holiday."</p>
  </div>
  <div class="column">

    <h2 style="font-size:4vw;">Peter's Basilica</h2>
    <img src="s.jpg" width="480" height="360" class="responsive">
    <p style="font-size:2vw;">The Papal Basilica of St. Peter in the Vatican , or simply St. Peter's Basilica (Latin: Basilica Sancti Petri), is an Italian Renaissance church in Vatican City, the papal enclave within the city of Rome</p>
  </div>
</div>
</div>
</div class ="parallax"></div>

</body>
</html>
