<?php
namespace Portfolio;

interface Routes {
  public function getRoutes() : array;
  public function getAuthentication() : \Framework\Authentication;
}