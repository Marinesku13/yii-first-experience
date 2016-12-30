<?php
  
  class ArticleController extends Controller {

     public function actionArt(){
     	echo $this->text();
     }

     public function text(){
       return ("ыыыыыы");
     }   

  }

?>