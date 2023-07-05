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

$('#handle').change(function(){
    $('.handle').css({"background":$('#handle').find(':selected').attr('rgb')});
})
$('#door').change(function(){
    $('.colour_bor').css({"background":$('#door').find(':selected').attr('rgb')});
})
$('#border').change(function(){
    $('.colour_bor').css({"border-color":$('#border').find(':selected').attr('rgb')});
})
$('.icon').click(function () {
  $('#acsesuars').hide();
})
$('#acses').click(function (){
    $('#acsesuars').fadeToggle()
})
