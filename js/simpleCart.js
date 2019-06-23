$(".saveCart").click(function(){ 
     $(".itemRow").each(function(){ 
      var custId = "<?php echo $_SESSION['Username'] ?>"; 
      var itemName = $(this).find(".item-name").text();  
      var itemabout = $(this).find(".item-about").text();
      var itemcost = $(this).find(".item-cost").text(); 
      var itemTotal = $(this).find(".item-total").text(); 

      $.ajax({ 
       // Enter below the full path to your "cart" php file 
       url: "checkout.php", 
       type: "POST", 
       data: {custId: custId, itemName: itemName, itemabout: itemabout, itemcost: itemcost,  itemTotal: itemTotal}, 
       cache: false, 
       success: function (html) { 
        // If form submission is successful 
        if (html == 1) { 
        } 
        // Double check if maths question is correct 
        else { 
        } 
       } 
      });    

     }); 
    }); 