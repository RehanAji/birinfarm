<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="<?=site_url("ternakan/cari")?>" class="search-popup__form" method="POST">
            <input type="text" name="ring" placeholder="Masukan Kode Ring Satwa Anda....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>