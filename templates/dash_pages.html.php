<?php 
  $data = new \Portfolio\Images($page, 'dash');
  $data->displayData();
?>

<div class='image-upload'>
  <form action="includes/insert_images.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="page" value="<?=$page?>">
    <input class="btn btn-info" type="file" name="image" multiple required>
    <input class="btn btn-info" type="submit" name="upload" value="Upload">
  </form>
</div>

<script>
  const images = document.querySelectorAll('.showcase-image');
  const del = document.querySelector('.del');
  images.forEach(function(image){
    image.addEventListener('mouseover', function(e) {
      const btn = e.currentTarget.nextElementSibling.classList;
      btn.add('show-btn');
    })

    image.addEventListener('mouseout', function(e) {
      const btn = e.currentTarget.nextElementSibling.classList;
      btn.remove('show-btn');
    })
  })
</script>

		



