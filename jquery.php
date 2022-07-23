<script type="text/javascript">
$('input[name="client_type"]').on("click", function() {
    var inputValue = $(this).attr("value");
    var targetBox = $("." + inputValue);
    $(".box").not(targetBox).hide();
    $(targetBox).show();
});

$(document).ready(function() {

    $("#MyForm_l").submit(function(e) {
        e.preventDefault();


        var Ch_Remember = $("#Remember").is(":checked");
        var email = $('#email_l').val();
        var password = $('#password_l').val();
        var action = 'login';

        $.ajax({
            url: "action.php",
            type: "post",
            data: {
                email: email,
                password: password,
                Ch_Remember: Ch_Remember,
                action: action
            },
            beforeSend: function() {
                $(".l_success_alert").text('chacking...');
            },
            success: function(data) {
                $(".l_success_alert").html(data);
                if (data == "success_l") {
                    window.location.replace('index.php');
                }
            }
        });
    });


    $("#MyForm").submit(function(e) {
        e.preventDefault();

        MyForm_d = $(this).serialize()
        MyForm_d += "&action=register";

        $.ajax({
            url: "action.php",
            type: "post",
            data: MyForm_d,
            dataType: 'JSON',
            beforeSend: ajaxLoader('.success_alert'),
            success: function(data) {

                $(".email_alert").html("");
                $(".password_alert").html("");
                $(".fullname_alert").html("");
                $(".Postal_alert").html("");
                $(".telephone_alert").html("");
                $(".success_alert").html("");

                jQuery.each(data, function(k_ClassName, v_textAlert) {
                    $("." + k_ClassName).html(v_textAlert);
                });
            }
        });
    })

    $(document).ready(function() {
        $("#myForm_INS").submit(function(e) {
            e.preventDefault();

            var fd = new FormData(this);

            $.ajax({
                url: 'insert_product.php',
                type: 'POST',
                cache: false,
                data: fd,
                processData: false,
                contentType: false,
                dataType: 'JSON',
                beforeSend: ajaxLoader('#succes_In'),
                success: function(data) {

                    $("#alert_titleM").html("");
                    $("#al_fe_img").html("");
                    $("#alert_seP").html("");
                    $("#succes_In").html("");

                    jQuery.each(data, function(k_IdName, v_textAlert) {
                        $("#" + k_IdName).html(v_textAlert);
                    });
                }
            });
        });
    });

    function ajaxLoader(n_put) {
        $(n_put).text('Sending...');
    }

    function viewimgem(objFileInput) {
        var file = $(objFileInput)[0].files;
        for (var i = 0; i < file.length; i++) {
            var fileReader = new FileReader();
            fileReader.onload = function(e) {
                $("#jnjknlkn").append('<span aria-hidden="true">&times;<img src="' + e.target.result + '"class="upload-preview" style="width:200px;" /></span>');
            }
            fileReader.readAsDataURL(objFileInput.files[i]);
        }
    }

    $(document).on('click', '#close', function() {
        $("#imge_m").html('');
        $("#close").hide();
        $("#file").val("");
    });
});

var topPnl = $('.top_panel');
var pnlMsk = $('.layer');

$('.btn_add_to_cart').on('click', function() {

    var type_click = $(this).data("m_click");

    var id_product = $(this).attr('id');
    var user_id_FP = $(".user_id_FP" + id_product).val();
    var price_pN = $(".quantity_1" + id_product).val();

    var action = 'add_card';

    $.ajax({
        url: "action.php",
        type: "post",
        data: { id_product: id_product, user_id_FP: user_id_FP, price_pN: price_pN, action: action },
        beforeSend: function() {
            $("#addedC" + id_product).text('loading...');
        },
        success: function() {
            if (type_click != 'Fixed') {
                topPnl.addClass('show');
                pnlMsk.addClass('layer-is-visible');
                $(".btn_addC").text("price change");

                var title_p = $(".title_m").text();
                $(".title_p").text(title_p);
                var price_p = $(".P_P").text();
                $(".price_pc").text(price_p);
                var bg_img = $(".item-box").css("background-image");
                $(".img_pc").attr('src', 'upload/' + bg_img.split('/').reverse()[0].slice(0, -2));
            } else {

                $("#addedC" + id_product).html('<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 600.77 600.77" style="enable-background:new 0 0 486.77 486.77;" xml:space="preserve"><g id="XMLID_753_"><path id="XMLID_756_" d="M482.482,175.267c-3.43-4.96-9.055-7.939-15.083-7.939h-45.714c4.887-14.165,3.873-29.893-3.29-43.606c-7.731-14.824-21.517-25.186-37.6-28.577V55.411c0-14.347-5.61-28.893-17.217-39.962C353.628,5.934,340.208,0,325.384,0c-35.327,0-7.368,0-34.085,0c-14.821,0-28.244,5.934-38.195,15.448c-10.663,10.165-17.215,24.189-17.215,39.962v39.733c-16.083,3.392-29.868,13.753-37.601,28.577c-7.163,13.714-8.176,29.441-3.287,43.606h-45.454l-41.245-45.817c-4.628-5.141-11.211-8.082-18.136-8.082l-64.688-0.008c-13.477,0-24.402,10.926-24.402,24.402c0,13.477,10.925,24.396,24.402,24.396h53.819l33.275,36.983l70.512,183.346c2.718,7.075,9.507,11.733,17.081,11.733h194.012c7.58,0,14.371-4.658,17.081-11.733l73.205-190.343C486.643,186.57,485.89,180.241,482.482,175.267z M237.141,144.003c2.013-3.834,5.942-6.219,10.253-6.219h0.014h32.311V55.411c0-6.385,5.197-11.568,11.565-11.568h0.016h34.085h0.015c6.371,0,11.568,5.183,11.568,11.568v82.372h32.309h0.016c4.31,0,8.24,2.385,10.252,6.219c1.996,3.834,1.712,8.421-0.776,11.971l-60.926,87.348c-2.171,3.098-5.721,4.944-9.491,4.944h-0.009h-0.008c-3.77,0-7.319-1.846-9.49-4.944l-60.925-87.348 C235.431,152.424,235.145,147.837,237.141,144.003z"/><path id="XMLID_755_" d="M228.577,413.565c-20.219,0-36.603,16.383-36.603,36.602c0,20.211,16.384,36.604,36.603,36.604c20.21,0,36.596-16.393,36.596-36.604C265.172,429.948,248.787,413.565,228.577,413.565z"/><path id="XMLID_754_" d="M363.081,413.565c-20.212,0-36.603,16.383-36.603,36.602c0,20.211,16.391,36.604,36.603,36.604c20.217,0,36.594-16.393,36.594-36.604C399.675,429.948,383.298,413.565,363.081,413.565z"/></svg>');
            }
        }
    });
});

$("#updata_chP").click(function() {

    var paQueryUp = '';
    $('input[name^=change_price]').map(function(idx, elem) {
        var Product_ID = $(this).attr('id');
        var val_NP = $(this).val();

        var upQUERY = ' when Product_ID = ' + Product_ID + ' then ' + val_NP;
        paQueryUp += upQUERY;

    }).get();

    var action = 'updataSubtotalCart';

    $.ajax({
        url: "action.php",
        type: "post",
        data: { paQueryUp: paQueryUp, action: action },
        beforeSend: function() {
            $("#updata_chP").text('loading...');
        },
        success: function(data) {
            $("#updata_chP").text('Update Cart');
        }
    });
});

setInterval(fetch_N_Carts, 7000);
fetch_N_Carts();
var count_NC_P = 0;

function fetch_N_Carts() {
    var action = "fetchNcart";
    var Purchase_id = $(".Purchase_id").last().val();
    $.ajax({
        url: "action.php",
        type: "post",
        data: { action: action, Purchase_id: Purchase_id },
        dataType: 'JSON',
        success: function(data) {
            if (data.pCart.trim() != "") {
                $("#Ncart").append(data.pCart);
                $("#NPC").text(data.CNC + count_NC_P);
                count_NC_P = data.CNC + count_NC_P;
            }
        }
    });
}

function remove_p_of_cart(ID_pOFC) {

    var action = 'remove_pOFC';
    $.ajax({
        url: "action.php",
        type: "post",
        data: { ID_pOFC: ID_pOFC, action: action },
        success: function(data) {
            $("." + ID_pOFC).remove();
            $("#NPC").text(count_NC_P - 1);

            var cNCHild = document.getElementById("toCountCHild").childElementCount;
            if (cNCHild == 0) {
                $('.toHIdeTHIS').html('<br><img src="Project_Pictures/no_p.png" style="display: block;margin-left: auto;margin-right: auto;width: 30%;"><h2 style="text-align: center;margin-top:1%;color:red;">All products have been removed from the shopping cart</h2>');
            }
        }
    });
}

$(".add_to_favorites").click(function() {

    var Product_ID = $(this).attr('id');
    var action = "addToFAVorites";

    $.ajax({
        url: 'action.php',
        type: 'post',
        data: { Product_ID: Product_ID, action: action },
        success: function(data) {

            $(".yes_ADDF" + Product_ID).html('<a class="tooltip-1" data-toggle="tooltip" data-placement="left" title="added to favourites"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20" height="20" viewBox="0 0 256 256" xml:space="preserve"><g transform="translate(128 128) scale(0.87 0.87)" style=""><g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-144.89999999999998 -144.90000000000003) scale(3.22 3.22)" ><path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c -1.398 0 -2.649 0.778 -3.268 2.031 L 29.959 27.911 c -0.099 0.2 -0.29 0.338 -0.51 0.37 L 3.122 32.107 c -1.383 0.201 -2.509 1.151 -2.941 2.48 c -0.432 1.329 -0.079 2.76 0.922 3.736 l 19.049 18.569 c 0.16 0.156 0.233 0.38 0.195 0.599 L 15.85 83.71 c -0.236 1.377 0.319 2.743 1.449 3.564 c 1.129 0.821 2.6 0.927 3.839 0.279 l 23.547 -12.381 c 0.098 -0.051 0.206 -0.077 0.314 -0.077 C 51.721 53.905 50.301 28.878 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,200,80); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" /><path d="M 45 2.024 C 45 2.024 45 2.024 45 2.024 c 1.398 0 2.649 0.778 3.268 2.031 l 11.773 23.856 c 0.099 0.2 0.29 0.338 0.51 0.37 l 26.326 3.826 c 1.383 0.201 2.509 1.151 2.941 2.48 c 0.432 1.329 0.079 2.76 -0.922 3.736 L 69.847 56.892 c -0.16 0.156 -0.233 0.38 -0.195 0.599 L 74.15 83.71 c 0.236 1.377 -0.319 2.743 -1.449 3.564 c -1.129 0.821 -2.6 0.927 -3.839 0.279 L 45.315 75.172 c -0.098 -0.051 -0.206 -0.077 -0.314 -0.077 C 37.08 54.593 38.849 29.395 45 2.024 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,220,100); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/></g></g></svg></a>');

        }
    });
});

$(document).ready(function() {
    $("#Search_P").keydown(function() {
        send_ch_TO_SEarch();
    });
    $("#Search_P").keyup(function() {
        send_ch_TO_SEarch();
    });

    function send_ch_TO_SEarch() {
        var text_to = $("#Search_P").val();
        var action = "fetch_product_Search";
        $.ajax({
            url: "action.php",
            type: "post",
            data: { action: action, text_to: text_to },
            beforeSend: function() {
                $("#products_VS").text('loading...');
            },
            success: function(data) {
                $("#products_VS").html(data);
            }
        });
    }
});

$(".Filter").on('click', function() {

    var prices = '';
    var arrtypeP = [];
    var ratingP = [];

    $("input[name='price_P']:checked").each(function() {
        prices += 'OR (,' + this.value.replace("-", " AND ") + ')';
    });

    $("input[name='type_P']:checked").each(function() {
        arrtypeP.push("'" + this.value + "'");
    });

    $("input[name='ratingP']:checked").each(function() {
        ratingP.push(this.value);
    });

    typeP = arrtypeP.toString();
    rating = ratingP.toString();
    var other = $("#other").val();

    $.ajax({
        url: "fetch_m_new.php",
        data: { prices: prices, typeP: typeP, rating: rating, other: other },
        type: 'post',
        beforeSend: function() {

            $(".spinner-border").show();

        },
        success: function(data) {
            if (data.trim() != "") {
                $("#C_S").html(data);
            } else {
                $("#C_S").html('<img src="Project_Pictures/no_v_shC.png" style="display: block;margin-left: auto;margin-right: auto;width: 30%;"><br<h2 style="text-align: center;margin-top:1%;color:red;">No results</h2>');
            }
            $(".spinner-border").hide();
        }
    });
});
</script>