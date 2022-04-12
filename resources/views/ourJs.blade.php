<script>
$(document).ready(function(){
    //get region id
    $("#regionID").click(function(){

        var region = $("#regionID").val();

        //console.log(cat);
    $.ajax({
      type: 'get',
      dataType: 'html',
      url: '{{url('/getUniversiteNational')}}',
      data: 'region_id=' + region,
      success:function(response){
        //console.log(response);
        $("#orientateurData").html(response);
      }
    });

    });
});

</script>
