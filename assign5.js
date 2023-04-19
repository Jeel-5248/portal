
        
$(document).ready(function(){
    $('#weight').change(function(){
        var a=$('#weight').val();
        console.log(a);
        var c=/^[0-9]{1,3}$/
        if(!c.test(a)||a==''){
            alert('plz enter valid weight')
        }
    })
    $('#height').change(function(){
        var b=$('#height').val();
        console.log(b);
        var d=/^\d{1}\.\d{1,3}$/
        if(!d.test(b)||b==''){
            alert('plz enter valid height')
        }
    })
})

