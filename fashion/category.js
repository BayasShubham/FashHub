function show_product(elem){
    console.log("Hieeeee");
    console.log(elem.dataset["id"]);
    console.log(elem.dataset["category"]);
    window.open("product_info.php?category="+elem.dataset["category"]+"&product_id="+ elem.dataset["id"] ,"_top"  )
    
}

