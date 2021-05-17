<section id="skills" class="skills section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Keahlian</h2>
    </div>
    <?php foreach (getskill() as $key => $value) {
      ?>
      <h4 style="text-transform: capitalize; margin-top:20px" data-aos="fade-down"><?=$key?></h4>
      <div class="row skills-content">
        <div class="col-lg-6" data-aos="fade-up">
          <?php for ($i=0; $i < ceil(COUNT($value)/2); $i++) { ?>
            <div class="progress">
              <span class="skill"><?=$value[$i]->name?> <i class="val"><?=$value[$i]->point?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$value[$i]->point?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <?php for ($i=ceil(COUNT($value)/2); $i < COUNT($value); $i++) { ?>
            <div class="progress">
              <span class="skill"><?=$value[$i]->name?> <i class="val"><?=$value[$i]->point?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$value[$i]->point?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    <?php } ?>
  </div>
</section>