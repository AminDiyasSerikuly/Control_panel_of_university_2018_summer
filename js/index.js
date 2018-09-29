$(document).ready(function(){
  var includer  = "";
  var path2 = "";
  var MainTable ="";
  var counter_forReload = 0;

  var Higher_standing_subdivision_num = localStorage.getItem("num");
  var lolo_num = localStorage.getItem("numL");
function On_function_of_select(){
  localStorage.setItem("num","2");
  localStorage.setItem("numL","1");
}
function On_function_of_select_Main(){
  localStorage.setItem("num","");
  localStorage.setItem("numL","");
}

// alert(Higher_standing_subdivision_num);

  function colorclear(yh,num){
      for(var y = 1;y<num;y++){
      $("#"+yh+y).css("background-color","lightyellow");
    }}

    function textsetter(letter){
      latterarr =["","Просмотр","Ввидение"];
      for(var y = 1;y<3;y++){
          $("#spw"+y+"").text(""+latterarr[y]+" списка "+letter+"");
      }}

  function table_generator(array_stuffs){
    // alert(array_stuffs.length);

      $("tr[id='ol11']").empty();
    for(var y = 0;y<array_stuffs.length;y++){
      if(y == array_stuffs.length-1 ){
          $("tr[id='ol11']").append("<th id='olk'>"+array_stuffs[y]+"</th>");}
      else{
        $("tr[id='ol11']").append("<th id='ol'>"+array_stuffs[y]+"</th>");}
      }
    }
    function date_setter(set){
      var d = new Date();
      var s = new Date();
      var s  = parseInt(s.getMonth())+1;
      var d =  d.getFullYear()+"-0"+s+"-"+d.getDate();
      $(set).val(d);
    }
    function reload() {
        location.reload();}
    function NoneForm(table_name1){
      // alert(table_name1);
      $("#"+table_name1).hide();
    }

    function ShowForm(){
      $("#"+table_name1).show();
    }

    function helpToNone(){
      // alert(localStorage.getItem("someVarKeyFormName"));
      if(localStorage.getItem("someVarKeyFormName")!= ""){
          NoneForm(localStorage.getItem("someVarKeyFormName"));
      }}
      helpToNone();

    function SelectFiller(array){
        for(var i = 0;i<array.length;i++){
            var dataString = array[i];
            $("select[name='Search_Select']").append("<option value='"+dataString+"'>"+dataString+"</option>");
        }
    }



var yul = 0;
function dataprocessing(data,table1){
    if(data.length == 11){
        $("select[name='Higher_standing_subdivision']")
         .append("<option value='above_all'>ABOVE_ALL</option>");
    }
     
  data = jQuery.parseJSON(data);
  if(table1 == "subdivisions" && yul == 0){
    $("select[name='Higher_standing_subdivision"+Higher_standing_subdivision_num+"']")
     .append("<option value=''></option>");
        for(var id in data){
          if(id%2 == 0){
          var idl = parseInt(id);
          var idl = idl +1;
          console.log(idl);
          // alert(Higher_standing_subdivision_num);
        $("select[name='Higher_standing_subdivision"+Higher_standing_subdivision_num+"']")
         .append("<option value='"+data[idl]+">"+($("#lolo"+lolo_num+"").val())+"'>"+data[idl]+">"+($("#lolo"+lolo_num+"").val())+"</option>");
          }
        }$("select[name='Higher_standing_subdivision']")
         .append("<option value='above_all'>ABOVE_ALL</option>");}

        else if (table1 == "stuffs") {
          $("select[name='Owner']")
           .append("<option value=''></option>");
           $("select[name='Custumer']")
            .append("<option value=''></option>");
              for(var idl in data){
              $("select[name='Owner']")
               .append("<option value='"+data[idl]+"'>"+data[idl]+"</option>");
               $("select[name='Custumer']")
                .append("<option value='"+data[idl]+"'>"+data[idl]+"</option>");
              }}

            else if (table1 == "category") {
              $("select[name='Category']")
               .append("<option value=''></option>");
                 for(var id in data){
                 $("select[name='Category']")
                  .append("<option value='"+data[id]+"'>"+data[id]+"</option>");
          }
          }
            else if(table1 =="subdivisions" && yul == 2 ) {
              $("select[name='subdivision']")
               .append("<option value=''></option>");
                 for(var id in data){
                   if(id%2 == 0){
                   var idl = parseInt(id);
                   var idl = idl +1;
                   console.log(idl);
                 $("select[name='subdivision']")
                  .append("<option value='"+data[idl]+"'>"+data[idl]+"</option>");
            }}
          }
}


    function ajaxrunner(PhpName,taker,table1){
      $.ajax({
              url: PhpName,
              type: "POST",
              data: ({action: taker, table:table1}),
              success: function(data){
                // alert(data);
                if(PhpName == "fill_selects.php"){
                dataprocessing(data,table1);}

  }});
}
var typingTimer ;
$("#lolo").keyup(function(){
clearTimeout(typingTimer);
typingTimer = setTimeout(doneTyping, 1000);
date_setter("input[name='Date_of_creating']");
date_setter("input[name='Date_of_changing']");

});
$("#lolo1").keyup(function(){
clearTimeout(typingTimer);
typingTimer = setTimeout(doneTyping, 1000);
});

$('input[name=Search_Area').keyup(function(){
  // alert("ds");ы
  FindRunner();

});

function FindRunner(){
  var formsearcharea = ($('input[name=Search_Area]').val());
  ajaxrunner("session_saver.php",MainTable,formsearcharea);
  $('#tab').load('index.php #tab');
}

function doneTyping () {
$("select[name='Higher_standing_subdivision"+Higher_standing_subdivision_num+"']").empty();
ajaxrunner("fill_selects.php","for_select","subdivisions");


}




//----------------ChoiceTabMain-------------------------------------------
function setTime(data){
  setTimeout( function(){
      $(data).trigger('click');},1 );}
var tq =  localStorage.getItem("someVarKey1");
if(tq == null ){
  tq = "";
}
else if (counter_forReload == 0) {
  var tq =  localStorage.getItem("someVarKey1");
  }

setTime("#"+tq);

function tableoper(x){
    // alert(x);
  for(var t = 0;t<4;t++){
    if(t == 0){t = "";}
$("form[name='form"+t+"']").hide();}
$(x).show();}
function runner(){
  counter_forReload+=1;
  if(counter_forReload>1){
     location.reload();}
}
function MainTabChoice(table,text,TableName,word,includert){
     ajaxrunner("session_saver.php",table,"");
     textsetter(text);
     colorclear("word",5);
     tableoper(TableName);
     $(word).css("background-color","yellow");
     $("#spw1").val(table);

     includer = includert;
     MainTable = table;

     localStorage.setItem("someVarKey1", includer);}

function ifSpw1(){
  if(localStorage.getItem("someVarKeyPath2") =="spw1"){
    setTime("#spw1");}
  else{
    setTime("#spw2");}}
$("#pod").bind("click", function (){
   MainTabChoice("subdivisions","подразделения","form[name='form']","#word1","pod");
    ifSpw1();
    runner();
   });
$("#pod1").bind("click", function (){
   MainTabChoice("stuffs","сотрудников","form[name='form1']","#word2","pod1");

    ifSpw1();
    runner();
  });
$("#pod2").bind("click", function(){
   MainTabChoice("category","Категорий","form[name='form3']","#word3","pod2");
    ifSpw1();
    runner();});
$("#pod3").bind("click", function(){
   MainTabChoice("technique","техники","form[name='form2']","#word4","pod3");
    ifSpw1();
    runner();});
//-----------------------------------------------------------------------------



//----------------ChoiceTab2---------------------------------------------------
    function additional_ColorChange(Color_el){
          $(Color_el).css("background-color","yellow");
    }
    function ChoiceTab(hoster){
        // $('#tab').load('index.php #tab');
        additional_ColorChange("#spw1");
    }
    // $("#spw1").mouseenter(function(){
      $("#spw1").bind("click", function(){
        path2 = "spw1";
        localStorage.setItem("someVarKeyPath2", path2);
        colorclear("spw",3);
        ChoiceTab("#spw1");
        if(includer == "pod"){
            var array = ['По наименование','По Выше стоящее подразделению'];
            SelectFiller(array);
          }
        // if(includer == "pod1"){
        //     var array = {"По наименование","По Выше стоящее подразделению"};}


        $("div[class='Search']").show();


        });
    // });
    // $("#spw2").mouseenter(function(){
      $("#spw2").bind("click", function(){
          On_function_of_select_Main();
          colorclear("spw",3);
          $("div[class='Search']").hide();
          path2 = "spw2";
          localStorage.setItem("someVarKeyPath2", path2);
          additional_ColorChange("#spw2");
          if($("#spw1").val() == "stuffs"){
              $("select[name='subdivision']").empty();
              ajaxrunner("fill_selects.php","for_select_stuffs","subdivisions");
              yul = 2;
              }
          else if ($("#spw1").val() == "technique") {
              $("select[name='Category']").empty();
              $("select[name='Owner']").empty();
              $("select[name='Custumer']").empty();
              ajaxrunner("fill_selects.php","for_select","stuffs");
              ajaxrunner("fill_selects.php","for_select","category");}
          else if ($("#spw1").val() == "subdivisions") {
              $("select[name='Higher_standing_subdivision"+Higher_standing_subdivision_num+"']").empty();
              yul = 0;
              ajaxrunner("fill_selects.php","for_select","subdivisions");}});
            // });
//-----------------------------------------------------------------------------------------


  function swap_to_other_div(x,y){
    $(x).css("display","none");
    $(y).css("display","inline-block");}

    var x = "#stuffs_filling_place";
    var y = "#stuffs_preview_place";
    $("#stuffs_preview_word1").bind("click", function(){
      swap_to_other_div(x,y);});
    $("#stuffs_preview_word2").bind("click", function(){
      swap_to_other_div(y,x);});


$("input[type='submit']").bind("click", function(){
  wait();
  setTimeout(function(){
      reload();
    }, 500 );});



  $("input[name='firstname']").bind("click", function(){
          date_setter("#f");
      });
  $("input[name='Name']").bind("click", function(){
      date_setter("input[name='Date_of_craeting']");
      date_setter("input[name='Date_of_deleting']");
      date_setter("input[name='Date_of_cahnging']");
  });



  $("input[name='mainchbox']").bind("click", function(){
      $("input[id='increment']").trigger('click');
    });



    var $form = $('form');
    $form.submit(function(){
       $.post($(this).attr('action'), $(this).serialize(), function(response){
       },'json');
       return false;
    });

    function wait(){
      $("#processing").css("display","inline-block");
      $("#proc").text("processing.......");
    }


var tyuo ="";
    $("#delete").bind("click", function(){
          tyuo = "good";
            var PhpName = "delete.php";
            var col_num = "";
            var checkbox = "clickers";
            var sortertemp = "sorter";
            if(includer == "pod1"){
              var table_name = "stuffs";}
            else if(includer == "pod3"){
              var table_name = "technique";}
            else if(includer == "pod2"){
              var table_name = "category";}
            else if(includer == "pod"){
              var table_name = "subdivisions";}
    // alert(table_name);
            query_to_db1(PhpName,checkbox,sortertemp,table_name,col_num);

            function reload() {
                location.reload();}
                setTimeout( function(){
                    reload();
                  }, 3000 );
                });

    $("#Edit").bind("click", function(){
         tyuo = "bad";
          On_function_of_select();
          var  table_name = "";
          if(includer == "pod1"){
             var col_num = 2;}
          else if(includer == "pod3"){
             var col_num = 4;}
          else if(includer == "pod2"){
             var col_num = 3;}
          else if(includer == "pod"){
             var col_num = 1;}
             var PhpName2 = "session_set.php";
             var checkbox1 = "clickers";
             var sortertemp = "sorter";

    query_to_db1(PhpName2,checkbox1,sortertemp,table_name,col_num);
    var table_name1;
    if(includer == "pod"){
        table_name1 = "table1";
    }
    else if(includer == "pod1"){
        table_name1 = "table2";
    }
    else if(includer == "pod2"){
        table_name1 = "table4";
    }
    else if(includer == "pod3"){
        table_name1 = "table3";
    }

    localStorage.setItem("someVarKeyFormName", table_name1);


    path2 = "spw2";
    localStorage.setItem("someVarKeyPath2", path2);


     function reload() {
        location.reload();}
        setTimeout( function(){
        reload();
          } , 50 );
        swap_to_other_div(y,x);});


function query_to_db1(PhpName,clickers_2,sortertemp,table_name,col_num){
    var length2 =  $('table[name=TableLength] >tbody >tr').length;
   // var length = $("input[name='"+sortertemp+"']").val();
   console.log(length);
   // alert(length);
   // alert(length2);
      var array1 = [];
      var counter = 0;

     for(var t = 2; t<length2;t++){
       // alert(t);
     if ($('input[name='+clickers_2+''+t+']').is(':checked')){
       var taker = ($('input[name='+clickers_2+''+t+']').val());
        //  alert(taker);
       if(tyuo == "bad") {
            array1.push(taker);
            // alert("nonea");
            
       }

       else if(tyuo == "good") {
        //   alert("taker:"+taker);
        //   alert("table:"+table_name);
        $.ajax({
                url: PhpName,
                type: "POST",
                data: ({action: taker,table:table_name}),
                success: function(data){
                    wait();
                    // alert(data+"aajax1");
                }});}
              }}

var array1 = JSON.stringify(array1);

if(array1.length>2){
    $.ajax({
            url: PhpName,
            type: "POST",
            data: ({action: array1, idt:col_num}),
            beforesend: wait,
            success: function(data){
                // alert(data+"dataajax2");
                wait();
            }});}
    
}

});
