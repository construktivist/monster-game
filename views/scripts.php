<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>
$("button").on("click", function(e){
  console.log(e.target.value);

  $.ajax({
    type:"POST",
    url: "../arena.php",
    data: {name: e.target.value}
  }).done(function(){
    console.log("Data sent");
  })
})

</script>
