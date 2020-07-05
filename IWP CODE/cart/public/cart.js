/* [CART ACTIONS] */
var cart = {
  count : function () {
  // count () : update items count

    gen.ajax({
      target : "ajax-cart.php",
      data : {
        req : "count",
      },
      container : "page-cart-count"
    });
  },

  toggle : function (reload) {
  // toggle : show/hide cart

    var pd = document.getElementsByClassName("products"),
        cd = document.getElementById("cart");

    if (reload || cd.style.display == 'none') {
      gen.ajax({
        target : "ajax-cart.php",
        data : {
          req : "show",
        },
        container : "cart",
        load : function () {
            for(let i of pd){
                          i.style.display = 'none';

            }
          cd.style.display = 'block';
        }
      });
    } else {
         for(var i of pd){
        
      i.style.display = 'flex';
         }
      cd.style.display = 'none';
    } 
  },

  add : function (id) {
  // add () : add item to cart

    gen.ajax({
      target : "ajax-cart.php",
      data : {
        req : "add",
        product_id : id
      },
      load : cart.count
    });
  },

  change : function (id) {
  // change () : change quantity

    var qty = document.getElementById("qty_"+id).value;
    console.log(qty);
    gen.ajax({
      target : "ajax-cart.php",
      data : {
        req : "change",
        product_id : id,
        qty : qty
      },
      load : function () {
        cart.count();
        cart.toggle(1);
      }
    });
  },

//  checkout : function () {
//  // checkout () : checkout
//
//    gen.ajax({
//      target : "ajax-cart.php",
//      data : {
//        req : "checkout",
//        name : document.getElementById("co_name").value,
//        email : document.getElementById("co_email").value
//      },
//      silent : 1,
//      load : function (res) {
//        if (res=="OK") {
//          window.location = "thank-you.php";
//        } else {
//          gen.nShow(res);
//        }
//      }
//    });
//    return false;
//  }
};

window.addEventListener("load", cart.count);