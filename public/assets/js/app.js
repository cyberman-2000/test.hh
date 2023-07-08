// Массив места базы данных
let door_params = {
    bor_colors:{
        colors:['красный','зелёный','синий','жёлтый'],
        rgb:['#ff0000','#00ff00','#0000ff','#ffff00'],
        price:[100,150,200,50],
    },
    door_colors:{
        colors:['красный','зелёный','синий','жёлтый'],
        rgb:['#ff0000','#00ff00','#0000ff','#ffff00'],
        price:[800,950,1000,1500],
    },
    handle_colors:{
        colors:['красный','зелёный','синий','жёлтый'],
        rgb:['#ff0000','#00ff00','#0000ff','#ffff00'],
        price:[200,250,300,125],
    },
    // width[size][prise]...  height also
    width:{
        size:[800,825,850,875,900,925,950,975,1000],
            price:[500,550,600,650,700,750,750,800,850],
    },
    height:{
        size:[1800,1825,1850,1875,1900,1925,1950,1975,2000],
        price:[1500,1550,1600,1650,1700,1750,1750,1800,1850],
    },
    open:['Правое','Левое'],
    acsessuares:{
        name:['A1','A2','A3','A4','A5'],
        price:[350,400,450,600,800]
    }
}

// ............................... DOM events........................................................
//  Начальный цены параметров

$border_price=0;
$door_price=0;
$handle_price=0;
$width_price=0;
$height_price=0;
$acsesuars_price=0;

$('#handle').change(function(){
    // Live changing color
    if ($('#handle').val()==0){
        $('.handle').css({"background":'blue'});
    }
    $('.handle').css({"background":$('#handle').find(':selected').attr('rgb')});
    // Calculate total price
    $handle_price=parseInt($('#handle').find(':selected').attr('price'))
    $total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
    $('.itogo').html($total+"руб.")
})
$('#door').change(function(){
    // Live changing color
    if ($('#door').val()==0){
        $('.colour_bor').css({"background":'green'});
    }


    $('.colour_bor').css({"background":$('#door').find(':selected').attr('rgb')});
    // Calculate total price
    $door_price=parseInt($('#door').find(':selected').attr('price'))
    $total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
    $('.itogo').html($total+"руб.")
})
$('#border').change(function(){
    // Live changing color
    if ($('#border').val()==0){
        $('.colour_bor').css({"border-color":'red'});
    }

    $('.colour_bor').css({"border-color":$('#border').find(':selected').attr('rgb')});
    // Calculate total price
    $border_price=parseInt($('#border').find(':selected').attr('price'))
    $total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
    $('.itogo').html($total+"руб.")
})
$('#width').change(function(){
    // Calculate total price
    $width_price=parseInt($('#width').find(':selected').attr('price'))
    $total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
    $('.itogo').html($total+"руб.")
})
$('#height').change(function(){
    // Calculate total price
    $height_price=parseInt($('#height').find(':selected').attr('price'))
    $total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
    $('.itogo').html($total+"руб.")
})

$total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
$('.itogo').html($total+"руб.")
$('.icon').click(function () {
  $('#acsesuars').hide();
  $acsesuars_price=0;
    document.querySelectorAll('.point').forEach(function(elem) {

        if (elem.checked){
            $acsesuars_price+=parseInt(elem.getAttribute("price"));

        }
    });
    $total= $handle_price+$door_price+$border_price+$width_price+$height_price+$acsesuars_price;
    $('.itogo').html($total+"руб.")
    $('#total_price').attr('value',$total)
    // console.log($('.point').find(':checked').val());

})
$('.get_changes').click(function () {
    $x1=$('.for_viz').get(0).outerHTML;
    $('#vizual').val($x1);
})
$('#acses').click(function (){
    $('#acsesuars').fadeToggle()
})
