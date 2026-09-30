<?php $title='Beranda'; include 'includes/header.php';
$baru = $pdo->query("SELECT * FROM produk ORDER BY id DESC LIMIT 4")->fetchAll(); ?>
<section class="card hero">
  <h1>Langkah Nyaman<br>Gaya Maksimal.</h1>
  <p>SoleMate Shoes menyediakan sneakers, sepatu lari, formal, sandal, dan outdoor dengan harga bersahabat.</p>
  <div><a class="btn" href="produk.php">Lihat Semua Produk</a></div>
</section>
<h2>Produk Terbaru</h2>
<div class="grid"><?php foreach ($baru as $p) kartu($p, ''); ?></div>
<?php include 'includes/footer.php'; ?>
