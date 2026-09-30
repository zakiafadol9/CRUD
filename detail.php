<?php $title='Detail Produk'; include 'includes/header.php';
$s = $pdo->prepare("SELECT * FROM produk WHERE id=?"); $s->execute([(int)($_GET['id'] ?? 0)]); $p = $s->fetch();
if (!$p) { echo '<p>Produk tidak ditemukan.</p>'; include 'includes/footer.php'; exit; } ?>
<div class="card detail">
  <?= $p['gambar'] ? '<img src="uploads/produk/'.e($p['gambar']).'" alt="">' : '<div class="noimg">👟</div>' ?>
  <div><span class="tag"><?= e($p['kategori']) ?></span><h1><?= e($p['nama']) ?></h1>
  <p class="price" style="font-size:1.6rem"><?= rupiah($p['harga']) ?></p>
  <p><?= nl2br(e($p['deskripsi'])) ?></p>
  <p>Stok: <b><?= (int)$p['stok'] ?></b></p><a class="btn" href="produk.php">← Kembali</a></div>
</div>
<?php include 'includes/footer.php'; ?>
