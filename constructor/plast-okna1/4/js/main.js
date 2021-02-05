
// main point

function start(){
   // if($('plashNav')) plashNav()
   colorTable()
}

function resize(){
    resClass()
}


function resClass(){
    var x = $(window).getSize().x;
    if(x<1100){
        $('container').addClass('smDmns');
    }else $('container').removeClass('smDmns');
}

// common functions

function showSub(ob){
    var bl=$(ob).getParent().getElement('div')
    var h=bl.getSize().y
    pos=parseInt(bl.getStyle('top'))
    var myFx = new Fx.Tween(bl, {
            duration: 'normal',
          //  transition: 'bounce:out',
            link: 'cancel',
            property: 'top'
    });
        
    if(pos<0){
        myFx.start(50);
    }else{
        $('mTip').setStyle('display','none')
        slideAllOut(bl)
        myFx.start(-h);
    }
}

function slideAllOut(bl){
    $each($$('.menu ul li div'), function(el, i){
        if(bl!=el){
            var myFx = new Fx.Tween(el, {
                    duration: 'normal',
                   // transition: 'bounce:out',
                    link: 'cancel',
                    property: 'top'
            }).start(50)
        }
    })
}

function showLayer(t, id, m){
    slideAllOut(0)
    if($(m).getParent().hasClass('act')) return;
    $$('.'+t).setStyles({
        'display': 'none',
        'opacity': 1
    });
    $$('.active').setStyles({
        'display':'block',
        'z-index':200
    });
    $(t+id).setStyles({
        'display':'block',
        'z-index':190
    });
    
    doFx($$('.'+t))
    $(t+id).addClass('active')
    
    $(m).getParent().getParent().getElements('li').removeClass('act')
    $(m).getParent().addClass('act')
}

function doFx(ob){
    $each(ob, function(el, i){
        if(el.hasClass('active')){
            el.fade('out')
            el.removeClass('active')
        }
    });
}










function colorTable(){
    $each($$('.text table tr'), function(el, i){
        if(i%2) el.addClass('nech')
    })
}

function plashNav(){
    $each($$('#plashNav ul li'), function(el, i){
        el.addEvents({
            'click':function(){ 
                $$('.plashTab').setStyle('display','none')
                $('plashTab'+i).setStyle('display','block')
                $$('#plashNav ul li').removeClass('act')
                $(this).addClass('act')
            }
        });   
    })
}












function actBanerHover(){
    $each($$('.mainBaner'), function(el, i){
        el.addEvents({
            'mouseenter':function(){ 
                var img = this.getElement('.hovBnr') 
                if(img) img.set('src','img/round_.png')
                
            },
            'mouseleave':function(){ 
                var img = this.getElement('.hovBnr') 
                if(img) img.set('src','img/round.png')
            }
        });   
    })
}

function error(msg){
    $('aError_').set('html',msg)
    Mediabox.open('#mb_aError', '', '400 120') 
}

function actSwitch2(){
    $each($$('#mSwitch2 a'), function(el, i){
        if(!i) {
            el.addClass('act');
        }
        par=el.getParent()
        el.addEvents({
            'click': function(){
               $$('.cForm').setStyle('display','none') 
               $('sw'+i).setStyle('display','block') 
               
               par.removeClass('w20')  
               par.removeClass('w21') 
               $$('#mSwitch2 a').removeClass('act') 
                
               this.addClass('act')
               par.addClass('w2'+i) 
               
               var sndBtnSt = i ? 'none' : 'block';
               $('sendCartSp').setStyle('display',sndBtnSt)
            }
        })
    })
}

function initPrevuCh(){
    $each($$('#preluList li a'), function(el, i){
        el.addEvent('click', function(e){
            e.stop();
            $$('#preluList li').removeClass('act');
            this.getParent().addClass('act');
            $('prevuImg').getElement('img').set('src', el.getElement('img').get('src'));
            $('prevuImg').set('href', el.get('href'));
            initPrevu('prevuImg', 'prevuSpace');
            return false;
        })
    });

    initPrevu('prevuImg', 'prevuSpace');
}

function initPrevu(prevuID, spaceID){
    var bgStr       = 'url('+$(prevuID).href+')'
    var prevuSpace  = $(spaceID)
    var prev        = $(prevuID).getElement('img')
    var prevPos     = prev.getPosition()
    var prevSize    = prev.getSize()
    var cX          = prevSize.x / 100
    var cY          = prevSize.y / 100
    
    $(spaceID).setStyles({
        height: prevSize.y, 
        background: bgStr
    })
    
    var bSrc=$(prevuID).get('href');
    $(prevuID).getParent().getElement('.loop').removeEvents().addEvent('click', function(){ Mediabox.open(bSrc, '') });
    
    $(prevuID).removeEvents().addEvents({
        mouseenter: function(){ prevuSpace.setStyle('display','block'); },
        mouseleave: function(){ prevuSpace.setStyle('display','none'); },
        click: function(e){ 
            e.stop() 
            prevuSpace.setStyle('display','none')
            Mediabox.open(bSrc, '') 
            return false 
        },
        mousemove: function(e){ 
            var x = Math.round((e.page.x - prevPos.x) / cX) 
            var y = Math.round((e.page.y - prevPos.y) / cY)
            prevuSpace.setStyle('background-position', x+'% '+y+'%')
        }
    })
}


var sliderRange=[10, 1000];
function actSlider(){
    var sl = $('slider');
    var kn = sl.getElement('.knob');
    
    new Slider(sl, kn, {
        range: sliderRange,
        mode: 'vertical',
        onChange: function(value){ kn.set('html', value+' грн'); },
        onComplete: function(value){ reList('price',value); }
    });
}

var bbl=true;
function setParam(el, par, val){
    if(bbl){
        if(par=='sort'){
            off=$$('#slctSort dl dt');
            off.removeClass('act');
            el.addClass('act');
            $$('#slctSort dl span').removeClass('act');
            el.getElements('span')[1].addClass('act');
           
        }else if(par=='order'){
            $$('#slctSort dl span').removeClass('act');
            el.addClass('act');
            bbl=false;
            if(!el.getParent().hasClass('act')){
                $$('#slctSort dl dt').removeClass('act');
                el.getParent().addClass('act');
                $('sort').value=el.getParent().lang; 
            }
        }
        
        reList(par,val);
    }else bbl=true;
}

function reList(par,val){
    $(par).value=val;
}

function actCatSlctrs(){
    $each($$('.catalogHead ul li'), function(el, i){
        var a = el.getElement('a'); 
        a.addEvent('click', function(){
            var li=this.getParent();
            var d=li.getElement('.catSlctrs');
            $$('.catalogHead ul li').removeClass('act');
            if(d.getStyle('display')=='block'){
                var s='none';
            }else{
                var s='block';
                li.addClass('act');
            }
            
            $$('.catSlctrs').setStyle('display','none');
            d.setStyle('display',s);
        })   
    });
}

function actMBaners(){
    $each($$('.mainBaner'), function(el, i){
        el.addEvent('click', function(){
           var l=this.getElement('a');
           document.location.href=l.href;
        });
    });
}

function actSwtchs(){
    var par=$$('.mSwitch')[0];
    $each($$('.mSwitch a'), function(el, i){
        el.addEvents({
            'mouseenter':function(){ 
                
                if(!el.hasClass('act')) {
                    par.addClass('w'+i);
                    var sl = i ? 0 : 1;
                    $$('.mSwitch a')[sl].setStyle('color', '#ee217c')
                    Cufon.replace($$('.mSwitch a')[sl].getElement('b'), {fontFamily: 'ftx', 'color': '#ee217c'});
                    Cufon.replace($$('.mSwitch a')[i].getElement('b'), {fontFamily: 'ftx', 'color': '#fff'});
                    Cufon.refresh;
                } 
            },
            'mouseleave':function(){ 
                if(!el.hasClass('act')) {
                    par.removeClass('w'+i); 
                    var sl = i ? 0 : 1;
                    $$('.mSwitch a')[sl].setStyle('color', '#fff')
                    Cufon.replace($$('.mSwitch a')[sl].getElement('b'), {fontFamily: 'ftx', 'color': '#fff'});
                    Cufon.replace($$('.mSwitch a')[i].getElement('b'), {fontFamily: 'ftx', 'color': '#ee217c'});
                    Cufon.refresh;
                }
            }
        });
    });
    
    var par = $$('.mSwitch')[0];
    if(!par.hasClass('w0') && !par.hasClass('w1')){
        par.addEvent('mouseleave', function(){
            $$('.mSwitch a').setStyle('color', '#ee217c')
            Cufon.replace($$('.mSwitch a b'), {fontFamily: 'ftx', 'color': '#ee217c'});
            Cufon.refresh;
        })
    }
}

function actInBan(){
    
}

function showWin(w,h,ob){
    var l=$(w);
    var par=$$('.cart')[0];
    
    if(l.getStyle('display')=='block'){
        s='none'
        //par.removeClass('act')
        par.removeClass('act0')
        par.removeClass('act1')
        ob.removeClass('act_')
    }else{
        s='block'
        //par.addClass('act')
        ob.addClass('act_')
    }
    
    $$('.'+h).setStyle('display', 'none');
    l.setStyle('display', s);
}

function actCartHover(){
    var par=$$('.cart')[0];
    $each($$('.cart a'), function(el,i){
       el.addEvents({
            mouseenter: function(){ par.addClass('act'+i)  },
            mouseleave: function(){ if(!this.hasClass('act_')) par.removeClass('act'+i) },
            click: function(){ 
                par.removeClass('act0')
                par.removeClass('act1')
                par.addClass('act'+i)
                var w = i ? 'cart' : 'login'
                showWin(w,'gr0', this) 
            }    
       })
    })
}






   

function cufonInit(){
   // if ($$('.mSwitch a')) Cufon.replace('.mSwitch a', {fontFamily: 'ftx'});
    if ($$('.mSwitch a b')) Cufon.replace('.mSwitch a b', {fontFamily: 'ftx'});
    if ($$('.mbTitle h2')) Cufon.replace('.mbTitle h2', {fontFamily: 'ftx'});
}

function actSearch(){
    var inp=$('srchFld');
    var st=inp.getStyle('display');
    if(st=='block' && inp.value && inp.value!='найти'){
        $('srhc').submit();
    }else if(st=='block'){
        alert('Введите слово для поиска!')
    }else{
        inp.setStyle('display','block');
    }
}








function printObj(ob){
    var str='';
    for(obj in ob){
        str+=obj+"\n";
    }
    alert(str)

}
var map=false;
function showMap(latlng, zoom){
    $('Gmap2').setStyles({'width': Wx, 'height': Wy});
    var dm = latlng.split(',');
    map = new GMap2(document.getElementById("Gmap2"));
    map.addControl(new GSmallMapControl());
    map.setCenter(new GLatLng(parseFloat(dm[0]), parseFloat(dm[1])), parseInt(zoom));
    var point = new GLatLng(parseFloat(dm[0]),parseFloat(dm[1]));
    map.addOverlay(new GMarker(point));
}


