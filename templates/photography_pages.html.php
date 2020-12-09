<main>
    <div class="bg-image img_<?=$page?>">
    </div> 
    
    <div id="showcase-wrapper">
      <div id="header">
       <h2><?=$header?></h2>
      </div>
    </div>
    <div id="showcase">
      <?php 
	$data = new \Portfolio\Images($page, '');
	$data->displayData();
      ?>
    </div>

    <div class="overlay">
      <button id="close" class="btn"><i class="fa fa-close"></i></button>
      <button id="prev" class="btn"><i class="fa fa-chevron-circle-left"></i></button>
      <img id="overlay-img" src = "" alt="">
      <button id="next" class="btn"><i class="fa fa-chevron-circle-right"></i></button>
    </div>

    <button id="up"><img src="assets/icons/up.png" alt=""></button>
  </main>

<script>
const image = document.querySelectorAll('.showcase-image');
const overlayImage = document.querySelector('#overlay-img');
const overlay = document.querySelector('.overlay');
const close = document.querySelector('#close');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');



image.forEach(function(img) {
  img.addEventListener("click", function(e) {
  const target = e.currentTarget;
  overlay.classList.add("show-overlay");
  overlayImage.src = target.src;
  document.body.style.overflow = "hidden";

  const arr = Array.from(image);
  let index = arr.indexOf(target);

  next.addEventListener("click", function() {
  index++;
  if (index > arr.length - 1) {
    index = 0;
  }
  overlayImage.src = image[index].src;
})

  prev.addEventListener("click", function() {
  index--;
  if (index < 0) {
    index = arr.length - 1;
  }
  overlayImage.src = image[index].src;
})

})
})

close.addEventListener("click", function() {
  overlay.classList.remove("show-overlay");
  document.body.style.removeProperty("overflow");
})


const links = document.querySelector(".links");
const toggle = document.querySelector(".toggle-button");

toggle.addEventListener("click", function() {
  links.classList.toggle("show-links");
})


const up = document.getElementById("up");

window.onscroll = function() {
  scrollFunction();
}

up.addEventListener("click", function() {
  window.scroll({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
})

function scrollFunction() {
  if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
    up.style.display = "block";
  }
  else {
    up.style.display = "none";
  }
}

</script>
