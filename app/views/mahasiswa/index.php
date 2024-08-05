<div class="main-container">
    
        <div class="sidebar">
                <h4>Navigation</h4>
                <a href="#about-me">About Me</a>
                <a href="#projects">Projects</a>
                <a href="#contact-me">Contact</a>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <h3>Daftar Mahasiswa</h3>
            
                    <?php foreach( $data['mhs'] as $mhs):?>
                        <ul>
                            <li><?= $mhs['nama']; ?></li>
                            <li><?= $mhs['nrp']; ?></li>
                            <li><?= $mhs['email']; ?></li>
                            <li><?= $mhs['jurusan']; ?></li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            k</div>

        </div>
   

</div>