  
let step1 = $('#step1');
let step2 = $('#step2');
let step3 = $('#step3');
let Next = $('#Next');
let next = $('#next');
let prev = $('#prev');
let Prev = $('#Prev')
let save = $('#save');

$(step2).hide();
$(step3).hide();
$(next).hide();
$(prev).hide();
$(Prev).hide();
$(save).hide();






$(Next).click(function(e){
  if(document.getElementById("name").value != "" && document.getElementById("address").value != "" && document.getElementById("description").value != "") {
      e.preventDefault();
      $(step1).hide();
      $(step2).show();
      $(step3).hide();
      $(Prev).hide();
      $(Next).hide();
      $(prev).show();
      $(next).show();
  }
})





$(next).click(function(e){
  if(document.getElementById("localisation").value != "" && document.getElementById("devenir").value != "" && document.getElementById("ville").value != "") {
      e.preventDefault();
      $(step1).hide();
      $(step3).show();
      $(step2).hide();
      $(prev).hide();
      $(next).show();
      $(Next).hide();
      $(Prev) .show();
      $(save).removeAttr('hidden');
      $(save).show();
  }
})

$(prev).click(function(e){
  e.preventDefault();
  $(step1).show();
  $(step2).hide();
  $(step3).hide();
  $(Prev).hide();
  $(prev).hide();
  $(next).hide();
  $(Next).show();
})
$(Prev).click(function(e){
  e.preventDefault();
  $(step1).hide();
  $(step2).show();
  $(step3).hide();
  $(Prev).hide();
  $(prev).show();
  $(next).show();
  $(Next).hide();
})