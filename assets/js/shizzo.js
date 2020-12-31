function modal(title, body, btn){
  document.getElementById('page_dialog_title').innerText = title;
  document.getElementById('page_dialog_body').innerText = body;
  document.getElementById('page_dialog_btn').innerText = btn;
  document.getElementById('page_dialog').style.visibility= 'visible';
}

function hideModal(){
  document.getElementById('page_dialog').style.visibility= 'hidden';
}

$(function(){
  $("#nav-placeholder").load("nav.html");
});
