    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
      <div class="hero-container" data-aos="fade-in">
        <h1><?=getbiodata('nama')?></h1>
        <p>Saya Seorang <span class="typed" data-typed-items="<?=getbiodata('profesi')?>"></span></p>
      </div>
    </section>
    <main id="main">
      <?php include_once('./pages/about.php');?>
      <?php include_once('./pages/skill.php');?>
      <?php include_once('./pages/resume.php');?>
      <?php include_once('./pages/portfolio.php');?>
      <?php include_once('./pages/contact.php');?>
    </main>
  </body>
  </html>