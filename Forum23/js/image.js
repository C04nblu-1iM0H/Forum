$(document).ready( function() {
    $(".file_inp input[type=file]").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         if(filename==''){
           $(this).next().text('Выберите файл');
         }else{
           $(this).next().text(filename);
         }
    });
  });