<?php $title='Daftar Produk'; include 'includes/header.php';
$r = cari_produk($pdo, 8); ?>
<h1>Produk</h1>
<?php filter_form($pdo, $r); ?>
<div class="grid"><?php foreach ($r['data'] as $p) kartu($p, ''); ?></div>
<?php if (!$r['data']) echo '<p>Produk tidak ditemukan.</p>'; pager($r); include 'includes/footer.php'; ?>
