    //amazone
    const socket = io.connect('http://192.168.1.99:3030');
    //ebay
    const socket1 = io.connect('http://192.168.1.99:3031');
    //aliexpress
    const socket2 = io.connect('http://192.168.1.99:3032');
    let params = new URLSearchParams(window.location.search);
    let price_product = params.get('search_target_price');
    let name_product = params.get('search_target_name');
    //test
    /*var h2 = document.createElement("h2");
    h2.innerHTML = "ebbanaebbana";

    var div = document.getElementsByClassName("product_ebay")[0];
    div.appendChild(h2);
    insertAfter(div, h2);*/
    //
    console.log('price :' + price_product);
    console.log('name  :' + name_product);
    let data = {
        name_product: name_product,
        price_product: price_product
    };
    console.log(data);

    //socket.on.data=data;

    socket.emit("hello", data);
    socket1.emit("hello", data);
    socket2.emit("hello", data);
    socket.on("hello2", (arg) => {
        console.log(arg);
    });
    socket1.on("hello1", (arg) => {
        console.log(arg);
    });
    socket2.on("hello3", (arg) => {
        console.log(arg);
    });
    let amazone = [];
    let ebay = [];
    let aliexpress = [];
    //get amazone data result

    socket.on("amazon", (arg) => {
        document.getElementsByClassName("loader")[1].display = "none";
        amazone = arg;
        console.log(amazone);
        try {
            document.getElementsByClassName("product_amazone")[0].innerHTML = "";

            if (amazone != null) {

                for (let t = 0; t < 6; t++) {
                    var a = document.createElement("a");
                    a.href = amazone[t].link;
                    a.className = "product";
                    var im = document.createElement("img");
                    im.src = amazone[t].image_Url;
                    a.appendChild(im);
                    var h = document.createElement("h3");
                    h.innerHTML = amazone[t].name;
                    a.appendChild(h);
                    var h1 = document.createElement("hr");
                    a.appendChild(h1);
                    var h2 = document.createElement("h2");
                    h2.innerHTML = amazone[t].price;
                    a.appendChild(h2);
                    var div = document.getElementsByClassName("product_amazone")[0];
                    div.appendChild(a);
                }

            } else {
                var div = document.getElementsByClassName("product_amazone")[0];
                var h = document.createElement("h3");
                h.innerHTML = "no result untill now pleasse wait for amazone";

                div.appendChild(h);

            }
        } catch (e) {}
    });
    //get ebay data result
    socket1.on("ebay", (arg) => {
        document.getElementsByClassName("loader")[0].display = "none";
        ebay = arg;
        console.log(ebay);
        try {
            document.getElementsByClassName("product_ebay")[0].innerHTML = "";

            if (ebay != null) {

                for (let t = 0; t < 6; t++) {
                    var a = document.createElement("a");
                    a.href = ebay[t].link;
                    a.className = "product";
                    var im = document.createElement("img");
                    im.src = ebay[t].image_Url;
                    a.appendChild(im);
                    var h = document.createElement("h3");
                    h.innerHTML = ebay[t].name;
                    a.appendChild(h);
                    var h1 = document.createElement("hr");
                    a.appendChild(h1);
                    var h2 = document.createElement("h2");
                    h2.innerHTML = ebay[t].price;
                    a.appendChild(h2);
                    var div = document.getElementsByClassName("product_ebay")[0];
                    div.appendChild(a);
                }

            } else {
                var div = document.getElementsByClassName("product_ebay")[0];
                var h = document.createElement("h3");
                h.innerHTML = "no result untill now pleasse wait for ebay";
                div.appendChild(h);
                //div.removeChild(h);
            }
        } catch (e) {}
    });
    //get aliexpress data result
    socket2.on("aliexpress", (arg) => {

        aliexpress = arg;
        var div = document.getElementsByClassName("product_product_aliexpresse")[0];
        var h = document.createElement("h3");
        h.innerHTML = "no result untill now pleasse wait for Ali expresse";

        div.appendChild(h);
        console.log(aliexpress);
    });