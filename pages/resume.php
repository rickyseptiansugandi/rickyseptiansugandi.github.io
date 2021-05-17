<section id="resume" class="resume">
  <div class="container">
    <div class="section-title">
      <h2>Resume</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">
        <h3 class="resume-title">Pendidikan</h3>
        <?php foreach (getresume('pendidikanformal') as $key => $value): ?>
          <div class="resume-item">
            <h4><?=$value->jurusan?></h4>
            <h5><?=$value->tahun?></h5>
            <p><em><?=$value->nama?></em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>
        <?php endforeach ?>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Professional Experience</h3>
        <?php foreach (getresume('pengalamankerja') as $key => $value): ?>
          <div class="resume-item">
            <h4><?=$value->jurusan?></h4>
            <h5><?=$value->tahun?></h5>
            <p><em><?=$value->nama?></em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</section>