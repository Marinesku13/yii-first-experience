<?php

  class BookController extends Controller {

     public function actionIndex(){

         $model = new Book;

         $model->title = 'Война и мир';
         $model->author = 'Толстой';

         $model->save(false);

         echo ("2222");

     }

  }

?>