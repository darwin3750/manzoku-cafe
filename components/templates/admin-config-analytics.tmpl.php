<section class="container p-3">
  <div class="row">
    <div class="col-md-0"></div>
    <div class="col-md-12 manzoku-border-base-4 rounded-lg p-0">
      <heading class="d-block text-center">
        <h2 class="manzoku-typeface-main0 manzoku-font-3 manzoku-color-base p-3 m-0">Site Analytics
          <span class="tooltip-enabler">(?)
            <span class="tooltip manzoku-font-1 manzoku-typeface-main0 p-2">
              View data about the website here.
            </span>
          </span>
        </h2>
      </heading>
      <article class="manzoku-color-contrast manzoku-regular text-center">
        <section id="chart-container" class="position-relative">
          <div id="viewsChart" class=" position-absolute top-0 left-0 w-100 h-100"></div>
        </section>
        <section class="manzoku-color-contrast">
          <?php 
          $template = ADMIN_VIEW_STATS_CARD;
          include DISPLAY_VIEW_STATS; 
          ?>
        </section>
      </article>
    </div>
    <div class="col-md-0"></div>
  </div>
</section>

<style>
  #chart-container {
    padding-bottom: 450px;
  }
</style>

<script>
  //Get site stats
  function getSiteStats() {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        drawViewChart(JSON.parse(this.responseText));
      }
    };
    xhttp.open("GET", "components/scripts/get-site-stats.script.php", true);
    xhttp.send();
  }

  //prepare site stat chart
  google.charts.load('current', {
    packages: ['corechart', 'line']
  });
  google.charts.setOnLoadCallback(getSiteStats);

  function drawViewChart(views_data) {
    let data = new google.visualization.DataTable();
    data.addColumn('string', 'Day');
    data.addColumn('number', 'Home');
    data.addColumn('number', 'Menus');
    data.addColumn('number', 'About Us');
    data.addColumn('number', 'Contact Us');
    data.addColumn('number', 'Testimonies');

    for (let i = 0; i < Object.keys(views_data).length; i++) {
      data.addRow([
        (views_data[i]['date']),
        parseInt(views_data[i]['home']),
        parseInt(views_data[i]['menus']),
        parseInt(views_data[i]['about_us']),
        parseInt(views_data[i]['contact_us']),
        parseInt(views_data[i]['testimonies'])
      ]);
    }

    let options = {
      title: "Views per Page",
      'height': 450,
      animation: {
        startup: true,
        duration: 1000,
        easing: 'out'
      },
      pointSize: 6,
      hAxis: {
        title: 'Date',
        logScale: true,
        'direction': "-1",
        slantedText: true,
        slantedTextAngle: 75,
        textPosition: 'out',
        maxAlternation: 200,
        maxTextLines: 200,
        minTextSpacing: 200,
        textStyle: {
          color: 'white',
          fontSize: 16
        }
      },
      vAxis: {
        title: 'Views',
        textStyle: {
          color: 'white',
          fontSize: 16
        }
      },
      backgroundColor: {
        fill: 'transparent'
      },
      chartArea: {
        top: 60,
        height: '60%',
        width: '70%'
      },
      legend: {
        position: 'top',
        textStyle: {
          color: 'white',
          fontSize: 12,
          bold: true
        },
        maxLines:10
      }
    };

    let chart = new google.visualization.LineChart(document.querySelector('#viewsChart'));
    chart.draw(data, options);
    resizeFlickity('#admin-config-carousel', null);
  }

  //make chart responsive by re-rendering it every resize
  window.onresize = () => {
    getSiteStats();
  }
</script>