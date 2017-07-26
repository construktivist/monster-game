<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>

if (window.location.pathname != "/arena.php"){
  $(".btn-danger").hide();
}

$("button").on("click", function(e){


  $.ajax({
    type:"POST",
    url: "../app/get-selected-monster.php",
    data: {name: e.target.value},
    success: function(){
      console.log("AJAX request was successfull");
    },
    error:function(){
    console.log("AJAX request was a failure");
    },
  })

  .done(function(data){
    console.log(data);
  })
})

</script>
