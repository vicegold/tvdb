<?php include('header.php'); ?>

    <section class="tv-home--recommended">
      <h2><span>Recommended</span></h2>
      <div class="tv-wrapper">
        <div class="row">

          <?php
            $recommendedShow = array(
              array("American Horror Story","http://thetvdb.com/banners/fanart/original/281662-10.jpg","2000 years from now, the human race is nearly exterminated by Titans. A small percentage of humanity survived by walling themselves in a city with walls even taller than the biggest of Titans. Over a century of safety has resulted …"),
              array("Anger Management","http://thetvdb.com/banners/fanart/original/281662-10.jpg","2000 years from now, the human race is nearly exterminated by Titans. A small percentage of humanity survived by walling themselves in a city with walls even taller than the biggest of Titans. Over a century of safety has resulted …"),
              array("Bates Motel","http://thetvdb.com/banners/fanart/original/281662-10.jpg","2000 years from now, the human race is nearly exterminated by Titans. A small percentage of humanity survived by walling themselves in a city with walls even taller than the biggest of Titans. Over a century of safety has resulted …"),
              array("Better Call Saul","http://thetvdb.com/banners/fanart/original/281662-10.jpg","2000 years from now, the human race is nearly exterminated by Titans. A small percentage of humanity survived by walling themselves in a city with walls even taller than the biggest of Titans. Over a century of safety has resulted …"),
              array("Black Mirror","http://thetvdb.com/banners/fanart/original/281662-10.jpg","2000 years from now, the human race is nearly exterminated by Titans. A small percentage of humanity survived by walling themselves in a city with walls even taller than the biggest of Titans. Over a century of safety has resulted …"),
              array("Bloodline","http://thetvdb.com/banners/fanart/original/281662-10.jpg","2000 years from now, the human race is nearly exterminated by Titans. A small percentage of humanity survived by walling themselves in a city with walls even taller than the biggest of Titans. Over a century of safety has resulted …")
            );
          ?>

          <?php foreach ($recommendedShow as $rec) : ?>

            <div class="col-sm-6 col-md-4">
              <div class="box-row">
                <img class="tv-card--image" src="<?php echo $rec[1]; ?>" alt="<?php echo $rec[0]; ?>" />
                <div class="tv-card--content">
                  <h3><?php echo $rec[0]; ?></h3>
                  <p><?php echo $rec[2]; ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="tv-home--new">
      <h2><span>New Today</span></h2>
      <div class="tv-wrapper">

        <?php
          $newShows = array(
            array("American Horror Story","http://thetvdb.com/banners/posters/250487-38.jpg","Plane Excited"),
            array("Anger Management","http://thetvdb.com/banners/posters/253350-6.jpg","Brave New World"),
            array("Bates Motel","http://thetvdb.com/banners/posters/262414-1.jpg","Baby Factory"),
            array("Better Call Saul","http://thetvdb.com/banners/posters/273181-17.jpg","Dine with me Milton"),
            array("Black Mirror","http://thetvdb.com/banners/posters/253463-8.jpg","Death in Paradise"),
            array("Bloodline","http://thetvdb.com/banners/posters/287314-3.jpg","Murder Ex Machinima"),
            array("Brooklyn Nine-Nine","http://thetvdb.com/banners/posters/269586-6.jpg","Episode 39"),
            array("Californication","http://thetvdb.com/banners/posters/80349-7.jpg","Location, Location, Location Midlands"),
            array("Community","http://thetvdb.com/banners/posters/94571-7.jpg","Demerol Drip"),
            array("Dads","http://thetvdb.com/banners/posters/269589-1.jpg","The Book of Total Badness"),
            array("Fargo","http://thetvdb.com/banners/posters/269613-2.jpg","Book Report"),
            array("Fear the Walking Dead","http://thetvdb.com/banners/posters/290853-1.jpg","Run to Miami"),
            array("Fortitude","http://thetvdb.com/banners/posters/281976-2.jpg","Bristol to Glastonbury"),
            array("Friends with Better Lives","http://thetvdb.com/banners/posters/269782-1.jpg","Excursion to Motor Ranch VR46"),
            array("Game of Thrones","http://thetvdb.com/banners/posters/121361-34.jpg","The Dreaded"),
            array("Gotham","http://thetvdb.com/banners/posters/274431-17.jpg","Invention Test"),
            array("Halt and Catch Fire","http://thetvdb.com/banners/posters/271910-5.jpg","Innocent Criminals"),
            array("Homeland","http://thetvdb.com/banners/posters/247897-17.jpg","For this Chuunibyou"),
            array("Jessica Jones","http://thetvdb.com/banners/posters/284190-9.jpg","British Murderer"),
            array("Masters of Sex","http://thetvdb.com/banners/posters/261557-6.jpg","Testperson #4"),
            array("The Affair","http://thetvdb.com/banners/posters/270439-1.jpg","Mary Finniger"),
            array("The Flash","http://thetvdb.com/banners/posters/279121-27.jpg","Faster than Light"),
            array("The Knick","http://thetvdb.com/banners/posters/279977-7.jpg","St. Richards"),
            array("The Simpsons","http://thetvdb.com/banners/posters/71663-18.jpg","Marge loves Homer"),
            array("The Sopranos","http://thetvdb.com/banners/posters/75299-4.jpg","Colt"),
            array("Wayward Pines","http://thetvdb.com/banners/posters/269750-6.jpg","Find your way through the Garden")
          );
        ?>

        <?php foreach ($newShows as $show) : ?>

        <div class="row middle-xs">
          <div class="col-sm-4">
            <div class="box box-container">
              <div class="row">
                <div class="col-sm-2">
                  <div class="box-nested">
                    <img src="<?php echo $show[1]; ?>" alt="">
                  </div>
                </div>
                <div class="col-sm-10">
                  <div class="box-nested">
                    <h4><?php echo $show[0]; ?></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="box box-container">
              <div class="row">
                <div class="col-xs-12">
                  <div class="box">S<?php echo sprintf('%02d', rand(1, 16)); ?> E<?php echo sprintf('%02d', rand(1, 22)); ?> &bullet; <?php echo $show[2]; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      </div>
    </section>

<?php include('footer.php'); ?>
