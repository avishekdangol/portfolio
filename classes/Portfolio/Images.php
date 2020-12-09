<?php 
namespace Portfolio;
class Images {

  public function __construct($table, $code) {
    $this->table = $table;
    $this->code = $code;
  }

  public function displayData() {
    include __DIR__ . '/../../includes/connect.php';

    $table = new \Framework\DatabaseTable($connection, $this->table, 'id');
    $images = $table->getData();
    
    foreach ($images as $image) {
      $img = $image->source;
      $imgID = $image->id;
      $page = $image->page ?? '';
      $title = $image->title ?? '';
      $this->displayImages($img, $imgID, $page, $title);
    }
  }

  private function displayImages($img, $imgID, $page, $title) {
    if ($this->code === 'dash' && $this->table === 'featured') {
      echo "
	<div class='image-div'>
	  <img class='showcase-image' id='output' src='images/$this->table/$img' alt=''>
          <div class='image-info'>
            <form action='' method='POST' enctype='multipart/form-data'>
	      <div class='image-input'>
	        <label for='image-upload'><img src='images/icons/image.png' class='icon'></label>
		<textarea class='title-input' rows='1' name='title'>$title</textarea>
	      </div>
              <input type='hidden' name='page' value=$page>
 	      <input class='btn btn-info' type='submit' name='update' value='Update'>
              <input type='file' name='image' id='image-upload' required>
	    </form>
	  </div>
        </div>";
    } elseif ($this->code === 'dash') {
      echo "
	<div class='image-div'>
	  <img class='showcase-image' src='images/$this->table/$img' alt=''>
  	  <a class='del' href='/includes/delete_images.php?id=$imgID&amp;page=$this->table'><i class='fa fa-close'></i></a>
	 </div>";
    } elseif ($this->code === 'featured') { 
      echo "
        <div class='showcase-section'>
          <a class = 'showcase-section' href=$page>
            <img class='showcase-image' src='images/featured/$img' alt=''>
            <p><span class='code'>| </span>$title<span class='code'> |</span></p>
          </a>
        </div>";
    } elseif ($this->code === 'commission') {
      echo "
        <div class='company' id=$page>
          <a class='company-link' href=$page;>
	    <img class='company-logo' src='images/logo/$img' alt=''>
            <p class='company-name'>$title</p>
	  </a>
        </div>";
    } else {
      echo "
        <div class='image-div'>
          <img class='showcase-image' src = 'images/$this->table/$img' alt=''>
        </div>";
    }
  }

  public function updateImage($id) {
    
  }

}




