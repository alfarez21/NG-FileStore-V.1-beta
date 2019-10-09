$(document).ready(function(){
  loadData("layouts/view-files-section.php","#wrap-v-file");

  // view-files
  $('.files .file').click(function(){
    id = $(this).attr('idFile');
    $('.files .file').css({
      "background": "none",
      "color" : "black"
    });

    $('.files .file').attr('stts','');
    $(this).attr('stts','dipilih');
    $(this).css({
      "background": "blue",
      "color" : "white"
    });
    $.ajax({
      type:'get',
      success:function(){
        loadData("layouts/view-files-section.php?id="+id,"#wrap-v-file");
      }
    });
  });
  // end view-files

  // label
  $("[data-target='#label']").click(function(){
    id = $("[stts=dipilih]").attr('idFile');
    label = $("[stts=dipilih] input[type=text]").val();
    $(".modal-body input[name=id]").val(id);
    $(".modal-body input[name=label]").val(label);
  });
  // End label

  // remove
  $("[data-target='#remove']").click(function(){
    id = $("[stts=dipilih]").attr('idFile');
    nama = $("[stts=dipilih] p").text();
    $("#remove .modal-body p").text("Remove " + nama + " ?!");
    $(".modal-body [name=send]").click(function(){
      location.href = "logic/removeFile.php?id="+id+"&filename="+nama;
    });
  });
  // End remove

  // rename
  $("[data-target='#rename']").click(function(){
    id = $("[stts=dipilih]").attr('idFile');
    nama = $("[stts=dipilih] p").text();
    $(".modal-body input[name=id]").val(id);
    $(".modal-body input[name=filename]").val(nama);
    $(".modal-body input[name=oldfilename]").val(nama);
  });
  // End rename

  // download
  $("[data-target='#download']").click(function(){
    id = $("[stts=dipilih]").attr('idFile');
    nama = $("[stts=dipilih] p").text();
    $("#download .modal-body p").text("download " + nama + " ?!");
    $(".modal-body .btn").attr({
      "href":"app/files/" + nama,
      "download": nama
    });
  });
  // End download

  // User Panel
  $(".navbar a.user").click(function(){
    $('.navbar .user-panel').slideToggle();
  });
  // User Panel
  
  // autocomplete input
  $("input[type=text]").attr("autocomplete","off");
  // End autocomplete input
});

function loadData(src,container){
  $.get(src,function(data){
    $(container).html(data);
  })
}