//COMMENTS
var form = document.getElementById("form");
var data;
form.onsubmit = function(event){
    event.preventDefault()
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today = mm + '/' + dd + '/' + yyyy;
    var _comment = document.getElementById("comment").value;
    console.log(_name, _comment, today);
    document.getElementById("form").reset();
    $.ajax({
        url: 'http://closerlanguagecenter.com/php/comment.php',
        method: 'POST',
        data: {name: _name, comment: _comment, date: today},
        datatype: 'json',
    }).done(function(result){
        getcurrentcomment();
    })
    
  };
function getcomments(){
  $.ajax({
    url: 'http://closerlanguagecenter.com/php/selectcom.php',
    method: 'GET',
    datatype: 'json',
}).done(function select(result){
    var data = result;
    console.log(data);
    for( var i = 0; i < data.length ; i++){
      $('#comments-container').prepend('<div><h1>' + result[i][1] +'</h1>' + '<div> <p>' + result[i][2] + '</p><p class="date">'
      + result[i][3] + '</p></div>');
}
 
});
}
function getcurrentcomment(){
    $.ajax({
      url: 'http://closerlanguagecenter.com/php/selectcom.php',
      method: 'GET',
      datatype: 'json',
  }).done(function select(result){
      var data = result;
      console.log(data);
      for( var i = data.length - 1; i < data.length; i++){
          console.log(data.length);
          $('#comments-container').prepend('<div><h1>' + result[i][1] +'</h1>' + '<div> <p>' + result[i][2] + '</p><p class="date">'
          + result[i][3] + '</p></div>');

  }
      
  });
  }
    getcomments();

// $('#comments-container').prepend('<div><h1>' + result[i][1] +'</h1>' + '<div> <p>' + result[i][2] + '</p><p class="date">'
//          + result[i][3] + '<p> Show Answers </p></p> </div> <form class="answer"> <textarea required name="reply" class="textarea textarea2" placeholder="Text Here"></textarea><input type="submit" value="Reply" class="send send2" name="reply" form="form2"> <input type="hidden" value="' + result[i][0] + '"</form></div>');