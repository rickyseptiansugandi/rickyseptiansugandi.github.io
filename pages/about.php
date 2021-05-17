<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>Tentang</h2>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3><?=getbiodata('profesi')?></h3>
        <p class="font-italic">
          Berikut adalah data diri saya: 
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Nama Lengkap:</strong> <?=getbiodata('namalengkap')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Nama Panggilan:</strong> <?=getbiodata('namapanggilan')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Tempat Lahir:</strong> <?=getbiodata('tempatlahir')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Tanggal Lahir:</strong> <?=getbiodata('tanggallahir')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Umur:</strong> <?=getbiodata('umut')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Jenis Kelamin:</strong> <?=getbiodata('jeniskelamin')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Agama:</strong> <?=getbiodata('agama')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Pendidikan:</strong> <?=getbiodata('pendidikan')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>No HP:</strong> <?=getbiodata('hp')?></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <a target = "_BLANK" href="mailto:<?=getbiodata('email')?>"><?=getbiodata('email')?></a></li>
              <li><i class="icofont-rounded-right"></i> <strong>Whatsapp:</strong> <a target = "_BLANK" href="https://wa.me/<?=converthptowa(getbiodata('wa'))?>?text=Hai Ricky saya sedang melihat portofolio mu nih."><?=getbiodata('wa')?></a></li>
              <li><i class="icofont-rounded-right"></i> <strong>Alamat:</strong> <?=getbiodata('alamat')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Keluarahan:</strong> <?=getbiodata('keluarahan')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Kecamatan:</strong> <?=getbiodata('kecamatan')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Kota:</strong> <?=getbiodata('kota')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Provinsi:</strong> <?=getbiodata('provinsi')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Kode POS:</strong> <?=getbiodata('kodepos')?></li>
              <li><i class="icofont-rounded-right"></i> <strong>Negara:</strong> <?=getbiodata('negara')?></li>

            </ul>
          </div>
        </div>
        <p>
          <?=getbiodata('tentang')?>
        </p>
      </div>
    </div>
  </div>
</section>