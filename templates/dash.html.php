<?php
  $data = new \Portfolio\Images('featured', 'dash');
  $data->displayData();
?>


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

  const targetImage = document.querySelectorAll('#image-upload');
  const browse = document.querySelectorAll('.icon');
  let index = 0;

  browse.forEach(function(img) {
    img.addEventListener('click', function(e) {
      const target = e.currentTarget;
      const arr = Array.from(browse);
      index = arr.indexOf(target);
    })
  })

  targetImage.forEach(function(img) {
    img.addEventListener('change', function(e) {
      output = document.querySelectorAll('#output');  
      const outputArr = Array.from(output);
      outputArr[index].src = URL.createObjectURL(e.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src);
      }
    })
  })

</script>