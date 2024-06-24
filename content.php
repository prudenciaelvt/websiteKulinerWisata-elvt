<?php while($row = mysqli_fetch_assoc($all_wisata_tbl)): ?>
  <div class="card">
    <div class="caption">
      <p class="nama_wisata"><?php echo $row['nama_wisata']; ?></p>
    </div>
    <div class="image">
      <img src="<?php echo $row['image_url']; ?>" alt="">
    </div>
    <button class="more" onclick="window.location.href='detailWisata.php?nama=<?php echo urlencode($row['nama_wisata']); ?>'">Selengkapnya</button>
  </div>
<?php endwhile; ?>
